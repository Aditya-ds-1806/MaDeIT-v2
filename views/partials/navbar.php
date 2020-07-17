<div class="progress rounded-0 fixed-top bg-transparent" style="height: 5px">
    <div class="progress-bar bg-denim" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<nav class="navbar navbar-expand-lg navbar-light <?php if ($route === 'index') echo 'container';
                                                    else echo 'container-fluid' ?> bg-white shadow px-1 px-md-5 py-1 py-md-2 <?php if ($route === 'index') echo 'sticky-top mt-0 mt-sm-4 mt-md-5 float-left' ?>">
    <a class="navbar-brand" href="home">
        <img loading="lazy" src="public/images/logo.jpg" width="50" height="50" class="d-inline-block align-bottom" alt="logo">
        <span class="text-emperor d-inline-block">MaDeIT<small class="d-block w-100" style="font-size: 10px">Innovation Foundation</small></span>
    </a>
    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto text-center">
            <?php if ($route === 'index') { ?>
                <li class="nav-item mx-1 mx-lg-4 my-auto">
                    <a class="nav-link" href="home#about">About Us</a>
                </li>
                <li class="nav-item mx-1 mx-lg-4 my-auto">
                    <a class="nav-link" href="home#portfolio">Our Portfolio</a>
                </li>
                <li class="nav-item mx-1 mx-lg-4 my-auto">
                    <a class="nav-link" href="home#programmes">Programmes</a>
                </li>
                <li class="nav-item mx-1 mx-lg-4 my-auto">
                    <a class="nav-link" href="home#news">News and Events</a>
                </li>
            <?php } else { ?>
                <li class="nav-item mx-1 mx-lg-4 my-auto">
                    <a class="nav-link" href="home">Home</a>
                </li>
                <li class="nav-item mx-1 mx-lg-4 my-auto">
                    <a class="nav-link" href="people">About us</a>
                </li>
                <li class="nav-item mx-1 mx-lg-4 my-auto">
                    <a class="nav-link" href="portfolio">Portfolio</a>
                </li>
                <!-- <li class="nav-item mx-1 mx-lg-4 my-auto">
                    <a class="nav-link" href="#">Programmes</a>
                </li> -->
                <li class="nav-item mx-1 mx-lg-4 my-auto">
                    <a class="nav-link" href="news">News</a>
                </li>
                <li class="nav-item mx-1 mx-lg-4 my-auto">
                    <a class="nav-link" href="tenders">Tenders</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>