<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function pagination($atual, $total_registros, $por_pagina, $url,  $separador = '/'){

    $url_page_def = BASE_URL.$url.$separador.'%d'.$separador.$por_pagina;

    $total = @ceil( $total_registros / $por_pagina);
	$mnt_page ='';
    // Anterior
    if($atual > 1){
        $page_anterior = sprintf($url_page_def , ($atual-1) );
        $mnt_page .= '<li class="list-inline-item">
                        <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11 " href="'.$page_anterior.'">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </li>';
    }


    if($total > 5){

        // PASSO 1
        $anteriores =  $atual - 2;
        if($anteriores > 0){

            for($p = $anteriores; $p < $atual; $p++){
                $page = sprintf($url_page_def , $p );
                if($p <= $total){
                    $mnt_page .= '<li class="list-inline-item g-hidden-sm-down">
                        <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11 '.($p == $atual ? 'u-pagination-v1-5--active"' : '').'" href="'.$page.'">
                           '.$p.'
                        </a>
                    </li>';
                }
            }
        }else{
            $page = sprintf($url_page_def , 1 );
            $mnt_page .= '<li class="list-inline-item g-hidden-sm-down">
                        <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11 '.(1 == $atual ? 'u-pagination-v1-5--active "' : '').'" href="'.$page.'">
                           1
                        </a>
                    </li>';
        }

        // PASSO 2
        $quantas = $atual + 1;
        $inicia =$atual;
        if($inicia == 1){
            $inicia++;
        }
        for($p = $inicia; $p <= $quantas; $p++){
            $page = sprintf($url_page_def , $p );

            if($p <= $total){
                $mnt_page .= '<li class="list-inline-item g-hidden-sm-down">
                        <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11 '.($p == $atual ? 'u-pagination-v1-5--active"' : '').'" href="'.$page.'">
                           '.$p.'
                        </a>
                    </li>';
            }
        }

        if($total > $quantas){
            $mnt_page .= '<li class="list-inline-item">...</a></li>';

            $page = sprintf($url_page_def , $total );

            $mnt_page .= '<li class="list-inline-item g-hidden-sm-down">
                        <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11 '.($total == $atual ? '"u-pagination-v1-5--active "' : '').'" href="'.$page.'">
                           '.$total.'
                        </a>
                    </li>';
        }
    }else{
        for($p = 1; $p <= $total; $p++){
            $page = sprintf($url_page_def , $p );
            $mnt_page .= '<li class="list-inline-item g-hidden-sm-down">
                        <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11 '.($p == $atual ? 'u-pagination-v1-5--active"' : '').'" href="'.$page.'">
                           '.$p.'
                        </a>
                    </li>';
        }
    }



    // Pr�ximo
    if($atual < $total){
        $page_proxima = sprintf($url_page_def , ($atual+1) );
        $mnt_page .= '<li class="list-inline-item g-hidden-sm-down">
                        <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11 " href="'.$page_proxima.'">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>';
    }


    return $mnt_page;
}
