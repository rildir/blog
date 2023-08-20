<?php

class Homepage_model extends CI_Model
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


    public function get_all_limit_asc($limit = 0)
    {
        if ($limit > 0) {
            $this->db->limit($limit);
            $this->db->order_by('id', 'asc');
        }

        return $this->db->get($this->tableName)->result();
    }

    public function get_all_with_category_and_user($where = array())
    {
        $this->db->select('post.*, category.title AS post_category, users.full_name AS username');
        $this->db->from($this->tableName);
        $this->db->join('category', 'post.post_category_id = category.id', 'left');
        $this->db->join('users', 'post.user_post_id = users.id', 'left');

        if (!empty($where)) {
            $this->db->where($where);
        }

        return $this->db->get()->result();
    }

    public function get_latest_posts_by_category($post_category_id = array(), $limit = 4)
    {
        if (empty($post_category_id)) {
            return array();
        }

        $this->db->select('post.*, users.full_name AS username');
        $this->db->from($this->tableName);
        $this->db->join('category', 'post.post_category_id = category.id', 'left');
        $this->db->join('users', 'post.user_post_id = users.id', 'left');
        $this->db->where_in('post_category_id', $post_category_id);
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit);

        return $this->db->get()->result();
    }

    public function getWorkIndex($workId)
    {
        // Burada veritabanınıza sorgu yaparak, belirli bir içeriğin indexini döndürebilirsiniz.
        // Örnek bir kod yapısı:
        $this->db->select('id');
        $this->db->from($this->tableName);
        $this->db->where('id', $workId);
        $query = $this->db->get();

        $result = $query->row();

        if ($result) {
            return $result->id;
        }

        return -1; // İçerik bulunamadıysa -1 dönebilirsiniz.
    }


    public function add($data = array())
    {
        // nereye neyi kaydedecegim?
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