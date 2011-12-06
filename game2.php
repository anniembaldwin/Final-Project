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
<? 
   require("common.php"); 
      function validate(bin)
       {   
           // get the loaded item's status (recyclable, disposable, or electronic recyclable)
           var status = ITEMS[random_integer].status;
           
           // if the clicked bin is the correct bin, tell the user so and update their points
           if (status == bin)
           {
                    $sql = "UPDATE users SET points = points + 1 WHERE id = '$id'";
                    mysql_query($sql);
                return 0;
           }
           
           // if the clicked bin is the incorrect bin, tell the user so and subtract a point from their total
           if (status !=bin)
           {
               $sql = "UPDATE users SET points = points - 1 WHERE id = '$id'";
               mysql_query($sql);
               return 1;
              
           }
           
           // return false
           return false; 
       }      












?>
