<?php
namespace controllers;
 /**
 * Controller InscriptionsController
 **/
class InscriptionsController extends ControllerBase{

	public function index(){
		$this->loadView("InscriptionsController/index.html");
	}


public function Inscription(){

        $this->loadView('InscriptionsController/Inscription.html');

    }
}