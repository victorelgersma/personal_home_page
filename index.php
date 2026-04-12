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
            <h2>My Writing</h2>
            <p>
                <a href="https://vjbe.net/pdfs/2026-04-13-SciPub%20Research%20Essay%202.pdf-3" target="_blank"> Piety,
                    Politics, and the
                    Nebular Hypothesis in the British Press (1844-1846)
                </a><span class="marginnote">(April 2026) </span>
            </p>
            <span>
                I analyze how various publics conceptualized the formation of the solar system in the middle of the 19th
                century.
            </span>
            <br>
            <span>Essay for "Science and the Public"
                taught by <a href="https://www.uu.nl/staff/RBWille">Dr. R.B. Wille</a>
            </span>
            <p><a href="https://vjbe.net/pdfs/2026/2026-04-08-The%20Origins%20of%20the%20L%27H%C3%B4pital-Bernoulli%20Rule%20%28Report%29-2.pdf"
                    target="_blank">L'Hôpital's Rule: Origins (1692-1696)</a><span class="marginnote">(April 2026)
                </span>
            </p>
            <span>A line-by-line commentary of Chapter 9 of L’Hôpital’s
                <em> Analyse </em>(1696) and a letter from Bernoulli to
                L’Hôpital from July 1694.
            </span>
            <br>
            <span>Report for
                "History of
                Mathematics Seminar" taught by <a href="https://www.uu.nl/staff/VNEBlasjo">Dr. Viktor
                    Blåsjö</a>
            </span>
            <p>
                <a href="https://vjbe.net/pdfs/2026-03-18-Longitude-6.pdf" target="_blank">The Harrison
                    H1 Chronometer (1735) </a><span class="marginnote">(March 2026) </span>
            </p>
            <span>
                How John Harrison's mechanical genius revolutionised navigation despite the scepticism of the scientific
                elite.
            </span>
            <br>
            <span>Essay for "Science and the Public"
                taught by <a href="https://www.uu.nl/staff/RBWille">Dr. R.B. Wille</a>
            </span>
        </section>



        <section>
            <h2>My Videos</h2>
            <p>
                <a href="https://www.youtube.com/watch?v=O3OZH1VJQiI" target="_blank">Risk Aversion and the
                    Endowment Effect</a><span class="marginnote">2019 </span>
    
            </p>
            <span>Finalist of the PsycShorts Video Contest.
                    Made with Lachlan Peel.</span>

            <p>
                <a href="https://www.youtube.com/watch?v=flqSAQyCyPo" target="_blank">The Wave-Particle Duality of
                    Matter</a>
                    <span class="marginnote">2018 </span>
            </p>
            <span>Finalist. Breakthrough Junior Challenge</span>



        </section>

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


            <p style="font-style: italic;">Updated March 2026</p>
            <p style="font-style: italic;">View on <a href="https://github.com/victorelgersma/personal_home_page"
                    target="_blank">
                    Github‍💻</a></p>
        </section>
    </footer>

</body>

</html>