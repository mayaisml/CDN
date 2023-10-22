<?php
// application/controllers/HelloController.php
defined('BASEPATH') or exit('No direct script access allowed');

class Makan extends CI_Controller
{

    public function taksedap()
    {
        $this->load->model('user_model');
        $data = $this->user_model->sedap();
        //die(var_dump($data));
        /*   $result = array(
            'errorstatus' => $data,
        );

        // return data in json format
        header('Content-Type: application/json');
        header("Access-Control-Allow-Origin: *");
        echo json_encode($result);
        exit; */
        $data['message'] = 'Hello from the controller!';

        // Load the view and pass data to it
        $this->load->view('api_interface', $data);
    }

    public function insertuser()
    {
        $one = $this->input->post('username');
        $two = $this->input->post('email');
        $three = $this->input->post('phone');
        $four = $this->input->post('skills');
        $five = $this->input->post('hobby');


        $data["username"] = $one; //ni ikut name column table
        $data["mail"] = $two;
        $data["phonenum"] = $three;
        $data["skills"] = $four;
        $data["hobby"] = $five;

        $this->load->model('user_model');
        $data = $this->user_model->insert_user($data);

        // Load the view and pass data to it
        $this->load->view('api_interface');
    }

    public function update_user()
    {
        // Get the input data
        $one = $this->input->post('username');
        $two = $this->input->post('email');
        $three = $this->input->post('phone');
        $four = $this->input->post('skills');
        $five = $this->input->post('hobby');

        // Create an array to hold the user data
        $data = array(
            'username' => $one, // Assuming these keys match the column names in your table
            'mail' => $two,
            'phonenum' => $three,
            'skills' => $four,
            'hobby' => $five
        );

        // Load the user model
        $this->load->model('user_model');

        // Call the update_user method from your model, passing in the data
        $result = $this->user_model->update_user($data);

        // Load the view and pass data to it
        $this->load->view('api_interface');
    }
}
