<?php
// Requiring the class and functions file
require('includes/functions.php');
require('includes/class.php');
loginCheck();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
// Initializing a new page using the htmlElement class
$page=new htmlElement();
// Rendering the head element and its contents
$page->renderHead();
?>
  <body>
    Login
  </body>
</html>
