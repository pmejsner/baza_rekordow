<html>
<head>
    <META HTTP-EQUIV="content-type" CONTENT="text/html; charset="utf-8">
    <title>Rekordy Polski ON</title>
</head>
<body>
<?php
$connect= mysql_connect("localhost","pm23","piotrek1") or
die ("Sprawdź połączenie z serwerem");

mysql_select_db("baza50");

$grupy="INSERT INTO grupa (id_grupa, nazwa_grupa) " .
        "VALUES (1, 'S1')," . "(2, 'S2')," . "(3, 'S3')," . "(4, 'S4')," .
        "(5, 'S5')," . "(6, 'S6')," . "(7, 'S7')," . "(8, 'S8')," . "(9, 'S9')," .
        "(10, 'S10')," . "(11, 'S11')," . "(12, 'S12')," . "(13,'S13')," .
        "(14, 'SB1')," . "(15,'SB2')," . "(16, 'SB3')," . "(17, 'SB4')," . "(18, 'SB5')," .
        "(19, 'SB6')," . "(20, 'SB7')," . "(21,'SB8')," . "(22,'SB9')," . "(23, 'SB11'), " .
        "(24, 'SB12')," . "(25, 'SB13')," . "(26, 'SM1')," . "(27, 'SM2')," . "(28, 'SM3')," .
        "(29, 'SM4')," . "(30, 'SM5')," . "(31, 'SM6')," . "(32, 'SM7')," . "(33, 'SM8')," .
        "(34, 'SM9')," . "(35, 'SM10')," . "(36, 'SM11')," . "(37, 'SM12')," . "(38, 'SM13')";

$wynik1=mysql_query($grupy) or die (mysql_error());

$dystanse="INSERT INTO dystans (id_dystans, nazwa_dystans)" .
          "VALUES(1, '50 DOWOLNY')," . "(2, '100 DOWOLNY')," . "(3, '200 DOWOLNY')," .
          "(4, '400 DOWOLNY')," . "(5, '800 DOWOLNY')," . "(6, '1500 DOWOLNY')," .
          "(7, '50 GRZBIETOWY')," . "(8, '100 GRZBIETOWY')," . "(9, '200 GRZBIETOWY')," .
          "(10, '50 KLASYCZNY')," . "(11, '100 KLASYCZNY')," . "(12, '200 KLASYCZNY')," .
          "(13, '50 MOTYLKOWY')," . "(14, '100 MOTYLKOWY')," . "(15, '200 MOTYLKOWY')," .
          "(16, '150 ZMIENNY')," . "(17, '200 ZMIENNY')," . "(18, '400 ZMIENNY')";

$wynik2=mysql_query($dystanse) or die (mysql_error());

$klub="INSERT INTO klub (id_klub, nazwa_klub)" .
      "VALUES(1, 'PSSON START Białystok'), (2, 'BZSR START Bielsko-Biała'), " .
      "(3, 'SSiRON START Bydgoszcz'),(4, 'Klub Sportowy Osób Niepełnosprawnych Herkules Ciechanów')," .
      "(5, 'Klub Sportowy - Miejski Ośrodek Sportu i Rekreacji Cieszyn'),(6, 'Integracyjny Klub Sportowy Cieszyn'),".
      "(7, 'Ludowy Klub Sportowy Gol-START '), (8, 'Integracyjny Klub Sportowy ATAK Elbląg'),".
      "(9, 'Stowarzyszenie Rehabilitacyjno-Sportowe Szansa-Start Gdańsk')," .
      "(10, 'Klub Sportowy Niepełnosprawnych Start-Gdynia'), (11, 'Gorzowski Związek Sportu Niepełnosprawnych START'),".
      "(12, 'Centrum Rehabilitacji im. ks. Biskupa Jana Chrapka Grudziądz'), (13, 'Jeleniogórski Klub Sportowo-Rehabilitacyjny'),".
      "(14, 'Uczniowski Klub Sportowy Laski'), (15, 'Klub Sportowy Niepełnosprawnych START Kalisz'),".
      "(16, 'Wojewódzkie Stowarzyszenie Sportu i Rehabilitacji Niepełnosprawnych START Katowice'),".
      "(17, 'Zrzeszenie Sportu i Rehabilitacji START Kielce'), (18, 'Integracyjny Klub Sportowy Konstancin')," .
      "(19, 'Stowarzyszenie Sportu Niepełnosprawnych START Koszalin'), ".
      "(20, 'Integracyjny Klub Sportowy Druga Strona Sportu'), (21, 'Integracyjny Klub Sportowy Leszno'),".
      "(22, 'Integracyjny Klub Sportowy Druga Strona Sportu Kraków')," .
      "(23, 'Stowarzyszenie Nie Widzę Przeszkód Kraków'), ".
      "(24, 'Integracyjny Klub Sportowy Leszno')," .
      "(25, 'Integracyjne Centrum Sportu i Rehabilitacji START Lublin'), ".
      "(26, 'Sportowe Stowarzyszenie Niepełnosprawnych START Łódź'),".
      "(27, 'Zrzeszenie Sportu Osób Niepełnosprawnych START Nowy Sącz')," .
      "(28, 'Zrzeszenie Sportu Osób Niepełnosprawnych START Olsztyn')," .
      "(29, 'Integracyjny Klub Sportowy Smok Orneta'), ".
      "(30, 'Skorpion Polkowice'), ".
      "(31, 'Stowarzyszenie Sportowo-Rehabilitacyjne START Poznań'), ".
      "(32, 'Radomskie Stowarzyszenie Sportu i Rehabilitacji Osób Niepełnosprawnych START Radom'), " .
      "(33, 'Zrzeszenie Sportowe Inwalidów START Rzeszów'), ".
      "(34, 'Stowarzyszenie Sportowe Osób Niepełnosprawnych START Siedlce'), ".
      "(35, 'Integracyjny Klub Sportowy Siedlce'), " .
      "(36, 'Związek Sportu Niepełnosprawnych Start Skierniewice')," .
      "(37, 'Klub Sportowy Inwalidów START Szczecin'), " .
      "(38, 'Tarnowskie Zrzeszenie Sportowe Niepełnosprawnych START Tarnów '), ".
      "(39, 'Integracyjny Klub Sportowy Jezioro Tarnobrzeg'), ".
      "(40, 'Integracyjny Klub Sportowy AWF Warszawa'), " .
      "(41, 'Klub Sportowy Niepełnosprawnych START Warszawa'), ".
      "(42, 'Integracyjne Stowarzyszenie Sportowe START Wejherowo'), ".
      "(43, 'Ośrodek Sportowy PZSN START Wisła'), ".
      "(44, 'WZSN START Wrocław'), ".
      "(45, 'Integracyjny Klub Sportowy START Zduńska-Wola'), ".
      "(46, 'Zrzeszenie Sportowo-Rehabilitacyjne START Zielona Góra')";

$wynik3=mysql_query($klub) or die (mysql_error());

$zawodnicy="INSERT INTO people (people_id, people_fullname, klub, plec)" .
           "VALUES (1, 'Zawodnik 1', 37, 'k'), (2, 'Zawodnik 2', 37, 'k'), (3, 'zawodnik 3', 37, 'k'), " .
           "(4, 'zawodnik 4', 37, 'k'), (5, 'zawodnik 5', 44, 'k'), (6, 'zawodnik 6', 1, 'k'), " .
           "(7, 'zawodnik 7', 37, 'k'), (8, 'zawodnik 8', 41, 'k'), (9, 'zawodnik 9', 31, 'k'), " .
           "(10, 'zawodnik 10', 25,'k'), (11, 'zawodnik 11', 15, 'k'), " .
           "(12, 'zawodnik 12', 15, 'k'), (13, 'zawodnik 13', 37, 'k'), " .
           "(14, 'zawodnik 14', 37, 'm'), (15, 'zawodnik 15', 44, 'm'), (16, 'zawodnik 16', 2, 'm'), " .
           "(17, 'zawodnik 17', 37, 'm'), (18, 'zawodnik 18',38, 'm'), (19, 'zawodnik 19',3, 'm'), " .
           "(20, 'zawodnik 20', 38, 'm'), (21, 'zawodnik 21',12, 'm'), (22, 'zawodnik 22', 15, 'm'), " .
           "(23, 'zawodnik 23', 37, 'm'), (24, 'zawodnik 24', 44, 'm'), (25, 'zawodnik 25', 6, 'm'), " .
            "(26, 'zawodnik 26', 18, 'm')";

$wynik4=mysql_query($zawodnicy) or die (mysql_error());


$rekordy="INSERT INTO rekord (id_rekord, grupa_startowa, zawodnik, czas, miejsce_rekordu, dystans, plec, klub)" .
        "VALUES (1, 1, 1, '00:01:00', 'Berlin', 1, 'k',1), (2,2,2,'00:01:00', 'berlin', 1, 'k',4), " .
        "(3,3,3, '00:01:00', 'szczecin', 1, 'k',2), (4,4,4,'00:01:00', 'szczecin', 1, 'k',37), " .
        "(5,5,5,'00:01:00','berlin', 1, 'k',2)," .
        "(6,6,6,'00:01:00', 'berlin', 1, 'k',11),(7,7,7,'00:01:00', 'szczecin', 1, 'k',15), " .
        "(8,8,8, '00:01:00','berlin', 1, 'k',37), (9,9,9, '00:01:00', 'berlin', 1 ,'k',18), " .
        "(10,10,10,'00:01:00','berlin', 1, 'k',25), (11,11,11,'00:01:00','szczecin',1, 'k',44), " .
        "(12,12,12, '00:01:00', 'dębica', 1, 'k',37), (13,13,13,'00:01:00','londyn',1,'k',44), " .
        "(14, 1, 1, '00:01:00', 'Berlin', 2, 'k',1), (15,2,2,'00:01:00', 'berlin', 2, 'k',4), " .
        "(16,3,3, '00:01:00', 'szczecin', 2, 'k',2), (17,4,4,'00:01:00', 'szczecin', 2, 'k',37), " .
        "(18,5,5,'00:01:00','berlin', 2, 'k',2)," .
        "(19,6,6,'00:01:00', 'berlin', 2, 'k',11),(20,7,7,'00:01:00', 'szczecin', 2, 'k',15), " .
        "(21,8,8, '00:01:00','berlin', 2, 'k',37), (22,9,9, '00:01:00', 'berlin', 2,'k',18), " .
        "(23,10,10,'00:01:00','berlin', 2, 'k',25), (24,11,11,'00:01:00','szczecin',2, 'k',44), " .
        "(25,12,12, '00:01:00', 'dębica', 2, 'k',37), (26,13,13,'00:01:00','londyn',2,'k',44), " .
        "(27,1,1, '00:01:00', 'dębica',3, 'k',13), (28,2,2,'00:01:00','londyn',3,'k',11), " .
        "(29,3,3, '00:01:00', 'szczecin', 3, 'k',15), (30,4,4,'00:01:00', 'szczecin',3, 'k',37), " .
        "(31,5,5,'00:01:00','berlin',3, 'k',44)," .
        "(32,6,6,'00:01:00', 'berlin',3, 'k',23),(33,7,7,'00:01:00', 'szczecin', 3, 'k',37)," .
        "(34,8,8, '00:01:00','berlin',3, 'k',12), (35,9,9, '00:01:00', 'berlin', 3,'k',15)," .
        "(36,10,10,'00:01:00','berlin',3, 'k',16), (37,11,11,'00:01:00','szczecin',3, 'k',23)," .
        "(38,12,12, '00:01:00', 'dębica',3, 'k',1), (39,13,13,'00:01:00','londyn',3,'k',1)";
        /*
    "(6,6,6,'00:01:00', 'berlin',4, 'k'),(7,7,7,'00:01:00', 'szczecin', 4, 'k')," .
        "(8,8,8, '00:01:00','berlin',4, 'k'), (9,9,9, '00:01:00', 'berlin', 4,'k')," .
        "(10,10,10,'00:01:00','berlin',4, 'k'), (11,11,11,'00:01:00','szczecin',4, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',4, 'k'), (13,13,13,'00:01:00','londyn',4,'k')," .
        "(6,6,6,'00:01:00', 'berlin',5, 'k'),(7,7,7,'00:01:00', 'szczecin', 5, 'k')," .
        "(8,8,8, '00:01:00','berlin',5, 'k'), (9,9,9, '00:01:00', 'berlin', 5,'k')," .
        "(10,10,10,'00:01:00','berlin',5, 'k'), (11,11,11,'00:01:00','szczecin',5, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',5, 'k'), (13,13,13,'00:01:00','londyn',5,'k')," .
        "(6,6,6,'00:01:00', 'berlin',6, 'k'),(7,7,7,'00:01:00', 'szczecin', 6, 'k')," .
        "(8,8,8, '00:01:00','berlin',6, 'k'), (9,9,9, '00:01:00', 'berlin', 6,'k')," .
        "(10,10,10,'00:01:00','berlin',6, 'k'), (11,11,11,'00:01:00','szczecin',6, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',6, 'k'), (13,13,13,'00:01:00','londyn',6,'k')," .
        "(1,1,1, '00:01:00', 'dębica',7, 'k'), (2,2,2,'00:01:00','londyn',7,'k')," .
        "(3,3,3, '00:01:00', 'szczecin', 7, 'k'), (4,4,4,'00:01:00', 'szczecin',7, 'k'), " .
        "(5,5,5,'00:01:00','berlin',7, 'k')," .
        "(6,6,6,'00:01:00', 'berlin',7, 'k'),(7,7,7,'00:01:00', 'szczecin', 7, 'k')," .
        "(8,8,8, '00:01:00','berlin',7, 'k'), (9,9,9, '00:01:00', 'berlin', 7,'k')," .
        "(10,10,10,'00:01:00','berlin',7, 'k'), (11,11,11,'00:01:00','szczecin',7, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',7, 'k'), (13,13,13,'00:01:00','londyn',7,'k')," .
        "(1,1,1, '00:01:00', 'dębica',8, 'k'), (2,2,2,'00:01:00','londyn',8,'k')," .
        "(3,3,3, '00:01:00', 'szczecin', 8, 'k'), (4,4,4,'00:01:00', 'szczecin',8, 'k'), " .
        "(5,5,5,'00:01:00','berlin',8, 'k')," .
        "(6,6,6,'00:01:00', 'berlin',8, 'k'),(7,7,7,'00:01:00', 'szczecin', 8, 'k')," .
        "(8,8,8, '00:01:00','berlin',8, 'k'), (9,9,9, '00:01:00', 'berlin', 8,'k')," .
        "(10,10,10,'00:01:00','berlin',8, 'k'), (11,11,11,'00:01:00','szczecin',3, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',8, 'k'), (13,13,13,'00:01:00','londyn',8,'k')," .
        "(6,6,6,'00:01:00', 'berlin',9, 'k'),(7,7,7,'00:01:00', 'szczecin', 9, 'k')," .
        "(8,8,8, '00:01:00','berlin',9, 'k'), (9,9,9, '00:01:00', 'berlin', 9,'k')," .
        "(10,10,10,'00:01:00','berlin',9, 'k'), (11,11,11,'00:01:00','szczecin',9, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',9, 'k'), (13,13,13,'00:01:00','londyn',9,'k')," .
        "(1,1,1, '00:01:00', 'dębica',10, 'k'), (2,2,2,'00:01:00','londyn',10,'k')," .
        "(3,3,3, '00:01:00', 'szczecin', 10, 'k'), (4,4,4,'00:01:00', 'szczecin',10, 'k'), " .
        "(5,5,5,'00:01:00','berlin',10, 'k')," .
        "(6,6,6,'00:01:00', 'berlin',10, 'k'),(7,7,7,'00:01:00', 'szczecin', 10, 'k')," .
        "(8,8,8, '00:01:00','berlin',10, 'k'), (9,9,9, '00:01:00', 'berlin', 10,'k')," .
        "(10,10,10,'00:01:00','berlin',10, 'k'), (11,11,11,'00:01:00','szczecin',10, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',10, 'k'), (13,13,13,'00:01:00','londyn',10,'k')," .
        "(1,1,1, '00:01:00', 'dębica',11, 'k'), (2,2,2,'00:01:00','londyn',11,'k')," .
        "(3,3,3, '00:01:00', 'szczecin', 11, 'k'), (4,4,4,'00:01:00', 'szczecin',11, 'k'), " .
        "(5,5,5,'00:01:00','berlin',11, 'k')," .
        "(6,6,6,'00:01:00', 'berlin',11, 'k'),(7,7,7,'00:01:00', 'szczecin', 11, 'k')," .
        "(8,8,8, '00:01:00','berlin',11, 'k'), (9,9,9, '00:01:00', 'berlin', 11,'k')," .
        "(10,10,10,'00:01:00','berlin',11, 'k'), (11,11,11,'00:01:00','szczecin',11, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',11, 'k'), (13,13,13,'00:01:00','londyn',11,'k')," .
    "(6,6,6,'00:01:00', 'berlin',12, 'k'),(7,7,7,'00:01:00', 'szczecin', 12, 'k')," .
    "(8,8,8, '00:01:00','berlin',12, 'k'), (9,9,9, '00:01:00', 'berlin', 12,'k')," .
    "(10,10,10,'00:01:00','berlin',12, 'k'), (11,11,11,'00:01:00','szczecin',12, 'k')," .
    "(12,12,12, '00:01:00', 'dębica',12, 'k'), (13,13,13,'00:01:00','londyn',12,'k')," .
    "(1,1,1, '00:01:00', 'dębica',13, 'k'), (2,2,2,'00:01:00','londyn',13,'k')," .
    "(3,3,3, '00:01:00', 'szczecin', 13, 'k'), (4,4,4,'00:01:00', 'szczecin',13, 'k'), " .
    "(5,5,5,'00:01:00','berlin',13, 'k')," .
    "(6,6,6,'00:01:00', 'berlin',13, 'k'),(7,7,7,'00:01:00', 'szczecin', 13, 'k')," .
    "(8,8,8, '00:01:00','berlin',13, 'k'), (9,9,9, '00:01:00', 'berlin', 13,'k')," .
    "(10,10,10,'00:01:00','berlin',13, 'k'), (11,11,11,'00:01:00','szczecin',13, 'k')," .
    "(12,12,12, '00:01:00', 'dębica',13, 'k'), (13,13,13,'00:01:00','londyn',13,'k')," .
    "(1,1,1, '00:01:00', 'dębica',14, 'k'), (2,2,2,'00:01:00','londyn',14,'k')," .
    "(3,3,3, '00:01:00', 'szczecin', 14, 'k'), (4,4,4,'00:01:00', 'szczecin',14, 'k'), " .
    "(5,5,5,'00:01:00','berlin',14, 'k')," .
    "(6,6,6,'00:01:00', 'berlin',14, 'k'),(7,7,7,'00:01:00', 'szczecin', 14, 'k')," .
    "(8,8,8, '00:01:00','berlin',14, 'k'), (9,9,9, '00:01:00', 'berlin', 14,'k')," .
    "(10,10,10,'00:01:00','berlin',14, 'k'), (11,11,11,'00:01:00','szczecin',14, 'k')," .
    "(12,12,12, '00:01:00', 'dębica',14, 'k'), (13,13,13,'00:01:00','londyn',14,'k')," .
    "(6,6,6,'00:01:00', 'berlin',15, 'k'),(7,7,7,'00:01:00', 'szczecin', 15, 'k')," .
    "(8,8,8, '00:01:00','berlin',15, 'k'), (9,9,9, '00:01:00', 'berlin', 15,'k')," .
    "(10,10,10,'00:01:00','berlin',15, 'k'), (11,11,11,'00:01:00','szczecin',15, 'k')," .
    "(12,12,12, '00:01:00', 'dębica',15, 'k'), (13,13,13,'00:01:00','londyn',15,'k')," .
    "(1,1,1, '00:01:00', 'dębica',16, 'k'), (2,2,2,'00:01:00','londyn',16,'k')," .
    "(3,3,3, '00:01:00', 'szczecin', 16, 'k'), (4,4,4,'00:01:00', 'szczecin',16, 'k'), " .
    "(5,5,5,'00:01:00','berlin',17, 'k')," .
    "(6,6,6,'00:01:00', 'berlin',17, 'k'),(7,7,7,'00:01:00', 'szczecin', 17, 'k')," .
    "(8,8,8, '00:01:00','berlin',17, 'k'), (9,9,9, '00:01:00', 'berlin', 17,'k')," .
    "(10,10,10,'00:01:00','berlin',17, 'k'), (11,11,11,'00:01:00','szczecin',17, 'k')," .
    "(12,12,12, '00:01:00', 'dębica',17, 'k'), (13,13,13,'00:01:00','londyn',17,'k')," .
    "(1, 1, 1, '00:01:00', 'Berlin', 1, 'k'), (2,2,2,'00:01:00', 'berlin', 1, 'k'),".
    "(3,3,3, '00:01:00', 'szczecin', 1, 'k'), (4,4,4,'00:01:00', 'szczecin',1, 'k'), " .
        "(5,5,5,'00:01:00','berlin',1, 'k')," .
        "(6,6,6,'00:01:00', 'berlin',1, 'k'),(7,7,7,'00:01:00', 'szczecin', 1, 'k')," .
        "(8,8,8, '00:01:00','berlin',1, 'k'), (9,9,9, '00:01:00', 'berlin', 1 ,'k')," .
        "(10,10,10,'00:01:00','berlin',1, 'k'), (11,11,11,'00:01:00','szczecin',1, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',1, 'k'), (13,13,13,'00:01:00','londyn',1,'k')," .
        "(1,1,1, '00:01:00', 'dębica',2, 'k'), (2,2,2,'00:01:00','londyn',2,'k')," .
        "(3,3,3, '00:01:00', 'szczecin', 2, 'k'), (4,4,4,'00:01:00', 'szczecin',2, 'k'), " .
        "(5,5,5,'00:01:00','berlin',2, 'k')," .
        "(6,6,6,'00:01:00', 'berlin',2, 'k'),(7,7,7,'00:01:00', 'szczecin', 2, 'k')," .
        "(8,8,8, '00:01:00','berlin',2, 'k'), (9,9,9, '00:01:00', 'berlin', 2,'k')," .
        "(10,10,10,'00:01:00','berlin',2, 'k'), (11,11,11,'00:01:00','szczecin',2, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',2, 'k'), (13,13,13,'00:01:00','londyn',2,'k')," .
        "(1,1,1, '00:01:00', 'dębica',3, 'k'), (2,2,2,'00:01:00','londyn',3,'k')," .
        "(3,3,3, '00:01:00', 'szczecin', 3, 'k'), (4,4,4,'00:01:00', 'szczecin',3, 'k'), " .
        "(5,5,5,'00:01:00','berlin',3, 'k')," .
        "(6,6,6,'00:01:00', 'berlin',3, 'k'),(7,7,7,'00:01:00', 'szczecin', 3, 'k')," .
        "(8,8,8, '00:01:00','berlin',3, 'k'), (9,9,9, '00:01:00', 'berlin', 3,'k')," .
        "(10,10,10,'00:01:00','berlin',3, 'k'), (11,11,11,'00:01:00','szczecin',3, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',3, 'k'), (13,13,13,'00:01:00','londyn',3,'k')," .
        "(6,6,6,'00:01:00', 'berlin',4, 'k'),(7,7,7,'00:01:00', 'szczecin', 4, 'k')," .
        "(8,8,8, '00:01:00','berlin',4, 'k'), (9,9,9, '00:01:00', 'berlin', 4,'k')," .
        "(10,10,10,'00:01:00','berlin',4, 'k'), (11,11,11,'00:01:00','szczecin',4, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',4, 'k'), (13,13,13,'00:01:00','londyn',4,'k')," .
        "(6,6,6,'00:01:00', 'berlin',5, 'k'),(7,7,7,'00:01:00', 'szczecin', 5, 'k')," .
        "(8,8,8, '00:01:00','berlin',5, 'k'), (9,9,9, '00:01:00', 'berlin', 5,'k')," .
        "(10,10,10,'00:01:00','berlin',5, 'k'), (11,11,11,'00:01:00','szczecin',5, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',5, 'k'), (13,13,13,'00:01:00','londyn',5,'k')," .
        "(6,6,6,'00:01:00', 'berlin',6, 'k'),(7,7,7,'00:01:00', 'szczecin', 6, 'k')," .
        "(8,8,8, '00:01:00','berlin',6, 'k'), (9,9,9, '00:01:00', 'berlin', 6,'k')," .
        "(10,10,10,'00:01:00','berlin',6, 'k'), (11,11,11,'00:01:00','szczecin',6, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',6, 'k'), (13,13,13,'00:01:00','londyn',6,'k')," .
        "(1,1,1, '00:01:00', 'dębica',7, 'k'), (2,2,2,'00:01:00','londyn',7,'k')," .
        "(3,3,3, '00:01:00', 'szczecin', 7, 'k'), (4,4,4,'00:01:00', 'szczecin',7, 'k'), " .
        "(5,5,5,'00:01:00','berlin',7, 'k')," .
        "(6,6,6,'00:01:00', 'berlin',7, 'k'),(7,7,7,'00:01:00', 'szczecin', 7, 'k')," .
        "(8,8,8, '00:01:00','berlin',7, 'k'), (9,9,9, '00:01:00', 'berlin', 7,'k')," .
        "(10,10,10,'00:01:00','berlin',7, 'k'), (11,11,11,'00:01:00','szczecin',7, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',7, 'k'), (13,13,13,'00:01:00','londyn',7,'k')," .
        "(1,1,1, '00:01:00', 'dębica',8, 'k'), (2,2,2,'00:01:00','londyn',8,'k')," .
        "(3,3,3, '00:01:00', 'szczecin', 8, 'k'), (4,4,4,'00:01:00', 'szczecin',8, 'k'), " .
        "(5,5,5,'00:01:00','berlin',8, 'k')," .
        "(6,6,6,'00:01:00', 'berlin',8, 'k'),(7,7,7,'00:01:00', 'szczecin', 8, 'k')," .
        "(8,8,8, '00:01:00','berlin',8, 'k'), (9,9,9, '00:01:00', 'berlin', 8,'k')," .
        "(10,10,10,'00:01:00','berlin',8, 'k'), (11,11,11,'00:01:00','szczecin',3, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',8, 'k'), (13,13,13,'00:01:00','londyn',8,'k')," .
        "(6,6,6,'00:01:00', 'berlin',9, 'k'),(7,7,7,'00:01:00', 'szczecin', 9, 'k')," .
        "(8,8,8, '00:01:00','berlin',9, 'k'), (9,9,9, '00:01:00', 'berlin', 9,'k')," .
        "(10,10,10,'00:01:00','berlin',9, 'k'), (11,11,11,'00:01:00','szczecin',9, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',9, 'k'), (13,13,13,'00:01:00','londyn',9,'k')," .
        "(1,1,1, '00:01:00', 'dębica',10, 'k'), (2,2,2,'00:01:00','londyn',10,'k')," .
        "(3,3,3, '00:01:00', 'szczecin', 10, 'k'), (4,4,4,'00:01:00', 'szczecin',10, 'k'), " .
        "(5,5,5,'00:01:00','berlin',10, 'k')," .
        "(6,6,6,'00:01:00', 'berlin',10, 'k'),(7,7,7,'00:01:00', 'szczecin', 10, 'k')," .
        "(8,8,8, '00:01:00','berlin',10, 'k'), (9,9,9, '00:01:00', 'berlin', 10,'k')," .
        "(10,10,10,'00:01:00','berlin',10, 'k'), (11,11,11,'00:01:00','szczecin',10, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',10, 'k'), (13,13,13,'00:01:00','londyn',10,'k')," .
        "(1,1,1, '00:01:00', 'dębica',11, 'k'), (2,2,2,'00:01:00','londyn',11,'k')," .
        "(3,3,3, '00:01:00', 'szczecin', 11, 'k'), (4,4,4,'00:01:00', 'szczecin',11, 'k'), " .
        "(5,5,5,'00:01:00','berlin',11, 'k')," .
        "(6,6,6,'00:01:00', 'berlin',11, 'k'),(7,7,7,'00:01:00', 'szczecin', 11, 'k')," .
        "(8,8,8, '00:01:00','berlin',11, 'k'), (9,9,9, '00:01:00', 'berlin', 11,'k')," .
        "(10,10,10,'00:01:00','berlin',11, 'k'), (11,11,11,'00:01:00','szczecin',11, 'k')," .
        "(12,12,12, '00:01:00', 'dębica',11, 'k'), (13,13,13,'00:01:00','londyn',11,'k')," .
    "(6,6,6,'00:01:00', 'berlin',12, 'k'),(7,7,7,'00:01:00', 'szczecin', 12, 'k')," .
    "(8,8,8, '00:01:00','berlin',12, 'k'), (9,9,9, '00:01:00', 'berlin', 12,'k')," .
    "(10,10,10,'00:01:00','berlin',12, 'k'), (11,11,11,'00:01:00','szczecin',12, 'k')," .
    "(12,12,12, '00:01:00', 'dębica',12, 'k'), (13,13,13,'00:01:00','londyn',12,'k')," .
    "(1,1,1, '00:01:00', 'dębica',13, 'k'), (2,2,2,'00:01:00','londyn',13,'k')," .
    "(3,3,3, '00:01:00', 'szczecin', 13, 'k'), (4,4,4,'00:01:00', 'szczecin',13, 'k'), " .
    "(5,5,5,'00:01:00','berlin',13, 'k')," .
    "(6,6,6,'00:01:00', 'berlin',13, 'k'),(7,7,7,'00:01:00', 'szczecin', 13, 'k')," .
    "(8,8,8, '00:01:00','berlin',13, 'k'), (9,9,9, '00:01:00', 'berlin', 13,'k')," .
    "(10,10,10,'00:01:00','berlin',13, 'k'), (11,11,11,'00:01:00','szczecin',13, 'k')," .
    "(12,12,12, '00:01:00', 'dębica',13, 'k'), (13,13,13,'00:01:00','londyn',13,'k')," .
    "(6,6,6,'00:01:00', 'berlin',14, 'k'),(7,7,7,'00:01:00', 'szczecin', 14, 'k')," .
    "(8,8,8, '00:01:00','berlin',14, 'k'), (9,9,9, '00:01:00', 'berlin', 14,'k')," .
    "(10,10,10,'00:01:00','berlin',14, 'k'), (11,11,11,'00:01:00','szczecin',14, 'k')," .
    "(12,12,12, '00:01:00', 'dębica',14, 'k'), (13,13,13,'00:01:00','londyn',14,'k')," .
    "(6,6,6,'00:01:00', 'berlin',15, 'k'),(7,7,7,'00:01:00', 'szczecin', 15, 'k')," .
    "(8,8,8, '00:01:00','berlin',15, 'k'), (9,9,9, '00:01:00', 'berlin', 15,'k')," .
    "(10,10,10,'00:01:00','berlin',15, 'k'), (11,11,11,'00:01:00','szczecin',15, 'k')," .
    "(12,12,12, '00:01:00', 'dębica',15, 'k'), (13,13,13,'00:01:00','londyn',15,'k')," .
    "(1,1,1, '00:01:00', 'dębica',16, 'k'), (2,2,2,'00:01:00','londyn',16,'k')," .
    "(3,3,3, '00:01:00', 'szczecin', 16, 'k'), (4,4,4,'00:01:00', 'szczecin',16, 'k'), " .
    "(5,5,5,'00:01:00','berlin',17, 'k')," .
    "(6,6,6,'00:01:00', 'berlin',17, 'k'),(7,7,7,'00:01:00', 'szczecin', 17, 'k')," .
    "(8,8,8, '00:01:00','berlin',17, 'k'), (9,9,9, '00:01:00', 'berlin', 17,'k')," .
    "(10,10,10,'00:01:00','berlin',17, 'k'), (11,11,11,'00:01:00','szczecin',17, 'k')," .
    "(12,12,12, '00:01:00', 'dębica',17, 'k'), (13,13,13,'00:01:00','londyn',17,'k')," .
    "(1, 1, 14, '00:01:00', 'Berlin', 1, 'm'), (2,2,15,'00:01:00', 'berlin', 1, 'm'),".
    "(3,3,16, '00:01:00', 'szczecin', 1, 'm'), (4,4,17,'00:01:00', 'szczecin',1, 'm'), " .
    "(5,5,18,'00:01:00','berlin',1, 'm')," .
    "(6,6,19,'00:01:00', 'berlin',1, 'm'),(7,7,20,'00:01:00', 'szczecin', 1, 'm')," .
    "(8,8,21, '00:01:00','berlin',1, 'm'), (9,9,22, '00:01:00', 'berlin', 1 ,'m')," .
    "(10,10,23,'00:01:00','berlin',1, 'm'), (11,11,24,'00:01:00','szczecin',1, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',1, 'm'), (13,13,26,'00:01:00','londyn',1,'m')," .
    "(1, 1, 14, '00:01:00', 'Berlin', 2, 'm'), (2,2,15,'00:01:00', 'berlin', 2, 'm'),".
    "(3,3,16, '00:01:00', 'szczecin', 2, 'm'), (4,4,17,'00:01:00', 'szczecin',2, 'm'), " .
    "(5,5,18,'00:01:00','berlin',2, 'm')," .
    "(6,6,19,'00:01:00', 'berlin',2, 'm'),(7,7,20,'00:01:00', 'szczecin', 2, 'm')," .
    "(8,8,21, '00:01:00','berlin',2, 'm'), (9,9,22, '00:01:00', 'berlin', 2 ,'m')," .
    "(10,10,23,'00:01:00','berlin',2, 'm'), (11,11,24,'00:01:00','szczecin',2, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',2, 'm'), (13,13,26,'00:01:00','londyn',2,'m')," .
    "(1, 1, 14, '00:01:00', 'Berlin', 3, 'm'), (2,2,15,'00:01:00', 'berlin', 3, 'm'),".
    "(3,3,16, '00:01:00', 'szczecin', 3, 'm'), (4,4,17,'00:01:00', 'szczecin',3, 'm'), " .
    "(5,5,18,'00:01:00','berlin',3, 'm')," .
    "(6,6,19,'00:01:00', 'berlin',3, 'm'),(7,7,20,'00:01:00', 'szczecin', 3, 'm')," .
    "(8,8,21, '00:01:00','berlin',3, 'm'), (9,9,22, '00:01:00', 'berlin', 3 ,'m')," .
    "(10,10,23,'00:01:00','berlin',3, 'm'), (11,11,24,'00:01:00','szczecin',3, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',3, 'm'), (13,13,26,'00:01:00','londyn',3,'m')," .
    "(6,6,19,'00:01:00', 'berlin',4, 'm'),(7,7,20,'00:01:00', 'szczecin', 4, 'm')," .
    "(8,8,21, '00:01:00','berlin',4, 'm'), (9,9,22, '00:01:00', 'berlin', 4 ,'m')," .
    "(10,10,23,'00:01:00','berlin',4, 'm'), (11,11,24,'00:01:00','szczecin',4, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',4, 'm'), (13,13,26,'00:01:00','londyn',4,'m')," .
    "(6,6,19,'00:01:00', 'berlin',5, 'm'),(7,7,20,'00:01:00', 'szczecin', 5, 'm')," .
    "(8,8,21, '00:01:00','berlin',5, 'm'), (9,9,22, '00:01:00', 'berlin', 5 ,'m')," .
    "(10,10,23,'00:01:00','berlin',5, 'm'), (11,11,24,'00:01:00','szczecin',5, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',5, 'm'), (13,13,26,'00:01:00','londyn',5,'m')," .
    "(6,6,19,'00:01:00', 'berlin',6, 'm'),(7,7,20,'00:01:00', 'szczecin', 6, 'm')," .
    "(8,8,21, '00:01:00','berlin',6, 'm'), (9,9,22, '00:01:00', 'berlin', 6,'m')," .
    "(10,10,23,'00:01:00','berlin',6, 'm'), (11,11,24,'00:01:00','szczecin',6, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',6, 'm'), (13,13,26,'00:01:00','londyn',6,'m')," .
    "(1, 1, 14, '00:01:00', 'Berlin', 7, 'm'), (2,2,15,'00:01:00', 'berlin', 7, 'm'),".
    "(3,3,16, '00:01:00', 'szczecin', 7, 'm'), (4,4,17,'00:01:00', 'szczecin',7, 'm'), " .
    "(5,5,18,'00:01:00','berlin',7, 'm')," .
    "(6,6,19,'00:01:00', 'berlin',7, 'm'),(7,7,20,'00:01:00', 'szczecin', 7, 'm')," .
    "(8,8,21, '00:01:00','berlin',7, 'm'), (9,9,22, '00:01:00', 'berlin', 7 ,'m')," .
    "(10,10,23,'00:01:00','berlin',7, 'm'), (11,11,24,'00:01:00','szczecin',7, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',7, 'm'), (13,13,26,'00:01:00','londyn',7,'m')," .
    "(1, 1, 14, '00:01:00', 'Berlin', 8, 'm'), (2,2,15,'00:01:00', 'berlin', 8, 'm'),".
    "(3,3,16, '00:01:00', 'szczecin', 8, 'm'), (4,4,17,'00:01:00', 'szczecin',8, 'm'), " .
    "(5,5,18,'00:01:00','berlin',8, 'm')," .
    "(6,6,19,'00:01:00', 'berlin',8, 'm'),(7,7,20,'00:01:00', 'szczecin', 8, 'm')," .
    "(8,8,21, '00:01:00','berlin',8, 'm'), (9,9,22, '00:01:00', 'berlin', 8,'m')," .
    "(10,10,23,'00:01:00','berlin',8, 'm'), (11,11,24,'00:01:00','szczecin',8, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',8, 'm'), (13,13,26,'00:01:00','londyn',8,'m')," .
    "(6,6,19,'00:01:00', 'berlin',9, 'm'),(7,7,20,'00:01:00', 'szczecin', 9, 'm')," .
    "(8,8,21, '00:01:00','berlin',9, 'm'), (9,9,22, '00:01:00', 'berlin', 9,'m')," .
    "(10,10,23,'00:01:00','berlin',9, 'm'), (11,11,24,'00:01:00','szczecin',9, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',9, 'm'), (13,13,26,'00:01:00','londyn',9,'m')," .
      "(1, 1, 14, '00:01:00', 'Berlin', 10, 'm'), (2,2,15,'00:01:00', 'berlin', 10, 'm'),".
    "(3,3,16, '00:01:00', 'szczecin', 10, 'm'), (4,4,17,'00:01:00', 'szczecin',10, 'm'), " .
    "(5,5,18,'00:01:00','berlin',10, 'm')," .
    "(6,6,19,'00:01:00', 'berlin',10, 'm'),(7,7,20,'00:01:00', 'szczecin', 10, 'm')," .
    "(8,8,21, '00:01:00','berlin',10, 'm'), (9,9,22, '00:01:00', 'berlin', 10,'m')," .
    "(10,10,23,'00:01:00','berlin',10, 'm'), (11,11,24,'00:01:00','szczecin',10, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',10, 'm'), (13,13,26,'00:01:00','londyn',10,'m')," .
    "(1, 1, 14, '00:01:00', 'Berlin', 11, 'm'), (2,2,15,'00:01:00', 'berlin', 11, 'm'),".
    "(3,3,16, '00:01:00', 'szczecin', 11, 'm'), (4,4,17,'00:01:00', 'szczecin',11, 'm'), " .
    "(5,5,18,'00:01:00','berlin',11, 'm')," .
    "(6,6,19,'00:01:00', 'berlin',11, 'm'),(7,7,20,'00:01:00', 'szczecin', 11, 'm')," .
    "(8,8,21, '00:01:00','berlin',11, 'm'), (9,9,22, '00:01:00', 'berlin', 11,'m')," .
    "(10,10,23,'00:01:00','berlin',11, 'm'), (11,11,24,'00:01:00','szczecin',11, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',11, 'm'), (13,13,26,'00:01:00','londyn',11,'m')," .
    "(6,6,19,'00:01:00', 'berlin',12, 'm'),(7,7,20,'00:01:00', 'szczecin', 12, 'm')," .
    "(8,8,21, '00:01:00','berlin',12, 'm'), (9,9,22, '00:01:00', 'berlin', 12,'m')," .
    "(10,10,23,'00:01:00','berlin',12, 'm'), (11,11,24,'00:01:00','szczecin',12, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',12, 'm'), (13,13,26,'00:01:00','londyn',12,'m')," .
    "(1, 1, 14, '00:01:00', 'Berlin', 13, 'm'), (2,2,15,'00:01:00', 'berlin', 13, 'm'),".
    "(3,3,16, '00:01:00', 'szczecin', 13, 'm'), (4,4,17,'00:01:00', 'szczecin',13, 'm'), " .
    "(5,5,18,'00:01:00','berlin',13, 'm')," .
    "(6,6,19,'00:01:00', 'berlin',13, 'm'),(7,7,20,'00:01:00', 'szczecin', 13, 'm')," .
    "(8,8,21, '00:01:00','berlin',13, 'm'), (9,9,22, '00:01:00', 'berlin', 13,'m')," .
    "(10,10,23,'00:01:00','berlin',13, 'm'), (11,11,24,'00:01:00','szczecin',13, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',13, 'm'), (13,13,26,'00:01:00','londyn',13,'m')," .
    "(6,6,19,'00:01:00', 'berlin',14, 'm'),(7,7,20,'00:01:00', 'szczecin', 14, 'm')," .
    "(8,8,21, '00:01:00','berlin',14, 'm'), (9,9,22, '00:01:00', 'berlin', 14,'m')," .
    "(10,10,23,'00:01:00','berlin',14, 'm'), (11,11,24,'00:01:00','szczecin',13, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',14, 'm'), (13,13,26,'00:01:01','londyn',14,'m')," .
    "(6,6,19,'00:01:00', 'berlin',15, 'm'),(7,7,20,'00:01:00', 'szczecin', 15, 'm')," .
    "(8,8,21, '00:01:00','berlin',15, 'm'), (9,9,22, '00:01:00', 'berlin', 15,'m')," .
    "(10,10,23,'00:01:00','berlin',15, 'm'), (11,11,24,'00:01:00','szczecin',15, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',15, 'm'), (13,13,26,'00:01:00','londyn',15,'m')," .
    "(1, 1, 14, '00:01:00', 'Berlin', 16, 'm'), (2,2,15,'00:01:00', 'berlin', 16, 'm'),".
    "(3,3,16, '00:01:00', 'szczecin', 16, 'm'), (4,4,17,'00:01:00', 'szczecin',16, 'm'), " .
    "(5,5,18,'00:01:00','berlin',17, 'm')," .
    "(6,6,19,'00:01:00', 'berlin',17, 'm'),(7,7,20,'00:01:00', 'szczecin', 17, 'm')," .
    "(8,8,21, '00:01:00','berlin',17, 'm'), (9,9,22, '00:01:00', 'berlin', 17,'m')," .
    "(10,10,23,'00:01:00','berlin',17, 'm'), (11,11,24,'00:01:00','szczecin',17, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',17, 'm'), (13,13,26,'00:01:00','londyn',17,'m')," .
    "(6,6,19,'00:01:00', 'berlin',18, 'm'),(7,7,20,'00:01:00', 'szczecin', 18, 'm')," .
    "(8,8,21, '00:01:00','berlin',18, 'm'), (9,9,22, '00:01:00', 'berlin', 18,'m')," .
    "(10,10,23,'00:01:00','berlin',18, 'm'), (11,11,24,'00:01:00','szczecin',18, 'm')," .
    "(12,12,25, '00:01:00', 'dębica',18, 'm'), (13,13,26,'00:01:00','londyn',18,'m'),";


*/
    $wynik5=mysql_query($rekordy) or die (mysql_error());
?>
</body>
</html>
