<?php
$title = "Victor Elgersma-Azmanov";
include "partials/header.php";
?>

<section class="home-grid">

<div class="home-links">

    <div class="home-title-tile">
        <h1><?= htmlspecialchars($title) ?></h1>
    </div>
    <p>Welcome, weary traveller, to my digital <em>fiefdom</em>. Please, feast yourself on some of the links below: </p>

      <a class="home-tile" href="https://blog.vjbe.net/">
        <h2>Blog</h2>
    </a>

    <a class="home-tile" href="https://samizdat.vjbe.net/2026-07-17-CV-1.pdf">
        <h2>CV</h2>
    </a>

    <a class="home-tile" href="writing.php">
        <h2>Essays</h2>
        <p>History of science, mathematics.</p>
    </a>

    <a class="home-tile" href="slides.php">
        <h2>Slides</h2>
        <p>Presentations and talks.</p>
    </a>

    <a class="home-tile" href="videos.php">
        <h2>Videos</h2>
        <p>Educational videos & animations.</p>
    </a>

    <a class="home-tile" href="wip.php">
        <h2>Projects</h2>
        <p>Web experiments & works in progress.</p>
    </a>

    <a class="home-tile" href="https://oldnews.vjbe.net">
        <h2>Old News</h2>
        <p>Plain-text history.</p>
    </a>

    <a class="home-tile" href="https://agoodidea.vjbe.net">
        <h2>A Good ID(ea)</h2>
        <p>Campaign to re-introduce a physical student card at the UU.</p>
    </a>

    <a class="home-tile" href="on_the_net.php">
        <h2>On the 'Net</h2>
        <p>Internet curiosities and delights.</p>
    </a>
  
    <a class="home-tile" href="contact.php">
        <h2>Contact</h2>
    </a>

</div>

</section>

<?php include "partials/footer.php"; ?>