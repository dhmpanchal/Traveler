<?php

class packageModel extends CI_model
{
    public function create_package($post_data)
    {
        return $this->db->insert('package',$post_data);
    }

    public function total_rows()
    {
        $q = $this->db->select()
                    ->from('package')
                    ->get();
        return $q->num_rows();
    }

    public function get_package()
    {
        $q = $this->db->select()
                    ->from('package')
                    ->limit()
                    ->get();
        return $q->result();
    }
}

?>