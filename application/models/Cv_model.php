
<?php
class Cv_model extends CI_Model {

    public function save_cv($data)
    {
        $data  = $this->db->insert('cv', $data);

    }
}
?>