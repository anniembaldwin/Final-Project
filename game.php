<?
/****************************************************************************
 *                               game.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                              Anne Baldwin
 *
 *                   Allows a user to play the recycling game.
 ***************************************************************************/

// require common code
   require_once("includes/common.php"); 
   
// remember session id
   $id = $_SESSION["id"];
?>

 <!DOCTYPE html>

 
 <html>
    <head>
       <title>RecycleHarvard:Welcome to the Game!</title>
       <script src = "items.js"></script>
       <script type = "text/javascript">
       
       // return a random number between 0 and the length of the ITEMS array 
       random_integer = Math.floor(Math.random()*(ITEMS.length +1));
       
       // validate whether a user's choice of receptacle is correct, and tell them so
       function validate(bin)
       {   
           // get the loaded item's status (recyclable, disposable, or electronic recyclable)
           var status = ITEMS[random_integer].status;
           
           // if the clicked bin is the correct bin, tell the user so and update their points
           if (status == bin)
           {
                document.getElementById("Correctness").innerHTML = "Correct";
                
                points();
           }
               
           // if the clicked bin is the incorrect bin, tell the user so and subtract a point from their total
           else if (status !=bin)
           {
               document.getElementById("Correctness").innerHTML = "Incorrect";  
           }
                
           // load a new image to the page for them to evaluate     
           random_image();
           
           // return false
           return false; 
       }      
       
       // load a random image to be sorted to the page
       function random_image ()
       { 
           // get a random integer
           random_integer = Math.floor(Math.random()*(ITEMS.length +1));
           
           // find the corresponding name in the array
           var name = ITEMS[random_integer].name;
           
           // define the img source
           var picture = "Images/" + name + ".jpg";
           
           // set the src attribute of the picture
           document.getElementById("Random Item").setAttribute("src", picture);
           
           // set the caption attribute of the picture
           document.getElementById("Caption").innerHTML = ITEMS[random_integer].caption;
       }
     
     </script>
    </head>
        <body onload = "random_image()">
            <h1>Play the Game! </h1>
            <p>Click on the proper receptacle (trash bin, single-stream recycling, or electronic recycling),
                 and gain one point per correctly sorted item!</p>
            <table align = "center">
                <?
                     // remember the user's id from session id
                     $id = $_SESSION["id"];
                     
                     // prepare sql
                     $sql = "SELECT points FROM users WHERE id = $id";
                     
                     // execute query on remembering the users' points
                     $result = mysql_query($sql);  
                     
                     // access the data row
                     $row = mysql_fetch_array($result); 
                     
                     // access points
                     $points = $row["points"];
                ?>
                <tr align = "center">
                    <td id ="Correctness" style ="color:green"></td>
                <tr>    
                    <td>
                    <img id="Random Item" alt="Item to Sort" src=""/>                      
                    </td>
                </tr>
                <tr id= "Caption" style="text-align:center"></tr>
                <tr id ="Points" style="text-align:center"><?= $points ?></tr> 
             </table>               
             <div id = "bottom">
                <table>
                    <tr>
                        <td><a style ="postition:relative;left:200px" href="game.php"><img alt="Trash Can" src="Images/trashcan.jpg" onclick = "return validate('trash');"></a></td> 
                        <td><a style="position:relative:left:200px" href="game.php"><img alt="Recycling Bin" src="Images/recyclingbin.jpg" onclick = "return validate('recycle');"></a></td>
                        <td><a style="position:relative:left:200px" href="game.php"><img alt="Electronic Recycling Bin" src="Images/electronicrecycling.jpg" onclick = "return validate('e-waste');"></a><td>
                    </tr>
                    <tr>
                        <td style ="text-align:center">Trash Can</td>
                        <td style ="text-align:center">Recycling Bin</td>
                        <td style ="text-align:center">Electronic Recycling</td>
                    </tr>
                </table>
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
 
