<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-auslesen.css">
</head>

<body>
<?php 
     
     $product_name = $_POST['eBike'];
     $price = $_POST["price"];
     $anzahl = $_POST["anzahl"];
     $color = $_POST["farbe"];

     $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?>

                                    <Lager>
                                        <Artikel>
                                            <Bezeichnung>'.$product_name.'</Bezeichnung>
                                            <Farbe>'.$color.'</Farbe>
                                            <Preis>'.$price.'</Preis>
                                            <Anzahl>'.$anzahl.'</Anzahl>
                                        </Artikel>
                                    </Lager>');

    $xml->asXML('Artikel.xml');

    //XML auslesen
    $load_Xml = simplexml_load_file('Artikel.xml');

    foreach($load_Xml->Artikel as $Artikel){
      echo "<h1 class='top-text'>eBike daten</h1>
            <ol class='o-list'>
                <li class='list-item'><label class='text'>Artikel: </label>$Artikel->Bezeichnung</li>
                <li class='list-item'><label class='text'>Farbe: </label>$Artikel->Farbe</li>
                <li class='list-item'><label class='text'>Preis: </label>$Artikel->Preis €</li>
                <li class='list-item'><label class='text'>Anzahl: </label>$Artikel->Anzahl</li>
            </ol>";
    }
    echo "<h1 class='bottom-text'>wurde gebucht</h1><br>";


//            Database connection 
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "Hotel";
$db_port = "3307";

// default
$conn = "";

$conn = mysqli_connect($db_server,
$db_user,
$db_pass,
$db_name,
$db_port);


if($conn->connect_error){
    die("connection failed :".$conn->connect_error);
}
echo "connected succesfully<br>";

// tabelle erzeugen
$tab = "CREATE TABLE if not exists lager(id INT(6) UNSIGNED  AUTO_INCREMENT PRIMARY KEY,
                     product_Name VARCHAR(30) NOT NULL,
                     product_Quantity VARCHAR(30) NOT NULL,
                     product_Price_in_€ FLOAT NOT NULL,
                     product_color VARCHAR(30))";

if($conn->query($tab) === true){
    echo "tabelle erfolgreich erzeugt<br>";
}
else{
    echo "fehler :".$conn->error;
}

// daten in tabelle einfügen 
$eintrag = "INSERT INTO lager(product_Name,product_Quantity,product_Price_in_€,product_color)
           VALUES('$product_name','$anzahl','$price','$color')";

if($conn->query($eintrag) === true){
    echo "eintrag erfolgreich erzeugt";
}
else{
    echo "fehler :".$eintrag."<br>".$conn->error;
}

$conn->close();
    ?> 
</body>
</html>