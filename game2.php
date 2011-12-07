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
<<<<<<< HEAD

// require common code
   require("includes/common.php"); 
{   
=======
 
   require("includes/common.php"); 
       {   
>>>>>>> 9f5581dafac05e93e06e2458a6b88f54f6f44d8d
           
           // if the clicked bin is the correct bin, tell the user so and update their points
           if (correctness == yes)
           {
                    $sql = "UPDATE users SET points = points + 1 WHERE id = '$id'";
                    mysql_query($sql);
<<<<<<< HEAD
               
=======
>>>>>>> 9f5581dafac05e93e06e2458a6b88f54f6f44d8d
           }
           
           // if the clicked bin is the incorrect bin, tell the user so and subtract a point from their total
           if (correctness == 1)
           {
               $sql = "UPDATE users SET points = points - 1 WHERE id = '$id'";
               mysql_query($sql);
<<<<<<< HEAD
              
=======
>>>>>>> 9f5581dafac05e93e06e2458a6b88f54f6f44d8d
              
           }
           
           // return false
           return false; 
       }      












?>
