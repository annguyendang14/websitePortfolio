<!DOCTYPE html>
<html>
<head>
    <title>An Nguyen Dang: Home</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="An Nguyen Dang's professional website" />
    <meta name="keywords" content="An Nguyen Dang, Augustana College, Bachelor of Art, Java, Python, JavaScript, PHP, MySQL, HTML, CSS, Django, Business Administration, Management Information System, IT, Computer Science" />

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="othertheme.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/galleria.min.js"></script>
    <!--<script>
    function galleriarun(){
       Galleria.loadTheme('https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/themes/classic/galleria.classic.min.js');
        Galleria.run('.galleria',{

            autoplay: 2500 // will move forward every 7 seconds
        });
    }
    </script>-->

    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    h5,h6 {margin: 3px 0}
        #navmobile{position: fixed; top:0; width: 100%}
    .galleria{ width: 100%; height: 400px; background: #e1e1e4 }
    </style>
    
</head>
<body class="w3-theme-l5 w3-content" style="max-width:1600px">

    <!-- Sidebar/menu -->
    <?php include 'sidebar.html'; ?>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">

    <!-- Header -->
    <?php include 'header.html'; ?>


    <!-- About section-->
    <?php include 'about.html'; ?>


    <!-- Portfolio section-->
    <?php include 'portfolio.html'; ?>

    <!--- Resume --->

    <?php include 'resume.html'; ?>  

    <!-- Contact Section -->
    <?php include 'contact.html'; ?>  

    <!-- Footer -->

    <?php include 'footer.html'; ?>  


    <!-- End page content -->
    </div>

    <script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
    </script>

</body>
</html>
