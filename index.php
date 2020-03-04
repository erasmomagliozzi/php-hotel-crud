<?php
 include 'database.php';
 include 'partials/header.php'
 ?>




   <body>
     <table class="table">
       <thead>
         <tr>
           <th>ID</th>
           <th>FLOOR</th>
           <th></th>
           <th></th>
           <th></th>
         </tr>
       </thead>
       <tbody>
         <?php
           if (!empty($rooms)) {
             foreach ($rooms as $room){ ?>
               <tr>
                 <td><?php echo $room['id'] ?></td>
                 <td><?php echo $room['floor'] ?></td>
                 <td><a href="show/show.php?id=<?php echo $room['id'] ?>">View</a>
                 </td>
                 <td><a href=""></a>Update </td>
                 <td>DELETE</td>
               </tr>
             <?php }
          }
          ?>
       </tbody>
     </table>

   </body>
 </html>
