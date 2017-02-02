<?php

class Tour extends CI_Model {

    function __construct() {

        parent::__construct();
    }

    function getTotalPayment($tour) {

    	$this->db->select('*');    	
    	$this->db->where ('tour_code',$tour);
    	$query = $this->db->get('tour');

		if($query->num_rows) {

            return $query->result();
	    }

	        return false; 

	    }

	 function getTourName($tour) {
    	
    	$this->db->select('tour_name');
    	$this->db->where ('tour_code',$tour);
    	$query = $this->db->get('tour');

		if($query->num_rows) {

            return $query->result();
	    }

	        return false; 

	    }
}

?>