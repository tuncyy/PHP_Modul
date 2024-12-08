<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eBikes</title>

</head>

<body>
     
    <!-- Form tag mit Auswahlfeldern -->
  <h1>Tourist Bike GmbH</h1><br>
  <h2>eBike buchen</h2><br>

 <form action="auslesen3.php" method="POST">
    
        <label for="eBike">eBike</label><br>
        <input type="radio" name="eBike" value="eBike"><br><br>
    
        <label for="farbe">farbe</label><br>
        <select name="farbe" id="farbe">
            <option value="blau">blau</option>
            <option value="gelb">gelb</option>
            <option value="rot" selected>rot</option>
            <option value="schwarz">schwarz</option>
        </select>
    
        <br><br>

        <label>3 Tage</label><br>
        <label for="price">Preis 19.99€<input type="radio" id="price" name="price" value="19.99"></label><br><br>
        <label>2 Tage</label><br>
        <label for="price">Preis 15.99€<input type="radio" id="price" name="price" value="15.99"></label><br><br>
        <label>1 Tag</label><br>
        <label for="price">Preis 12.99€<input type="radio" id="price" name="price" value="12.99"></label>
    
        <br><br>

        <label for="anzahl">anzahl</label><br>
        <select name="anzahl" id="anzahl">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select><br>
    
        <br>

        <input type="submit" value="Buchen"><br>
 </form>

</body>
</html>