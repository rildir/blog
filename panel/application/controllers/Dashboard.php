<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "dashboard_v";
        $this->load->model("dashboard_model");
    }

    public function index()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $items = $this->dashboard_model->get_all();
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function new_todo()
    {
        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function save()
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


            $insert = $this->dashboard_model->add(
                array(
                    "title" => $this->input->post("title"),
                    "description" => $this->input->post("description")
                )
            );

            if ($insert) {
                redirect("dashboard");
            } else {
                echo "kayit islemi hatali";
            }


        } else {
            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = "";

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

    public function update_todo($id)
    {
        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->dashboard_model->get(
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


            $update = $this->dashboard_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "title" => $this->input->post("title"),
                    "description" => $this->input->post("description"),
                )
            );

            if ($update) {
                redirect("dashboard");
            } else {
                echo "kayit islemi hatali";
            }


        } else {
            $viewData = new stdClass();

            $item = $this->dashboard_model->get(
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
        $delete = $this->dashboard_model->delete(
            array(
                "id" => $id
            )
        );

        if ($delete) {
            redirect("dashboard");
        } else {
            echo "silme islemi hatali";
        }
    }
}