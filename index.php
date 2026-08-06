<?php
// Define available subpages and their configuration
$pages = [
    'writing' => ['title' => 'Writing', 'partial' => 'partials/my_writing.php', 'back' => true],
    'videos' => ['title' => 'Videos', 'partial' => 'partials/my_videos.php', 'back' => true],
    'net' => ['title' => 'Just for Fun', 'partial' => 'partials/on_the_net.php', 'back' => true],
    'wip' => ['title' => 'Work in Progress', 'partial' => 'partials/wip.php', 'back' => true],
    'cv' => ['title' => 'CV', 'partial' => 'partials/cv.php', 'back' => true],
    'slides' => ['title' => 'Slides', 'partial' => 'partials/slides.php', 'back' => true],
    'bell-blues' => ['title' => "Bell's Theorem Blues", 'partial' => 'misc-html/bell-blues.html', 'back' => true],
    'spots' => ['title' => "Remote OK", 'partial' => 'misc-html/spots.html', 'back' => true],
    'card' => ['title' => "card", 'partial' => 'misc-html/card.html', 'back' => true],
];

// Get the requested page, default to home if empty or invalid
$currentPage = $_GET['page'] ?? 'home';
$pageData = $pages[$currentPage] ?? null;

// Fallback to home if page doesn't exist
if (!$pageData && $currentPage !== 'home') {
    $currentPage = 'home';
}

$title = $currentPage === 'home' ? 'Victor Elgersma-Azmanov' : $pageData['title'] . ' - Victor Elgersma-Azmanov';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <article>
        <?php if ($currentPage !== 'home'): ?>
            <p><a href="/">← Back Home</a></p>
        <?php endif; ?>

        <?php if ($currentPage === 'home'): ?>
            <section class="home-grid">
                <div class="home-profile">
                    <h1>Victor Elgersma-Azmanov</h1>
                    <img src="headshot.JPG" alt="Victor Elgersma-Azmanov" />
                </div>

                <div class="home-links">
                    <a class="home-tile" href="contact.php">
                        <h2>Contact</h2>
                    </a>
                    <a class="home-tile" href="https://samizdat.vjbe.net/2026-07-17-CV-1.pdf">
                        <h2>CV</h2>
                    </a>
                    <a class="home-tile" href="?page=writing">
                        <h2>Writing</h2>
                        <p>Essays, history of science, mathematics.</p>
                    </a>
                    <a class="home-tile" href="?page=slides">
                        <h2>Slides</h2>
                        <p>Presentations and talks.</p>
                    </a>
                    <a class="home-tile" href="?page=videos">
                        <h2>Videos</h2>
                        <p>Educational videos & animations.</p>
                    </a>
                    <a class="home-tile" href="?page=wip">
                        <h2>Projects</h2>
                        <p>Web experiments & works in progress.</p>
                    </a>
                    <a class="home-tile" href="https://oldnews.vjbe.net">
                        <h2>Old News</h2>
                        <p>Plain-text history</p>
                    </a>
                    <a class="home-tile" href="https://agoodidea.vjbe.net">
                    <h2>A Good ID(ea)</h2>
                    <p>Campaign to re-introduce a physical student card at the UU</p>
                    </a>
                    <a class="home-tile" href="?page=net">
                        <h2>On the 'Net</h2>
                        <p>Internet curiosities and delights.</p>
                    </a>
                </div>
            </section>
        <?php else: ?>

            <?php include $pageData['partial']; ?>

        <?php endif; ?>
    </article>

    <footer>
        <?php include 'partials/footer.php'; ?>
    </footer>
</body>

</html>

