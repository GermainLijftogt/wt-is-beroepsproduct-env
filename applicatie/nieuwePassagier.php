<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nieuwe Passagier</title>
        <link rel="stylesheet" href="css/stylesheet.css">
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

        <h1>Nieuwe passagier</h1>
        <div class="form">
        <form action="medewerker.html">
        <!-- bij alle forms moet nog: method="post". Dit heb ik gedaan zodat ik niet een speciale button moet maken maar zodat ik gewoon die uit de form kan gebruiken, anders kreeg ik foutmelding -->

            <label for="vluchtnummer">Vluchtnummer:</label>
            <input id="vluchtnummer" placeholder="Bijvoorbeeld: 111" type="number" name="vluchtnummer" required>

            <label for="name">Naam:</label>
            <input id="name" placeholder="bijvoorbeeld: Jan de Wit" type="text" name="name" required>

            <label for="geslacht">Geslacht:</label>
            <select name="geslacht" id="geslacht">
                <option value="Man">Man</option>
                <option value="Vrouw">Vrouw</option>
            </select>

            <label for="stoel">Stoel:</label>
            <select name="stoel" id="stoel">
                <option value="24c">24C</option>
                <option value="24b">24B</option>
            </select>

            <label for="hvlbagage">Hoeveel bagage:</label>
            <select name="hvlbagage" id="hvlbagage">
                <option value="1">1 Tas</option>
                <option value="2">2 Tassen</option>
                <option value="3">3 Tassen</option>
                <option value="4">4 Tassen</option>
            </select>

            <input type="submit" value="Nieuwe passagier invullen">
        </form>
    </div>
        <footer>
            <a href="privacymedewerker.html">Privacyverklaring</a>
        </footer>
    </body>
</html>