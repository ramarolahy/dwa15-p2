<?php
    require 'includes/helpers.php';
    require 'logic.php';
?>
<!doctype html>
<html lang='en'>
<head>
    <?php include './includes/head.php' ?>
    <title>DWA15 - Project 2</title>
</head>
<body>
<header class='mdl-layout__header'>
    <?php include './includes/header.php' ?>
</header>
<div class='mdl-layout mdl-js-layout mdl-layout--fixed-header'>
    <main class='container'>
        <div class='row'>
            <div class='col'>
                <h3>Awesome Meme Maker</h3>
                <p class='mdl-card__title-text'>
                    Have fun creating some awesome memes!
                </p>
            </div>
        </div>
        <div class='card py-5 mt-5 border-0 bg-light'>
            <div class='row'>

                <div class='col-5 pl-5'>
                    <form action='MemeMaker.php' method='get'>
                        <div class='card border-0 px-4 pb-5'>
                            <div class='card-body'>
                                <h5 class='mdl-card__title-text'>Upload Background</h5>
                            </div>
                            <div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'>
                                <input class='mdl-textfield__input' type='text' id='imgURL' name='imgURL'>
                                <label class='mdl-textfield__label' for='imgURL'>Image URL...</label>
                            </div>
                            <div class='card-body'>
                                <h5 class='mdl-card__title-text'>Enter your texts</h5>
                            </div>
                            <div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'>
                                <input class='mdl-textfield__input' type='text' id='topText' name='topText'>
                                <label class='mdl-textfield__label' for='topText'>Top Text...</label>
                            </div>
                            <div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'>
                                <input class='mdl-textfield__input' type='text' id='bottomText' name='bottomText'>
                                <label class='mdl-textfield__label' for='bottomText'>Bottom Text...</label>
                            </div>
                            <div class='card-body'>
                                <div class='row'>
                                    <div class='col-10'>
                                        <h5 class='mdl-card__title-text'>Add Text Background</h5>
                                    </div>
                                    <div class='col-2'>
                                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                                            <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input"
                                                   name='addBackground'>
                                            <span class="mdl-checkbox__label"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class='card-body'>
                                <h5 class='mdl-card__title-text'>Text Size</h5>
                            </div>
                            <input class='mdl-slider mdl-js-slider' type='range'
                                   min='18' max='100' value='24' tabindex='0' name='textSize'>
                            <div class='card-body'>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect
                            mdl-button--colored">
                                    Meme it!
                                </button>
                            </div>
                        </div>
                    </form>

                </div>

                <div class='col-7 pr-5'>
                    <div class='mdl-card mdl-shadow--2dp'
                         style='width:auto; height:520px;background-color:cornflowerblue;'>
                            <div class='meme-text__bg meme-text__top text-center py-2'>
                                <span class='text__top'>Top Text</span>
                            </div>
                            <div class='meme-text__bg meme-text__bottom text-center py-2'>
                                <span class='text__top'>Bottom Text</span>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</div>

</body>
</html>