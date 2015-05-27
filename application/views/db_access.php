<?php

//foreach($result as $row)
//{
  //  echo "<br/>".$row->zone_name;
//}

//?>
<html><head></head>
    <body>
        <form>
 <option> Select </option>
        <?php
    foreach($result as $row )
    {
        ?>
      <option value="<?php echo $row->zone_name;?>"> hi</option>
      <?php
      }
      </form>
      </body>
      </html>
      