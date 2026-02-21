<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>

<?php require('partials/header.php') ?>

<main>
    <div class="introduction-container">
        <div class="text-introduction-container">
            <h2 class="text-introduction-title">
                Leer meer over Ada Lovelace en vrouwen in tech
            </h2>
            <p class="paragraph-styling">
                <?php foreach($resources as $resource) :?>
                    <li>
                        <?= $resource['title_id'] ?>
                    </li>

                <?php endforeach ?>
            </p>
        </div>
        <div class="image-introduction-container">
            <img class="image-general-styling" src="resources/images/Ada_Lovelace_daguerreotype_by_Antoine_Claudet_1843_-_cropped.png" alt="this is a placeholder image">
        </div>
    </div>
</main>

<?php require('partials/footer.php') ?>