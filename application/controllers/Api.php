<?php
// application/controllers/Api.php
defined('BASEPATH') OR exit('No direct script access allowed');

class InterfaceController extends CI_Controller {
    public function index() {
        $this->load->view('api_interface');
    }
}

class Api extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data = $this->User_model->get_all_users();
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }

    public function user($id) {
        $user = $this->User_model->get_user_by_id($id);
        if ($user) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($user));
        } else {
            $this->output->set_status_header(404)->set_output('User not found');
        }
    }

    public function create() {
        $data = json_decode($this->input->raw_input_stream, true);
        $user_id = $this->User_model->insert_user($data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('user_id' => $user_id)));
    }

    public function update($id) {
        $data = json_decode($this->input->raw_input_stream, true);
        $success = $this->User_model->update_user($id, $data);
        if ($success) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('message' => 'User updated')));
        } else {
            $this->output->set_status_header(404)->set_output('User not found');
        }
    }

    public function delete($id) {
        $success = $this->User_model->delete_user($id);
        if ($success) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('message' => 'User deleted')));
        } else {
            $this->output->set_status_header(404)->set_output('User not found');
        }
    }
}
