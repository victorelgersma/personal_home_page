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
            <?php include 'partials/food_for_thought.php'; ?>
    </article>
    <footer>
            <?php include 'partials/footer.php'; ?>
    </footer>
</body>

</html>
