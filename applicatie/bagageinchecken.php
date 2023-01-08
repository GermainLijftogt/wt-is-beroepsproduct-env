<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inchecken</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
            <a href="medewerker.html">CheckinGelre</a>
            <div class="dropdown">
                <button class="dropbutton">Menu</button>
                <div class="content">
                    <a href="medewerker.html">Home</a>
                    <a href="vluchtenmedewerker.html">Vluchtenoverzicht</a>
                    <a href="passagierdetail.html">Passagierdetail</a>
                    <a href="bagageinchecken.html">Bagage inchecken</a>
                    <a href="vluchtAanmaken.html">Vlucht aanmaken</a>
                </div>
            </div>
            <a href="begin.html" class="split">Uitloggen</a>
        </header>

        <h1>Bagage van Daan inchecken</h1>

        <form action="medewerker.html">
        <!-- bij alle forms moet nog: method="post". Dit heb ik gedaan zodat ik niet een speciale button moet maken maar zodat ik gewoon die uit de form kan gebruiken, anders kreeg ik foutmelding -->

            <label for="psgnummer">Passagiernummer:</label>
            <input id="psgnummer" placeholder="bijvoorbeeld: 123456" type="number" name="psgnummer" required>

            <label for="hvlbagage">Hoeveel bagage:</label>
            <select name="hvlbagage" id="hvlbagage">
                <option value="1">1 Tas</option>
                <option value="2">2 Tassen</option>
                <option value="3">3 Tassen</option>
                <option value="4">4 Tassen</option>
            </select>

            <label for="typebagage">Type Bagage:</label>
            <select name="typebagage" id="typebagage">
                <option value="handbagage">Handbagage</option>
                <option value="ruimbagage">Ruimbagage</option>
            </select>

            <label for="typebagage1">Type Bagage:</label>
            <select name="typebagage1" id="typebagage1">
                <option value="niks">niks</option>
                <option value="handbagage">Handbagage</option>
                <option value="ruimbagage">Ruimbagage</option>
            </select>

            <label for="typebagage2">Type Bagage:</label>
            <select name="typebagage2" id="typebagage2">
                <option value="niks">niks</option>
                <option value="handbagage">Handbagage</option>
                <option value="ruimbagage">Ruimbagage</option>
            </select>
            
            <label for="typebagage3">Type Bagage:</label>
            <select name="typebagage3" id="typebagage3">
                <option value="niks">niks</option>
                <option value="handbagage">Handbagage</option>
                <option value="ruimbagage">Ruimbagage</option>
            </select>

            <input type="submit" value="Bagage inchecken">
        </form>
        <footer>
            <a href="privacymedewerker.html">Privacyverklaring</a>
        </footer>
    </body>
</html>