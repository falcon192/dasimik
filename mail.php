<?php
  /* ������ ���������� */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
/*$tel = htmlspecialchars($_POST["tel"]);
$website = htmlspecialchars($_POST["website"]); */
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);
 
/* ��� ����� � ���� ��������� */
$address = "falcon192@yandex.ru";
$sub = "��������� � ����� ���";
 
/* ������ ������ */
$mes = "��������� � ����� ���.\n
��� �����������: $name 
����������� ����� �����������: $email
����� ���������:
$message";
 
 
if (empty($bezspama)) /* ������ ���� bezspama - ������ ���� ������*/
{
/* ���������� ���������, ��������� mail() ������� */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
 header('Refresh: 5; URL=http://biznessystem.ru');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>������ ����������, ����� 5 ������ �� ��������� �� �������� XXX</body>';}
else {
 header('Refresh: 5; URL=http://biznessystem.ru');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>������ �� ����������, ����� 5 ������ �� ��������� �� �������� YYY</body>';}
?>
