<?php
    session_start();
    require './includes/helpers.php';

    $author = ucfirst($_GET['author']);
    $addBackground = isset($_GET['addBackground']);
    $quote = $_GET['quote'];
    $textBg = 'quote-text__bg';
    $selectedImg = $_GET['bgOption'];

    function setBackground () {
        $bgImages = ['butterflies.jpeg', 'fall.jpg', 'leaves.jpeg', 'road.jpeg'];
        global $selectedImg;
        if($_GET['bgOption']) {
            $imgBg = "background-image:url('/static/img/". $selectedImg . "');";
        } else {
            $imgBg = "background-image:url('/static/img/". $bgImages[array_rand($bgImages)] . "');";
        }
        return $imgBg;
    }

    $imgBg = setBackground();

    $_SESSION['state'] = [
        'imgBg' => $imgBg,
        'selectedImg' => $selectedImg,
        'quote' => $quote,
        'author' => $author,
        'addBackground' => $addBackground,
        'textBg' => $textBg
    ];

//    dump($_SESSION['state']);
//
//    die();

    header('Location: index.php');