<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Iklan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Iklan_model','Aktifitas_model'));
        $this->load->helper('fungsidate_helper');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $iklan = $this->Iklan_model->get_all();

        $data = array(
            'iklan_data' => $iklan
        );

        $this->template->load('dashboard','iklan/iklan_list', $data);
    }

    public function read($id)
    {
        $row = $this->Iklan_model->get_by_id($id);
        if ($row) {
            $data = array(
          		'id_iklan' => $row->id_iklan,
          		'nama_iklan' => $row->nama_iklan,
          		'foto' => $row->foto,
          		'url' => $row->url,
            );
            $this->template->load('dashboard','iklan/iklan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('iklan'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('iklan/create_action'),
      	    'id_iklan' => set_value('id_iklan'),
      	    'nama_iklan' => set_value('nama_iklan'),
      	    'foto' => set_value('foto'),
      	    'url' => set_value('url'),
        );
        $this->template->load('dashboard','iklan/iklan_form', $data);
    }

      public function create_action()
      {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            

            $data = array(
              "nama_iklan" => $this->input->post('nama_iklan',TRUE),
              "foto" => $this->input->post('foto',TRUE),
              "url" => $this->input->post('url',TRUE),
            );

            $aktifitas = array(

              "nama"            => $this->session->userdata('nama_user'),
              "aktifitas"      => "Menambah Iklan ".$this->input->post('nama_iklan',TRUE)."",
              "tanggal"        => gmdate("Y-m-d H:i:s", time()+60*60*7),
              "akses"          => $this->session->userdata('level'),

            );
            $this->Aktifitas_model->insert($aktifitas);
            $this->Iklan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('iklan'));
        }

      }

    public function update($id)
    {
        $row = $this->Iklan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'breadcumb' => 'Mengubah',
                'button' => 'Update',
                'action' => site_url('iklan/update_action'),
            		'id_iklan' => set_value('id_iklan', $row->id_iklan),
            		'nama_iklan' => set_value('nama_iklan', $row->nama_iklan),
            		'foto' => set_value('foto', $row->foto),
            		'url' => set_value('url', $row->url),
                
	    );
            $this->template->load('dashboard','iklan/iklan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('iklan'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_iklan', TRUE));
        } else {
          
            $data = array(
              "nama_iklan" => $this->input->post('nama_iklan',TRUE),
              "foto" => $finfo['file_name'],
              "url" => $this->input->post('url',TRUE),
            );

            $aktifitas = array(

              "nama"            => $this->session->userdata('nama_user'),
              "aktifitas"      => "Mengubah Iklan ".$this->input->post('nama_iklan',TRUE)."",
              "tanggal"        => gmdate("Y-m-d H:i:s", time()+60*60*7),
              "akses"          => $this->session->userdata('level'),

            );
        $this->Aktifitas_model->insert($aktifitas);
        $this->Iklan_model->update($this->input->post('id_iklan', TRUE), $data);
        $this->session->set_flashdata('message', 'Update Record Success');
        redirect(site_url('iklan'));
        }
      
      }

    public function delete($id)
    {
        $row = $this->Iklan_model->get_by_id($id);

        if ($row) {
            $aktifitas = array(

              "nama"            => $this->session->userdata('nama_user'),
              "aktifitas"      => "Menghapus Iklan ".$this->input->post('nama_iklan',TRUE)."",
              "tanggal"        => gmdate("Y-m-d H:i:s", time()+60*60*7),
              "akses"          => $this->session->userdata('level'),

            );
            $this->Aktifitas_model->insert($aktifitas);
            $this->Iklan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('iklan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('iklan'));
        }
    }

    public function _rules()
    {
    	$this->form_validation->set_rules('nama_iklan', 'nama iklan', 'trim|required');
    	$this->form_validation->set_rules('url', 'url', 'trim|required');

    	$this->form_validation->set_rules('id_iklan', 'id_iklan', 'trim');
    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    function _createThumbnail($filename)

   {

       $config['image_library']    = "gd2";

       $config['source_image']     = "./uploads/images/" .$filename;

       $config['create_thumb']     = TRUE;

       $config['maintain_ratio']   = TRUE;

       $config['width'] = "80";

       $config['height'] = "80";

       $this->load->library('image_lib',$config);

       if(!$this->image_lib->resize())

       {

           echo $this->image_lib->display_errors();

       }

   }

}

/* End of file Iklan.php */
/* Location: ./application/controllers/Iklan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-11-23 18:28:46 */
/* http://harviacode.com */
