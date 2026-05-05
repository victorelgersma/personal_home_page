        <section>
            <h2>Contact</h2>
            <p>
                <a class="email-link" href="mailto:v.j.b.elgersma@students.uu.nl">
                    v.j.b.elgersma@students.uu.nl
                </a>
            </p>
        </section>

        <section>
            <!-- <h2>Quote of the Day</h2> -->
            <?php
            $quotes = require 'quotes.php';

            // 1. Get the current Unix timestamp (seconds since Jan 1 1970)
            // 2. Divide by 86400 (seconds in a day) and floor to get days since epoch
            $days_since_epoch = floor(time() / 86400);

            // 3. Use modulus to pick an index based on the number of quotes available
            $index = $days_since_epoch % count($quotes);
            $quote_of_the_day = $quotes[$index];

            // Display it
            echo "<blockquote>";
            echo "<p>“{$quote_of_the_day['text']}”</p>";
            echo "<footer>— {$quote_of_the_day['author']}";

            // Optional: Display year if it exists (from your TODO list)
            if (isset($quote_of_the_day['year'])) {
                echo " ({$quote_of_the_day['year']})";
            }

            echo "</footer>";

            // Optional: Display notes if they exist (from your TODO list)
            if (isset($quote_of_the_day['notes'])) {
                echo "<p class='marginnote'>{$quote_of_the_day['notes']}</p>";
            }

            echo "</blockquote>";
            ?>
        </section>
        <section>
            <center>
                <p style="">Updated April 2026 | <a href="https://github.com/victorelgersma/personal_home_page"
                        target="_blank">
                        GitHub‍</a></p>
            </center>
        </section>
