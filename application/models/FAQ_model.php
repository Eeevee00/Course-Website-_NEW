<?php
  class FAQ_model extends CI_Model{
    public function getFAQ(){
      $query = $this->db->get('faq');
      return $query->result();
    }

  }

?>
