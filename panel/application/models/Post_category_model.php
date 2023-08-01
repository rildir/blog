<?php
class Post_Category_Model extends CI_Model
{
    public function add_post_categories($post_id, $category_ids)
    {
        if (!empty($category_ids)) {
            $data = array();
            foreach ($category_ids as $category_id) {
                $data[] = array(
                    "id" => $post_id,
                    "id" => $category_id
                );
            }
            $this->db->insert_batch('post_category', $data);
        }
    }
}
?>