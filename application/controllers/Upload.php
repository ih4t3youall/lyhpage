<?php

class Upload extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function do_upload()
    {
        $this->load->database();
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'doc|docx|pdf|jpg|png|jpeg|txt';

        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload('cv'))
        {
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
           // $this->load->view('main/index', $error);
        }
        else
        {
            // salvar en database

            $this->save_cv();
            $uploadData = $this->upload->data();
            //$this->main->index();
           // $this->load->view('main/index');

            $this->load->view('success_pages/cv_success');

        }
    }
    public function save_cv(){
        $this->load->database();
        $fileName=$this->upload->data('raw_name').$this->upload->data('file_ext');
        $data = array(

            'url' =>$fileName,
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'email' => $this->input->post('email'),
            'telefono' => $this->input->post('telefono'),

        );

        $this->load->model('Cv_model');
        $this->Cv_model->save_cv($data);



    }


}