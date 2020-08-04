<?php
class UserModel extends CI_model
{
    function create_user($post_data)
    {
        return $this->db->insert('user',$post_data);
    }

    public function is_authenticate($username,$password)
    {
        $q = $this->db->where(['username'=>$username,'password'=>$password])
                    ->get('user');
        if ($q->num_rows()) {
            return $q->row()->id;
        }
        else {
            return False;
        }
    }
}

?>