<?php
session_start();
  // Ma clé privée
  $secret = "6Lfr0rgUAAAAACUhxJ9SI0sh1sPnN22VdKE2xyYR";
  // Paramètre renvoyé par le recaptcha
  $response = $_POST['g-recaptcha-response'];
  // On récupère l'IP de l'utilisateur
  $remoteip = $_SERVER['REMOTE_ADDR'];

  $api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
      . $secret
      . "&response=" . $response
      . "&remoteip=" . $remoteip ;

  $decode = json_decode(file_get_contents($api_url), true);

  // Si le code de vérification est ok
  if ($decode['success'] == true) {
    // C'est un humain
    $_SESSION['valid'] = 1;
  }
  else {
    // C'est un robot ou le code de vérif est incorrecte
    $_SESSION['valid'] = 0;

       $errors ['antispam'] = "Vous êtes un robot spammer";

      $_SESSION['errors'] = $errors; // On stocke les erreurs
      $_SESSION['inputs'] = $_POST;
  }

?>
