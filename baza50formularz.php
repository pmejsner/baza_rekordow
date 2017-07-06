<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <META HTTP-EQUIV="content-type" CONTENT="text/html; charset="utf-8">
<title>Rekordy Polski ON</title>
    <style>
        html {
            font-size:16px;
            font-family:Helvetica, sans-serif;
            background-image: url("https://opolczykpl.files.wordpress.com/2014/12/flaga-polski.jpg");
            background-size: contain;
            background-size: cover;
        }
        div {
            font-style: italic;
            color: darkslategray;
        }
        hr {
            border: 0;
            height: 1px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.1))
        }
        img {
            margin-top: 8px;
            margin-left: 25px;
            width: 150px;
            height: 85px;
            float: left;
        }
        fieldset  {
            border: solid;
            margin-right: 20%;
            margin-left: 20%;
            margin-top: 5%;
            margin-bottom: 0%;
            padding-left: 5%;
            padding-right: 5%;
            border-radius: 24px;
        }
        #flexbox {
            display:flex;
            padding:1.25em;
        }
        #flexbox > div {
            font-size: 15px;
            padding:1em;

        }

        select {
            margin-right: 20%;
            margin-left: 20%;
            color: lightslategrey;
            border-radius: 10px;


        }
        p>input {
            background-color: white;
            color: darkslategray;
            font-size: 16px;
            font-family: Helvetica, sans-serif;
            padding: 8px 24px ;
            border-radius: 10px;

        }
    </style>
</head>
<body>
<center>
<form action="Rekordy.php" method="post">
    <div>
        <img src="http://pzsnstart.eu/wp-content/uploads/2015/04/LOGOTYP_FOTO.jpg" alt="">
        <br>
        <h1 >Witaj na stronie rekordów Polski w pływaniu osób niepełnosprawnych.</h1>
        <hr>
        <hr>
    </div>
<fieldset>
     <div id="flexbox">
         <div style="margin-left: 6%">Wybierz płeć:</div>
         <div><input type="checkbox" name="plec" value=1>Kobiety</div>
         <div><input type="checkbox" name="plec" value=2>Mężczyzni</div>
    </div>
    <br>
        <?php
        $connect = mysql_connect("localhost", "pm23", "piotrek1") or
            die ("Sprawdź połączenie z serwerem");

            mysql_select_db("baza50");

            $sql = mysql_query('SELECT id_dystans, nazwa_dystans FROM dystans');
            echo'<div>Wybierz dystans: </div>';
            echo '<br>';
            echo '<select name="$sql">';
            echo '<option>Wszystkie</option>';
            while($row = mysql_fetch_row($sql))
                echo '<option value=' . $row[0].  '> ' . $row[1].  '</option>';
            echo '</select>';
            ?>
            <br>
    <br>
        <p>
        <input type="submit" name="Pokaż" value="Pokaż" />
        </center>
        </p>
</fieldset>
</form>
</body>
</html>