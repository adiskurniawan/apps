<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Demo_aquarius extends Admin_Controller {

    function index() {
        redirect('demo_aquarius/dashboard');
    }

    function dashboard(){
        $this->layout->buffer('main_content', 'demo_aquarius/index');
        $this->layout->render('layout_aquarius');
    } 

    function buttons(){
        $this->layout->buffer('main_content', 'demo_aquarius/buttons');
        $this->layout->render('layout_aquarius');
    }

    function forms(){
        $this->layout->buffer('main_content', 'demo_aquarius/forms');
        $this->layout->render('layout_aquarius');
    }

    function gallery(){
        $this->layout->buffer('main_content', 'demo_aquarius/gallery');
        $this->layout->render('layout_aquarius');
    }

    function icons(){
        $this->layout->buffer('main_content', 'demo_aquarius/icons');
        $this->layout->render('layout_aquarius');
    }

    function messages(){
        $this->layout->buffer('main_content', 'demo_aquarius/messages');
        $this->layout->render('layout_aquarius');
    }

    function statistic(){
        $this->layout->buffer('main_content', 'demo_aquarius/statistic');
        $this->layout->render('layout_aquarius');
    }

    function tables(){
        $this->layout->buffer('main_content', 'demo_aquarius/tables');
        $this->layout->render('layout_aquarius');
    }

    function widgets(){
        $this->layout->buffer('main_content', 'demo_aquarius/widgets');
        $this->layout->render('layout_aquarius');
    } 

    function ui(){
        $this->layout->buffer('main_content', 'demo_aquarius/ui');
        $this->layout->render('layout_aquarius');
    }  

    function typography(){
        $this->layout->buffer('main_content', 'demo_aquarius/typography');
        $this->layout->render('layout_aquarius');
    }

    function users(){
        $this->layout->buffer('main_content', 'demo_aquarius/users');
        $this->layout->render('layout_aquarius');
    }

 }

?>