<?php
    include("./config/db_connect.php");
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-user">
            <img src="image/fox.png">
            <div class="user-image">
                <p>Instructor</p>
            </div>
        </div>
        <div class="sidebar-menu">
            <hr>
            <ul>
                <li class="active">
                    <a href="">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>Report</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>Log out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="website-name">
                <h3>
                    <span>Quizium</span>
                </h3>
            </div>
        </header>

        <main>
            <div class="sorting">
                <div class="quizTot">
                    Quiz(N)
                </div>
                <div class="sortBy">
                    <p>Sort By:</p>
                    <select name="sortBy">
                        <option value="recent">Most recent</option>
                        <option value="recent">Oldest</option>
                    </select>
                    <p>Search quiz:</p>
                    <input type="text">
                </div>
            </div>
           <button class="button btn1">Create</button>
        </main>
    </div>
</body>
</html>