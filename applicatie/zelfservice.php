<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zelfservice</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <header>
            <a href="home.html">CheckinGelre</a>
            <div class="dropdown">
                <button class="dropbutton">Menu</button>
                <div class="content">
                    <a href="home.html">Home</a>
                    <a href="zelfservice.html">Zelfservice</a>
                    <a href="vluchtenoverzicht.html">Vluchtenoverzicht</a>
                </div>
            </div>
            <a href="begin.html" class="split">Uitloggen</a>
        </header>
        <div class="zelfservice">
            <h1>Zelfservice Inchecken</h1>
            <p>hier kan u uzelf inchecken</p>
        </div>
        <div class="form">
        <form action="begin.html">
            <!-- bij alle forms moet nog: method="post". Dit heb ik gedaan zodat ik niet een speciale button moet maken maar zodat ik gewoon die uit de form kan gebruiken, anders kreeg ik foutmelding -->
                <label for="vnummer">Vluchtnummer:</label>
                <input id="vnummer" placeholder="123" type="number" name="vnummer" required>
            
                <label for="voornaam">Voornaam:</label>
                <input id="voornaam" placeholder="Voornaam" type="text" name="voornaam" required>
            
                <label for="achternaam">Achternaam:</label>
                <input id="achternaam" placeholder="Enter Achternaam" type="text" name="achternaam" required>
            
                <label for="typebagage">Type Bagage:</label>
                <select name="typebagage" id="typebagage">
                    <option value="handbagage">Handbagage</option>
                    <option value="ruimbagage">Ruimbagage</option>
                </select>

                <label for="typebagage2">meerdere koffers:</label>
                <select name="typebagage2" id="typebagage2">
                    <option value="handbagage">Handbagage</option>
                    <option value="ruimbagage">Ruimbagage</option>
                </select>
                
                <label for="psgnummer">Passagiernummer:</label>
                <input id="psgnummer" placeholder="12345678" type="number" name="psgnummer" required>
            
                <input type="submit" value="Inchecken">
            </form>
        </div>
        <footer>
            <a href="privacyverklaring.html">Privacyverklaring</a>
        </footer>
    </body>
</html>