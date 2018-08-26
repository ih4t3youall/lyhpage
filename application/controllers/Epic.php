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
				public function obras()
				{
								$this->load->model('obras_model');
								$obras=	$this->obras_model->load_vehiculos();
								$obrass=$this->addImage($obras);
								$result['result']=$this->divide_and_conquer($obrass);
								$result['link']='single_obras';
								$this->load->view('epic/epic',$result);
				}

				public function vehiculos()
				{
								$this->load->model('obras_model');
								$obras=	$this->obras_model->load_vehiculos();
								$obrass=$this->addImage($obras);
								$result['result']=$this->divide_and_conquer($obrass);
								$result['link']='single_vehiculos';
								$this->load->view('epic/epic',$result);
				}
				public function equipo()
				{

								$this->load->model('obras_model');
								$obras=	$this->obras_model->load_equipo();
								$obrass=$this->addImage($obras);
								$result['result']=$this->divide_and_conquer($obrass);
								$result['link']='single_equipo';
								$this->load->view('epic/epic',$result);

				}
				public function instalaciones()
				{

								$this->load->model('obras_model');
								$obras=	$this->obras_model->load_instalaciones();
								$obrass=$this->addImage($obras);
								$result['result']=$this->divide_and_conquer($obrass);
								$result['link']='single_instalaciones';
								$this->load->view('epic/epic',$result);

				}

				public function herramientas()
				{

								$this->load->model('obras_model');
								$obras=	$this->obras_model->load_herramientas();
								$obrass=$this->addImage($obras);
								$result['result']=$this->divide_and_conquer($obrass);
								$result['link']='single_herramientas';
								$this->load->view('epic/epic',$result);

				}

				public function proyectos(){
								$this->load->model('obras_model');
								$obras=	$this->obras_model->load_proyectos();
								$obrass=$this->addImage($obras);
								$result['result']=$this->divide_and_conquer($obrass);
								$result['link']='single_proyectos';
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

				public function single_vehiculos(){
								$id_obra =	$this->input->get('id_obra');
								$this->load->model('obras_model');
								$this->load->model('images_model');
								$result['result']=$this->obras_model->load_obra_by_id($id_obra);	
								$images=$this->images_model->load_images_by_obra_id($id_obra);
								$result['images']=$this->divide_and_conquer($images);
								$result['link']='vehiculos';
								$this->load->view('epic/single_vehiculos',$result);
				}
				public function single_herramientas(){
								$id_obra =	$this->input->get('id_obra');
								$this->load->model('obras_model');
								$this->load->model('images_model');
								$result['result']=$this->obras_model->load_obra_by_id($id_obra);	
								$images=$this->images_model->load_images_by_obra_id($id_obra);
								$result['images']=$this->divide_and_conquer($images);
								$result['link']='herramientas';
								$this->load->view('epic/single_herramientas',$result);
				}
				public function single_equipo(){
								$id_obra =	$this->input->get('id_obra');
								$this->load->model('obras_model');
								$this->load->model('images_model');
								$result['result']=$this->obras_model->load_obra_by_id($id_obra);	
								$images=$this->images_model->load_images_by_obra_id($id_obra);
								$result['images']=$this->divide_and_conquer($images);
								$result['link']='equipo';
								$this->load->view('epic/single_equipo',$result);
				}
				public function single_instalaciones(){
								$id_obra =	$this->input->get('id_obra');
								$this->load->model('obras_model');
								$this->load->model('images_model');
								$result['result']=$this->obras_model->load_obra_by_id($id_obra);	
								$images=$this->images_model->load_images_by_obra_id($id_obra);
								$result['images']=$this->divide_and_conquer($images);
								$result['link']='equipo';
								$this->load->view('epic/single_instalaciones',$result);
				}
				public function single_proyectos(){
								$id_obra =	$this->input->get('id_obra');
								$this->load->model('obras_model');
								$this->load->model('images_model');
								$result['result']=$this->obras_model->load_obra_by_id($id_obra);	
								$images=$this->images_model->load_images_by_obra_id($id_obra);
								$result['images']=$this->divide_and_conquer($images);
								$result['link']='proyectos';
								$this->load->view('epic/single_proyectos',$result);
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
