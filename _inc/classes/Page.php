<?php
$current_page_name = basename($_SERVER['SCRIPT_NAME'], '.php');
require_once('../_inc/classes/Page.php');
$page_object = new Page($current_page_name);

    class Page{
        private $page_name;
        public function __construct($page_name){
            $this->page_name = $page_name;
        }
        public function get_page_name(){
            return $this->page_name;
        }
        public function add_styles(){
            echo '<link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="../css/banner.css">
            <link rel="stylesheet" href="../css/navigation.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
            switch($this->page_name){
                case 'kontakt':
                    echo '<link rel="stylesheet" href="../css/form.css">';
                    break;
                case 'qna':
                    echo '<link rel="stylesheet" href="../css/accordion.css">';
                    break;
                case 'thankyou':
                    break;
                case 'login':
                    echo '<link rel="stylesheet" href="../css/form.css">';
                    break;
                case 'register':
                    echo '<link rel="stylesheet" href="../css/form.css">';
                    break;

            }
        }
        function add_scripts(){
            switch($this->page_name){
                case 'home':
                    echo '<script src="../js/slider.js"></script>';
                    break;
                case 'kontakt':
                    echo '<script src="../js/formular.js"></script>';
                    break;
                case 'qna':
                    echo '<script src="../js/accordion.js"></script>';
                    break;
                case 'thankyou':
                    break;
                }
        }
    }
?>