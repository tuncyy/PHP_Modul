<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eBike daten</title>
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
      echo "$Artikel->Bezeichnung<br>
            $Artikel->Farbe<br>
            $Artikel->Preis<br>
            $Artikel->Anzahl<br>";
    }
    echo "wurde gebucht<br>";

    ?>
    </body>
    </html>