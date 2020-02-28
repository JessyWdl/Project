<?php session_start() ?>
<!-- <nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/skeleton/">
                    Accueil
                </a>
            </li>
        </ul>
        <ul class="nav flex-column mb-2">
        <?php if (!isset($_SESSION['user_login'])) : ?>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/skeleton/login/index.php">
                    Login
                </a>
            </li>
            <?php endif?>
            <?php if (isset($_SESSION['user_login'])) : ?>
            <li class="nav-item">
                <a class="nav-link" href="/skeleton/articles/index.php">
                    Articles
                </a>
            </li>
            <?php endif?>
            <?php if (isset($_SESSION['user_login'])) : ?>
            <li class="nav-item">
                <a class="nav-link" href="/skeleton/logout/index.php">
                    Logout
                </a>
            </li>
            <?php endif?> -->
            <div class="flex h-screen">
        <div
            class="flex-none absolute rounded-l md:static h-screen md:h-auto w-full md:w-64 hidden md:block text-white text-center bg-case1 py-2">
            <div class="table w-full">
                <div class="table-row">
                    <div class="table-cell bg-case1 text-white py-2 text-sm">
                        <img src="img/Dragon (4).png" class="px-5 mx-auto" />
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-cell bg-case2 text-white py-auto text-sm">
                        <span
                            class="block cursor-pointer rounded hover:bg-orange-700 text-white-700 hover:text-white text-center px-4 py-2 my-2">
                            <a href="Admin.html">> Accueil</a>
                        </span>
                        <span
                            class="block cursor-pointer rounded hover:bg-orange-700 text-white-700 hover:text-white text-cente px-4 py-2 my-2">
                            <a href="Form.html">> Login</a>
                        </span>
                        <span
                            class="block cursor-pointer rounded hover:bg-orange-700 text-white-700 hover:text-white text-cente px-4 py-2 my-2">
                            > Profile
                        </span>
                        <span
                            class="block cursor-pointer rounded hover:bg-orange-700 text-white-700 hover:text-white text-cente px-4 py-2 my-2">
                            > Settings
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-auto rounded-r text-black text-center bg-case3">
            <div class="table w-full">
                <div class="table-row">
                    <div class="table-cell text-5xl bg-case1 text-white px-2 py-1 text-sm">
                        /Random/
                    </div>
                </div>
            </div>
        </div>
        </ul>
    </div>
</nav>
