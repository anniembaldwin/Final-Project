<?
/****************************************************************************
 *                               login.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                              Anne Baldwin
 *
 *                        Allows a user to login.
 ***************************************************************************/

?>

<!DOCTYPE html>

<html>

  <head>
    <title>RecycleHarvard: Log In</title>
  </head>

  <body>

    <div id="top">
      <a href="index.php"><img alt="C$50 Finance" src="Images/logo.gif"></a>
    </div>

    <div id="middle">
      <form action="login2.php" method="post">
        <table>
          <tr>
            <td>Username:</td>
            <td><input name="username" type="text"></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input name="password" type="password"></td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" value="Log In"></td>
          </tr>
        </table>
      </form>
    </div>

    <div id="bottom">
      Don't have an account yet? <a href="register.php">register</a> for an account
      <a href="singlestream.html">Single Stream Recycling</a>
      |
      <a href="erecycle.html">Electronic Recycling</a>
      |
      <a href="whyrecycle.html">Why Recycle?</a>
      |
      <a href="game.php">Play the game!</a>
      |
      <a href="login.php">Login!</a>
      |
      <a href="logout.php" style="font-weight: bold">Log Out</a>
    </div>
  </body>

</html>
