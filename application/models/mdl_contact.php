<?php

class Mdl_Contact extends CI_Model
{
    //新增資料
    public function add($name, $email, $subject, $message)
    {
        $data = array(
            'name'       => $name,
            'email'      => $email,
            'subject'    => $subject,
            'message'    => $message,
            'createTime' => date("Y-m-d H:i:s"),
        );

        $this->db->insert('contact', $data);

        if ($this->db->affected_rows()) {
            return $this->db->insert_id();
        } else {
            return null;
        }
    }

    //取得所有資料
    public function all()
    {
        $result = array();

        $sql = "SELECT id,name,email,subject,message,createTime FROM contact ORDER BY id DESC";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->result();
        }

        return $result;
    }

    //刪除資料
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('contact'); 
    }

}
