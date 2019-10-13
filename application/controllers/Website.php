<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	public function index(){
		$this->load->view('pages/index');
	}

	public function about(){
		$this->load->view('pages/about');
	}

	public function policy(){
		$this->load->view('pages/policy');
	}
	public function disclaimer(){
		$this->load->view('pages/disclaimer');
	}
	public function terms(){
		$this->load->view('pages/terms');
	}

	public function services(){
		$this->load->view('pages/services');
	}

	public function contact(){
		$this->load->view('pages/contact');
	}

	public function send_contact_email(){
		$contact_firstname = $this->input->post('contact_firstname');
		$contact_lastname = $this->input->post('contact_lastname');
		$conatact_email = $this->input->post('conatact_email');
		$contact_phone = $this->input->post('contact_phone');
		$contact_message = $this->input->post('contact_message');

		$from_email = $conatact_email;
			$formcontent='
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
			 New Email from ASM Legal Website.
			 </p>
			 <hr>
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
			 Sender Name: '.$contact_firstname.' '.$contact_lastname.'
			 </p>
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
			 Mobile No: '.$contact_phone.'
			 </p>
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
			 Email: '.$conatact_email.'
			 </p>
			 <hr>
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
			 Message: '.$contact_message.'
			 </p>
		 ';
			$recipient = "info@asmlegalservices.com";
			$subject = "Email from ASM Legal Website.";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '.$from_email."\r\n".
									'Reply-To: '.$from_email."\r\n" .
									'X-Mailer: PHP/' . phpversion();

			$send = mail($recipient, $subject, $formcontent, $headers);
			if($send){
				$this->session->set_flashdata('send_email','success');
			}
			else{
				$this->session->set_flashdata('send_email','error');
			}
			header('Location:'.base_url("Contact").'');
	}

	public function send_quote_mail(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$massege = $this->input->post('massege');

		$from_email = $email;
			$formcontent='
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
			 New Quote Email from ASM Legal Website.
			 </p>
			 <hr>
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
			 Sender Name: '.$name.'
			 </p>
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
			 Email: '.$email.'
			 </p>
			 <hr>
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
			 Subject: '.$subject.'
			 </p>
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
			 Message: '.$massege.'
			 </p>
		 ';
			$recipient = "info@asmlegalservices.com";
			$subject = "Quote from ASM Legal Website : ".$subject;
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '.$from_email."\r\n".
									'Reply-To: '.$from_email."\r\n" .
									'X-Mailer: PHP/' . phpversion();

			$send = mail($recipient, $subject, $formcontent, $headers);
			if($send){
				$this->session->set_flashdata('send_email','success');
			}
			else{
				$this->session->set_flashdata('send_email','error');
			}
			header('Location:'.base_url().'');
	}
}
