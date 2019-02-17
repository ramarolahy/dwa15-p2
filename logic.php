<?php

    session_start();

    if(isset($_SESSION['results'])){
        $results = $_SESSION['results'];

        $books = $results['books'];
        $searchTerm = $results['searchTerm'];
        $bookCount = $results['bookCount'];
        $caseSensitive = $results['caseSensitive'];
    }

# Clear the session: We can use use unset here since it's the only place we are using the session. We would not want
# to clear any data that is needed by other pages otherwise
    session_unset();