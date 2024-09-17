<?php
/* Template Name: Homepage Template*/
?>
<?php get_header() ?>

<main class="main homepage" id="homepage">

    <?php

    get_template_part("/component/homepage/content", "hero");

    get_template_part("/component/homepage/content", "about");

    ?>




    <?php
    for ($i = 1; $i < 3; $i++) {
        # code...
    ?>
        <section class="h-screen py-20">
            <div class="container">

                <h1>
                    Lorem ipsum dolor sit amet.
                </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque tempora ipsum autem enim qui saepe magni
                    a
                    asperiores aliquid vitae dignissimos sunt, nam et explicabo ab quod, assumenda distinctio adipisci.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque tempora ipsum autem enim qui saepe magni
                    a
                    asperiores aliquid vitae dignissimos sunt, nam et explicabo ab quod, assumenda distinctio adipisci.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque tempora ipsum autem enim qui saepe
                    magnia
                    asperiores aliquid vitae dignissimos sunt, nam et explicabo ab quod, assumenda distinctio adipisci.
                </p>
            </div>
        </section>

    <?php
    }
    ?>

</main>
<?php get_footer() ?>