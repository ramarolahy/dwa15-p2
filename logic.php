<?php

    session_start();

    if (isset($_SESSION['state'])) {
        $state = $_SESSION['state'];

        $imgBg = $state['imgBg'];
        $quote = $state['quote'];
        $author = $state['author'];
        $addBackground = $state['addBackground'];
        $textBg = $state['textBg'];
    }

# Clear the session: We can use use unset here since it's the only place we are using the session. We would not want
# to clear any data that is needed by other pages otherwise
    session_unset();