<?php
$site_title = "PHP Recipes";
$bg_color = "blue";
$user_name = "Sergey";
$big_font = "h3";
?>

<html>
<head>
  <title><?php print $site_title; ?></title>
</head>
<body style="background-color: <?php print $bg_color; ?>">
<?php
  print "Hello, $user_name\n";
  echo date("F d, Y");
  print "<$big_font> There is a good weather today! <$big_font>";
?>
</body>
</html>



<? require ('init.tpl'); ?>

<html>
<head>
<title><? print $site_title; ?></title>
</head>
<body>

<? print "Welcome to $site_title. For questions, contact <a href =

\"mailto:$contact_email\">$contact_name</a>."; ?>

</body>

</html>

//Приклад 5
// Файл: header.tpl
// Призначення:Головний файл для сайту PhpRecipes
// Дата: 22серпня 2000 г.

<?php
$site_name = "PHPRecipes";
$site_email = "wjgilmore@hotmail.com";
$site_path = "http://localhost/phprecipes";
?>

<html>
<head>
<title><? print $site_name; ?></title>
</head>

<body bgcolor="#7b8079" text="#ffffff" link="#e7d387" alink="#e7d387" vlink="#e7f0e4">
<table width = "95%" cellpadding="0" cellspacing="0" border="1">
  <tr>
  <td valign = "top">
  PHPRecipes
  </td>
  <td valign = "top" align="right">
  <?php

  // Вивести поточну дату і час

  print date ("F d, h:i a");

  ?>

  </td>
  </tr>
</table>

//Приклад 6

<table width="95%" cellspacing="0" cellpadding="0" border="1">

<tr><td valign="top" align="middle">

Copyright &copy; 2000 PHPRecipes. All rights reserved.<br>

<a href = "mailto:<?=$site_email;?>">contact</a> | <a href = "<?=$site_path;?>/privacy.php">your
privacy</a>

</td></tr>

</table>
</body>
</html>


//Приклад 7

<table width="95%" cellspacing="0" cellpadding="0" border="1">
<tr>
<td valign="top" width="25%">
<a href = "<?=$site_path;?>/tutorials.php">tutorials</a><br>
<a href = "<?=$site_path;?>/articles.php">articles</a><br>
<a href = "<?=$site_path;?>/scripts.php">scripts</a><br>
<a href = "<?=$site_path;?>/contact.php">contact</a><br>
</td>

<td valign="top" width="75%">

Welcome to PHPRecipes, the starting place for PHP scripts, tutorials, and information about gourmet cooking!

</td>
</tr>
</table>


//Приклад 8

<?php
// Файл: index.php
// Призначення: домашня сторінка PHPRecipes
// Дата: 23 серпня 2000 г.
// Вивести заголовок
include ("header.tpl");
// Вивести основну частину
include ("index_body.tpl");
// Вивести колонтитул
include ("footer.tpl");
?>


//Приклад 9

<html>
<head>
<title> PHPRecipes </title>
</head>
<body bgcolor="#7b8079" text="#ffffff" link="#e7d387" alink="#e7d387" vlink="#e7f0e4">

<table width = "95%" cellpadding="0" cellspacing="0" border="1">
  <tr>
  <td valign = "top">
  PHP Recipes
  </td>
    <td valign = "top" align="right">
      August 23, 03:17 pm
    </td>
  </tr>

</table><table width="95%" cellspacing="0" cellpadding="0" border="1">

<tr>
  <td valign="top" width="25%">
    <a href = "http://localhost/phprecipes/tutorials.php">tutorials</a><br>
    <a href = "http://localhost/phprecipes/articles.php">articles</a><br>
    <a href = "http://localhost/phprecipes/scripts.php">scripts</a><br>
    <a href = "http://localhost/phprecipes/contact.php">contact</a><br>
  </td>
<td valign="top" width="75%">

Welcome to PHPRecipes, the starting place for PHP scripts, tutorials, and gourmet cooking tips and
recipes!

</td>
</tr>

</table><table width="95%" cellspacing="0" cellpadding="0" border="1">
<tr><td valign="top" align="middle">
Copyright &copy; 2000 PHPRecipes. All rights reserved.<br>

<a href = "mailto:wj@hotmail.com">contact</a> | <a href =
"http://localhost/phprecipes/privacy.php">your privacy</a>

</td></tr>
</table>
</body>
</html>


//Приклад 10

<?php

@mysql_connect("localhost", "web", "ffttss")

      or die("Could not connect to MySQL server!");

@mysql_select_db("company")

      or die("Could not select products database!");


// Вибрати всі записи з таблиці products

$query = "SELECT * FROM products";

$result = mysql_query($query);


$x = 0;
print "<table>\n";

print "<tr>\n<th>Product ID</th><th>Product Name</th><th>Product Price</th>\n</tr>\n";

while ($x < mysql_numrows($result)) :


  $id = mysql_result($result, $x, 'prod_id');

  $name = mysql_result($result, $x, 'prod_name');

  $price = mysql_result($result, $x, 'prod_price');


  print "<tr>\n";
  print "<td>$id</td>\n<td>$name</td>\n<td>$price</td>\n";
  print "</tr>\n";

  $x++;

endwhile;

print "</table>";

mysql_close();

?>


//Приклад 11

<table>
  <tr>
  <th>Product ID</th><th>Product Name</th><th>Product Price</th>
  </tr>
  <tr>
    <td>
      1000pr
    </td>

    <td>
      apples
    </td>

    <td>
      1.23
    </td>
  </tr>

  <tr>
    <td>
      1001pr
    </td>

    <td>
      oranges
    </td>

    <td>
      2.34
    </td>
  </tr>

  <tr>
    <td>
      1002pr
    </td>

    <td>
      Bananas
    </td>

    <td>
      3.45
    </td>
  </tr>

  <tr>
    <td>
      1003pr
    </td>

    <td>
      pears
    </td>

    <td>
      4.45
    </td>
  </tr>
</table>


//Приклад 12

<?php
// Якщо змінна $bgcolor існує
if (isset($bgcolor)) :
     setcookie("bgcolor", $bgcolor, time()+3600);
?>


//Приклад 13

<html>
<body bgcolor="<?=$bgcolor;?>">
<?php

// Значення $bgcolor не задано, відобразити форму

else :

?>

<body bgcolor="white">

<form action="<? print $PHP_SELF; ?>" method="post">
  What's your favorite background color?
  <select name="bgcolor">
    <option value="red">red
    <option value="blue">blue
    <option value="green">green
    <option value="black">black
  </select>
    <input type="submit" value="Set background color">
</form>

<?php

endif;

?>

</body>
</html>


//Приклад 14

<?php

if (! isset($userid)) :
  $id = 15;
  setcookie ("userid", $id, time()+3600);
  print "A cookie containing your userID has been set on your machine.
  Please refresh the page to retrieve your user information";

else:

@mysql_connect("localhost", "web", "4tf9zzzf") or die("Could not connect to MySQL server!");
@mysql_select_db("user") or die("Could not select user database!");

// Об’явити запит

$query = "SELECT * FROM users13 WHERE user_id = '$userid'";

// Виконати запит

$result = mysql_query($query);

// Якщо співпадання буде знайдено, вивести дані користувача.

if (mysql_num_rows($result) == 1) :

  $row = mysql_fetch_array($result);
  print "Hi ".$row["fname"].",<br>";
  print "Your email address is ".$row["email"];

else:
  print "Invalid User ID!";
endif;

mysql_close();
endif;

?>
