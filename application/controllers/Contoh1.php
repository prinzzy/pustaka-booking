<?php 

class Contoh1 extends CI_Controller
{
  public function index()
  {
    //echo '
    //  <h1>Perkenalkan</h1>
      //Nama saya Sultan Pengkuh Al-Fatah <br>
    //  Saya tinggal di Derah Curug Cideres
  //  ';
  $this->load->view('welcome_message2');
  }
}







?>