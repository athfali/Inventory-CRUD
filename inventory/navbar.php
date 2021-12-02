<style>
    .navbar{
        width: 100%;
        z-index: 999;
        padding: 10px 0;
        font-family: 'Ubuntu', sans-serif;
        transition: all 0.3s ease;
    }
    .navbar .logo a{
        color: aliceblue;
        font-size: 35px;
        font-weight: 600;
        padding: 10px 35px;
        padding-right: 600px;
    }
    .navbar .logo a span{
        color: crimson;
        transition: all 0.3s ease;
    }
    .navbar.sticky .logo a span{
        color: aliceblue;
    }
    .navbar .navbar-nav li{
        padding-right: 30px;
    }
    
    
</style>
<header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="logo"><a href="index.php">Ath<span>fali.</span></a></div>
            <!-- Navbar brand yo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTop">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="create.php">Insert</a> </li>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/phpmyadmin/">Php My Admin</a> </li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Register</a> </li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a> </li>
                </ul>
            </div>
        </nav>
</header>