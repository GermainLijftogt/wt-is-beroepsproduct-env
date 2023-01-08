<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inloggen</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <header>
            <a href="medewerkerinlog.html">CheckinGelre</a>
            <div class="dropdown">
                    <button class="dropbutton">Menu</button>
                    <div class="content">
                    </div>
            </div>
            <a href="begin.html" class="split">Terug</a>
        </header>

        <h1 class="inloggen">Inloggen</h1>
        <div class="form">
            <form action="medewerker.html">
            <!-- bij alle forms moet nog: method="post". Dit heb ik gedaan zodat ik niet een speciale button moet maken maar zodat ik gewoon die uit de form kan gebruiken, anders kreeg ik foutmelding -->

                <label for="medewerkernummer">Medewerkernummer:</label>
                <input id="medewerkernummer" placeholder="123456" type="text" name="medewerkernummer" required>

                <label for="password">Wachtwoord:</label>
                <input id="password" placeholder="Type hier uw via de mail gestuurde wachtwoord" type="password" name="password" required>

                <label for="psgnummer">Passagiernummer: </label>
                <input id="psgnummer" placeholder="123456" type="number" name="psgnummer">

                <input type="submit" value="Inloggen">
            </form>
        </div>
        <footer class="footer">
            <a href="privacyverklaring.html">Privacyverklaring</a>
        </footer>
    </body>
</html>