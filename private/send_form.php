<?php

include ('protection/clt.php');
$nomclt = $titre;
$emailclt = $mail;
//$emailclt = 'pia@lesdeliresdepia.com';
$copiecontact = "oui"; //oui ou non pour que le mail arrive aussi en copie a l expediteur du message

$errors = array(); // Création d'une vérif de champs

if(!array_key_exists('nom', $_POST) || $_POST['nom'] == '') { // Vérif de l'existence du champ et d'un contenu
  $errors ['nom'] = "vous n'avez pas renseigné votre nom";
}else{
  $nomcontact = htmlspecialchars($_POST['nom']);
}

if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { // Vérif existence de la clé
  $errors ['email'] = "vous n'avez pas renseigné votre email";
}else{
  $emailcontact = htmlspecialchars($_POST['email']);
}

if(!array_key_exists('sujet', $_POST) || $_POST['sujet'] == '') { // Vérif de l'existence du champ et d'un contenu
  $errors ['sujet'] = "vous n'avez pas renseigné votre sujet";
}else{
  $sujet = htmlspecialchars($_POST['sujet']);
}

if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
  $errors ['message'] = "vous n'avez pas renseigné votre message";
}else{
  $message = htmlspecialchars($_POST['message']);
}

// Check les infos transmises lors de la validation
if (!empty($errors)) { // Si erreur > on renvoie vers la page précédente
  $_SESSION['errors'] = $errors; // On stocke les erreurs
  $_SESSION['inputs'] = $_POST;
  header('Location: contact.php');
}else{
  $_SESSION['success'] = 1;
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $headers .= 'From: '.$nomcontact.' <'.$emailcontact.'>'. "\r\n";
  $headers .= 'Reply-To:'.$emailcontact.''. "\r\n" . 'X-Mailer:PHP/'.phpversion();
  $subject = ''.$nomclt.' - Demande de '.$nomcontact.' au sujet de: '.$sujet.'';
  $message_content = '
  <table>
  <tr>
  <td><b>Emetteur du message:</b></td>
  </tr>
  <tr>
  <td>
  Nom: '.$nomcontact.'<br>
  Mail: '.$emailcontact.'
  </td>
  </tr>
  <tr>
  <td><b>Sujet du message:</b></td>
  </tr>
  <tr>
  <td>'.$sujet.'</td>
  </tr>
  <tr>
  <td><b>Contenu du message:</b></td>
  </tr>
  <tr>
  <td>'.$message.'</td>
  </tr>
  </table>
  ';
  mail($emailclt, $subject, $message_content, $headers);
  if ($copiecontact=="oui"){
  	mail($emailcontact, $subject, $message_content, $headers);
  }
  header('Location: index.php#contact');
}
?>
