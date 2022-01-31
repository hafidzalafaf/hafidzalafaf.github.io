<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Send_m extends CI_Model{

	public function rules()
	{
		return array(
			array(
				'field' => '_name_',
				'label' => 'Name',
				'rules' => 'required|trim|max_length[250]'
			),

			array(
				'field' => '_email_',
				'label' => 'Email',
				'rules' => 'required|trim|valid_email|max_length[250]'
			),
			array(
				'field' => '_need_[]',
				'label' => 'Name',
				'rules' => 'required|trim|max_length[250]'
			),
			array(
				'field' => '_budget_',
				'label' => 'Name',
				'rules' => 'required|trim|max_length[250]'
			),
			array(
				'field' => '_message_',
				'label' => 'Name',
				'rules' => 'required|trim'
			),
		);
	}


 	public function send($data=null)
    {
		$config['mailtype'] = 'text';
		$config['charset'] = 'utf-8';
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.gmail.com';
		$config['smtp_user'] = 'info.tupaitech@gmail.com';
		$config['smtp_pass'] = '085725460226';
		$config['smtp_crypto'] = 'ssl';

		$config['smtp_port'] = 465;
		$config['newline'] = "\r\n";

		$this->load->library('email', $config);

		$this->email->from('contact@tupaitech.net', 'TupaiTech Pesan Masuk!');
// 		$this->email->to('tupaimediatech@gmail.com, type.ihsan@gmail.com, contact@tupaitech.net');
        $this->email->to("type.ihsan@gmail.com");
		$this->email->subject('TupaiTech Pesan Masuk!');
		$this->email->message('TupaiTech Pesan Masuk!');

		if($this->email->send()) {
		  // echo 'Email berhasil dikirim';
		  return 'success';
		}
		else {
		  // echo 'Email tidak berhasil dikirim';
		  // echo '<br />';
		   echo $this->email->print_debugger();
		}

    }

    public function send2()
    {
    	// Konfigurasi email
		// $config = [
		// 	'mailtype'	=>'html',
		// 	'charset'	=>'utf-8',
		// 	'protocol'	=>'sendmail',
		// 	'smtp_host'	=>'mail.tupaitech.net',
		// 	'smtp_user'	=>'no-reply@tupaitech.net',
		// 	'smtp_pass'	=>'.Boediono22',
		// 	'smtp_crypto'=>'ssl',
		// 	'smtp_port'	=> 587,
		// 	'crlf'		=>"\r\n",
		// 	'newline'	=>"\r\n"
		// ];
		$config['mailtype'] = 'text';
		$config['charset'] = 'utf-8';
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.gmail.com';
		$config['smtp_user'] = 'info.tupaitech@gmail.com';
		$config['smtp_pass'] = '085725460226';
		$config['smtp_crypto'] = 'ssl';

		$config['smtp_port'] = 465;
		$config['newline'] = "\r\n";

		// Load library email dan konfigurasinya
		$this->load->library('email');
        $this->email->initialize($config);

		// Email dan nama pengirim
		$this->email->from('ihsanboediono@gmail.com', 'tes1');

		// Email penerima
		$this->email->to('ihsanexchange@gmail.com','nama penerima'); // Ganti dengan email tujuan

		// Lampiran email, isi dengan url/path file
		//$this->email->attach('');

		$isipesan="Test Email Server";

		// Subject email
		$this->email->subject('Email Server');

		// Isi email
		$this->email->message($isipesan);

		// Kirim Email
		if($this->email->send()){
		    echo 'success';
		  // $this->session->set_flashdata('message','Sukses kirim email');
		}else{
		  // $this->session->set_flashdata('message', $this->email->print_debugger());
		  return $this->email->print_debugger();
		}
    }
    
    public function send3($data=null)
    {
    	$config['protocol'] = "mail";
        $config['smtp_host'] = "mail.tupaitech.net";
        $config['smtp_port'] = 587;
        $config['smtp_user'] = "no-reply@tupaitech.net"; 
        $config['smtp_pass'] = ".Boediono22";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $config['wordwrap'] = TRUE;
        $this->load->library('email');
        $this->email->initialize($config);

        $this->email->set_mailtype('html');
        $this->email->from('ihsanexchange@gmail.com', 'ihsan budiono');
        $this->email->to('type.ihsan@gmail.com');


        $this->email->subject('Email Authentication');
        $message = 'Hi';

        $this->email->message($message);

        $this->email->send();
        return 'success';
    }
    
    
	

}