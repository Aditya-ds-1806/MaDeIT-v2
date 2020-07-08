<?php
require 'flight/Flight.php';

Flight::route('/', function () {
    Flight::redirect('/home', 301);
});

Flight::route('/home', function () {
    require('views/home.php');
});

Flight::route('/news', function () {
    require('views/news.php');
});

Flight::route('/people', function () {
    require('views/people.php');
});

Flight::route('/portfolio', function () {
    require('views/portfolio.php');
});

Flight::route('/tenders', function () {
    require('views/tenders.php');
});

Flight::route('/programme', function () {
    if (isset($_GET['name']) && $_GET['name'] === 'nidhi-prayas') {
        require('views/nidhi-prayas.php');
    } else Flight::notFound();
});

Flight::route('*', function () {
    require('views/home.php');
    Flight::notFound();
});

Flight::start();
