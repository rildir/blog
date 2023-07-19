<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "settings_v";
        $this->load->model("settings_model");
    }

    public function index()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $items = $this->settings_model->get_all();
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function update_settings($id)
    {
        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->settings_model->get(
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
        $this->form_validation->set_rules("about_us", "about_us", "required|trim");
        $this->form_validation->set_rules("mission", "mission", "required|trim");
        $this->form_validation->set_rules("vision", "vision", "required|trim");
        $this->form_validation->set_rules("logo", "logo", "required|trim");
        $this->form_validation->set_rules("phone", "phone", "required|trim");
        $this->form_validation->set_rules("email", "email", "required|trim");
        $this->form_validation->set_rules("facebook", "facebook", "required|trim");
        $this->form_validation->set_rules("instagram", "instagram", "required|trim");
        $this->form_validation->set_rules("github", "github", "required|trim");
        $this->form_validation->set_rules("linkedin", "linkedin", "required|trim");
        $this->form_validation->set_rules("twitter", "twitter", "required|trim");
        $this->form_validation->set_rules("youtube", "youtube", "required|trim");


        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b> can't be empty"
            )
        );

        // form validation çalıştırılır
        $validate = $this->form_validation->run();

        if ($validate) {


            $update = $this->settings_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "title" => $this->input->post("title"),
                    "about_us" => $this->input->post("about_us"),
                    "mission" => $this->input->post("mission"),
                    "vision" => $this->input->post("vision"),
                    "logo" => $this->input->post("logo"),
                    "phone" => $this->input->post("phone"),
                    "email" => $this->input->post("email"),
                    "facebook" => $this->input->post("facebook"),
                    "instagram" => $this->input->post("instagram"),
                    "github" => $this->input->post("github"),
                    "linkedin" => $this->input->post("linkedin"),
                    "twitter" => $this->input->post("twitter"),
                    "youtube" => $this->input->post("youtube")
                )
            );

            if ($update) {
                redirect("settings");
            } else {
                echo "kayit islemi hatali";
            }


        } else {
            $viewData = new stdClass();

            $item = $this->settings_model->get(
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
}