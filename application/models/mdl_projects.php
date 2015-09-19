<?php

class Mdl_projects extends CI_Model
{
    //取得所有精選資料
    public function top2()
    {
        $result = array();

        $sql = "SELECT id,title,type,images FROM projects WHERE status = '1' AND top = '1' ORDER BY id DESC LIMIT 2";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->result();
        }

        return $result;
    }

    //提供前台上線專案
    public function pageOne($id = null, $type = 1)
    {
        $result = array();

        if ($id !== null && is_numeric($id)) {
            $sql   = "SELECT id,title,content,address,images,createTime FROM projects WHERE status = '1' AND id = ? LIMIT 0,1";
            $query = $this->db->query($sql, array($id));
        } else {
            $sql   = "SELECT id,title,content,address,images,createTime FROM projects WHERE status = '1' AND type = ? ORDER BY createTime DESC LIMIT 0,1";
            $query = $this->db->query($sql, array($type));
        }

        if ($query->num_rows() > 0) {
            $result = $query->result();
        }

        return $result;
    }

    //提供前台上線專案頁面的快搜
    public function pageNav($type = 1)
    {
        $result = array();

        $sql   = "SELECT id,title FROM projects WHERE status = '1' AND type = ? ORDER BY createTime DESC";
        $query = $this->db->query($sql, array($type));

        if ($query->num_rows() > 0) {
            $result = $query->result();
        }

        return $result;
    }

    //提供首頁專案列表
    public function pageAll($start = 0, $size = 8)
    {
        $result = array();

        if ($start > 1) {
            $start = ($start - 1) * $size;
        } else {
            $start = 0;
        }

        $sql   = "SELECT id,type,top,title,address,images,createTime FROM projects WHERE status = '1' ORDER BY createTime DESC LIMIT " . $start . "," . $size;
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->result();
        }
        return $result;
    }

    //取得單筆資料
    public function one($id)
    {
        $result = array();

        $sql   = "SELECT id,type,top,title,content,address,images,createTime,updateTime,status FROM projects WHERE id = ?";
        $query = $this->db->query($sql, array($id));

        if ($query->num_rows() > 0) {
            $result = $query->result();
        }

        return $result;
    }

    //提供後台專案列表
    public function all()
    {
        $result = array();
        $sql   = "SELECT id,type,top,title,address,images,createTime,status FROM projects ORDER BY createTime DESC";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->result();
        }
        return $result;
    }

    //新增資料
    public function add($type, $top, $title, $content, $address, $images, $time, $status)
    {
        $data = array(
            'type'       => $type,
            'top'        => $top,
            'title'      => $title,
            'content'    => $content,
            'address'    => $address,
            'images'     => $images,
            'createTime' => $time,
            'status'     => $status,
        );

        $this->db->insert('projects', $data);

        if ($this->db->affected_rows()) {
            return $this->db->insert_id();
        } else {
            return null;
        }
    }

    //更新資料
    public function update($id, $type, $top, $title, $content, $address, $images, $time, $status)
    {
        $data = array(
            'type'       => $type,
            'top'        => $top,
            'title'      => $title,
            'content'    => $content,
            'address'    => $address,
            'images'     => $images,
            'createTime' => $time,
            'updateTime' => date("Y-m-d H:i:s"),
            'status'     => $status,
        );

        $this->db->where('id', $id);
        $this->db->update('projects', $data);

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
        $this->db->delete('projects');

        $this->db->where('pid', $id);
        $this->db->delete('albums');
    }

}
