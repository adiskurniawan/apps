<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Demo_perfectum extends Admin_Controller {

    function index() {
        redirect('demo_perfectum/dashboard');
    }

    function dashboard(){
        $this->layout->buffer('main_content', 'demo_perfectum/index');
        $this->layout->render('layout_perfectum');
    } 

    function calendar(){
        $this->layout->buffer('main_content', 'demo_perfectum/calendar');
        $this->layout->render('layout_perfectum');
    }

    function chart(){
        $this->layout->buffer('main_content', 'demo_perfectum/chart');
        $this->layout->render('layout_perfectum');
    }

    function file_manager(){
        $this->layout->buffer('main_content', 'demo_perfectum/file_manager');
        $this->layout->render('layout_perfectum');
    }

    function form(){
        $this->layout->buffer('main_content', 'demo_perfectum/form');
        $this->layout->render('layout_perfectum');
    }

    function gallery(){
        $this->layout->buffer('main_content', 'demo_perfectum/gallery');
        $this->layout->render('layout_perfectum');
    }

    function icon(){
        $this->layout->buffer('main_content', 'demo_perfectum/icon');
        $this->layout->render('layout_perfectum');
    }

    function table(){
        $this->layout->buffer('main_content', 'demo_perfectum/table');
        $this->layout->render('layout_perfectum');
    }

    function ui(){
        $this->layout->buffer('main_content', 'demo_perfectum/ui');
        $this->layout->render('layout_perfectum');
    }  

    function typography(){
        $this->layout->buffer('main_content', 'demo_perfectum/typography');
        $this->layout->render('layout_perfectum');
    }

 }

?>