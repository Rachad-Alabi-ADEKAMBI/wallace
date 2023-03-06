<div class="container pt-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="public/img/logo-wallace.jpg" width="110" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=ads">Listings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=home#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=home#supprt">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="city">
                <a onclick="alert('No results was found for this query')"
                    class="btn btn-outline-success my-2 my-sm-0">Search</a>
            </form>
        </div>
    </nav>
</div>