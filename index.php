<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/res/html/head.html';
    include $_SERVER['DOCUMENT_ROOT'] . '/res/php/noLogin.php';
    ?>
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/navbar.html'; ?>
    <!-- TODO: Replace menu with menu generator PHP script -->
    <div class="menu">
        <div class="menu__item">
            <a class="menu__link" href="/">Intro</a>
        </div>
        <div class="menu__item">
            <div class="menu__itemgroup">
                <div class="menu__item menu__itemgroup__title">
                    <a class="menu__link" href="/?e=endpoints">Endpoints</a>
                </div>
                <div class="menu__item menu__itemgroup__item menu__item--active">
                    <a class="menu__link" href="/?e=endpoints_classes">Classes</a>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="container">
            <article>
                <?php
                include $_SERVER['DOCUMENT_ROOT'] . '/res/php/locationGenerator.php';
                generateLocation($_GET['e']);
                ?>
            </article>
        </div>
    </main>
    <footer></footer>
</body>

</html>