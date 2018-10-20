<?php
  $page = (isset($_GET["e"]) ? $_GET["e"] : "404");
  $helpText = [
    "403" => "Sorry, you don't have access to the requested file.  Feel free to explore the rest of the site.",
    "404" => "Sorry, that file doesn't exist.  Are you sure you have the right path?",
  ];
  
  $title = "Alex Beals | " . $page;
  include("php/header.php");
?>
  <div class="message">
    <h1><?php echo $page; ?></h1>
    <h3><?php echo $helpText[$page]; ?></h3>
  </div>
  <style>
    body {
      background-color: #127EC7;
    }

    h1 {
      font-family: 'Dense Regular';
      text-transform: uppercase;
      font-size: 15em;
      margin: 0;
      font-weight: 100;
      color: white;
      text-align: center;
    }

    h3 {
      font-size: 1.6em;
      margin: 0 auto;
      font-weight: 100;
      color: white;
      text-align: center;
      max-width: 500px;
    }
  </style>
</body>
</html>