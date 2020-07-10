<?php
require 'flight/Flight.php';

Flight::route('/', function () {
    Flight::redirect('/home', 301);
});

Flight::route('/home', function () {
    $route = 'index';
    require('views/home.php');
});

Flight::route('/news', function () {
    $route = 'news';
    require('views/news.php');
});

Flight::route('/people', function () {
    $route = 'people';
    require('views/people.php');
});

Flight::route('/portfolio', function () {
    $route = 'portfolio';
    require('views/portfolio.php');
});

Flight::route('/tenders', function () {
    $route = 'tenders';
    require('views/tenders.php');
});

Flight::route('/programme', function () {
    $route = 'programme';
    if (isset($_GET['name']) && $_GET['name'] === 'nidhi-prayas') {
        require('views/nidhi-prayas.php');
    } else Flight::notFound();
});

Flight::route('*', function () {
    require('views/home.php');
    Flight::notFound();
});

Flight::start();
