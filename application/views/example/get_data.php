<table>
    
<?php
foreach($result as $row)
{
    echo "<tr><td> ".$row->id."</td> <td>".$row->name."</td></tr>";
}
//print_r($result);
?>
</table>