<?php

if (isset($_GET['keywords']) && trim($_GET['keywords'])) {
    $search_URL = "http://www.google.com/search?q=";
 
    header("location: $search_URL{$_GET['keywords']}");
}