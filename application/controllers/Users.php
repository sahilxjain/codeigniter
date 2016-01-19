<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		#$this->load->helper('url');
		$this->load->model('users_model');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['user_list'] = $this->users_model->get_all_users();
		$this->load->view('templates/header');
		$this->load->view('show_users', $data);
		$this->load->view('templates/footer');
	}


	public function add_form()
	{
		$this->load->view('templates/header');
		$this->load->view('insert_users');
		$this->load->view('templates/footer');
	}

	public function insert_new_user()
	{
		$udata['name'] = $this->input->post('name');
		$udata['email'] = $this->input->post('email');
		$udata['address'] = $this->input->post('address');
		$udata['mobile'] = $this->input->post('mobile');
		$res = $this->users_model->insert_users_to_db($udata);
		if($res){
			header('location:'.base_url().'index.php/users/'.$this->index());
		}
	}

	public function edit($id)
	{
		//$id = $this->uri->segment(3);
		$data['user'] = $this->users_model->getById($id);
		$this->load->view('templates/header');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$mdata['name']=$_POST['name'];
		$mdata['email']=$_POST['email'];
		$mdata['address']=$_POST['address'];
		$mdata['mobile']=$_POST['mobile'];
		$res=$this->users_model->update_info($mdata, $_POST['id']);
		if($res){
			header('location:'.base_url().'index.php/users/'.$this->index());
		}
	}

	public function delete($id)
	{
		$this->users_model->delete_a_user($id);
		$this->index();
	}

    public function do_upload()
    {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('users', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                    $this->load->view('upload_success', $data);
            }
    }

}
?>