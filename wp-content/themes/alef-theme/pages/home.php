<?php

/****
 * Template name: Home
 ***/

get_header();

$resume = get_field("resume");

?>


<section class="homeBody">
    <section class="container">
        <div class="homeContent">

            <h2>Hi! I'm Alef David</h2>
            <p> I have been working as a developer for 5 years, my specialty is creating responsive and accessible pages.
                I have extensive experience with web development and its tools. My favorite stack is Javascript, PHP and its frameworks.</p>
            <div class="homeButton">
                <button onclick="location.pathname += '/projects'">Check my projects</button>
                <a href="<?php echo $resume ?>" target="_blank">..or see my resume</a>
            </div>
        </div>
    </section>
</section>

<?php
get_footer();
?>