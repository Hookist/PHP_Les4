<?php
require('pages.php');
$id = $_GET['id'];
foreach($pages as $p)
{
    if($p['id']==$id)
    {
        $title = $p['name'];
        $link = $p['link'];
    }
}

//var_dump($pages);


?>
  <html>
   <title>

   </title>
   <head>
       MY SITE
   </head>
    <body>
        <?php
            echo "<ul>";
            
            foreach($pages as $key)
            {
                echo "<li>";
                echo "<a href='index2.php?id=" . $key['id'] . "' >" . $key['name'] . "</a>";
             
                echo "</li>";
            }
            echo "</ul>";
         ?>
         <div id="title">
             <h1>
                 <?=$title?> 
             </h1>
            
         </div>
         <div id="content">
             <?php
              include($link);
             ?>
         </div>
    </body>
</html>
