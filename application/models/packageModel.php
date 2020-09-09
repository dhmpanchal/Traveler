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

    public function get_package($limit,$offset)
    {
        $q = $this->db->select()
                    ->from('package')
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

    public function get_data_byId($pid)
    {
        $q = $this->db->select()
                    ->from('package')
                    ->where(['id'=>$pid])
                    ->get();
        return $q->result();
    }

    public function delete_package($pid)
    {
        return $this->db->delete('package',['id'=>$pid]);
    }
    public function update_package($pid,$post)
    {
        return $this->db->where(['id'=>$pid])
                        ->update('package',$post);
    }

    public function getPackageTitle($pid)
    {
        $q = $this->db->where(['id'=>$pid])
                    ->get('package');
        if ($q->num_rows()) {
            return $q->row()->pkg_title;
        }
        else {
            return False;
        }
    }
}

?>