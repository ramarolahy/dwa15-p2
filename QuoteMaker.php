<?php
    session_start();
    require './includes/helpers.php';

    $author = ucfirst($_GET['author']);
    $addBackground = isset($_GET['addBackground']);
    $quote = $_GET['quote'];
    $textBg = 'quote-text__bg';


    function setBackground () {
        $bgImages = ['butterflies.jpeg', 'fall.jpg', 'leaves.jpeg', 'road.jpeg'];

        if($_GET['bgOption']) {
            $imgBg = "background-image:url('/static/img/". $_GET['bgOption'] . "');";
        } else {
            $imgBg = "background-image:url('/static/img/". $bgImages[array_rand($bgImages)] . "');";
        }
        return $imgBg;
    }

    $imgBg = setBackground();

    $_SESSION['state'] = [
        'imgBg' => $imgBg,
        'quote' => $quote,
        'author' => $author,
        'addBackground' => $addBackground,
        'textBg' => $textBg
    ];

//    dump($_SESSION['state']);
//
//    die();

    header('Location: index.php');