<?php
error_reporting(E_ALL);
ini_set('display_errors', 'ON');

include __DIR__ . '/functions.php';
$navigation = getNavigation();
// $navigation = getNavigation('index');
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/head.php' ?>


<body>
    <header class="container">
        <?php include __DIR__ . '/navi.php' ?>
    </header>

    <main>
        <section id="home">
            <h1>Startseite</h1>
            <p>Willkommen auf meiner Seite</p>
        </section>
    </main>
    <?php include __DIR__ . '/footer.php' ?>

</body>

</html>