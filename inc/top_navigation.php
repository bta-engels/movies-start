<a class="navbar-brand" href="/">BTA Movies</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/authors">Autoren</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/movies">Movies</a>
        </li>
    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <?php if($auth): ?>
                <a class="nav-link" href="/logout">Logout <?php echo $auth['username']; ?></a>
            <?php else: ?>
                <a class="nav-link" href="/login">Login</a>
            <?php endif; ?>

        </li>
    </ul>
</div>
