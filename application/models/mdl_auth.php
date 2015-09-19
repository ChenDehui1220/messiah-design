<?php

class Mdl_auth extends CI_Model
{

    public function auth($account, $password, $isMd5 = true)
    {
        $result = false; 
        $password = ($isMd5) ? md5($password) : $password;

        $sql = "SELECT id FROM admin WHERE account = ? AND password = ?";
        $query = $this->db->query($sql, array($account, $password));

        if ($query->num_rows() > 0) {
            $result = true;
        }

        return $result;
    }

    public function update_password($password)
    {
        $data = array(
            'password' => md5($password)
        );

        $this->db->where('account', 'admin');
        $this->db->update('admin', $data);

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }

    }

}
