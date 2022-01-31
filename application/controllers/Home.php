<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['Send_m']);
  }

  public function index()
  {
    $data = [
      'title' => "Keitoto Studio"
    ];
    $this->load->view('home', $data);
  }

  public function caseStudy()
  {
    $data = [
      'title' => "Keitoto | Case Study"
    ];
    $this->load->view('case-study', $data);
  }

  public function showCaseOne()
  {
    $data = [
      'title' => "Keitoto | Invoinceku"
    ];
    $this->load->view('show-case-one', $data);
  }

  public function showCaseTwo()
  {
    $data = [
      'title' => "Keitoto | Ngehe"
    ];
    $this->load->view('show-case-two', $data);
  }

  public function showCaseThree()
  {
    $data = [
      'title' => "Keitoto | Travel app"
    ];
    $this->load->view('show-case-three', $data);
  }

  public function showCaseFour()
  {
    $data = [
      'title' => "Keitoto | Float talk"
    ];
    $this->load->view('show-case-four', $data);
  }

  public function showCaseFive()
  {
    $data = [
      'title' => "Keitoto | Paul howard"
    ];
    $this->load->view('show-case-five', $data);
  }

  public function inquiry()
  {
    $post = $this->input->post();
    $this->form_validation->set_rules($this->Send_m->rules());
    $this->form_validation->set_message('required', '{field} mohon diisi');
    if ($this->form_validation->run() === TRUE) {

      $text = "
        Name : " . $post['_name_'] . "
        ";
      $text .= "
        Client Needs : 
        ";
      foreach ($post['_need_'] as $key) {
        $text .= '  - ' . ucwords(str_replace("-", ' ', $key))  . '
        ';
      }

      $text .= "
        Client Budget  : " . ucwords(str_replace("-", ' ', $post['_budget_']))   . "
        ";
      $text .= "
        Client Idea  : " . $post['_message_']   . "
        ";

      $filesCount = count($_FILES['attachment']['name']);
      $data = [];
      if ($_FILES['attachment']['name'][0] != '') {
        for ($i = 0; $i < $filesCount; $i++) {
          $_FILES['userFile']['name'] = $_FILES['attachment']['name'][$i];
          $_FILES['userFile']['type'] = $_FILES['attachment']['type'][$i];
          $_FILES['userFile']['tmp_name'] = $_FILES['attachment']['tmp_name'][$i];
          $_FILES['userFile']['error'] = $_FILES['attachment']['error'][$i];
          $_FILES['userFile']['size'] = $_FILES['attachment']['size'][$i];
          $upload = upload_file('assets/uploads/', 'txt|pdf|docx|doc|ppt|png|jpg|jpeg', 'userFile');
          $data[] = $upload['data']['full_path'];
        }
      }


      $this->sendEmail($data, $text);
      redirect('home/inquiry');
    } else {


      $data = [
        'title' => "Keitoto Studio"
      ];
      $this->load->view('inquiry', $data);
    }
  }
  private function sendEmail($data = null, $text = null)
  {
    $post = $this->input->post();
    $data['name'] = $post['_name_'];
    $data['email'] = $post['_email_'];
    $pesan = $post['_message_'];
    // $pesan=$this->load->view('mail_template/mail_verification',$data,true);

    $this->email->from('no-reply@keitoto.com', 'Keitoto');
    $this->email->to($data['email']);
    $this->email->subject('New Email from ' . $post['_name_']);
    $this->email->message($text);
    if (count($data) > 0) {
      foreach ($data as $attach) {
        $this->email->attach($attach);
      }
    }
    if ($this->email->send()) {
      return true;
    }
  }
  public function coba()
  {
    $this->email->from('no-reply@unibajavacraft.com', 'Uniba Javacraft');
    $this->email->to('coba@example.com');
    $this->email->subject('Cek email send');
    $this->email->message('cekkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk');

    if ($this->email->send()) {
      var_dump('suksess');
    } else {
      echo "dddd";
    }
  }
}
