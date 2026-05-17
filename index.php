<?php
// Define available subpages and their configuration
$pages = [
    'writing' => ['title' => 'Writing', 'partial' => 'partials/my_writing.php', 'back' => true],
    'videos'  => ['title' => 'Videos', 'partial' => 'partials/my_videos.php', 'back' => true],
    'fun'     => ['title' => 'Just for Fun', 'partial' => 'partials/just_for_fun.php', 'back' => true],
    'wip'     => ['title' => 'Work in Progress', 'partial' => 'partials/wip.php', 'back' => true],
    'thought' => ['title' => 'Food for Thought', 'partial' => 'partials/food_for_thought.php', 'back' => true],
    'contact' => ['title' => 'Contact', 'partial' => 'partials/contact_content.php', 'back' => true],
    'slides' => ['title' => 'Slides', 'partial' => 'partials/slides.php', 'back' => true],
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
            <section>
                <nav>
                    <ul>
                        <li><a href="?page=writing">Writing</a></li>
                        <li><a href="?page=slides">Slides</a></li>
                        <li><a href="?page=videos">Videos</a></li>
                        <li><a href="?page=fun">Just for Fun</a></li>
                        <li><a href="?page=wip">Work in Progress</a></li>
                        <li><a href="?page=thought">Food for Thought</a></li>
                        <li><a href="?page=contact">Contact</a></li>
                    </ul>
                </nav>
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