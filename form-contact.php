<?php

  $array = array("name" => "", "email" => "", "message" => "", "nameError" => "", "emailError" => "", "messageError" => "", "isSuccess" => false);

  $emailTo = "titoutitiwow@gmail.com";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array["name"] = verifyInput($_POST["name"]);
    $array["email"] = verifyInput($_POST["email"]);
    $array["message"] = verifyInput($_POST["message"]);
    $array["isSuccess"] = true;
    $emailText = "";

    if (empty($array["name"])) {
      // $array["nameError"] = "Je veux connaitre ton nom !";
      $array["isSuccess"] = false;
    } else {
      $emailText .= "name: {$array["name"]}\n";
    }
    if (!isEmail($array["email"])) {
      // $array["emailError"] = "Je veux connaitre ton Email !";
      $array["isSuccess"] = false;
    } else {
      $emailText .= "Email: {$array["email"]}\n";
    }
    if (empty($array["message"])) {
      // $array["messageError"] = "Que veux tu me dire ?";
      $array["isSuccess"] = false;
    } else {
      $emailText .= "Message: {$array["message"]}\n";
    }
    if ($array["isSuccess"]) {
      $headers = "From:  {$array["name"]} <{$array["email"]}>\r\nReply-To: {$array["email"]}";
      mail($emailTo, "Un message de votre site", $emailText, $headers);
    }

    echo json_encode($array);
  }

  function isPhone($var) {
    return preg_match("/^[0-9 ]*$/", $var);
  }

  function isEmail($var) {
    return filter_var($var, FILTER_VALIDATE_EMAIL);
  }

  function verifyInput($var) {
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);

    return $var;
  }

?>
