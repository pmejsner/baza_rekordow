<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <META HTTP-EQUIV="content-type" CONTENT="text/html; charset="utf-8">
  <title>Rekordy Polski ON</title>
</head>
<body>
<?php
$connect= mysql_connect("localhost","pm23","piotrek1") or
die ("Sprawd� po��czenie z serwerem");

$create = mysql_query("CREATE DATABASE IF NOT EXISTS baza50") or die (mysql_error());

mysql_select_db("baza50");

//utwórz tabelę
$rekord="CREATE TABLE rekord (
  id_rekord INT(11) NOT NULL auto_increment,
  grupa_startowa INT (11) NOT NULL DEFAULT 0,
  zawodnik INT (11) NOT NULL DEFAULT 0,
  czas TIME (3) NULL,
  miejsce_rekordu VARCHAR (255) NULL,
  dystans INT (11) NOT NULL DEFAULT 0,
  plec SET ('1', '2') NOT  NULL,
  klub INT (11) NULL,
  PRIMARY KEY (id_rekord)
)";

$wynik=mysql_query($rekord) or die(mysql_error());

$people = "CREATE TABLE people (
  people_id INT (11) NOT NULL auto_increment,
  people_fullname VARCHAR (255) NOT NULL,
  klub INT (11) NOT NULL,
  plec SET ('1', '2') NOT NULL ,
  PRIMARY KEY (people_id)
)";

$wynik=mysql_query($people) or die(mysql_error());

$dystans="CREATE TABLE  dystans (
  id_dystans INT (11) NOT NULL auto_increment,
  nazwa_dystans VARCHAR (255) NOT NULL,
  PRIMARY KEY (id_dystans)
)";

$wynik=mysql_query($dystans) or die(mysql_error());

$grupa="CREATE TABLE grupa (
  id_grupa INT (11) NOT NULL auto_increment,
  nazwa_grupa VARCHAR (255) NOT NULL,
  PRIMARY KEY (id_grupa)
)";

$wynik=mysql_query($grupa) or die(mysql_error());

$klub= "CREATE TABLE klub (
id_klub INT (11) NOT NULL auto_increment,
nazwa_klub VARCHAR (255) NOT NULL,
PRIMARY KEY (id_klub)
)";

$wynik=mysql_query($klub) or die (mysql_error());

?>
</body>
</html>
