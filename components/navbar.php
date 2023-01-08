<?php

require __DIR__ . "/../classes/User.php";


function getNavbar()
{
    if (!empty($_COOKIE['id'])) {
        $user_id = $_COOKIE['id'];
        $user = new User();
        $userData = $user->getUserData($user_id);
    } else {
        header('Location: ./auth/index.php ');
    }

    

    $html = '
    
     <nav class="navbar navbar-light bg-light justify-content-between">
        <div>
            <a class="navbar-brand ml-3" style="margin-left: 0.5rem !important"> ' . $userData['user_email'] . '</a>
            <a href="/4works/auth/logout.php" class="btn btn-primary" id="logout-button">Logout</a>       
        </div>
        <form class="form-inline d-flex">
    
            <input class="form-control" id="search-input" type="search" placeholder="Search" aria-label="Search" style="margin-right: 1rem !important">

            <button class="btn btn-primary" id="search-button" type="submit" style="margin-right: 0.5rem !important"><i class="bi bi-search"></i></button>
        </form>
    </nav>
  ';
    return $html;
}