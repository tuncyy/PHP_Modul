<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eBikes</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
     <!-- Form tag mit Auswahlfeldern -->
  <h1 id="haupt-ueberschift"></h1><br>
  <img src="csm_Hotel_Ischgl_Contentbild_56_f10699793e.webp" alt="" class="eBike-bild">
  <h2 class="form-ueberschrift">eBike buchen</h2><br>

 <form action="auslesen2.php" method="POST" class="form">
    <div class="content">
        <label for="eBike" class="text">eBike</label><br>
        <input type="radio" name="eBike" value="eBike">
    </div>

    <div  class="content">
        <label for="farbe" class="text">farbe</label><br>
        <select name="farbe" id="farbe" class="select-color">
            <option value="blau">blau</option>
            <option value="gelb">gelb</option>
            <option value="rot" selected>rot</option>
            <option value="schwarz">schwarz</option>
        </select>
        <br>
    </div>

    <div  class="content">
        <label class="text-day">3 Tage</label>
        <label class="text-day">2 Tage</label>
        <label class="text-day">1 Tag</label><br>
        <label for="price" class="text-preis">Preis 19.99€<input type="radio" id="price" name="price" value="19.99"></label>
        <label for="price" class="text-preis">Preis 15.99€<input type="radio" id="price" name="price" value="15.99"></label>
        <label for="price" class="text-preis">Preis 12.99€<input type="radio" id="price" name="price" value="12.99"></label>
    </div>

    <div  class="content">
        <label for="anzahl" class="text">anzahl</label><br>
        <select name="anzahl" id="anzahl" class="select-count">
            <option value="10" >10</option>
            <option value="9">9</option>
            <option value="8">8</option>
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1" selected>1</option>
        </select><br>
    </div>

    <input type="submit" value="Buchen" class="buchen-button"><br>
 </form>

 <script>
    document.getElementById("haupt-ueberschift").innerHTML = "Tourist Bike GmbH";
 </script>
</body>
</html>