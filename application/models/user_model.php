<?php
class User_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }

    public function sedap() {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('cdn');
        
        //$this->db->where('column3', 'some_value');
        $query = $this->db->get();
        return $query->result();
        //die(var_dump($query->result()));
      }

    // Retrieve user data by ID
    public function get_user_by_id($id) {
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row(); // Return a single user
    }

    // Retrieve all users
    public function get_all_users() {
        $query = $this->db->get('users');
        return $query->result(); // Return an array of users
    }

    // Insert a new user
    public function insert_user($data) {
        $this->db->insert('cdn', $data);   //cdn nama table: interview nama db
        return $this->db->insert_id(); // Return the ID of the newly inserted user
    }

    // Update user data
    public function update_user($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('cdn', $data);
    }

    // Delete a user by ID
    public function delete_user($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}
