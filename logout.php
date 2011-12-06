<?
/****************************************************************************
 *                               logout2.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                              Anne Baldwin
 *
 *                            Logs out a user.
 ***************************************************************************/

    // require common code
    require_once("includes/common.php"); 

    // log out current user, if any
    logout();

?>

<!DOCTYPE html>

<html>

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>RecycleHarvard: Log Out</title>
  </head>

  <body>

    <div id="top">
      <a href="index.php"><img alt="C$50 Finance" src="images/logo.gif"></a>
    </div>

    <div id="middle">
      Thanks for playing RecycleHarvard, come again soon!
    </div>

    <div id="bottom">
      <a href="login.php">log in</a> again
    </div>

  </body>

</html>
