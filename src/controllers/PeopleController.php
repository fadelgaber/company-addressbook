<?php
require 'BaseController.php';

class PeopleController extends BaseController{

    public function index(){
        echo 'reached people index';
    }

    public function show(){
        echo 'reached show';
    }
}
