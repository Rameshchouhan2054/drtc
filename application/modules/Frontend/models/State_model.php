<?php
class State_model extends CI_Model
{
 function fetch_country()
 {
  $this->db->order_by("country_name");
  $query = $this->db->get("country");
  return $query->result();
 }

 function fetch_state()
 {
//   $this->db->where('country_id', $country_id);
$this->db->order_by("state_name", "ASC");
$query = $this->db->get("state");
return $query->result();
 }
}