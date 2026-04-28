<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Victor Elgersma</title>
    <link rel="stylesheet" href="/tufte.css" />
    <style>
        .email-link {
            font-weight: bold;
            text-decoration: none;
            color: #333;
            border-bottom: 1px solid #333;
        }

        .email-link:hover {
            background-color: #fffdfb;
            /* Tufte background highlight */
            border-bottom: 2px solid #111;
        }

        dl {
            margin: 0;
        }

        dt {
            font-weight: bold;
            margin-top: 1.2em;
            margin-top: 2.5em;
            margin-bottom: 0.5em;
        }

        dd {
            margin-left: 1.5em;
            position: relative;
            margin-bottom: 0.8em;
        }

        dd::before {
            content: "→";
            position: absolute;
            left: -1.2em;
            color: #666;
        }
    </style>
</head>

<body>
    <article>
        <h1>Victor Elgersma</h1>
        <section>
            <?php include 'partials/my_writing.php'; ?>
            <?php include 'partials/my_videos.php'; ?>
            <?php include 'partials/just_for_fun.php'; ?>
            <?php include 'partials/wip.php'; ?>

    </article>


    <footer>
        <section>
            <h2>Contact</h2>
            <p>
                <a class="email-link" href="mailto:v.j.b.elgersma@students.uu.nl">
                    v.j.b.elgersma@students.uu.nl
                </a>
            </p>
        </section>

        <section>
            <h2>Quote of the Day</h2>
            <?php
            $quotes = require 'quotes.php';

            // Pick a random quote
            $quote_of_the_day = $quotes[array_rand($quotes)];

            // Display it
            echo "<blockquote>";
            echo "<p>“{$quote_of_the_day['text']}”</p>";
            echo "<footer>- {$quote_of_the_day['author']} </footer>";
            echo "</blockquote>";
            ?>
        </section>
        <section>
            <center>
                <p style="">Updated April 2026 | View on <a href="https://github.com/victorelgersma/personal_home_page"
                        target="_blank">
                        GitHub‍💻</a></p>
            </center>
        </section>
    </footer>

</body>

</html>
