<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Victor Elgersma</title>
    <link rel="stylesheet" href="/tufte.css" />
    <style>
        .contact-box {
            margin-top: 2rem;
            padding: 1rem 0;
            border-top: 1px solid #ccc;
        }

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

        blockquote {
            font-style: italic;
            border-left: 3px solid #ccc;
            margin: 2rem 0;
            padding-left: 1rem;
            color: #333;
        }

        blockquote footer {
            text-align: right;
            font-style: normal;
            color: #555;
        }
    </style>
</head>

<body>
    <article>
        <h1>Victor Elgersma</h1>
        <p>Thanks for 🏄 surfing by, stranger!</p>
        <section>
            <h2>Writing</h2>
            <p><a href="https://vjbe.net/pdfs/2026/03/lhopital-2.pdf" target="_blank">The Origins of L'Hôpital's Rule </a><span
                    class="marginnote">Report for "History of Mathematics Seminar" taught by <a
                        href="https://www.uu.nl/staff/VNEBlasjo">Dr. Viktor Blåsjö</a></span> (March 2026)
            </p>
            <p><a href="https://vjbe.net/pdfs/2026-03-18-Longitude-6.pdf" target="_blank">The Harrison H1 chronometer </a><span
                    class="marginnote">Essay for "Science and the Public" taught by <a
                        href="https://www.uu.nl/staff/RBWille">Dr. R.B. Wille</a></span> (March 2026)
            </p>
        </section>

        <section>
            <h2>Contact</h2>

            <div class="contact-box">
                <p>
                    <a class="email-link" href="mailto:v.j.b.elgersma@students.uu.nl
">
                        v.j.b.elgersma@students.uu.nl
                    </a>
                </p>
            </div>
        </section>
        <section>
            <h2>Miscellaneous</h2>
            <ul>
                <li>
                    <p><a href="https://fr.wikipedia.org/wiki/Arganier#/media/Fichier:Huile_d'argan_003.JPG" target='_blank'>Goats in an
                            argan
                            tree</a></p>
                </li>
                <li>
                    <a href="https://ishtarthemovie.com/downloads/RogersAndClarke-WardrobeOfLove.mp3" target="_blank">Ishtar!</a>
                </li>
            </ul>


        </section>

    </article>
    <footer>
        <hr>
        <p style="font-style: italic;">Updated March 2026</p>
        <p style="font-style: italic;">View <a href="https://github.com/victorelgersma/personal_home_page" target="_blank">Source
                Code 🧑‍💻</a></p>

        <?php
        $quotes = [
            [
                "text" => "The book of nature is written in the language of mathematics.",
                "author" => "Roger Bacon"
            ],
            [
                "text" => "Plato is my friend. Aristotle is my friend. But my biggest friend is the truth",
                "author" => "Isaac Newton"
            ],
            [
                "text" => "Hey, it takes a lot of nerve to have nothing at your age. Don't you understand that? Yeah, most guys would be ashamed, but you've got the guts to just say, 'The hell with it.' You say that you'd rather have nothing than settle for less. Understand?",
                "author" => "Lyle Rogers (Ishtar)"
            ],
        ];

        // Pick a random quote
        $quote_of_the_day = $quotes[array_rand($quotes)];

        // Display it
        echo "<blockquote>";
        echo "<p>“{$quote_of_the_day['text']}”</p>";
        echo "<footer>- {$quote_of_the_day['author']} </footer>";
        echo "</blockquote>";
        ?>
    </footer>

</body>

</html>