<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    public $meta_description ='Agen Arjuna Pulsa';
    public $meta_keywords = 'agen pulsa semper,agen pulsa kampung kurus,agen pulsa semper barat, agen pulsa cilincing, pulsa semper,
                    pulsa sukapura,pulsa muncang,pulsa rawa badak';
    public $meta_title ='Home | Arjuna Pulsa';
            
    function __construct()
	{
		parent::__construct();
                $this->_init();
                
	}
        public function _init(){
            $this->output->set_template('Home');
        }
        public function index()
	{
            $this->output->set_meta('meta_description',  $this->meta_description);
            $this->output->set_meta('meta_keywords',$this->meta_keywords);
            $this->output->set_meta('meta_title',$this->meta_title);
            
            $this->load->view('Home/index');
		//$this->load->view('index');
	}
        
        public  function Pendaftaran()
        {
            $this->output->set_meta('meta_description',  $this->meta_description);
            $this->output->set_meta('meta_keywords',$this->meta_keywords);
            $this->output->set_meta('meta_title','Pendaftaran | Arjuna Pulsa');
            $this->load->view('Home/Pendaftaran');
        }
        
        public function Deposit(){
            $this->output->set_meta('meta_description',  $this->meta_description);
            $this->output->set_meta('meta_keywords',$this->meta_keywords);
            $this->output->set_meta('meta_title','Deposit | Arjuna Pulsa');
            $this->load->view('Home/Deposit');
        }
        
        public function Transaksi(){
            $this->output->set_meta('meta_description',  $this->meta_description);
            $this->output->set_meta('meta_keywords',$this->meta_keywords);
            $this->output->set_meta('meta_title','Format Transaksi | Arjuna Pulsa');
            $this->load->view('Home/Transaksi');
        }
        
        public function Harga(){
            $this->output->set_meta('meta_description',  $this->meta_description);
            $this->output->set_meta('meta_keywords',$this->meta_keywords);
            $this->output->set_meta('meta_title','Harga | Arjuna Pulsa');
            $this->load->view('Home/Harga');
        }
            
}
