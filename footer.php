<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Footer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body >
    <div id="page-container">
        <div id="content-wrap ">
          <footer >
            <div class="footer bg-light text-dark text-center py-3">
              <!--<a class="text-dark px-2" href="index.php">Home</a>
              <a class="text-dark px-2" href="#">About</a>
              <a class="text-dark px-2" href="#">Privacy & Policy</a>-->
              <!-- <p id="p-foot"> | Copyright &copy;  <a class="links" href="index.php">MyWebsite.com</a> |</p> -->
              <p id="p-foot"></p>
              <p>Developped & Designed By <a href="">Oussama</a></p>
            </div>
          </footer>
        </div>
    </div>

    <script>
      let year = new Date().getFullYear();
      document.getElementById('p-foot').innerHTML=`Copyright &copy ${year} <a href="http://www.ens.univcasa.ma/" target="_blank" >www.ens.univcasa.ma</a>`;
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</body>
</html>
