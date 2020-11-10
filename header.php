<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion courriers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!--Title logo-->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo-title.ico"/>
    <style>
        .loader {
            position: absolute;
            left: 48%;
            top: 40%;
            transform: translate(-50%, -50%);
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top" id="navbar" style="font-size: 17px; height: 85px; transition: top .5s">
    <!-- Logo -->
    <div class="logo">
        <a class="navbar-brand" href="index.php">
            <img src="images/ens.png" title="Logo" height="68" width="200">
        </a>
    </div>
    <!-- Links -->
    <?php
    session_start();
    if (isset($_SESSION['id'])) {
        if ($_SESSION['username'] == 'directeur') {
            echo '
            <span class="open-slide">
              <span class="openS" onclick="openSlideMenu()">&#9776; </span>
            </span>
            <div id="side-menu" class="side-nav">
                <span class="btn-close" onclick="closeSlideMenu()">&times;</span>
                <a class="" id="directCour" href="index.php" style="color: grey"><i class="fa fa-envelope" aria-hidden="true"></i>Gestion des courriers</a>
                <a class="" href="affectation.php"><i class="fa fa-paper-plane" aria-hidden="true"></i>Affectation des courriers</a>
            </div>
            
            
        <div class="ml-auto">
            <button type="button" class="btn btn-danger btn-sm rounded-pill" data-toggle="modal" data-target="#modaldecon">Déconnexion</button>
        </div>
      ';
        } else if ($_SESSION['username'] == 'bureau') {
            echo '        
            <span class="open-slide">
              <span class="openS" onclick="openSlideMenu()">&#9776; </span>
            </span>
            <div id="side-menu" class="side-nav">
                <span class="btn-close" onclick="closeSlideMenu()">&times;</span>
                <a class="" href="index.php"><i class="fa fa-envelope" aria-hidden="true"></i>Gestion des courriers</a>
                <a class="" href="affectation.php"><i class="fa fa-paper-plane" aria-hidden="true"></i>Affectation des courriers</a>
            </div>
        <div class="ml-auto">
            <button type="button" class="btn btn-danger btn-sm rounded-pill" data-toggle="modal" data-target="#modaldecon">Déconnexion</button>
        </div>
      ';
        }
    }
    ?>

    </div>
</nav>


<!--Modal-->
<div class="modal fade" id="modaldecon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Voulez-vous vraiment se déconnecter?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-pill" data-dismiss="modal">Non</button>
                <form action="includes/logout.php" method="get">
                    <button type="submit" class="btn btn-danger rounded-pill" name="logout">Oui</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Loader -->
<div class="wrapper-loader" id="loader">
    <img class="loader" src="images/loader.gif"/>
</div>

<!-- Button Top -->
<button onclick="topFunction()" id="myBtn" title="Go to top" class="btn btn-secondary btn-sm rounded-pill"><i
            style="font-size: 25px;" class="fa fa-chevron-up fa-7x"></i></button>
<script>
    let slideMenu = document.getElementById('side-menu');

    function openSlideMenu() {
        slideMenu.style.marginLeft = '0';
    }

    function closeSlideMenu() {
        slideMenu.style.marginLeft = '-330px';
    }

    // window.onclick = function(event) {
    //   if (event.target != slideMenu) {
    //     slideMenu.style.marginLeft = '-330px';
    //   }
    // }

    //disable link for directeur(gestion des courriers)
    let GsCourrierLink = document.getElementById("directCour");
    if (GsCourrierLink) {
        // GsCourrierLink.addEventListener("click", function (event) {
        //     event.preventDefault();
            GsCourrierLink.style.pointerEvents ="none";
            GsCourrierLink.style.cursor = "default";
            GsCourrierLink.style.userSelect = "none";

        // });
    }

    //hide the loader
    window.onload = () => {
        document.getElementById('loader').style.display = "none";
    }


    //hide menu on scroll
    let lastScrollTop = 0;
    window.addEventListener("scroll", function(){
        let st = window.pageYOffset || document.documentElement.scrollTop;
        if (st > lastScrollTop){
            document.getElementById("navbar").style.top = "-100%";
        } else {
            document.getElementById("navbar").style.top = "0";
        }
        lastScrollTop = st;
    }, false);
</script>
<script src="javascript/top.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" async></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" async></script>
</body>
</html>