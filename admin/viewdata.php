

<?DOCTYPE html>
    <html>

<?php
include_once('fecthdata.php');
$querry = " select * from heightweight1;
$result = mysqli_query($query);

    <title>
        <head> fetch data from database</head>
    
    </title>
    <body>
    <table>
    <tr>
    <th>
    <h2>
data
    </h2>
    </th>
    <th>height</th>
   <th>weight</th>
    <th>bmi</th>
    </tr>
    </table>
    </body>
    </html>
    ?>