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
    </style>
</head>

<body>
    <article>
        <h1>Victor Elgersma</h1>
        <p>Thanks for 🏄 surfing by, stranger!</p>
        <section>
            <h2>Writing</h2>
            <p><a href="https://vjbe.net/pdfs/2026/03/lhopital-2.pdf" target="_blank">How The Marquis de L'Hôpital
                    bought his famous "Rule" from Johann Bernoulli </a><span class="marginnote">Report for "History of
                    Mathematics Seminar" taught by <a href="https://www.uu.nl/staff/VNEBlasjo">Dr. Viktor
                        Blåsjö</a></span> (March 2026)
            </p>
            <p><a href="https://vjbe.net/pdfs/2026-03-18-Longitude-6.pdf" target="_blank">The First Sea-clock (Harrison
                    H1 Chronometer, 1735) </a><span class="marginnote">Essay for "Science and the Public" taught by <a
                        href="https://www.uu.nl/staff/RBWille">Dr. R.B. Wille</a></span> (March 2026)
            </p>
        </section>


        <section>
            <h2>Miscellaneous</h2>
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
                    <a href="https://www.youtube.com/watch?v=XRu5kjIa3-0" target="_blank">Orangutan Driving a Golf Cart
                    </a>
                </li>
            </ul>


        </section>
        <section>
            <h2>Videos</h2>
            <ul>
                <li>
                    <a href="https://www.youtube.com/watch?v=O3OZH1VJQiI" target="_blank">Risk Aversion and the
                        Endowment Effect</a><span class="marginnote">2019 Finalist of the PsycShorts Video Contest.
                        Made with Lachlan Peel.</span>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=flqSAQyCyPo" target="_blank">The Wave-Particle Duality of
                        Matter</a><span class="marginnote">2018 Finalist. Breakthrough Junior Challenge</span>
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


            <p style="font-style: italic;">Updated March 2026</p>
            <p style="font-style: italic;">View on <a href="https://github.com/victorelgersma/personal_home_page"
                    target="_blank">
                    Github‍💻</a></p>
        </section>
    </footer>

</body>

</html>