<?php
        if(isset($_POST['sub']))
    {
        $x = 1;
        $nm = $_POST['num']; 
        echo "<table border=1 width=500>";
        while($x <= 30)
        {
            echo "<tr>
        <td>". $x ."</td>
        <td>" . $nm ."</td>
        <td>".$x * $nm ."<td>
        </tr>";
        $x++;
    }   echo "</table>";
}
?>