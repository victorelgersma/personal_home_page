<?php
// Define available subpages and their configuration
$pages = [
    'writing' => ['title' => 'Writing', 'partial' => 'partials/my_writing.php', 'back' => true],
    'videos' => ['title' => 'Videos', 'partial' => 'partials/my_videos.php', 'back' => true],
    'net' => ['title' => 'Just for Fun', 'partial' => 'partials/on_the_net.php', 'back' => true],
    'wip' => ['title' => 'Work in Progress', 'partial' => 'partials/wip.php', 'back' => true],
    'contact' => ['title' => 'Contact', 'partial' => 'partials/contact_content.php', 'back' => true],
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

$title = $currentPage === 'home' ? 'Victor Elgersma' : $pageData['title'] . ' - Victor Elgersma';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($title) ?></title>
</head>

<body>
    <article>
        <?php if ($currentPage !== 'home'): ?>
            <p><a href="/">← Back Home</a></p>
        <?php endif; ?>

        <?php if ($currentPage === 'home'): ?>
            <section class="home-grid">
                <div class="home-profile">
                    <h1>Victor Elgersma</h1>
                    <img src="headshot.JPG" alt="Victor Elgersma" />
                </div>

                <div class="home-links">
                    <a class="home-tile" href="?page=contact">
                        <h2>Contact</h2>
                    </a>
                    <a class="home-tile" href="https://samizdat.vjbe.net/CV.pdf">
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

<style>
    /* =========================
   Base
========================= */

    body {
        background: #f8f8f8;
        color: #1f1f1f;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        margin: 0;
        padding: 0;
        line-height: 1.5;
    }

    * {
        box-sizing: border-box;
    }

    /* Links: neutral, no blue */
    a,
    a:visited {
        color: inherit;
    }

    a {
        text-decoration: none;
    }

    article a {
        text-decoration: underline;
        text-decoration-color: #d0d0d0;
        text-underline-offset: 3px;
    }

    article a:hover {
        text-decoration-color: #111;
    }

    /* =========================
   Layout
========================= */

    article {
        max-width: 1050px;
        margin: 3rem auto;
        padding: 0 2rem;
    }

    /* =========================
   HOME layout (structured, not playful)
========================= */

    .home-grid {
        position: relative;
        height: min(80vh, 720px);
    }

    /* =========================
   Tiles (quiet cards, no playfulness)
========================= */

    .home-tile {
        display: block;

        max-width: 240px;
        padding: 0.9rem 1rem;

        background: #ffffff;
        border: 1px solid #e6e6e6;
        border-radius: 10px;

        transition: box-shadow 0.15s ease, border-color 0.15s ease;
    }

    .home-tile:hover {
        border-color: #bdbdbd;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
    }

    .home-tile h2 {
        margin: 0 0 0.25rem 0;
        font-size: 1.05rem;
        font-weight: 600;
    }

    .home-tile p {
        margin: 0;
        font-size: 0.88rem;
        color: #666;
        line-height: 1.35;
    }

    /* =========================
   Footer
========================= */

    footer {
        text-align: center;
        margin-top: 4rem;
        padding: 2rem 0;
        font-size: 0.8rem;
        color: #888;
        border-top: 1px solid #eee;
    }

    /* =========================
   Images
========================= */

    img {
        max-width: 160px;
        border-radius: 6px;
    }

    /* =========================
   Subpages
========================= */

    article h1,
    article h2 {
        font-weight: 500;
    }

/* =========================
       Mobile (Everything stacks cleanly)
    ========================= */

    @media (max-width: 768px) {
        article {
            margin: 2rem auto;
            padding: 0 1.5rem; /* Slightly tighter padding for small screens */
        }

        /* Changes the main layout from 2-columns to 1-column stack */
        .home-grid {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            height: auto;
            position: static;
        }

        /* Un-sticks the profile header so it scrolls normally */
        .home-profile {
            position: static;
            text-align: center; /* Optional: centers headshot/title on mobile */
        }

        /* Turns the grid of links into a single vertical stack */
        .home-links {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        /* Ensures tiles stretch full-width and strip any old positioning */
        .home-tile {
            position: static;
            transform: none !important;
            width: 100%;
            max-width: none;
        }
    }

    /* =========================
       HOME layout (Two Columns on Desktop)
       Moved above mobile media query or safely kept if mobile overrides it
    ========================= */

    @media (min-width: 769px) {
        .home-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 3rem;
            align-items: start;
            height: min(80vh, 720px);
        }

        .home-profile {
            position: sticky;
            top: 3rem;
        }

        .home-profile h1 {
            margin-top: 0;
            font-size: 2rem;
        }

        .home-links {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 1.5rem;
        }

        .home-tile {
            width: 100%;
            max-width: none;
        }
    }

</style>