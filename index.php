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
        }

        dd {
            margin-left: 1.5em;
            position: relative;
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
        <p>Thanks for 🏄 surfing by, stranger!</p>
        <section>
        <?php include 'partials/my_writing.php'; ?>



    <?php include 'partials/my_videos.php'; ?>

        <section>
            <h2>Just for Fun</h2>
            <ul>
                <li>
                    <a href="https://fr.wikipedia.org/wiki/Arganier#/media/Fichier:Huile_d'argan_003.JPG"
                        target='_blank'>Goats in an
                        argan
                        tree</a>
                </li>
                <li>
                    <a href="https://ishtarthemovie.com/downloads/RogersAndClarke-DangerousBusiness.mp3"
                        target="_blank">Ishtar!</a>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=DJsn1QivbKM" target="_blank">Orangutan Driving a Golf Cart
                    </a>
                </li>
            </ul>


        </section>
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


            <p style="font-style: italic;">Updated April 2026</p>
            <p style="font-style: italic;">View on <a href="https://github.com/victorelgersma/personal_home_page"
                    target="_blank">
                    Github‍💻</a></p>
        </section>
    </footer>

</body>

</html>