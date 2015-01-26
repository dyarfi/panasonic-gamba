<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tiket extends CI_Controller {

    public function Tiket() {
        parent::__construct();
        if (!$this->session->userdata('who')) {
            redirect(base_url() . 'admin/');
            die();
        }
        $this->load->library('grocery_CRUD');
        $this->load->model('player_model');
    }

    public function index() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('cas_tiket');
            $crud->set_subject('List Tiket');
            $crud->set_relation('part_id', 'cas_participant', '{name} <br/>phone: {phone_number} <br/>email: {email} <br/>twitter: {twitter}');
//            $crud->columns('name', 'email', 'phone_number', 'twitter', 'total_image');
//            $crud->callback_column('total_image', array($this, '_callback_total_image'));
            $crud->display_as('part_id', 'Participant');
            $crud->columns('tiket_code', 'part_id');
//            $crud->display_as('email', 'Email');
//            $crud->display_as('phone_number', 'Phone Number');
//            $crud->display_as('twitter', 'Phone Number');
//            $crud->display_as('total_image', 'Total Image Submitted');
            $crud->unset_add();
            $crud->unset_edit();
            $crud->unset_delete();
            $this->load($crud, 'tiket');
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    private function load($crud, $nav) {
        $output = $crud->render();
        $output->nav = $nav;
        if ($crud->getState() == 'list')
            $this->load->view('admin/metronix.php', $output);
        else
            $this->load->view('admin/popup.php', $output);
    }

}
