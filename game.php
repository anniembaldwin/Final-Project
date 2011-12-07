<?
/****************************************************************************
 *                               game.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                     Anne Baldwin and Natalie Jacewicz
 *
 *                 Allows a user to play the recycling game.
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
       <script src = "jquery.js"></script>
       <script type = "text/javascript">

       // return a random number between 0 and the length of the ITEMS array 
       random_integer = Math.floor(Math.random()*(ITEMS.length +1));       
        
        // load a random image to be sorted to the page
       function random_image ()
       { 
           // find the corresponding name in the array
           var name = ITEMS[random_integer].name;
           
           // define the img source
           var picture = "Images/" + name + ".jpg";
           
           // set the src attribute of the picture
           document.getElementById("RandomItem").setAttribute("src", picture);
           
           // set the caption attribute of the picture
           document.getElementById("Caption").innerHTML = ITEMS[random_integer].caption;
       }
       
       // store the loaded item's status (recyclable, disposable, or electronic recyclable)
       status = ITEMS[random_integer].status;
       
       // after the pages is loaded and one of the receptacles is clicked, run the validation
       $(document).ready(function(){  
            $("img.receptacle").click(function() {
            console.log("does this click work");
            // we want to store the values of the receptacle and the status of the bin  
            var bin = $('#receptacle').attr('alt');  
            
            // send the status and receptacle data to game2.php    
            $.get("game2.php",{status:status, bin:bin},function(result){
                $("#Correctness").html(result);
            });
         
            // load a new image to the page for them to evaluate     
            random_image();
      });
     
 });  
  
       

     </script>
    </head>
        <body onload = "random_image()">
            <img id="logo" src="Images/logo.jpg"/>
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
                    <td id ="Correctness" style ="color:green">Testing123</td>
                <tr>    
                    <td>
                    <img id="RandomItem" alt="Item to Sort" src="Images/beerbottle.jpg"/>                      
                    </td>
                </tr>
                <tr id= "Caption" style="text-align:center"></tr>
                <tr></tr>
                <tr id ="Points" style="text-align:center">
                    <td>You have <?= $points ?> points</td>
                 </tr>    
             </table>               
             <div id = "bottom">
                <table>
                    <tr> 
                        <td><img class="receptacle" alt="trash" src="Images/trashcan.jpg"></td>
                        <td><img class="receptacle" alt="recycle" src="Images/recyclingbin.jpg"></td>
                        <td><img class="receptacle" alt="e-waste" src="Images/ewaste.jpg"></td>
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
 
