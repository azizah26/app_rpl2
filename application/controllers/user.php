<?php
class user extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('M_user');
$this->load->helper('url');
}

public function index()
	{
        $this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
       
        $data['user'] = $this->M_user->get_data('set_user')->result();
		$this->load->view('user/v_user',$data);
        $this->load->view('template/footer');
	}
function tambah(){
    $this->load->view('template/wrapper');
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('user/v_tambah_user');
    $this->load->view('template/footer');
    }
    function tambah_aksi(){
        $nama_user = $this->input->post('nama_user');
        $level = $this->input->post('level');
        $data = array(
            
        'nama_user' => $nama_user,
        'level' => $level
        );
        $this->M_user->insert_data($data,'set_user');
        redirect('index.php/user');
        }

    function hapus($id_user){
            $where = array('id_user' => $id);
            $this->M_user->delete_data($where,'set_user');
            redirect('index.php/user');
            }
    function edit($id){
                $where = array('id_user' => $id);
                $data['user'] = $this->M_user->edit_data($where,'set_user')->result();
                $this->load->view('template/wrapper');
                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('user/v_edit_user',$data);
    }
    function update(){
        $id_user = $this->input->post('id_user');
        $nama_user = $this->input->post('nama_user');
        $level = $this->input->post('level');
        $data = array(
        'id_user' => $id_user,
        'nama_user' => $nama_user,
        'level' => $level
        );
        $where = array(
        'id_user' => $id_user
        );
        $this->M_user->update_data($where,$data,'set_user');
        redirect('index.php/user');
        }
}