
<?php
class Images_model extends CI_Model {



				public function load_images_by_obra_id($id){
								$this->load->database();
								$result =  $this->db->get_where('images', array('id_obra' => $id));
								return $this->convert_to_simple_array($result->result());
				}

				public function delete_image($id_image){
								$this->db->delete('images', array('id_images' => $id_image));
				}

				public function get_images(){
								$this->load->database();
								$result = $this->db->get('images');
								return $this->convert_to_simple_array($result->result());
				}
				public function convert_to_simple_array($result){

								$dataArray = Array();
								$cont = 0;
								foreach ($result as $key){
												$arrayAux=Array();
												foreach($key as $k => $v){
																$arrayAux[$k]=$v;
												}
												$dataArray[$cont]=$arrayAux;
												$cont++;
								}
								return $dataArray;


				}

}
?>
