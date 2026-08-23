<?php
$title = "Work In Progress";
include "partials/header.php";
?>
<h1><?= htmlspecialchars($title) ?></h1>

<section class="project-grid">
    <a class="project-tile" href="https://pennypost.vjbe.net">
        <h2>Penny Post</h2>
        <p>A weekly letter-writing web app.</p>
    </a>
    <a class="project-tile" href="https://oldnews.vjbe.net">
        <h2>Old News</h2>
        <p>An archive of old newspaper clippings and articles.</p>
    </a>
    <a class="project-tile" href="https://recipes.vjbe.net">
        <h2>Victor's Recipes</h2>
        <p>A personal recipe collection, built from scratch.</p>
    </a>
    <a class="project-tile" href="https://invertlogarithmicpowerseries-btifvhzwbwwcgt6zvpw8r2.streamlit.app/">
        <h2>Inverting Power Series</h2>
        <p>A Streamlit app for inverting the power series of ln(1+x).</p>
    </a>
    <a class="project-tile" href="https://ahmed-awad-photo.vjbe.net/">
        <h2>Ahmed Abu Awad's Photo Portfolio</h2>
        <p>A photography portfolio site.</p>
    </a>
    <a class="project-tile" href="https://agoodidea.vjbe.net">
        <h2>A Good ID(ea)</h2>
        <p>Campaign to re-introduce a physical student card at the UU.</p>
    </a>
</section>
<?php include "partials/footer.php"; ?>