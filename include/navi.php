 <nav>
     <ul>
         <!-- Kopfgesteuerte Schleife benutzen foreach um eine Arrayelement auszugeben  -->
         <!-- Mit Doppelpunkt : unterbreche ich den php-prozess kurz -->
         <!-- Man gibt ein Label so aus: < ?= $navigationElement['label'] ?>-->
         <!-- Shortform "< ?="  Das Ergebnis ausgeben wollen   -->
         <?php foreach ($navigation as $navigationElement) : ?>
             <!-- Wenn die if Bedingung zutrifft, dann wird die class active ausgegeben und mit dem : sagt man was passieren soll, wenn es nicht zutrifft -->
             <li <?= ($navigationElement['active']) ? 'class="active"' : '' ?>><a href="<?= $navigationElement['target'] ?>"><?= $navigationElement['label'] ?></a></li>
         <?php endforeach; ?>
         <!-- mit endforeach sage ich " hier geht es weiter mit php", weil oben es ja mit : unterbrochen worden ist es geht auch mit if und endif -->
     </ul>
 </nav>

 <!-- <nav>
    <ul>
        <li class="active"><a href="index.php">Startseite</a></li>
        <li><a href="index.php">Kontakt</a></li>
        <li><a href="index.php">Über Mich</a></li>
    </ul>
</nav> -->