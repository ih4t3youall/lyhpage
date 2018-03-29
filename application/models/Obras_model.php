
<?php
class Obras_model extends CI_Model {
				public function __construct() {
								parent::__construct();
								$this->load->database();
				}
				public function load_obras()
				{
								$query = $this->db->get('obra');
								return $this->convert_to_simple_array($query->result());
				}
				public function load_vehiculos()
				{
								$query = $this->db->get_where('obra',array('tipo'=> 'vehiculo'));
								return $this->convert_to_simple_array($query->result());
				}
				public function load_herramientas()
				{
								$query = $this->db->get_where('obra',array('tipo'=> 'herramienta'));
								return $this->convert_to_simple_array($query->result());
				}
				public function load_proyectos()
				{
								$query = $this->db->get_where('obra',array('tipo'=> 'proyecto'));
								return $this->convert_to_simple_array($query->result());
				}
				public function load_obra_by_id($id_obra){
								$query = $this->db->get_where('obra', array('id_obra' => $id_obra));
								return $this->convert_to_simple_array($query->result());
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
