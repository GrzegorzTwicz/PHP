<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="icon" href="styles/favico.ico">
    <title>Strona Główna</title>
</head>
<body>
<header>
        <div class="header_container">
            <h4>Grzegorz Tereszkiewicz</h4>
            <ul>
                <li><a href="home.php">Strona Główna</a></li>
                <li><a href="shop.php">Sklep</a></li>
                <li><a href="#about-me">O Mnie</a></li>
                <li><a href="#projects">Projekty</a></li>
                <li><a href="#contact-me">Kontakt</a></li>
                <?php if (isset($_SESSION["user_name"])): ?>
                    <li><a href="logout.php">Wyloguj się</a></li>
                <?php else: ?>
                    <li><a href="login.php">Zaloguj się</a></li>
                    <li><a href="RegisterPage.php">Zarejestruj się</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </header>

    <div class="underheader">
        <h1>Witaj na Moim Portfolio</h1>
        <h2><?php if (isset($_SESSION["user_name"]))
            echo "Witaj, " . $_SESSION["user_name"]; ?></h2>
        <p>Tutaj znajdziesz informacje o mnie i moich projektach.</p>
    </div>

    <section id="about-me">
        <h2>O Mnie</h2>
        <p>scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae 
            nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem 
            sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in nulla posuere 
            sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper eget duis at tellus at urna condimentum mattis pellentesque 
            id nibh tortor id aliquet lectus proin nibh nisl condimentum id venenatis a condimentum vitae sapien pellentesque habitant morbi 
            tristique senectus et netus et malesuada fames ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis 
            hendrerit dolor magna eget est lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus 
            et netus et malesuada fames ac turpis egestas integer eget aliquet nibh praesent tristique magna sit amet purus gravida quis blandit</p>
        <!-- <img src="./styles/[removal.ai]_tmp-64198bbda4618.png"/> -->
    </section>

    <section id="projects">
        <h2>Projekty</h2>
        <ul>
            <li>
                <h3>Projekt 1</h3>
                <a href="#">Link do projektu 1</a>
                <p>Opis projektu 1.</p>
            </li>
            <li>
                <h3>Projekt 2</h3>
                <a href="#">Link do projektu 2</a>
                <p>Opis projektu 2.</p>
            </li>
        </ul>
    </section>

    <section id="contact-me">
        <h2>Kontakt</h2>
        <form action="{{ url_for('contact') }}" method="POST">
            <label for="name">Imię</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Wiadomość</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Wyślij Wiadomość</button>
        </form>
    </section>

    <footer>
        <p>Prawa autorskie © Grzegorz Tereszkiewicz</p>
    </footer>
</body>
</html>
