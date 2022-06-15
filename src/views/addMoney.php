<?php
require __DIR__ . '/top.php';
?>
<section class="header">
    <div class="welcome">
        <h1>Marigold<span style="color:black;">Bank</span></h1>
        <img src="../img/marigold1.png" alt="icon" class="">
    </div>
    <div class="accountName">

        <a href="../marigold/bank.php">Atsijungti</a>
    </div>
</section>
<section class="containerClients">
    <div class="clientTable yellowClients">
        <h1>Pridėti lėšų</h1>
    </div>
    <div class="clientTable">
        <div class="addOrRem">
            <form method="post">
                <span>Sveiki <?= $users['Firstname'] ?></span>
                Suma :&emsp;<input type="number" name="add">
                <button class="clientBtn" type="submit">Patvirtinti</button>
            </form>
        </div>
    </div>
    <div class="clientTable yellowClients">
        <h1>Sąskaita</h1>
    </div>
    <div class="clientTable">
        <div class="clientList">
            <p class="clientName">Likutis:</p>
            <div class="clientLinks">
            </div>
        </div>
    </div>
</section>

<?php
require __DIR__ . '/footer.php';
require __DIR__ . '/bottom.php';
