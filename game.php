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
                        // define name of directory
                        $dir = "/Images"; 
                        // find all the pictures in the directory
                        $pictures = glob("$dir/{*.jpg}"); 
                        // find randomized pictures
                        /*$img = $pictures[mt_rand(0,count($pictures)-3)]; 
                        echo "<img src=\"".$img."\">";*/
                        echo count($pictures);
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
 
