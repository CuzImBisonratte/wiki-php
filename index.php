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
                    <a class="menu__link" href="/endpoints">Endpoints</a>
                </div>
                <div class="menu__item menu__itemgroup__item menu__item--active">
                    <a class="menu__link" href="/endpoints/">Classes</a>
                </div>
            </div>
        </div>
    </div>
    <main>
    </main>
    <footer></footer>
</body>

</html>