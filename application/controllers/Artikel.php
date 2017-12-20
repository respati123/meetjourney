<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    function __construct()
    {

        parent::__construct();

        $this->load->model(array('Artikel_model','Aktifitas_model'));
        $this->load->library('form_validation');
        $this->load->helper('fungsidate_helper');
        if($this->session->userdata('isLogin')!=TRUE){
          redirect('login');
        }

    }

    public function index()
    {
        $artikel = $this->Artikel_model->get_all();

        $data = array(
            'artikel_data' => $artikel,

        );

        $this->template->load('dashboard','artikel/artikel_list', $data);
    }

    public function read($id)
    {
        $row = $this->Artikel_model->get_by_id($id);
        if ($row) {
            $data = array(
          		'id_artikel' => $row->id_artikel,
              'foto'       => $row->foto_konten,
          		'title' => $row->title,
          		'content' => $row->content,
                'subtitle'  => $row->subtitle,
            );
            $this->template->load('dashboard','artikel/artikel_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('artikel'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Menambah',
            'action' => site_url('artikel/create_action'),
      	    'id_artikel' => set_value('id_artikel'),
      	    'title' => set_value('title'),
      	    'content' => set_value('content'),
            'subtitle' => set_value('subtitle'),
      	);
        $this->template->load('dashboard','artikel/artikel_form', $data);
    }

      public function create_action()
      {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
          
          $data = array(
            'foto_konten' => $this->input->post('foto',TRUE),
        		'title' => $this->input->post('title',TRUE),
        		'content' => $this->input->post('content',TRUE),
            'tanggal' => gmdate("Y-m-d H:i:s", time()+60*60*7),
            'aktif'   => 0,
            'penulis' => $this->session->userdata('nama_user'),
            'subtitle' => $this->input->post('subtitle',TRUE)
    	    );
          $aktifitas = array(

            "nama"            => $this->session->userdata('nama_user'),
            "aktifitas"      => "Menambah Artikel ".$this->input->post('title',TRUE)."",
            "tanggal"        => gmdate("Y-m-d H:i:s", time()+60*60*7),
            "akses"          => $this->session->userdata('level'),

          );
          $this->Aktifitas_model->insert($aktifitas);
          $this->Artikel_model->insert($data);
          $this->session->set_flashdata('message', 'Create Record Success');
          redirect(site_url('artikel'));
        }
      }
  

    public function update($id)
    {
        $row = $this->Artikel_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('artikel/update_action'),
            		'id_artikel' => set_value('id_artikel', $row->id_artikel),
            		'title' => set_value('title', $row->title),
            		'content' => set_value('content', $row->content),
                'foto'    => set_value('foto',$row->foto_konten),
                'subtitle'=> set_value('subtitle',$row->subtitle)
            	    );
            $this->template->load('dashboard','artikel/artikel_update', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('artikel'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_artikel', TRUE));
        } else {
          
            $data = array(
              'foto_konten' => $this->input->post('foto',TRUE),
              'title' => $this->input->post('title',TRUE),
              'content' => $this->input->post('content',TRUE),
              'subtitle' => $this->input->post('subtitle',TRUE),
            );
            $aktifitas = array(

              "nama"            => $this->session->userdata('nama_user'),
              "aktifitas"      => "Mengubah Artikel ".$this->input->post('title',TRUE)."",
              "tanggal"        => gmdate("Y-m-d H:i:s", time()+60*60*7),
              "akses"          => $this->session->userdata('level'),

            );
        $this->Aktifitas_model->insert($aktifitas);
        $this->Artikel_model->update($this->input->post('id_artikel', TRUE), $data);
        $this->session->set_flashdata('message', 'Update Record Success');
        redirect(site_url('artikel'));
        }
    }
  

    public function delete($id)
    {
        $row = $this->Artikel_model->get_by_id($id);

        if ($row) {
          $aktifitas = array(

            "nama"            => $this->session->userdata('nama_user'),
            "aktifitas"      => "Menghapus Artikel ".$this->input->post('title',TRUE)."",
            "tanggal"        => gmdate("Y-m-d H:i:s", time()+60*60*7),
            "akses"          => $this->session->userdata('level'),

          );
          $this->Aktifitas_model->insert($aktifitas);
            $this->Artikel_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('artikel'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('artikel'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('title', 'title', 'trim|required');
  $this->form_validation->set_rules('content', 'content', 'trim|required');
    $this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('subtitle', 'subtitle', 'trim|required');

	$this->form_validation->set_rules('id_artikel', 'id_artikel', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "artikel.xls";
        $judul = "artikel";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Title");
	xlsWriteLabel($tablehead, $kolomhead++, "Content");

	foreach ($this->Artikel_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->title);
	    xlsWriteLabel($tablebody, $kolombody++, $data->content);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function aktif($id)
    {   

        $this->Artikel_model->aktif($id);
        redirect('Artikel');
    } 
    public function nonaktif($id)
    {   

        $this->Artikel_model->nonaktif($id);
        redirect('Artikel');
    }
}

/* End of file Artikel.php */
/* Location: ./application/controllers/Artikel.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-11-22 08:11:28 */
/* http://harviacode.com */
