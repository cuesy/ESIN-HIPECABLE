<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>HIPEC</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=<?="css/".$path_to_style?> rel="stylesheet">
    <link href=<?="css/".$path_to_layout?> rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
  </head>
  <body>
    <nav>
      <ul id=topnav_left>
         <li><a href=<?="medic_home.php?medic_id=".$_SESSION['id']?>>Home</a></li>
         <li><a href=<?="bio.php?medic_id=".$_SESSION['id']?>><?=$_SESSION['email']?></a></li>
        </ul>
        </nav>