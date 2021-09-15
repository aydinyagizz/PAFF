<?php

class videoDetay extends Controller{


public function index ($id){

$this->view('videoDetay/video-detay', [
    'id'=>$id
]);

}


public function  detay(){

    $this->view('Detay/index');
    
    }
    




}



?>