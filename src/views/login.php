<?php

require __DIR__ . '/top.php';
require __DIR__.'/header.php';
?>
    <section class="container">
        <img src="../img/icons8-money-box-96.png" alt="icon" class="img pulse">
        <div class="formParent yellow">
            <h1>Admino Teises</h1>
        </div>
        <div></div>
        <div class="formParent">
            <form action="" method="post" class="form">
                <label for="id">Asmens kodas :</label>
                <input type="number" name="id" require>

                <label for="password">Vardas :</label>
                <input type="password" name="password" require>
                <div class="privatebtn">
                    <button type="submit" name="submit" class="registerbtn">Prisijungti</button>
                </div>
            </form><br><br>
        </div>
    </section>
<?php
require __DIR__.'/footer.php';
require __DIR__ . '/bottom.php';
