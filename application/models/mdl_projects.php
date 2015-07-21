<?php

class Mdl_Projects extends CI_Model
{
    //取得所有上架資料
    public function top5()
    {
        $result = array();

        $sql = "SELECT id,title FROM projects WHERE status = '1' ORDER BY id DESC LIMIT 5";

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

        if ($id !== null && is_numeric($id)) {
            $sql   = "SELECT id,title,content,address,createTime FROM projects WHERE status = '1' AND id = ? LIMIT 0,1";
            $query = $this->db->query($sql, array($id));
        } else {
            $sql   = "SELECT id,title,content,address,createTime FROM projects WHERE status = '1' ORDER BY createTime DESC LIMIT 0,1";
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

        if ($start > 1) {
            $start = ($start - 1) * $size;
        }

        if ($exceptId !== null && is_numeric($exceptId)) {
            $sql   = "SELECT id,type,top,title,createTime FROM projects WHERE status = '1' AND id != ? ORDER BY createTime DESC LIMIT " . $start . "," . $size;
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

        $sql = "SELECT id,type,top,title,createTime,status FROM projects ORDER BY id DESC";

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

        $sql   = "SELECT id,type,top,title,content,address,createTime,updateTime,status FROM projects WHERE id = ?";
        $query = $this->db->query($sql, array($id));

        if ($query->num_rows() > 0) {
            $result = $query->result();
        }

        return $result;
    }

    //新增資料
    public function add($type, $top, $title, $content, $address, $time, $status)
    {
        $data = array(
            'type'       => $type,
            'top'        => $top,
            'title'      => $title,
            'content'    => $content,
            'address'    => $address,
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
    public function update($id, $type, $top, $title, $content, $address, $time, $status)
    {
        $data = array(
            'type'       => $type,
            'top'        => $top,
            'title'      => $title,
            'content'    => $content,
            'address'    => $address,
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
