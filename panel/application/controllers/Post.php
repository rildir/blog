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
                // Dosya başarıyla yüklendiğinde dosya bilgilerini alalım
                $file_data = $this->upload->data();

                // Dosyanın adı ve yolu
                $file_name = $file_data['file_name'];

                // Veritabanına kaydedelim
                $insert = $this->post_model->add(
                    array(
                        "title" => $this->input->post("title"),
                        "description" => $this->input->post("description"),
                        "img_url" => $file_name,
                        // Yüklenen dosyanın adını burada kaydediyoruz
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


            $update = $this->post_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "title" => $this->input->post("title"),
                    "description" => $this->input->post("description"),
                    "img_url" => $this->input->post("img_url"),

                    "seo_url" => convertToSEO($this->input->post("title"))
                )
            );

            if ($update) {
                redirect("post");
            } else {
                echo "kayit islemi hatali";
            }


        } else {
            $viewData = new stdClass();

            $item = $this->post_model->get(
                array(
                    "id" => $id,
                )
            );

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = "true";
            $viewData->item = $item;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

    public function delete($id)
    {
        $delete = $this->post_model->delete(
            array(
                "id" => $id
            )
        );

        if ($delete) {
            redirect("post");
        } else {
            echo "silme islemi hatali";
        }
    }

    // yedeksave{
    //     $this->load->library("form_validation");

    //     // kurallar yazılır
    //     $this->form_validation->set_rules("title", "Title", "required|trim");
    //     $this->form_validation->set_rules("description", "Description", "required|trim");

    //     $this->form_validation->set_message(
    //         array(
    //             "required" => "<b>{field}</b> can't be empty"
    //         )
    //     );

    //     // form validation çalıştırılır
    //     $validate = $this->form_validation->run();

    //     if ($validate) {


    //         $insert = $this->post_model->add(
    //             array(
    //                 "title" => $this->input->post("title"),
    //                 "description" => $this->input->post("description"),
    //                 "img_url" => $this->input->post("img_url"),
    //                 "seo_url" => convertToSEO($this->input->post("title"))
    //             )
    //         );

    //         if ($insert) {
    //             redirect("post");
    //         } else {
    //             echo "something wrong";
    //         }


    //     } else {
    //         $viewData = new stdClass();

    //         $viewData->viewFolder = $this->viewFolder;
    //         $viewData->subViewFolder = "add";
    //         $viewData->form_error = "";

    //         $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    //     }}
}