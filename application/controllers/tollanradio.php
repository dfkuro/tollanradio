<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tollanradio extends CI_Controller {

	function __construct() {
        parent::__construct();
   	}

	public function index() {
		$this->home();
		
	}

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function home()
	{	

		$this->load->helper('path');
		$this->load->helper('directory');

		$slider['images'] = $this->slider_images();

		$this->load->view('header', $slider);
		$this->load->view('content');
	}

	public function slider_images()
	{
		$this->load->helper('path');
		$this->load->helper('directory');

		$dir = opendir(BASEPATH.'../img/top_slider');
		$good_ext = array(".jpg",".png");
		$img = '';


             $img .= '<ol class="carousel-indicators">';
             $increment = 0;
		while (($file = readdir($dir)) !== false) {
			if((substr($file,-4) == $good_ext[0]) || (substr($file,-4) == $good_ext[1])){
				$url_file = '"img/top_slider/' . $file . '"';
				if( $increment == 0){
					$img .= '<li data-target="#myCarousel" data-slide-to="'.$increment.'" class="active"></li>';					
				}else {
					$img .= '<li data-target="#myCarousel" data-slide-to="'.$increment.'"></li>';					
				}
				$increment++;
			}		

		}

		$dir = opendir(BASEPATH.'../img/top_slider');
		$good_ext = array(".jpg",".png");

		$img .= '</ol> <div class="carousel-inner">';
		$increment = 0;

		while (($file = readdir($dir)) !== false) {

			if((substr($file,-4) == $good_ext[0]) || (substr($file,-4) == $good_ext[1])){
				$url_file = '"img/top_slider/' . $file . '"';
				
				if($increment == 0){
					$img .= '<div class="item active">
					                    <img src='.$url_file.' alt=´'.$url_file.' />
					                    
					                  </div>';
				}else{
					$img .= '<div class="item">
				                    <img src='.$url_file.' alt=´'.$url_file.' />
				                  
				                  </div>';
				}
				//$img .= '<a href='.$url_file.' class="fancybox" rel="group"><img src='.$url_file.' alt=´'.$url_file.' /></a>';
				$increment++;
			}		
			
		}

		$img .= '</div><a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
                </div>';

		return $img;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */