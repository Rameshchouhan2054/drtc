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
    public function Pickup_Request()
    {
        $query = $this->db->get('Pickup_Request');
        return $query;
    }
    public function Message()
    {
        $query = $this->db->get('message');
        return $query;
    }

}
