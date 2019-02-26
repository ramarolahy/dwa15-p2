<?php
    session_start ();
    require './includes/helpers.php';
    require 'Form.php';

    $form = new \p2\Form($_GET);

    $selectedImg = $form->get ('selectedImg');
    $quote = $form->get ('quote');
    $author = $form->get ('author');
    $addBackground = $form->has ('addBackground');
    $textBg = 'quote-text__bg';

    $errors = $form->validate ([
                                   'quote' => 'required',
                                   'author' => 'required'
                               ]);

    function setBackground () {
        $bgImages = ['butterflies.jpeg', 'fall.jpg', 'leaves.jpeg', 'road.jpeg'];
        global $selectedImg;
        if ($_GET['bgOption']) {
            $imgBg = "background-image:url('/static/img/" . $selectedImg . "');";
        }
        else {
            $imgBg = "background-image:url('/static/img/" . $bgImages[array_rand ($bgImages)] . "');";
        }
        return $imgBg;
    }

    if (!$form->hasErrors) {
        $imgBg = setBackground ();
    }


    $_SESSION['state'] = [
        'imgBg' => $imgBg,
        'selectedImg' => $selectedImg,
        'quote' => $quote,
        'author' => $author,
        'addBackground' => $addBackground,
        'textBg' => $textBg,
        'errors' => $errors,
        'hasErrors' => $form->hasErrors
    ];

//    dump($_SESSION['state']);
//
//    die();

    header ('Location: index.php');