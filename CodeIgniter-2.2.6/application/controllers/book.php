<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book extends CI_Controller {

	
	public function confirm() {

		$tour 		= $this->input->post('tour-select');
		$category 	= $this->input->post('tour-category');
		$date 		= $this->input->post('tour-date');
		$nation 	= $this->input->post('tour-nation');
		$contact 	= $this->input->post('tour-contact');
		$adult 		= $this->input->post('tour-adult');
		$child 		= $this->input->post('tour-child');
		$hotel 		= $this->input->post('tour-hotel');

		$data['tour'] 		= $tour;
		$data['category'] 	= $category;
		$data['date'] 		= $date;
		$data['nation'] 	= $nation;
		$data['contact'] 	= $contact;
		$data['adult'] 		= $adult;
		$data['child'] 		= $child;
		$data['hotel'] 		= $hotel;

		$this->load->view('book',$data);
	}
}

