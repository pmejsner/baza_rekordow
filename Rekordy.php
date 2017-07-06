<html>
<head>
    <META HTTP-EQUIV="content-type" CONTENT="text/html; charset=iso-utf-8">
    <title>Rekordy Polski ON</title>
    <link href="baza.css" rel="stylesheet"
</head>
<body>
<?php
// połączenie z bazą danych
$connect= mysql_connect("localhost","pm23","piotrek1") or
die ("Sprawdź połączenie z serwerem");

mysql_select_db("baza50");

// informacje o rekordach

$dystans2=$_POST['$sql'];
$plec2=$_POST['plec'];
$query="SELECT DISTINCT *  FROM rekord WHERE dystans=$dystans2 AND plec=$plec2
        ORDER BY grupa_startowa";
$wynik=mysql_query($query) or die (mysql_error());
$num_movies =mysql_num_rows($wynik);

// funkcja pobierająca nazwę grupy startowej

function get_grupa() {
    global $grupa_startowa;
    global $grupa;

    $query_a="SELECT nazwa_grupa " .
             "FROM grupa " .
             "WHERE id_grupa=$grupa_startowa";
    $results_a=mysql_query($query_a) or die (mysql_error());
    $row_a=mysql_fetch_array($results_a);
    extract($row_a);
    $grupa=$nazwa_grupa;

}

// funkcja pobierająca imięi nazwisko zawodnika

function get_people() {
        global $zawodnik;
        global $people;
        $query_c = "SELECT people_fullname " .
            "FROM people " .
            "WHERE people_id=$zawodnik";
        $results_c = mysql_query($query_c) or die (mysql_error());
        $row_c = mysql_fetch_array($results_c);
        extract($row_c);
        $people = $people_fullname;
    }

// funkcja pobierająca nazwę dystansu

function get_dystans() {
    global $dystans;
    global $dystans3;

    $query_b="SELECT nazwa_dystans " .
        "FROM dystans " .
        "WHERE id_dystans=$dystans";
    $results_b=mysql_query($query_b) or die (mysql_error());
    $row_b=mysql_fetch_array($results_b);
    extract($row_b);
    $dystans3=$nazwa_dystans;

}

// funkcja pobierająca nazwę klubu

function get_klub() {
    global $klub;
    global $nazwa_klubu;
    $query_klub="SELECT nazwa_klub " .
                "FROM klub " .
                "WHERE id_klub=$klub";
    $results_klub=mysql_query($query_klub) or die (mysql_error());
    $row_klub=mysql_fetch_array($results_klub);
    extract($row_klub);
    $nazwa_klubu=$nazwa_klub;
}

// wyswietlanie  rekordow

$rekord_details= '';
while ($row =mysql_fetch_assoc($wynik)) {
    $id_rekord =$row['id_rekord'];
    $grupa_startowa = $row['grupa_startowa'];
    $zawodnik=$row['zawodnik'];
    $klub=$row['klub'];
    $czas=$row['czas'];
    $miejsce_rekordu=$row['miejsce_rekordu'];
    $dystans=$row['dystans'];
    $plec=$row['plec'];

    get_grupa();
    get_dystans();
    get_people();
    get_klub();

        $rekord_details .=<<<ABC
    <tr>
        <td>$grupa</td>
        <td>$people</td>
        <td>$nazwa_klubu</td>
        <td>$czas</td>
        <td>$miejsce_rekordu</td>
    </tr>
ABC;
}

// nagłówek strony i tabeli
$rekord_header =<<<ABC

<div id=header>
    <img src=http://pzsnstart.eu/wp-content/uploads/2015/04/LOGOTYP_FOTO.jpg>
    <h2><center>Rekordy Polski Osób Niepełnosprawnych</center></h2>
    </div>
<table width="65%" border="1" cellpadding="2"
        cellspacing="2" align="center"

    <tr>
        <th>Grupa startowa</th>
        <th>Imię Nazwisko</th>
        <th>Klub</th>
        <th>Czas</th>
        <th>Miejsce i rok rekordu</th>
    </tr>

ABC;

$nazwadystansu='';
if ($plec=='k') {
    $nazwadystansu .=<<<ABC
    <p><center>Wybrałeś rekordy Polski Kobiet na dystansie $dystans3</center></p>
ABC;
}else {
    $nazwadystansu .= <<<ABC
    <p><center>Wybrałeś rekordy Polski Mężczyzn na dystansie $dystans3</center></p>
ABC;
}

$rekord_footer="</table>";

$stopka=<<<ABC

<footer id=stopka>
    <div align="center">
    <font size="1">Ta strona została stworzona przez: <a
        href=mailto:pmejsner1992@gmail.com> Piotra Mejsner</a></font>
    </div>

</footer>

ABC;
$rekord=<<<ABC
    $rekord_header
    $nazwadystansu
    $rekord_details
    $rekord_footer
    $stopka
ABC;

echo $rekord;


?>