<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Demo_ace extends Admin_Controller {

    /* Smarty */
    /*
    function index() {
        $this->smarty->assign("Name","Fred Irving Johnathan Bradley Peppergill",true);
        $this->smarty->assign("FirstName",array("John","Mary","James","Henry"));
        $this->smarty->assign("LastName",array("Doe","Smith","Johnson","Case"));
        $this->smarty->assign("Class",array(array("A","B","C","D"), array("E", "F", "G", "H"),
        array("I", "J", "K", "L"), array("M", "N", "O", "P")));
        $this->smarty->assign("contacts", array(array("phone" => "1", "fax" => "2", "cell" => "3"),
        array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));
        $this->smarty->assign("option_values", array("NY","NE","KS","IA","OK","TX"));
        $this->smarty->assign("option_output", array("New York","Nebraska","Kansas","Iowa","Oklahoma","Texas"));
        $this->smarty->assign("option_selected", "NE");  
        $this->smarty->view('index');
    }
     */

    function index() {
        redirect('demo_ace/dashboard');
    }

    function dashboard(){
        $this->layout->buffer('main_content', 'demo_ace/index');
        $this->layout->render('layout_ace_dashboard');
    } 

    function typography(){
        $this->layout->buffer('main_content', 'demo_ace/typography');
        $this->layout->render('layout_ace');
    }

    function buttons(){
        $this->layout->buffer('main_content', 'demo_ace/buttons');
        $this->layout->render('layout_ace');
    }  

    function widgets(){
        $this->layout->buffer('main_content', 'demo_ace/widgets');
        $this->layout->render('layout_ace');
    } 

    function elements(){
        $this->layout->buffer('main_content', 'demo_ace/elements');
        $this->layout->render('layout_ace');
    }  

    function tables(){
        $this->layout->buffer('main_content', 'demo_ace/tables');
        $this->layout->render('layout_ace');
    }

    function form_elements(){
        $this->layout->buffer('main_content', 'demo_ace/form_elements');
        $this->layout->render('layout_ace');
    } 

    function form_validation(){
        $this->layout->buffer('main_content', 'demo_ace/form_validation');
        $this->layout->render('layout_ace');
    } 

    function calendar(){
        $this->layout->buffer('main_content', 'demo_ace/calendar');
        $this->layout->render('layout_ace');
    } 

     function treeview(){
        $this->layout->buffer('main_content', 'demo_ace/treeview');
        $this->layout->render('layout_ace');
    } 

 }

?>