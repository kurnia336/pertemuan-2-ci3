<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Page extends CI_Controller {
 
    public function index()
	{
        $this->load->view('home');
    }
 
	public function typography()
	{
        $this->load->view('typography');
    }
 
    public function table()
	{
        $this->load->view('table');
    }
    public function image()
	{
        $this->load->view('image');
    }
    
}