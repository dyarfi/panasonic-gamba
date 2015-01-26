<?php


if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Player extends CI_Controller {

    public function Player() {
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
            $crud->set_table('cas_player');
            $crud->set_subject('Player');
            $crud->set_relation('club_id', 'cas_club', 'club_name');
//          $crud->set_relation_n_n('position', 'cas_player_position', 'cas_position','player_id', 'position_id','position_alias');
            
            $crud->display_as('club_id', 'Club');
            $crud->display_as('dob', 'Date of Birth');
            $crud->display_as('appearance', 'Apperances');            
            
            $crud->columns('name', 'club_id', 'position', 'total_goal', 'foto', 'juror_1', 'juror_2', 'juror_3', 'total_value');
			
            $crud->field_type('position','dropdown',
            array('GK' => 'Goal Keeper', 'DF' => 'Defender','MF' => 'Midfielder' , 'ST' => 'Striker'));
                    
            $crud->set_field_upload('foto','uploads/player');
            $crud->set_field_upload('video','uploads/player');

            $this->load($crud, 'player');
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function _callback_total_image($value, $row) {
        $total = $this->user_model->total_image_submitted($row->participant_id);
        return $total;
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
?>
