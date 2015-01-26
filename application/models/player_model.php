<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Player_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->db->set_dbprefix('cas_');
    }

    function get_all_player() {
        $this->db->select("*,  DATE_FORMAT(dob, '%d-%m-%Y') as date_of_birth", FALSE);
        $this->db->order_by('position','asc');
        $this->db->order_by('club_id','desc');        
        return $this->db->get('player')->result();
    }

    function get_all_played_player() {
        $this->db->select("*,  DATE_FORMAT(dob, '%d-%m-%Y') as date_of_birth", FALSE);
        $this->db->where('juror_1 !=', 0);
        $this->db->where('juror_2 !=', 0);
        $this->db->where('juror_3 !=', 0);
        $this->db->order_by('position','asc');
        $this->db->order_by('club_id','desc');        
        return $this->db->get('player')->result();
    }

    function get_players_by_list_id($list_id) {
        $this->db->select('*');
        $this->db->where_in('player_id', $list_id);
        $this->db->_protect_identifiers = FALSE;
        $this->db->order_by("FIELD(position, 'GK', 'DF', 'MF', 'ST')");
        $this->db->_protect_identifiers = TRUE;
        return $this->db->get('player')->result();
    }

    function insert_team($team) {
        $this->db->insert('team', $team);
        return $this->db->insert_id();
    }

    function insert_players_team($players) {
        $this->db->insert_batch('player_team', $players);
    }

    function get_total_tiket_today() {
        $this->db->select('count(1) as total');
        $this->db->where('DATE(tiket_date)', 'DATE(NOW())');
        return $this->db->get('tiket')->row()->total;
    }

    function check_code($tiket_code) {
        $this->db->select('count(1) as total');
        $this->db->where('tiket_code', $tiket_code);
        return $this->db->get('tiket')->row()->total;
    }

    function generate_code() {
        $generated_code = strtoupper(substr(md5(rand(0, 1000)), 0, 5));
        while ($this->check_code($generated_code) > 0) {
            $generated_code = $this->generate_code();
        }
        return $generated_code;
    }

    function insert_tiket($tiket) {
        $this->db->insert('tiket', $tiket);
        return $this->db->insert_id();
    }

    function check_player_team($part_id) {
        return $this->db->query('select count(1) as total from cas_player_team where team_id = '
                        . '(select team_id from cas_team where part_id = ? limit 1)', $part_id)->row()->total;
    }

    function check_team_name($name) {
        $this->db->select('*');
        $this->db->where('team_name', $name);
        return $this->db->get('team')->row();
    }

    function get_team($part_id) {
        $this->db->select('*');
        $this->db->where('part_id', $part_id);
        return $this->db->get('team')->row();
    }

    function get_team_player($team_id) {
        return $this->db->query('select cp.name, cp.total_value, cp.foto from cas_player cp'
                        . ' inner join cas_player_team cpt'
                        . ' on cpt.player_id = cp.player_id'
                        . ' where cpt.team_id = ?', $team_id)->result();
    }

}

?>