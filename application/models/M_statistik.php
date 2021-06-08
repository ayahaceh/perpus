<?php if (!defined('BASEPATH')) exit('No direct script acess allowed');

class M_statistik extends CI_Model
{


  function get_table($table_name, $limit)
  {
    $get_user = $this->db->get($table_name, $limit);
    return $get_user->result_array();
  }
  function get_grafik($table_name)
  {
    $get_user = $this->db->get($table_name);
    return $get_user->result_array();
  }
  function get_terbaru($table_name, $limit)
  {
    // $this->db->select('')
    $this->db->order_by('id_buku DESC');
    $get_user = $this->db->get($table_name, $limit);
    return $get_user->result_array();
  }


  //---
}
