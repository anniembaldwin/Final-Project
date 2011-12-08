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
        
       
       // load a random image to be sorted to the page
       function random_image ()
       { 
           // return a new random number between 0 and the length of the ITEMS array 
           random_integer = Math.floor(Math.random()*(ITEMS.length +1));       
        
           // store the loaded item's status (recyclable, disposable, or electronic recyclable)
           status = ITEMS[random_integer].status;
           
           // find the corresponding name in the array
           var name = ITEMS[random_integer].name;
           
           // define the img source
           var picture = "Images/" + name + ".jpg";
           
           // set the src attribute of the picture
           document.getElementById("RandomItem").setAttribute("src", picture);
           
           // set the caption attribute of the picture
           document.getElementById("Caption").innerHTML = ITEMS[random_integer].caption;
       }
       
       
       // after the page is loaded and the trash is clicked, check whether that item belongs in the trash
       $(document).ready(function(){  
            $("#trash").click(function() {
            
            // remember what bin was clicked (trash)  
            var bin = $("#trash").attr('alt');
            
            // send the status and receptacle data to game2.php for validation and points update    
            $.ajax("game2.php",{
            data: {status:status, bin:bin},
            dataType: "json",
            success: function(data){ 
                $("#Correctness").html(data.correct);
                $("#points").html(data.points);
                      
            // load a new image to the page for them to evaluate     
            random_image();
            }});          
      });
      
      // if the recycle image is clicked, validate
      $("#recycle").click(function() {
            
            // remember what bin was clicked (trash)  
            var bin = $("#recycle").attr('alt');
            
            // send the status and receptacle data to game2.php for validation and points update    
            $.ajax("game2.php",{
            data: {status:status, bin:bin},
            dataType: "json",
            success: function(data){
                console.log("halloooo");
                
                $("#Correctness").html(data.correct);
                $("#points").html(data.points);
                      
            // load a new image to the page for them to evaluate     
            random_image();  
            }});
                 
      });
     
     // if the ewaste image is clicked, validate
     $("#ewaste").click(function() {
            
              
            // remember what bin was clicked (trash)  
            var bin = $("#ewaste").attr('alt');
            
            // send the status and receptacle data to game2.php for validation and points update    
            $.ajax("game2.php",{
            data: {status:status, bin:bin},
            dataType: "json",
            success: function(data){
                console.log("halloooo");
                
                $("#Correctness").html(data.correct);
                $("#points").html(data.points);
                      
            // load a new image to the page for them to evaluate     
            random_image();
            }});

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
                <tr align = "center">
                    <td id ="Correctness" style ="color:green">Are you right or wrong?</td>
                <tr>    
                    <td>
                    <img id="RandomItem" alt="Item to Sort" src="Images/beerbottle.jpg"/>                      
                    </td>
                </tr>
                <tr id= "Caption" style="text-align:center"></tr>
                <tr></tr>
                <tr style="text-align:center">
                    <td id ="points"></td>
                 </tr>    
             </table>               
             <div id = "bottom">
                <table>
                    <tr> 
                        <td><img id="trash" alt="trash" src="Images/trashcan.jpg"></td>
                        <td><img id="recycle" alt="recycle" src="Images/recyclingbin.jpg"></td>
                        <td><img id="ewaste" alt="e-waste" src="Images/ewaste.jpg"></td>
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
 
