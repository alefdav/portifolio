<?php

/****
 * Template name: Projects
 ***/

get_header();

$projects = get_field("projetos");

?>
<section class="container">
    <section class="projectsTitle">
        <h2>Projects</h2>
        <p>Some projects I've done or supported</p>
    </section>

    <section class="projects">
        <div class="your-class">
            <?php foreach ($projects as $project) { ?>
                <div class="projectsCard">
                    <a href="<?= $project["link_projeto"] ?>">

                        <img src="<?= $project["thumb_projeto"] ?>" alt="">

                    </a>
                </div>
            <?php } ?>
        </div>
    </section>
</section>
<?php
get_footer();
?>