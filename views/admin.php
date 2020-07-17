<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" as="style" type="text/css" onload="this.rel='stylesheet'" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Admin Page</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5 display-4">Welcome <?php echo $_SERVER['PHP_AUTH_USER'] ?></h1>
        <a href="?update=events" class="btn btn-lg btn-primary d-block m-4 w-50 mx-auto">Update Events</a>
        <a href="?update=startups" class="btn btn-lg btn-success d-block m-4 w-50 mx-auto">Update Startups</a>
        <a href="?update=programs" class="btn btn-lg btn-danger d-block m-4 w-50 mx-auto">Update Programs</a>
        <a href="?update=carousel" class="btn btn-lg btn-warning d-block m-4 w-50 mx-auto">Update Carousel</a>
        <a href="?update=people" class="btn btn-lg btn-info d-block m-4 w-50 mx-auto">Update People</a>
        <a href="?update=tenders" class="btn btn-lg btn-dark d-block m-4 w-50 mx-auto">Update Tenders</a>
    </div>
</body>

</html>