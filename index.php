<?
/****************************************************************************
 *                              index.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                     Anne Baldwin and Natalie Jacewicz
 *
 *           Sets up screen and big board to welcome logged in users.
 ***************************************************************************/

// require common code
   require_once("includes/common.php");

 
// configuration
   require_once(dirname(__FILE__) . "/config.php");?>
   
<!DOCTYPE html>


<html>
    
  <head>
    <link href="/css/styles.css" rel="stylesheet" type="text/css" />
    <title>
        <img id="logo" src="Images/logo.jpg"/>
        <div>RecycleHarvard: Login</div>
    </title>
  </head>
  
  <div id = "top">
    <a href >
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

    <div>
    
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
