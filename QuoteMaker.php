<?php
    session_start();
    require './includes/helpers.php';

    $imgBg = $_GET['bgOption'];
    $quote = $_GET['quote'];
    $author = $_GET['author'];
    $addBackground = isset($_GET['addBackground']);
    $textSize = $_GET['textSize'];

    $textBg = 'quote-text__bg';

    $_SESSION['state'] = [
        'imgBg' => $imgBg,
        'quote' => $quote,
        'author' => $author,
        'addBackground' => $addBackground,
        'textSize' => $textSize,
        'textBg' => $textBg
    ];

    function setBackground () {

    }

//    dump($_SESSION['state']);
//
//    die();

    header('Location: index.php');