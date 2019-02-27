<?php
    require './includes/helpers.php';
    require 'Form.php';

    # START SESSION
    session_start ();

    # Create new instance of Form
    $form = new \p2\Form( $_GET );


    $selectedImg = $form->get ( 'selectedImg' );
    $quote = $form->get ( 'quote' );
    $author = $form->get ( 'author' );
    $addBackground = $form->has ( 'addBackground' );
    $textBg = 'quote-text__bg';

    # Only the quote and author inputs will be required. Any character will
    # be permitted.
    $errors = $form->validate ( [
                                    'quote'  => 'required',
                                    'author' => 'required'
                                ] );
    /**
     * Method to set the background image
     * Will be selected randomly if the user does not select any
     * @return string $imBg
     */
    function setBackground () {
        $bgImages = [ 'butterflies.jpeg', 'fall.jpg', 'leaves.jpeg', 'road.jpeg' ];
        global $selectedImg;
        if ( $_GET[ 'bgOption' ] ) {
            $imgBg = "background-image:url('/static/img/" . $selectedImg . "');";
        }
        else {
            $selectedImg = $bgImages[ array_rand ( $bgImages ) ];
            $imgBg = "background-image:url('/static/img/" . $selectedImg . "');";
        }
        return $imgBg;
    }

    # Only set background if there are not errors
    if ( !$form->hasErrors ) {
        $imgBg = setBackground ();
    }

    # Store values into $_SESSION
    $_SESSION[ 'state' ] = [
        'imgBg'         => $imgBg,
        'selectedImg'   => $selectedImg,
        'quote'         => $quote,
        'author'        => $author,
        'addBackground' => $addBackground,
        'textBg'        => $textBg,
        'errors'        => $errors,
        'hasErrors'     => $form->hasErrors
    ];

    # Redirect to index.php
    header ( 'Location: index.php' );