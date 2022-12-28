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
       
        $data['user'] = $this->M_user->get_data('user')->result();
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
        $username = $this->input->post('username');
        $level = $this->input->post('level');
        $data = array(
            
        'username' => $username,
        'level' => $level
        );
        $this->M_user->insert_data($data,'user');
        redirect('index.php/user');
        }

    function hapus($id_user){
            $where = array('id_user' => $id);
            $this->M_user->delete_data($where,'user');
            redirect('index.php/user');
            }
    function edit($id){
                $where = array('id_user' => $id);
                $data['user'] = $this->M_user->edit_data($where,'user')->result();
                $this->load->view('template/wrapper');
                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('user/v_edit_user',$data);
    }
    function update(){
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $level = $this->input->post('level');
        $data = array(
        'id' => $id,
        'username' => $username,
        'level' => $level
        );
        $where = array(
        'id' => $id_user
        );
        $this->M_user->update_data($where,$data,'user');
        redirect('index.php/user');
        }
}