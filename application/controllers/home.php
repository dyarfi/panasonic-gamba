<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function Home() {
        parent::__construct();
        $this->load->library('facebook');
        $this->load->model('user_model');
        $this->config->set_item('show_header', true);
        header('Access-Control-Allow-Origin: *');
    }

    public function index() {
        $facebook = new Facebook();
        $signedRequest = $facebook->getSignedRequest();
		//print_r($facebook->getUser());
		//exit;
		$liked = false;
        if (isset($signedRequest['page'])) {
            $liked = $signedRequest['page']['liked'];
        } else if ($this->input->post('liked') == 1) {
            $liked = true;
        }
        if ($liked) {
            $this->liked_user();
        } else {
            $this->unlike();
        }
    }

    private function liked_user() {
        $facebook = new Facebook();
        $fb_id = $facebook->getUser();
        if ($fb_id) {
            $user_fb = $facebook->api('/me?fields=name,picture,email');
            $fb_user = array();
            $fb_user['fb_name'] = $user_fb['name'];
            $fb_user['fb_email'] = @$user_fb['email'];
            $fb_user['fb_id'] = $user_fb['id'];
            $fb_user['fb_pic'] = $user_fb['picture']['data']['url'];
            $this->user_model->insert_temp($fb_user);


            //check already registered
            $user = $this->user_model->check_fb_user($fb_id);
            if ($user) {
                //registered
                $signedRequest = $facebook->getSignedRequest();
                $sc_id = false;
                if (isset($signedRequest['app_data'])) {
                    $sc_encoded = $signedRequest['app_data'];
                    $sc_id = $this->user_model->decode($sc_encoded);
                }
                $this->config->set_item('user_id', $user->part_id);
                if ($sc_id) {
                    //redirect(base_url() . 'participant/single/' . $sc_encoded . '?data=' . $this->user_model->encode($user->part_id));
                    $this->show_home();
                } else {
                    //redirect(base_url() . 'participant?data=' . $this->user_model->encode($user->part_id));
                    $this->show_home();
                }
            } else {
                //not registered
                $this->show_home();
            }
        } else {
            //request to get data
            //$this->load->view('request');
            $this->show_home();
        }
    }

    public function show_home() {
        $this->load->view('include/header');
        $this->load->view('index');
        $this->load->view('include/footer');
    }

    public function product() {
        $this->load->view('include/header');
        $this->load->view('product');
        $this->load->view('include/footer');
    }

    public function unlike() {
        $this->config->set_item('show_header', false);
        $this->load->view('include/header');
        //$this->load->view('before_like');
        $this->load->view('index');
        $this->load->view('include/footer');
    }

    public function mechanism() {
        $this->load->view('include/header');
        $this->load->view('mechanism');
        $this->load->view('include/footer');
    }

	public function registration() {

        // Additional 
        $this->show_home();
        /*
        $data = $this->input->get('data');
        if ($data) {
            $user_id = $this->user_model->decode($data);
            if ($user_id) {
                redirect(fb_url('participant'));
                die();
            }
        }

        $facebook = new Facebook();
        $fb_id = $facebook->getUser();
		
        $user_fb = $this->user_model->get_temp($fb_id);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[participant.email]');
        $this->form_validation->set_rules('name', 'Nama', 'trim|required');
        $this->form_validation->set_rules('address', 'alamat', 'trim|required');
        $this->form_validation->set_rules('twitter', 'Twitter', 'trim|required');
        $this->form_validation->set_rules('phone', 'No Telpon', 'trim|required|numeric|is_unique[participant.phone_number]');
        if ($this->form_validation->run() == FALSE) {
            $data['user_fb'] = $user_fb;
            $this->load->view('include/header');
            $this->load->view('user_registrasi', $data);
            $this->load->view('include/footer');
        } else {
            $part = array();
            $part['name'] = $this->input->get_post('name', true);
            $part['fb_id'] = $this->input->get_post('fb_id', true);
            $part['fb_pic_url'] = $this->input->get_post('picture_url', true);
            $part['address'] = $this->input->get_post('address', true);
            $part['email'] = $this->input->get_post('email', true);
            $part['phone_number'] = $this->input->get_post('phone', true);
            $part['twitter'] = $this->input->get_post('twitter', true);
            $this->load->model('user_model');
            $user_id = $this->user_model->reg_participant($part);
//            redirect(base_url('participant'));
            $this->config->set_item('user_id', $user_id);

            redirect(base_url() . 'participant?data=' . $this->user_model->encode($user_id));
        }
        */
    }

    public function terms() {
        $this->load->view('include/header');
        $this->load->view('terms');
        $this->load->view('include/footer');
    }

    public function gallery() {
        $this->load->library('pagination');

        $order = array('key' => 'image_created_date', 'value' => 'DESC');
        $sort = $this->input->get('sort', true);
        $data['sort'] = '';
        if ($sort) {
            if ($sort == 'zota') {
                $order = array('key' => 'name', 'value' => 'DESC');
            } else if ($sort == 'atoz') {
                $order = array('key' => 'name', 'value' => 'ASC');
            } else if ($sort == 'vote') {
                $order = array('key' => '(select count(1) from liner_vote V where '
                    . ' V.image_id = liner_image.image_id)', 'value' => 'DESC');
            }
            $data['sort'] = $sort;
        }

        $search = $this->input->get('search', true);
        $data['search'] = '';
        if ($search != '') {
            $sort .='&search=' . $search;
            $data['search'] = $search;
        }
        $data['data'] = $this->input->get('data', true);

        $config['base_url'] = base_url() . 'home/gallery';
        $config['total_rows'] = $this->user_model->count_gallery($search);
        $config['per_page'] = 6;
        $config['cur_tag_open'] = '<a href="#" class="active_paging">';
        $config['cur_tag_close'] = '</a>';
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["galleries"] = $this->user_model->
                get_gallery('', $page, $order, $search);
        $links = $this->pagination->create_links($sort);
        $data['links'] = $links; //str_replace("&nbsp;", '', $links);
        $this->load->view('include/header');
        $this->load->view('gallery', $data);
        $this->load->view('include/footer');
    }

    public function test() {
        $this->load->model('user_model');
        echo $this->user_model->encode('1');
    }

    public function test2() {

        $url = '<iframe width="100%"  height="166"  scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/125358503&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>';
        $pos_height = strpos($url, 'height');
        $temp = substr($url, 0, $pos_height) . ' height="166" ' . substr($url, $pos_height + 11, strlen($url));
        echo $pos_height;
        echo '<br/>' . $temp;
    }

}

?>
