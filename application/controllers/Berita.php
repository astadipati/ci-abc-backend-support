<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Model_berita');
    }
	public function index()
	{
        // $data ['berita'] = $this->Model_berita->tampil_berita()->num_rows();
        $data ['listberita'] = $this->Model_berita->tampilkan_berita();
		$this->load->view('depan/berita', $data);
    }
    
    function add(){
        if (isset($_POST['submit'])){
            $this->Model_berita->save();
            redirect('berita');
        }else {
         $this->load->view('berita/add');
        }
    }
 
    function edit(){
           if (isset($_POST['submit'])){
                $this->Model_berita->update();
                redirect('berita');
           }else{
                $id          = $this->uri->segment(3);
                $data['data_berita'] = $this->db->get_where('berita',array ('id'=>$id))->row_array();
                $this->load->view('berita/edit', $data);
           }
    }
 
    function delete(){
        $id = $this->uri->segment(3);
        if(!empty($id)){
            // proses delete
            $this->db->where('id', $id);
            $this->db->delete('berita');
        }
        redirect('berita');
    }
}
