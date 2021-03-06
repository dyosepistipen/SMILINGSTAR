<?php

class User_model extends CI_Model {
  function __construct() {
    parent::__construct();
    $this->load->database("default");
  }

  function checkUserId($user_id) {
    $this->db->where("userid", $user_id);
    $result = $this->db->get(DBPREFIX . "_users");
    if ($result && $result->num_rows() > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  function addNewUser($data) {
    return ($this->db->insert(DBPREFIX . "_users", $data));
  }

  function getUserByID($user_id) {
    $this->db->where("id", $user_id);
    $result = $this->db->get(DBPREFIX . "_users");
    if ($result && $result->num_rows() > 0) {
      return $result->result_array();
    } else {
      return FALSE;
    }
  }

  function getUserByEmail($email_id) {
    $this->db->where("email", $email_id);
    $result = $this->db->get(DBPREFIX . "_users");
    if ($result && $result->num_rows() > 0) {
      return $result->result_array();
    } else {
      return FALSE;
    }
  }

  public function updateUser($user_id, $data) {
    //	echo "<pre>";print_r($data);die;
    $this->db->where("id", $user_id);
    if ($this->db->update(DBPREFIX . "_users", $data)) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}

?>