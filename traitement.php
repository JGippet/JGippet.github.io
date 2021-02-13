<?php
session_start();
include ('private/captcha.php');

$valid = $_SESSION['valid'];

if ($valid == 0) {
  header('Location: index.php#contact');
} else {
  include ('private/send_form.php');
}

?>
