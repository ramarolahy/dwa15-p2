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
<header class='mdl-layout__fixed-header'>
    <?php include './includes/header.php' ?>
</header>
<div class='mdl-layout mdl-js-layout mdl-layout--fixed-header'>
    <main class='container pt-5'>
        <div class='row mt-4'>
            <div class='col'>
                <h3 class='text-center'>Make Pretty Quotes!</h3>
                <div class='card text-center border-0 bg-light py-3'>
                    <p class='text-center mdl-card__title-text'>
                        Have fun creating some awesome quote cards!
                    </p>
                </div>
            </div>
        </div>
        <div class='card py-5 mt-2 border-0 bg-light'>
            <div class='row'>
                <div class='col-5 pl-5'>
                    <form action='QuoteMaker.php' method='get'>

                        <div class='card border-0 px-4 pb-2'>
                            <div class='card-body'>
                                <h5 class='mdl-card__title-text'>Choose Background</h5>
                            </div>

                            <div class='card-body row wrap-card-body__radio'>
                                <div class='col-3'>
                                    <label class="" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="bgOption"
                                               value="road.jpeg" <?php if($selectedImg === 'road.jpeg') echo
                                        'checked'
                                        ?>>
                                        <img src='./static/img/road.jpeg' class='' alt='road'>
                                    </label>
                                </div>
                                <div class='col-3'>
                                    <label class="" for="option-2">
                                        <input type="radio" id="option-2" class="mdl-radio__button" name="bgOption"
                                               value="fall.jpg"
                                            <?php if($selectedImg === 'fall.jpg') echo 'checked' ?>>
                                        <img src='./static/img/fall.jpg' class='' alt='fall'>
                                    </label>
                                </div>
                                <div class='col-3'>
                                    <label class="" for="option-3">
                                        <input type="radio" id="option-3" class="mdl-radio__button" name="bgOption"
                                               value="butterflies.jpeg"
                                            <?php if($selectedImg === 'butterflies.jpeg') echo 'checked' ?>>
                                        <img src='./static/img/butterflies.jpeg' class=''
                                             alt='butterflies'>
                                    </label>
                                </div>
                                <div class='col-3'>
                                    <label class="" for="option-4">
                                        <input type="radio" id="option-4" class="mdl-radio__button" name="bgOption"
                                               value="leaves.jpeg"
                                            <?php if($selectedImg === 'leaves.jpeg') echo 'checked' ?>>
                                        <img src='./static/img/leaves.jpeg' class='' alt='leaves'>
                                    </label>
                                </div>
                            </div>

                            <div class='card-body'>
                                <h5 class='mdl-card__title-text'>Add a quote</h5>

                                <div class="mdl-textfield mdl-js-textfield">
                                <textarea class="mdl-textfield__input" type="text" rows= "2" id='quote' name='quote'
                                          required
                                ></textarea>
                                    <label class="mdl-textfield__label" for="quote">Quote...</label>
                                </div>
                                <div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'>
                                    <input class='mdl-textfield__input' type='text' id='bottomText' name='author' required>
                                    <label class='mdl-textfield__label' for='author'>Author...</label>
                                </div>
                            </div>
                            <div class='card bg-light border-0 py-3 px-3'>
                                <div class='card-body'>
                                    <div class='row'>
                                        <div class='col-10'>
                                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                                                <input type="checkbox" id="addBackground" class="mdl-checkbox__input"
                                                       name='addBackground' <?php if(isset($addBackground) and
                                                    $addBackground) echo checked ?> >
                                                <label class='mdl-checkbox__label mdl-card__title-text'
                                                       for='addBackground'>Add Text Background</label>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class='card-body'>
                                <button class=" float-right mdl-button mdl-js-button mdl-button--raised
                                mdl-js-ripple-effect
                            mdl-button--colored">
                                    Show me!
                                </button>
                            </div>
                        </div>
                    </form>

                </div>

                <div class='col-7 pr-5'>
                    <div id='quoteImg' class='wrap-quote mdl-card mdl-shadow--2dp' style='width: auto;'></div>
                    <div class='wrap-quote mdl-card mdl-shadow--2dp'
                         style="<?php echo ($imgBg) ? $imgBg : "background-color:#313f48;" ?>"
                         id='myQuote'>
                            <?php
                                if(!$quote) {
                                    echo "
                                        <div class='default_quote'>
                                            <span class='text__top'>\"A nice quote for a nice day!\"</span><br>
                                            <span class='text__top'>~&nbsp~&nbsp~</span>
                                        </div>
                                    ";
                                }
                            ?>
                            <div class='<?php if($addBackground) echo $textBg?> quote-text text-center py-5'>
                                <span class='text__top'><?php echo $quote
                                    ?></span>
                                <br><br>
                                <span class='text__top'><?php if(isset($author)) echo '~~ ' .
                                        $author . ' ~~'
                                    ?></span>
                            </div>
                    </div>
                    <br>
                    <p class='alert-info pl-3'>Right click on image, and choose <b>Save Image As...</b> to save your new
                        quote card.</p>
                </div>

            </div>
        </div>
    </main>
</div>
<script>
    html2canvas(document.getElementById('myQuote')).then(canvas => {document.getElementById('quoteImg').appendChild
    (canvas)});
</script>

</body>
</html>