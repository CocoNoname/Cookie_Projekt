<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once('C:/xampp/htdocs/Cookie_Projekt/_inc/classes/Page.php');
    require_once('C:/xampp/htdocs/Cookie_Projekt/_inc/classes/Navigation.php');
    require_once('../_inc/classes/Galery.php'); 

    $logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true;


    $pages = array(
        'Domov' => 'home.php',
        'Galéria' => 'galery.php',
        'Otázky/Odpovede' => 'qna.php',
        'Kontakt' => 'kontakt.php',
        ($logged_in ? 'Odhlásiť sa' : 'Login') => ($logged_in ? 'logout.php' : 'login.php')
    );

    $menu_object = new Menu($pages);
    $menu = $menu_object->generate_menu();
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo 'Moj web | ' . $current_page_name; ?></title>
    <?php
        $page_object->add_styles();
    ?>
</head>
<body>
    <header>
        <!-- logo -->
        <div>
            <a href="home.php">
                <img src="../img/logo.png" alt="logo" id="logo">
            </a>
        </div>
        <!-- navigacia -->
        <nav class="main-nav">
            <ul class="main-menu" id="main-menu">
                <?php
                    echo $menu; 
                ?>
            </ul>
            <span class="hamburger" id="hamburger">
                <i class="fa fa-bars"></i>
            </span>
        </nav>
    </header>
    <main>
