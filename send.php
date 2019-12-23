<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);

$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);

$name = trim($name);
$email = trim($email);
$message = trim($message);

echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $message

mail("shinigamiwebstudio384qq@gmail.com", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email , Сообщение: ".$message , От: example2@mail.ru \r\n");


if (mail("shinigamiwebstudio384qq@gmail.com", "Заказ с сайта", "Имя:".$name.". E-mail: ".$email , Сообщение: ".$message, "От: example2@mail.ru \r\n"))
 {
    echo "Ваша заявка будет обработана и в течении суток вам напишет наш дизайнер!";
} else {
    echo "при отправке сообщения возникли ошибки";
}

?>