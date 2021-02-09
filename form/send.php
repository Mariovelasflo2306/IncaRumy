
    <?php
    try {
        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        $city = $_REQUEST["ciudad"];
        $address = $_REQUEST["domicilio"];
        $mobile = $_REQUEST["telf"];
        $profesion = $_REQUEST["profesion"];
        $language = $_REQUEST["idioma"];
        $laboral = $_REQUEST["experiencia"];
        $skill = $_REQUEST["habilidad"];
        $date = $_REQUEST["nacimiento"];
        $vehicle = $_REQUEST["vehiculo"];
        $data = $_REQUEST["dato"];
        $dni = $_REQUEST["identidad"];
        $subject = "Necesito información";

        $message = "Nombre : ".$name."\n";
        $message.= "Profesión : ".$profesion."\n";
        $message.= "Experiencia Laboral : ".$laboral."\n";
        $message.= "Competencias y Habilidades : ".$skill."\n";
        $message.= "Documento de Identificación : ".$dni."\n";
        $message.= "Dirección Actual de Domicilio : ".$address."\n";
        $message.= "Ciudad : ".$city."\n";
        $message.= "Idioma : ".$language."\n";
        $message.= "Fecha de Nacimiento : ".$date."\n";
        $message.= "Correo : ".$email."\n";
        $message.= "Celular : ".$mobile."\n";
        $message.= "Tipo Vehiculo : ".$vehicle."\n";
        $message.= "Dato Importante: ".$data."\n";
        $myemail = "kreatelemark1@gmail.com";
        $headers = "From: $email";
        mail($myemail, $subject, $message, $headers);
        echo true;
    } catch (Exception $e) {
        echo $e;
    }
?>