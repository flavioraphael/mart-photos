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
		$data['term_open' ]		= false;
		$data['start']			= 0;
		$data['end']			= 25;
		$get 					= '';


		$data['cam_filter'] = $this->input->get("cam_filter");
		if($data['cam_filter']) {
			$filter .= '&camera=' . $data['cam_filter'];
			$data['term_open' ] = true;
		}

		if($filter){
			$array = [];
			$key 	= 'UPJAUakbw18lG3R9UFhIqMWCcBvisxHv8qgLOYvd';
			$link 	= 'https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=1000'.$filter.'&api_key='.$key.'';

			$data['term_open' ] = true;
		}else{
			$data['total_photos'] 	= 856;

			$array = [];
			$key 	= 'UPJAUakbw18lG3R9UFhIqMWCcBvisxHv8qgLOYvd';
			$link 	= 'https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=1000&page='.$page.'&api_key='.$key.'';
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


		$data['pictures'] 			= $array['photos'];
		$data['total_pag']  		= count($array['photos']);
		$data['page'] 				= $page;

		if($filter){
			$data['total_photos'] 	= count($array['photos']);
			$data['start'] 			= ($data['page']-1) * 25;
			$data['end'] 			= $data['start'] + 25;
			$URL_ATUAL 				= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			$partes 				= explode("?", $URL_ATUAL);

			$get = '?'.$partes[1];
		}

		$data['pagination'] 		= pagination( $page , $data['total_photos'], 25 , 'home/listagem',$get );


		/* Monta Template */
		$this->template->loadsimples('platform', 'search',$data);
	}

}
