     <!DOCTYPE HTML>
     <html>
          <style>
          .table1 tr td
          {
               border:1px solid;
          }
          </style>
     <head>
          <meta charset="utf-8">
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
         <title>Title</title>
     </head>
     <body>
          <table class="table1">
          <?php
          echo "<tr><th> ID </th> <th> IP Address </th> <th> User Agent </th> <th> Last Activity </th> <th> User Data </th></tr>";
               foreach($result as $row)
               {
                    
                 //echo "<tr> <td>".$row->name." </td> <td>".$row->address." </td> </tr>";
                 echo "<tr> <td>".$row->session_id." </td> <td>".$row->ip_address." </td> <td>".$row->user_agent." </td> <td>".$row->last_activity." </td> <td>".$row->user_data." </td> </tr>";
                 
               }
          ?>
          </table>
     </body>
     </html>