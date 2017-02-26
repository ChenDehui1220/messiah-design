<?php

class Mdl_News extends CI_Model
{
    //取得所有上架資料
    public function newsTop3()
    {
        $result = array();

        $now = date("Y-m-d H:i:s");

        $sql   = "SELECT id,title FROM news WHERE status = '1' AND createTime <= '$now' ORDER BY id DESC LIMIT 3";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->result();
        }

        return $result;
    }

    //提供前台上線消息
    public function pageOne($id = null)
    {
        $result = array();

        $now = date("Y-m-d H:i:s");

        if ($id !== null && is_numeric($id)) {
            $sql   = "SELECT id,title,content,images,createTime FROM news WHERE status = '1' AND createTime <= '$now' AND id = ? LIMIT 0,1";
            $query = $this->db->query($sql, array($id));
        } else {
            $sql   = "SELECT id,title,content,images,createTime FROM news WHERE status = '1' AND createTime <= '$now' ORDER BY createTime DESC LIMIT 0,1";
            $query = $this->db->query($sql);
        }

        if ($query->num_rows() > 0) {
            $result = $query->result();
        }

        return $result;
    }

    //提供前台其他消息
    public function pageOthers($exceptId = null, $start = 0, $size = 5)
    {
        $result = array();

        $now = date("Y-m-d H:i:s");

        if ($start > 1) {
            $start = ($start-1) * $size;
        }

        if ($exceptId !== null && is_numeric($exceptId)) {
            $sql   = "SELECT id,title,createTime FROM news WHERE status = '1' AND id != ? AND createTime <= '$now' ORDER BY createTime DESC LIMIT ".$start.",".$size;
            $query = $this->db->query($sql, array($exceptId));

            if ($query->num_rows() > 0) {
                $result = $query->result();
            }
        }
        return $result;
    }


    //取得所有資料
    public function all()
    {
        $result = array();

        $now = date("Y-m-d H:i:s");

        $sql   = "SELECT id,title,content,images,createTime,updateTime,status FROM news ORDER BY id DESC";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->result();
        }

        return $result;
    }

    //取得單筆資料
    public function one($id, $passTimeValid = false)
    {
        $result = array();

        $sql   = "SELECT id,title,content,images,createTime,updateTime,status FROM news WHERE id = ?";

        if (!$passTimeValid) {
            $now = date("Y-m-d H:i:s");
            $sql .= " AND createTime <= '$now'";
        }
        $query = $this->db->query($sql, array($id));

        if ($query->num_rows() > 0) {
            $result = $query->result();
        }

        return $result;
    }

    //新增資料
    public function add($title, $content, $images, $time, $status)
    {
        $data = array(
            'title'      => $title,
            'content'    => $content,
            'images'     => $images,
            'createTime' => $time,
            'status'     => $status,
        );

        $this->db->insert('news', $data);

        if ($this->db->affected_rows()) {
            return $this->db->insert_id();
        } else {
            return null;
        }
    }

    //更新資料
    public function update($id, $title, $content, $images, $time, $status)
    {
        $data = array(
            'title'      => $title,
            'content'    => $content,
            'images'     => $images,
            'createTime' => $time,
            'updateTime' => date("Y-m-d H:i:s"),
            'status'     => $status,
        );

        $this->db->where('id', $id);
        $this->db->update('news', $data);

        if ($this->db->affected_rows()) {
            return $this->db->insert_id();
        } else {
            return null;
        }
    }

    //刪除資料
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('news'); 
    }

}
