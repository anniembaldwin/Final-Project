 <!------Game page---->
 
 <!DOCTYPE html>
 
 <html>
    <head>
       <title>RecycleHarvard:The Game!</title>
    </head>
        <body>
            <h1>Play the Game</h1>
            <p>Click on the proper receptacle (trash bin, single-stream recycling, or electronic recycling),
                 and gain one point per correctly sorted item!</p>
            <table align = "center">
                <tr align = "center">
                    <td>
                        <?
                        // define the directory
                        $dir = "/Images";
                        // get all the pictures in the directory
                        $pics = glob("$dir/{*.jpg}");
                        // pic a random picture 
                        $img = $pics[rand(0,count($pics) - 1)];
                        // display the picture
                        echo '<img src="' . $img . '">';
                        ?>
                     </td>
                  </tr>
             </table>               
                 <div id = "bottom">
                    <a style = "postition:relative;left:200px" href="game.html"><img alt="Trash Can" src="Images/trashcan.jpg"></a> 
                    <a style="position:relative:left:200px" href="game.html"><img alt="Recycling Bin" src="Images/recyclingbin.jpg"></a>
                 </div>   
     </body>
  </html>   
 
