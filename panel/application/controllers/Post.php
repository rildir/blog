<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "post_v";
        $this->load->model("post_model");
        $this->load->model("category_model");

        if (!get_active_user()) {
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $items = $this->post_model->get_all();
        $viewData->items = $items;



        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }

    public function new_post()
    {
        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $category_items = $this->category_model->get_all();
        $viewData->category_items = $category_items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function save()
    {
        $this->load->library("form_validation");

        $this->form_validation->set_rules("title", "Title", "required|trim");
        $this->form_validation->set_rules("description", "Description", "required|trim");

        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b> can't be empty"
            )
        );

        $validate = $this->form_validation->run();

        if ($validate) {

            $config['upload_path'] = 'uploads/post_v';
            $config['allowed_types'] = '*';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                echo "hatalı";
            } else {

                $file_data = $this->upload->data();

                $file_name = $file_data['file_name'];

                $category_id = $this->input->post("category_id");

                $category = $this->category_model->get(array('id' => $category_id));

                $insert = $this->post_model->add(
                    array(
                        "title" => $this->input->post("title"),
                        "post_category" => $category->title,
                        "description" => $this->input->post("description"),
                        "img_url" => $file_name,
                        "seo_url" => convertToSEO($this->input->post("title"))
                    )
                );


                if ($insert) {
                    redirect("post");
                } else {
                    echo "something wrong";
                }
            }
        } else {
            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = "";

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
    }

    public function update_post($id)
    {
        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->post_model->get(
            array(
                "id" => $id,
            )
        );

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function update($id)
    {
        $this->load->library("form_validation");

        // kurallar yazılır
        $this->form_validation->set_rules("title", "Title", "required|trim");
        $this->form_validation->set_rules("description", "Description", "required|trim");

        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b> can't be empty"
            )
        );

        // form validation çalıştırılır
        $validate = $this->form_validation->run();

        if ($validate) {
            $config['upload_path'] = 'uploads/post_v';
            $config['allowed_types'] = '*';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('img_url')) {
                echo "hatalı";
            } else {
                $file_data = $this->upload->data();
            }


            $update_data = [
                "title" => $this->input->post("title"),
                "description" => $this->input->post("description"),
                "seo_url" => convertToSEO($this->input->post("title"))
            ];


            if ($file_data["file_name"]) {
                $update_data["img_url"] = $file_data["file_name"];
            }

            $update = $this->post_model->update(["id" => $id], $update_data);

            if ($update) {
                redirect("post");
            } else {
                echo "kayit islemi hatali";
            }


        } else {
            $viewData = new stdClass();

            $item = $this->post_model->get(["id" => $id]);

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = "true";
            $viewData->item = $item;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

    public function delete($id)
    {
        // İlgili postu alın
        $post = $this->post_model->get(array('id' => $id));

        // İlgili postun img_url değerini alın
        $img_url = $post->img_url;

        // Postu sil
        $delete = $this->post_model->delete(array('id' => $id));

        if ($delete) {
            // Silme işlemi başarılı ise img dosyasını da sil
            $file_path = FCPATH . 'uploads/post_v/' . $img_url;
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            redirect("post");
        } else {
            echo "Silme işlemi başarısız.";
        }
    }

}