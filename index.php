<?
/****************************************************************************
 *                               index.php
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
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
        <!--

            td, th
            {
                border: 3px #000000 solid;
                border-style: outset;
            }

        -->
        </style>
    <title>RecycleHarvard: Welcome!</title>
  </head>
  
  <div id = "top">
     <a href="index.php"><img alt="RecycleHarvard" height="300" src="Images/logo.jpg" width="544"></a>
  </div>
    
  <body style="color: green">
    <div style="color: teal">
         Welcome to Recycle Harvard!
         <br>
         Take our quiz, and soon you'll be a pro at recycling!
         <br>
         The more questions you get right, the more participation points you win for Green Cup.
   </div>
    
        <!--Big Board-->
    <?
       $bigboard = mysql_query("SELECT name, house, points FROM users ORDER BY points DESC");?>
         <table>
         <tbody>
         <!--makes table headings-->
            <tr>
                    <th> Name </th>
                    <th> House </th>
                    <th> Points</th>
            </tr>
            
        <? while ($row=mysql_fetch_array($bigboard)):?>

            <tr>
             <td><?= $row["name"] ?></td> <td><?= $row["house"] ?></td><td><?= $row["points"] ?></td>
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
      <a href="game.php">Play the game!</a>
      |
      <a href="login.php">Login!</a>
      |
      <a href="logout.php" style="font-weight: bold">Log Out</a>
    </div>

  </body>

  </html>
