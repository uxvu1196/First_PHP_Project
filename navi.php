<!-- <nav>
    <ul>
        < ?php foreach ($navigation as $navigationElement) : ?>
            <li < ?= ($navigationElement['active']) ? 'class="active"' : '' ?>><a href="< ?= $navigationElement['target'] ? >">< ?= $navigationElement['label'] ?></a></li>
        < ?php endforeach; ?>
    </ul>
</nav> -->

<nav>
    <ul>
        <!-- Kopfgesteuerte Schleife benutzen foreach um eine Arrayelement auszugeben  -->
        <!-- Mit Doppelpunkt : unterbreche ich den php-prozess kurz -->
        <!-- Man gibt ein Label so aus: < ?= $navigationElement['label'] ?>-->
        <!-- Shortform "< ?="  Das Ergebnis ausgeben wollen   -->
        <?php foreach ($navigation as $navigationElement) : ?>
            <li> <?php
                    if ($navigationElement['active'] === true) {
                        echo 'class="active"';
                    }
                    ?><a href=" <?= $navigationElement['target'] ?>"><?= $navigationElement['label'] ?></a></li>
        <?php endforeach; ?>
        <!-- mit endforeach sage ich "hier geht es weiter mit php", weil oben es ja mit : unterbrochen worden ist 
    es geht auch mit if und endif -->

    </ul>
</nav>

<!-- <nav>
    <ul>
        <li class="active"><a href="index.php">Startseite</a></li>
        <li><a href="index.php">Kontakt</a></li>
        <li><a href="index.php">Über Mich</a></li>
    </ul>
</nav> -->