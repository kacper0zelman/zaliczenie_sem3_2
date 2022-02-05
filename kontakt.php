
<!DOCTYPE html>
<html>

<head>
    <title>Prezentacja</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
        

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="mail.css">


    <meta http-equiv="pragma" content="no-cache" />


</head>

<body>
    <div class="frame">
        <div class="head">
            <div class="top-bar">
                <a href="index.html">
                    <button class="button">
                        <p>Ankieta</p>
                    </button>
                </a>
                <a href="wyniki.php">
                    <button class="button">
                        <p>Wyniki</p>
                    </button>
                </a>
                <a href="kontakt.php">
                    <button class="button">
                        <p>Kontakt i opis</p>
                    </button>
                </a>

            </div>
            <div class="title">
                <h1>Formularz kontaktowy</h1>

                <br>
                <p>Witaj, <br /> jestem Kacper Zelman absolwent technikum informatycznego. Przygotowałem stronę internetową, która mogłaby być użyta przez szkoły jako pewnego rodzaju informacja zwrotna dla szkół. Dotycząca opinii uczniów o czasie spędzonym w szkole i swoich planach na przyszłość.
                    <br /><br />
                 
                    

            </div>
        </div>
        <div class="body_bg">
            <div class="body">
                <form method="POST" action="wyslij.php">
                    <label for="imie">Imie

                    </label><input type='text' name='imie' id="imie" required>
                    <label for="nazwisko">Nazwisko
                        
                    </label><input type='text' name='nazwisko' id="nazwisko" required>

                    <label for="email">E-mail kontaktowy
                        
                    </label><input type='email' name='email' id="email" required>
                    <label for="temat">Temat wiadomości
                        
                    </label><input type='text' name='temat' id="temat" required>
                    <label for='wiadomosc'>Wiadomość:
                        
                    </label><textarea name='wiadomosc' id='wiadomosc' rows="5" required>

                        </textarea>
                    <input type='reset' value="Wyczyść">
                    <input type="submit" value='Wyślij' name="submit">
                </form>


            </div>
        </div>

    </div>

</body>


</html>
