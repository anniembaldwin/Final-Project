 <?
/****************************************************************************
 *                               logout.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                     Anne Baldwin and Natalie Jacewicz
 *
 *                            Logs out a user.
 ***************************************************************************/

    // require common code
    require_once("includes/common.php"); 
 
    // log out current user
    logout();
 
    /* redirect user to index.php
    $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
    $host  = $_SERVER["HTTP_HOST"];
    $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
    //header("Location: {$protocol}://{$host}{$path}/logout.php");*/
 
 ?>

<!DOCTYPE html>

<html>

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

     <title>RecycleHarvard: Log Out</title>

  </head>

  <body>
    
    <div id="top">
      <a href="index.php"><img alt="Recycle-Harvard" src="Images/logo.png"></a>
    </div>

    <div id="middle">
      Thanks for playing RecycleHarvard, come again soon!
    </div>

    <div id="bottom">
      <a href="login.php">log in</a> again
    </div>

  </body>

</html>
