<?php
// Define available subpages and their configuration
$pages = [
    'writing' => ['title' => 'Writing', 'partial' => 'partials/my_writing.php', 'back' => true],
    'videos' => ['title' => 'Videos', 'partial' => 'partials/my_videos.php', 'back' => true],
    'fun' => ['title' => 'Just for Fun', 'partial' => 'partials/just_for_fun.php', 'back' => true],
    'wip' => ['title' => 'Work in Progress', 'partial' => 'partials/wip.php', 'back' => true],
    'thought' => ['title' => 'Food for Thought', 'partial' => 'partials/food_for_thought.php', 'back' => true],
    'contact' => ['title' => 'Contact', 'partial' => 'partials/contact_content.php', 'back' => true],
    'slides' => ['title' => 'Slides', 'partial' => 'partials/slides.php', 'back' => true],
    'bell-blues' => ['title' => "Bell's Theorem Blues", 'partial' => 'misc-html/bell-blues.html', 'back' => true],
    'remote-ok' => ['title' => "Remote OK", 'partial' => 'misc-html/remote-work.html', 'back' => true],
];

// Get the requested page, default to home if empty or invalid
$currentPage = $_GET['page'] ?? 'home';
$pageData = $pages[$currentPage] ?? null;

// Fallback to home if page doesn't exist
if (!$pageData && $currentPage !== 'home') {
    $currentPage = 'home';
}

$title = $currentPage === 'home' ? 'Victor Elgersma' : $pageData['title'] . ' - Victor Elgersma';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="/tufte.css" />
    <link rel="stylesheet" href="/custom.css" />
</head>

<body>
    <article>
        <?php if ($currentPage !== 'home'): ?>
            <p><a href="/">← Back Home</a></p>
        <?php endif; ?>

        <?php if ($currentPage === 'home'): ?>
            <h1>Victor Elgersma</h1>

            <section class="home-grid">

                <a class="home-tile contact-tile" href="?page=contact">
                    <h2>Contact</h2>
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
                    <p>Old educational videos and animations.</p>
                </a>

                <a class="home-tile" href="?page=wip">
                    <h2>Projects</h2>
                    <p>Small web experiments and things in progress.</p>
                </a>

                <a class="home-tile" href="?page=thought">
                    <h2>Food for Thought</h2>
                    <p>Interesting papers, articles, and ideas.</p>
                </a>

                <a class="home-tile" href="?page=fun">
                    <h2>Just for Fun</h2>
                    <p>Internet curiosities and miscellaneous delights.</p>
                </a>


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