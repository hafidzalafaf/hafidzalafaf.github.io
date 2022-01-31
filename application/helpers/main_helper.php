<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists("upload_file")) {
  function upload_file($path, $type = 'gif|jpg|png|jpeg|doc|docx|pdf|xls|xlsx|txt|ppt', $name = '_file_')
  {
    $CI = &get_instance();
    // var_dump($path);
    
    if (!file_exists($path)) {
      mkdir($path, 0777, true);
    }

    if (isset($_FILES[$name]) && file_exists($_FILES[$name]['tmp_name'])) {
      $config['upload_path']          = $path;
      $config['allowed_types']        = $type;
      $config['max_size']             = 0; // 1MB
      $config['max_width']            = 0; // pixel
      $config['max_height']           = 0; // pixel
      $config['overwrite']            = TRUE;
      // $config['encrypt_name']         = TRUE;
      $config['remove_spaces']        = TRUE;
      
      $CI->load->library('upload', $config);
      $CI->upload->initialize($config);
      if ($CI->upload->do_upload($name)) {
        $response = array(
          'status' => 'success',
          'message' => 'Gambar berhasil di upload ',
          'data' => $CI->upload->data()
        );
      } else {
        $response = array(
          'status' => 'error',
          'message' => $CI->upload->display_errors()
        );
      }
    } else {
      $response = array(
        'status' => 'empty',
        'message' => 'Anda belum memilih file'
      );
    }

    return $response;
  }
}
if (!function_exists("upload_file2")) {
  function upload_file2($path, $type = 'gif|jpg|png|jpeg|doc|docx|pdf|xls|xlsx', $name = '_file2_')
  {
    $CI = &get_instance();

    if (!file_exists($path)) {
      mkdir($path, 0777, true);
    }

    if (isset($_FILES[$name]) && file_exists($_FILES[$name]['tmp_name'])) {
      $config['upload_path']          = $path;
      $config['allowed_types']        = $type;
      $config['max_size']             = 0; // 1MB
      $config['max_width']            = 0; // pixel
      $config['max_height']           = 0; // pixel
      $config['overwrite']            = TRUE;
      $config['encrypt_name']         = TRUE;
      $config['remove_spaces']        = TRUE;

      $CI->load->library('upload', $config);
      $CI->upload->initialize($config);
      if ($CI->upload->do_upload($name)) {
        $response = array(
          'status' => 'success',
          'message' => 'Gambar berhasil di upload ',
          'data' => $CI->upload->data()
        );
      } else {
        $response = array(
          'status' => 'error',
          'message' => $CI->upload->display_errors()
        );
      }
    } else {
      $response = array(
        'status' => 'empty',
        'message' => 'Anda belum memilih file'
      );
    }

    return $response;
  }
}

if (!function_exists("delete_file")) {
  function delete_file($path)
  {
    if (file_exists($path)) {
      unlink($path);
      $response = array(
        'status' => 'success',
        'message' => 'File berhasil di hapus!',
      );
    } else {
      $response = array(
        'status' => 'error',
        'message' => 'File tidak ditemukan!'
      );
    }
    return $response;
  }
}
function rep2($id = null)
{
  $id = strtolower(str_replace(" ", "-", $id));
  $id = strtolower(str_replace("/", "-", $id));
  $id = strtolower(str_replace("_", "-", $id));
  $id = strtolower(str_replace("|", "-", $id));
  $id = strtolower(str_replace(",", "-", $id));
  $id = strtolower(str_replace(".", "-", $id));
  $id = strtolower(str_replace("(", "-", $id));
  $id = strtolower(str_replace(")", "-", $id));
  $id = strtolower(str_replace("{", "-", $id));
  $id = strtolower(str_replace("}", "-", $id));
  $id = strtolower(str_replace("[", "-", $id));
  $id = strtolower(str_replace("]", "-", $id));
  $id = strtolower(str_replace("'", "-", $id));
  $id = strtolower(str_replace('"', "-", $id));
  return $id;
}
  // function cut_limit($text = null, $num_char = null)
  // {
  //   $char = $text{$num_char - 1};
  //   while($char != ' ') {
  //     $char = $text{--$num_char}; // Cari spasi pada posisi 49, 48, 47, dst...
  //   }
  //   return substr($text, 0, $num_char) . '...';
  // }

  function uriseg($value='')
  {
    $CI = &get_instance();
    return $CI->uri->segment($value);
  }
  
  function cvrate($rate){
      if($rate == 1){
          $hasil = "20%";
      }elseif($rate == 2){
          $hasil = "40%";
      }elseif($rate == 3){
          $hasil = "60%";
      }elseif($rate == 4){
          $hasil = "80%";
      }elseif($rate == 5){
          $hasil = "100%";
      }
      return $hasil;
  }
  function cvrate2($rate){
      $hasil = ((int)$rate*20);
      return $hasil;
  }
  
  function cvnomer($nomer){
      if(substr($nomer,0,2) == "08"){
          $hasil = "62".substr($nomer,1);
      }elseif(substr($nomer,0,3) == "+62"){
          $hasil = "62".substr($nomer,1);
      }else{
          $hasil = $nomer;
      }
      return $hasil;
  }
  
  
  