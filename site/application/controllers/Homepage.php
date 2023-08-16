<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "homepage";

        $this->load->model("homepage_model");
        $this->load->model("settings_model");

        $this->load->library("form_validation");
        $this->load->library('email');
    }

    public function index()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;


        // Homepage modelinden verileri alın
        $homepageItems = $this->homepage_model->get_all_limit(5);

        usort($homepageItems, function ($a, $b) {
            return $b->id - $a->id;
        });

        $viewData->homepageItems = $homepageItems;


        $settings = $this->settings_model->get_all();
        $viewData->settings = $settings;


        $this->load->view("{$viewData->viewFolder}/index", $viewData);
    }

    public function show($params)
    {
        $this->load->model('homepage_model');
        $data['post'] = $this->homepage_model->get(array('seo_url' => $params));

        $this->load->model('settings_model');
        $data['settings'] = $this->settings_model->get_all();

        if ($data['post']) {
            $this->load->view('post/show', $data);
        } else {
            show_404(); // Post bulunamazsa 404 hatası göster
        }
    }

    public function contact()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = "contact_v";

        $settings = $this->settings_model->get_all();
        $viewData->settings = $settings;

        $this->load->view("{$viewData->viewFolder}/index", $viewData);

    }


}