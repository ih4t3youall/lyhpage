<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
								$this->load->view('main/head');
								$this->load->view('main/header');
								$this->load->view('main/slider');
								$this->load->view('main/latest_products');
								$this->load->view('main/about');

								//$this->load->view('main/pricing');
								//$this->load->view('main/work');
								//$this->load->view('main/clients');
								//$this->load->view('main/service');
								$this->load->view('main/contact');
								$this->load->view('main/footer');
				}






}
