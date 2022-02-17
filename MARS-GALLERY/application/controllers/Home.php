<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$this->listagem(1 );
	}

	public function listagem($page){

		$data 					= [];
		$page 					= (int) $page;
		$filter 				= '';

		$data['cam_filter'] = $this->input->get("cam_filter");
		if($data['cam_filter']){
			$filter = '&camera='.$data['cam_filter'];

			$array = [];
			$key 	= 'UPJAUakbw18lG3R9UFhIqMWCcBvisxHv8qgLOYvd';
			$link 	= 'https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=1000'.$filter.'&api_key='.$key.'';
		}else{
			$data['total_fotos'] 	= 856;

			$array = [];
			$key 	= 'UPJAUakbw18lG3R9UFhIqMWCcBvisxHv8qgLOYvd';
			$link 	= 'https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=1000'.$filter.'&page='.$page.'&api_key='.$key.'';
		}

		$json_file = file_get_contents("$link");
		if ($json_file != null) {
			$array = json_decode($json_file, true);
			array_walk_recursive($array, function(&$array, $key) {
				if (!mb_detect_encoding($array, 'utf-8', true)) {
					$array = utf8_encode($array);
				}
			});
		} else {
			$array = false;
		}
		if($filter){
			$data['total_fotos'] 	= count($array['photos']);
		}

		$data['pictures'] 			= $array['photos'];
		$data['total_pag']  		= count($array['photos']);
		$data['page'] 				= $page;

		$data['pagination'] 		= pagination( $page , $data['total_fotos'], 25 , 'home/listagem' );


		/* Monta Template */
		$this->template->loadsimples('plataforma', 'search',$data);
	}

	public function teste(){
		/* Monta Template */
		$this->template->load('plataforma','home', "search");
	}

}
