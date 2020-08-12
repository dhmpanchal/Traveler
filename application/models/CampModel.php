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

    public function get_all_camps()
    {
        $q = $this->db->select()
                    ->from('camp')
                    ->get();
        return $q->result();
    }

    public function get_data_byId($campId)
    {
        $q = $this->db->select()
                    ->from('camp')
                    ->where(['ID'=>$campId])
                    ->get();
        return $q->result();
    }

    public function delete_camp($campId)
    {
        return $this->db->delete('camp',['id'=>$campId]);
    }
    public function update_camp($campId,$post)
    {
        return $this->db->where(['id'=>$campId])
                        ->update('camp',$post);
    }
}

?>