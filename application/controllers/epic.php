<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Epic extends CI_Controller {

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
								$this->load->model('obras_model');
								$obras=	$this->obras_model->load_obras();
								$obrass=$this->addImage($obras);
								$result['result']=$this->divide_and_conquer($obrass);
								$this->load->view('epic/epic',$result);
				}
				public function addImage($obras){

								$int = sizeof($obras);
								for ($i = 0; $i < $int; $i++) {	

												$this->load->model('images_model');
												$imagenes =$this->images_model->load_images_by_obra_id($obras[$i]['id_obra']);
												$obras[$i]['image']=$imagenes[0];

								}
								return $obras;


				}

				public function single(){
								$id_obra =	$this->input->get('id_obra');
								$this->load->model('obras_model');
								$this->load->model('images_model');
								$result['result']=$this->obras_model->load_obra_by_id($id_obra);	
								$images=$this->images_model->load_images_by_obra_id($id_obra);
								$result['images']=$this->divide_and_conquer($images);
								$this->load->view('epic/single',$result);
				}

				public function divide_and_conquer($result){
								// divide el array en dos para tener dos columnas en la vista
								$switch =0;
								$contador=0;
								$result2=array();
								$result2['izq']=null;
								$result2['der']=null;
								foreach($result as $resultado){
												if($switch == 1){
																$result2['izq'][$contador]=$resultado;
																$contador++;
																$switch=0;
												}else{
																$result2['der'][$contador]=$resultado;
																$contador++;
																$switch=1;
												}
								}	
								return $result2;
				}

}
