<?php
require_once '../includes/config.php';
require_once '../includes/classes/Entity.php';
require_once '../includes/classes/EntityProvider.php';
require_once '../includes/classes/PreviewProvider.php';
require_once '../includes/classes/SearchResultsProvider.php';

if (isset($_POST['term']) && isset($_POST['username'])) {
    $searchResultsProvider = new SearchResultsProvider($con, $_POST['username']);
    echo $searchResultsProvider->getResults($_POST['term']);
} else {
    echo "No term or username passed into file";
}
