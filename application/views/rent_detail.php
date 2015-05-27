<html>
    <head>
    </head><body>
    <form>
    
    
    <select>
        <option> Select </option>
        <?php
    foreach(range('1','12')as $mon )
    {
        ?>
      <option value="<?php echo $mon;?>"><?php echo $mon; ?></option>
      <?php
      }
    ?>
      </select>
    </form>
    </body>
            
        