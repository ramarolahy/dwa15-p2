<?php
    # START SESSION
    session_start();

    # Store values into variables and give access to index.php
    if (isset($_SESSION['state'])) {
        $state = $_SESSION['state'];

        $imgBg = $state['imgBg'];
        $selectedImg = $state['selectedImg'];
        $quote = $state['quote'];
        $author = $state['author'];
        $addBackground = $state['addBackground'];
        $textBg = $state['textBg'];
        $errors = $state['errors'];
        $hasErrors = $state['hasErrors'];
    }

# Clear the session: We can use use unset here since it's the only place we are using the session. We would not want
# to clear any data that is needed by other pages otherwise
    session_unset();