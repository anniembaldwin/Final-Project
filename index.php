<?
/****************************************************************************
 *                               game2.php
 *
 *                          Computer Science 50
 *                              Problem Set 7
 *                      Anne Baldwin and Natalie Jacewicz
 *
 *          Support the interface for a user to play a game.           
 ***************************************************************************/

   require("includes/common.php");
?>


<!DOCTYPE html>


<html>
    
  <head>
    <link href="/css/styles.css" rel="stylesheet" type="text/css" />
    <title>RecycleHarvard: Login</title>
  </head>
  
  <div id = "top">
     <a href="index.php"><img alt="RecycleHarvadr" height="110" src="images/logo.jpg" width="544"></a>
  </div>
    
  <body style="color: green">

    <div style="color: teal">

      Welcome to Recycle Harvard!

     <br>

     Take our quiz, and soon you'll be a pro at recycling!
    </div>

   <div>

      The more questions you get right, the more participation points you win for Green Cup.
    </div>
    <div>
        <!--Big Board-->
    <?
       $bigboard = mysql_query("SELECT username, house, points FROM users ORDER BY points DESC");?>
         <table>
         <tbody>
         <!--makes table headings-->
            <tr>
                    <th> Username </th>
                    <th> House </th>
                    <th> Points</th>
            </tr>
            
        <? while ($row=mysql_fetch_array($bigboard)):?>

            <tr>
             <td><?= $row["username"] ?></td> <td><?= $row["house"] ?></td><td>$<?= $row["points"] ?></td>
            </tr>

        <? endwhile ?>
           </tbody>
          </table>
    </div>
   <div style="text-align: center;">
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
