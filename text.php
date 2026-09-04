
<?php
$title = "Text";
include "partials/header.php";
?>
<h1><?= htmlspecialchars($title) ?></h1>

<section class="project-grid">
    <a class="project-tile" href="https://blog.vjbe.net/">
        <h2>Blog</h2>
    </a>
    <a class="project-tile" href="writing.php">
        <h2>Essays</h2>
        <p>History of science, mathematics.</p>
    </a>
</section>

<?php include "partials/footer.php"; ?>
