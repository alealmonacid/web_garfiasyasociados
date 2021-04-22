<?php

    $to = "";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "De: $from";
    $subject = "Mensaje Via Web.";

    $fields = array();
    $fields{"name"} = "Nombre";
    $fields{"email"} = "Email";
    $fields{"url"} = "Asunto";
    $fields{"message"} = "Mensaje";

    $body = "Datos Contacto:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
