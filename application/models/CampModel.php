<?php

class CampModel extends CI_model
{
    public function create_camp($post_data)
    {
        return $this->db->insert('camp',$post_data);
    }

    public function total_rows()
    {
        $q = $this->db->select()
                    ->from('camp')
                    ->get();
        return $q->num_rows();
    }

    public function get_camps($limit,$offset)
    {
        $q = $this->db->select()
                    ->from('camp')
                    ->limit($limit,$offset)
                    ->get();
        return $q->result();
    }
}

?>