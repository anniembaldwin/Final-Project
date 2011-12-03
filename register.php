<?
/****************************************************************************
 *                               register.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                              Anne Baldwin
 *
 *                            Registers a user.
 ***************************************************************************/
    
    // require common code
    require_once("includes/common.php");

?>

<!DOCTYPE html>

<html>

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>RecycleHarvard: Register!</title>
  </head>

  <body>

    <div id="top">
      <a href="index.php"><img alt="C$50 Finance" src="images/logo.gif"></a>
    </div>

    <div id="middle">
      <form action="register2.php" method="post">
        <table>
          <tr>
            <td>Name:</td>
            <td><input name="name" type="text"></td>
          </tr>
          <tr>
            <td>House:
            <select name = "house">
                  <option value="House" disabled>
                  <option value="Adams">Adams House</option>
                  <option value="Cabot">Cabot House</option>
                  <option value="Currier">Currier House</option>
                  <option value="Dunster">Dunster House</option>
                  <option value="Eliot">Eliot House</option>
                  <option value="Kirkland">Kirkland House</option>
                  <option value="Leverett">Leverett House</option>
                  <option value="Lowell">Lowell House</option>
                  <option value="Mather">Mather House</option>
                  <option value="Pfoho">Pfoho House</option>
                  <option value="Quincy">Quincy House</option>
                  <option value="Winthrop">Winthrop House</option>
            </select>
            </td>
          </tr>
          <tr>
            <td>Username:</td>
            <td><input name="username" type="text"></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input name="password" type="password"></td>
          </tr>
          <tr>
            <td>Password2:</td>
            <td><input name="password2" type="password"></td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" value="Register"></td>
          </tr>
        </table>
      </form>
    </div>

    <div id="bottom">
      or <a href="login.php">login</a> for an account
    </div>

  </body>

</html>
