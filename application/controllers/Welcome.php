<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->helper('randomhurufangka');		
		//$this->load->view('random_huruf_angka');


	$this->load->library('random_angkahuruf');
	$this->load->helper('randomhurufangka');
	$data['random_help'] = " Menggunakan <b>Helper :".random_angka_huruf()."</b>";
	$data['random_lib'] = " Menggunakan <b>Library :".$this->random_angkahuruf->jalankan()."</b>";
	$this->load->view('random_huruf_angka', $data);
	}
}
