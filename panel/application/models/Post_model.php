<?php

class Post_Model extends CI_Model
{

    public $tableName = "post";

    public function __construct()
    {
        parent::__construct();
    }

    public function get($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->row();
    }

    public function get_all($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->result();
    }

    public function get_all_with_category_and_user($where = array())
    {
        $this->db->select('post.*, category.title AS post_category, users.full_name AS username');
        $this->db->from($this->tableName);
        $this->db->join('category', 'post.post_category_id = category.id', 'left');
        $this->db->join('users', 'post.user_post_id = users.id', 'left');

        if (!empty($where)) {
            $this->db->where($where, false); // false parametresi ekleyerek sütunun hangi tabloya ait olduğunu belirtin
        }

        return $this->db->get()->result();
    }

    public function add($data = array())
    {
        return $this->db->insert($this->tableName, $data);
    }

    public function update($where = array(), $data = array())
    {
        return $this->db->where($where)->update($this->tableName, $data);
    }

    public function editPost($id)
    {
        $query = $this->db->get_where('post', ['id' => $id]);
        return $query->row();
    }

    public function delete($where = array())
    {
        return $this->db->where($where)->delete($this->tableName);
    }

}