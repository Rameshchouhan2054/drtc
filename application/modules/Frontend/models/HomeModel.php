<?php

class HomeModel extends CI_Model
{

   
    public function Save($data)
    {

        $this->db->insert('requestcall',$data);
    }
    public function Request_Call()
    {
        $query = $this->db->get('requestcall');
        return $query;
    }
    public function Pickup_Request($data)
    {
        $this->db->insert('Pickup_Request',$data);
        // $query = $this->db->get('Pickup_Request',$data);
        // return $query;
    }
    public function Message($data)
    {
        $this->db->insert('message',$data);
      
    }

}
