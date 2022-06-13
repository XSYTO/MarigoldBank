<?php

require __DIR__ . '/top.php';
?>

<section class="header">
        <div class="welcome">
            <h1>Marigold<span style="color:black;">Bank</span></h1>
            <img src="../img/marigold1.png" alt="icon" class="">
        </div>
        <div class="links">
            <a href="../marigold/bank.php">Pagrindinis</a>
            <a href="../bankAccount/clientlist.php">Klientų sarašas</a>
            <a href="../marigold/BecomeCustomer.php">Registruoti nauja sąskaitą</a>
            <a href="../marigold/login.php">Prisijungti</a>
        </div>
    </section>
    <section class="containerClients">
        <div class="clientTable yellowClients">
            <h1>Klientų sarašas</h1>
        </div>
        <div class="clientTable">
            <div class="clientList">
            
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
