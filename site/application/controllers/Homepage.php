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
        $this->load->model("category_model");

        $this->load->library("form_validation");
        $this->load->library('email');
    }

    public function index()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;

        // Homepage modelinden verileri alın
        $homepageItems = $this->homepage_model->get_all_limit_asc(4);

        usort($homepageItems, function ($a, $b) {
            return $b->id - $a->id;
        });

        $viewData->homepageItems = $homepageItems;

        $settings = $this->settings_model->get_all();
        $viewData->settings = $settings;

        $items = $this->homepage_model->get_all_with_category_and_user();
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/index", $viewData);

    }

    public function show($params)
    {
        $this->load->model('homepage_model');
        $data['post'] = $this->homepage_model->get(array('seo_url' => $params));
        $data['posts'] = $this->homepage_model->get_all();
        $data['category'] = $this->category_model->get_all();


        $category_ids = array(32, 7, 10);
        $data['new_post'] = $this->homepage_model->get_latest_posts_by_category($category_ids, 10);

        $current_work_index = array_search($data['post']->id, array_column($data['posts'], 'id'));

        $next_work_index = $current_work_index + 1;
        if ($next_work_index >= count($data['posts'])) {
            $next_work_index = 0;
        }
        $data['next_work'] = $data['posts'][$next_work_index];

        $prev_work_index = $current_work_index - 1;
        if ($prev_work_index < 0) {
            $prev_work_index = count($data['posts']) - 1;
        }
        $data['prev_work'] = $data['posts'][$prev_work_index];

        $this->load->model('settings_model');
        $data['settings'] = $this->settings_model->get_all();

        if ($data['post']) {
            $this->load->view('post/show', $data);
        } else {
            show_404();
        }
    }










}