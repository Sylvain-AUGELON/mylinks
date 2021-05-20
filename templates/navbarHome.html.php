<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">MyLinks</a>
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                       href="/home">Links</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" href="/logout">Logout</a>
                </li>
            </ul>
            <form class="row" method="POST" action="">
                <input class="col-8"
                       placeholder="enter a link" name="favorites" >
                <?php if ($favoriteError) : ?>
                <div class="text-danger"><?= $favoriteError ?> </div>
                <?php endif; ?>
                <button class="btn btn-outline-success" type="submit">
                    add link
                </button>
            </form>
        </div>
    </div>
</nav>