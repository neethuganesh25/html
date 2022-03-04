<html>
    <head>
        <title>
            hello world
        </title>
    </head><body>
        <?php
    $cricket=array("virat","dhoni","sachin","sehwang");
    echo"<br> displaying names in table format <br/>";
    echo"<br>        <br/>";
    echo "<br> names of cricket players as strored in an array:<br/>";
    print_r($cricket);
    echo"<br> names of cricket players as strored in a table:<br/>";
    echo "<br> <table border=2><tr><th>player names</th></tr><br/>";
    echo  "<tr><td>$cricket[0]</td></tr>";
    echo  "<tr><td>$cricket[1]</td></tr>";
    echo  "<tr><td>$cricket[2]</td></tr>";
    echo  "<tr><td>$cricket[3]</td></tr>";
    
    echo "</table>";
        ?>
  </body>
   </html>
