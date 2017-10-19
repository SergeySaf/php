<?php
$calendar = "Calendar for next mounth";
$x = 0;
?>

<html>
<head>
 <title>Test PHP</title>
</head>
<body>
<?php

print "<h3>$calendar</h3><br>";
$texttable = file_get_contents('./text.txt', FILE_USE_INCLUDE_PATH);

preg_split('/\s+/', $texttable);

if ($texttable == false) {
  echo "<h3>We have some trouble with this file!</h3>";
}
else {

  @mysql_connect("localhost:8000", "calendar", "123456")

        or die("Could not connect to MySQL server!");

  @mysql_select_db("company")

        or die("Could not select products database!");


    print "<table>\n";

    print "<tr>\n<th>Data</th><th>Time</th><th>Action</th>\n</tr>\n";

    while ($x < mysql_numrows($result)) :


      $data = mysql_result($result, $x, 'prod_data');

      $time = mysql_result($result, $x, 'prod_time');

      $action = mysql_result($result, $x, 'prod_action');


      print "<tr>\n";
      print "<td>$id</td>\n<td>$name</td>\n<td>$price</td>\n";
      print "</tr>\n";

      $x++;

    endwhile;

    print "</table>";
}

?>

<?php




// Вибрати всі записи з таблиці products

$query = "SELECT * FROM products";

$result = mysql_query($query);



mysql_close();

?>


</body>
</html>
