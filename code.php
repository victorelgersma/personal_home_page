<?php
$title = "Code";
include "partials/header.php";
?>
    <h1><?= htmlspecialchars($title) ?></h1>

<h2>Coding Projects</h2>
<section class="project-grid">
    <a class="project-tile" href="https://pennypost.vjbe.net">
        <h2>Penny Post</h2>
        <p>A weekly letter-writing web app.</p>
    </a>
    <a class="project-tile" href="https://oldnews.vjbe.net">
        <h2>Old News</h2>
        <p>An archive of old newspaper clippings and articles.</p>
    </a>
    <a class="project-tile" href="https://on2.vjbe.net">
        <h2>On2 Salsa Practice</h2>
        <p>A random move-caller for practicing On2 salsa shines.</p>
    </a>
    <a class="project-tile" href="https://invertlogarithmicpowerseries-btifvhzwbwwcgt6zvpw8r2.streamlit.app/">
        <h2>Inverting Power Series</h2>
        <p>A Streamlit app for inverting the power series of ln(1+x).</p>
    </a>
</section>

<h2 class="project-section-heading">Other</h2>
<section class="project-grid">
    <a class="project-tile" href="https://recipes.vjbe.net">
        <h2>Victor's Recipes</h2>
        <p>Simple recipes</p>
    </a>
    <a class="project-tile" href="https://ahmed-awad-photo.vjbe.net/">
        <h2>Ahmed Abu Awad's Photo Portfolio</h2>
        <p>A photography portfolio site.</p>
    </a>
</section>
<?php include "partials/footer.php"; ?>

