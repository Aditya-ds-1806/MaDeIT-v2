<?php
require './vendor/autoload.php';

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

Flight::route('/admin', function () {
    require('views/auth.php');
    if (isset($_GET['update']) && $_GET['update'] === 'tenders') {
        require('views/update/tenders.php');
    } else if (isset($_GET['update']) && $_GET['update'] === 'carousel') {
        require('views/update/carousel.php');
    } else if (isset($_GET['update']) && ($_GET['update'] === 'events' || $_GET['update'] === 'news')) {
        require('views/update/events.php');
    } else if (isset($_GET['update']) && $_GET['update'] === 'startups') {
        require('views/update/startups.php');
    } else if (isset($_GET['update']) && $_GET['update'] === 'people') {
        require('views/update/people.php');
    } else if (isset($_GET['update']) && $_GET['update'] === 'programs') {
        require('views/update/programs.php');
    } else {
        require('views/admin.php');
    }
});

Flight::route('*', function () {
    require('views/home.php');
    Flight::notFound();
});

Flight::start();
