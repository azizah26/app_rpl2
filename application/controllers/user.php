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
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $jabatan = $this->input->post('jabatan');
        $data = array(
        'id' => $id,
        'username' => $username,
        'jabatan' => $jabatan
        );
        $this->M_user->insert_data($data,'login');
        redirect('index.php/user');
        }

    function hapus($id){
            $where = array('id' => $id);
            $this->M_user->delete_data($where,'login');
            redirect('index.php/user');
            }
    function edit($id){
                $where = array('id' => $id);
                $data['user'] = $this->M_user->edit_data($where,'login')->result();
                $this->load->view('template/wrapper');
                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('user/v_edit_user',$data);
    }
    function update(){
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $jabatan = $this->input->post('jabatan');
        $data = array(
        'username' => $username,
        'jabatan' => $jabatan
        );
        $where = array(
        'id' => $id
        );
        $this->M_user->update_data($where,$data,'login');
        redirect('index.php/user');
        }
}