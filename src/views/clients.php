<?php

require __DIR__ . '/top.php';
?>

<section class="header">
        <div class="welcome">
            <h1>Marigold<span style="color:black;">Bank</span></h1>
            <img src="../img/marigold1.png" alt="icon" class="">
        </div>
        <div class="links">
            <a href="">Pagrindinis</a>
            <a href="/clients">Klientų sarašas</a>
            <a href="/register">Registruoti nauja sąskaitą</a>
            <a href="">Prisijungti</a>
        </div>
    </section>
    <section class="containerClients">
        <div class="clientTable yellowClients">
            <h1>Klientų sarašas</h1>
        </div>
        <div class="clientTable">
            <div class="clientList">
            <?php foreach ($users as $user) : ?>
                <br>
                <span>Sąskaitos Nr.:<?= $user['AccountNumber'] ?></span>
                <span>Vardas:<?= $user['Firstname'] ?></span>
                <span>Pavarde:<?= $user['Lastname'] ?></span>
                <span>Id:<?= $user['Id'] ?></span>
                <span>Turimos lėšos:<?= $user['sum'] ?></span>
                <a  href="<?='//marigoldbank.lt/addMoney/'. $user['id']?>">Pridėti lėšas</a>
                <a  href="<?= '//marigoldbank.lt/remMoney/'.$user['id']?>">Nuskaičiuoti lėšas</a>
                <br>
                <hr>
            <?php endforeach ?>
            
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="Contact">
            <h3>Kontaktai</h3>
            <p>Vilnius, LT</p>
            <p>arcebasovas@gmail.com</p>
            <p>github.com/XSYTO</p>
            <p>+5(55)554555</p>
        </div>
        <div class="Contact">
            <p>&copy; Copyright 2022, MarigoldBank</p>
        </div>
    </section>


<?php
require __DIR__ . '/bottom.php';
