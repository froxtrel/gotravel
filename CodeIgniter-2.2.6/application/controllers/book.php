<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book extends CI_Controller {

	
	public function confirm() {

		$this->load->model('Tour');

		$tour 						= $this->input->post('tour-select');
		$category 					= $this->input->post('tour-category');
		$date 						= $this->input->post('tour-date');
		$nation 					= $this->input->post('tour-nation');
		$contact 					= $this->input->post('tour-contact');
		$adult 						= $this->input->post('tour-adult');
		$child 						= $this->input->post('tour-child');
		$hotel 						= $this->input->post('tour-hotel');
		$payment		            = $this->Tour->getTotalPayment($tour);

		foreach ($payment as $row) {}

		$tour_name		            = $this->Tour->getTourName($tour);
		$data['adult_rate']         = $row->tour_adult;
		$data['child_rate']         = $row->tour_child;
		$data['tour_desc']          = $row->tour_desc;
		$data['total']              = $this->calculatePayment($row->tour_child,$row->tour_adult,$adult,$child);

		foreach ($tour_name as $row) {}

		$data['tour_name']          = $row->tour_name;
		$data['category'] 			= $category;
		$data['contact'] 			= $contact;
		$data['nation'] 			= $nation;	
        $data['adult'] 				= $adult;
		$data['child'] 				= $child;
		$data['hotel'] 				= $hotel;
		$data['tour'] 				= $tour;		
		$data['date'] 				= $date;		


		$this->load->view('book',$data);
	}

	public function CalculatePayment($rateChild,$rateAdult,$adult,$child) {

		 $childSum = $rateChild * $child;
		 $adultSum = $rateAdult * $adult;
		 $total    = $childSum + $adultSum;

		 return $total;

	}

}

