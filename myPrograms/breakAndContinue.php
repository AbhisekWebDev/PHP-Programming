<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break and Continue Demonstration</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1, h2 { color: #333; }
        form { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="number"], input[type="submit"] { padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 4px; }
        input[type="submit"] { background-color: #007bff; color: white; cursor: pointer; border: none; }
        input[type="submit"]:hover { background-color: #0056b3; }
        .results { background-color: #f9f9f9; padding: 15px; border: 1px solid #eee; border-radius: 4px; }
        pre { background-color: #eef; padding: 10px; border-radius: 4px; overflow-x: auto; }
        p { margin-bottom: 5px; }
        .code-block { margin-top: 15px; border-top: 1px dashed #ccc; padding-top: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Break and Continue Demonstration</h1>

        <p>Enter a number between 1 and 10 to see how `break` and `continue` affect loop execution.</p>

        <form action="" method="post">
            <label for="break_at">Break Loop when counter reaches:</label>
            <input type="number" id="break_at" name="break_at" min="1" max="10" value="<?php echo isset($_POST['break_at']) ? htmlspecialchars($_POST['break_at']) : 6; ?>">

            <label for="skip_at">Continue Loop (skip iteration) when counter reaches:</label>
            <input type="number" id="skip_at" name="skip_at" min="1" max="10" value="<?php echo isset($_POST['skip_at']) ? htmlspecialchars($_POST['skip_at']) : 3; ?>">
            <br>
            <input type="submit" name="submit" value="Run Demonstration">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $breakAt = isset($_POST['break_at']) ? (int)$_POST['break_at'] : 6;
            $skipAt = isset($_POST['skip_at']) ? (int)$_POST['skip_at'] : 3;

            echo "<h2>Results:</h2>";
            echo "<div class='results'>";

            // --- Demonstrate BREAK ---
            echo "<h3>Demonstrating `break` statement:</h3>";
            echo "<p>Loop will run from 1 to 10, but will <b>break</b> when the counter reaches <code>$breakAt</code>.</p>";
            echo "<pre><code>";
            echo "for (\$i = 1; \$i <= 10; \$i++) {\n";
            echo "    if (\$i == $breakAt) {\n";
            echo "        echo \"Breaking loop at \$i ($breakAt).\";\n";
            echo "        break;\n";
            echo "    }\n";
            echo "    echo \"Current value (break loop): \$i\n\";\n";
            echo "}\n";
            echo "echo \"Loop (break) finished.\";\n";
            echo "</code></pre>";

            echo "<p><strong>Output:</strong></p>";
            echo "<pre>";
            for ($i = 1; $i <= 10; $i++) {
                echo "Current value (break loop): $i\n";
                if ($i == $breakAt) {
                    echo "Breaking loop at \$i ($breakAt).\n";
                    break; // Exit the loop entirely
                }
            }
            echo "Loop (break) finished.\n";
            echo "</pre>";
            echo "<hr>";


            // --- Demonstrate CONTINUE ---
            echo "<h3>Demonstrating `continue` statement:</h3>";
            echo "<p>Loop will run from 1 to 10, but will <b>skip</b> the iteration when the counter reaches <code>$skipAt</code>.</p>";
            echo "<pre><code>";
            echo "for (\$i = 1; \$i <= 10; \$i++) {\n";
            echo "    if (\$i == $skipAt) {\n";
            echo "        echo \"Skipping iteration at \$i ($skipAt).\";\n";
            echo "        continue;\n";
            echo "    }\n";
            echo "    echo \"Current value (continue loop): \$i\n\";\n";
            echo "}\n";
            echo "echo \"Loop (continue) finished.\";\n";
            echo "</code></pre>";

            echo "<p><strong>Output:</strong></p>";
            echo "<pre>";
            for ($i = 1; $i <= 10; $i++) {
                if ($i == $skipAt) {
                    echo "Skipping iteration at \$i ($skipAt).\n";
                    continue; // Skip the rest of this iteration and go to the next
                }
                echo "Current value (continue loop): $i\n";
            }
            echo "Loop (continue) finished.\n";
            echo "</pre>";
            echo "</div>"; // End results div

        } else {
            echo "<p class='results'>Submit the form to see the demonstration.</p>";
        }
        ?>

        <div class="code-block">
            <h2>PHP Code (`breakAndContinue.php`)</h2>
            <pre><code>
&lt;?php
if (isset($_POST['submit'])) {
    $breakAt = isset($_POST['break_at']) ? (int)$_POST['break_at'] : 6;
    $skipAt = isset($_POST['skip_at']) ? (int)$_POST['skip_at'] : 3;

    echo "&lt;h2&gt;Results:&lt;/h2&gt;";
    echo "&lt;div class='results'&gt;";

    // --- Demonstrate BREAK ---
    echo "&lt;h3&gt;Demonstrating `break` statement:&lt;/h3&gt;";
    echo "&lt;p&gt;Loop will run from 1 to 10, but will &lt;b&gt;break&lt;/b&gt; when the counter reaches &lt;code&gt;$breakAt&lt;/code&gt;.&lt;/p&gt;";
    echo "&lt;p&gt;&lt;strong&gt;Output:&lt;/strong&gt;&lt;/p&gt;";
    echo "&lt;pre&gt;";
    for (\$i = 1; \$i &lt;= 10; \$i++) {
        echo "Current value (break loop): \$i\\n";
        if (\$i == \$breakAt) {
            echo "Breaking loop at \$i (\$breakAt).\\n";
            break; // Exit the loop entirely
        }
    }
    echo "Loop (break) finished.\\n";
    echo "&lt;/pre&gt;";
    echo "&lt;hr&gt;";


    // --- Demonstrate CONTINUE ---
    echo "&lt;h3&gt;Demonstrating `continue` statement:&lt;/h3&gt;";
    echo "&lt;p&gt;Loop will run from 1 to 10, but will &lt;b&gt;skip&lt;/b&gt; the iteration when the counter reaches &lt;code&gt;$skipAt&lt;/code&gt;.&lt;/p&gt;";
    echo "&lt;p&gt;&lt;strong&gt;Output:&lt;/strong&gt;&lt;/p&gt;";
    echo "&lt;pre&gt;";
    for (\$i = 1; \$i &lt;= 10; \$i++) {
        if (\$i == \$skipAt) {
            echo "Skipping iteration at \$i (\$skipAt).\\n";
            continue; // Skip the rest of this iteration and go to the next
        }
        echo "Current value (continue loop): \$i\\n";
    }
    echo "Loop (continue) finished.\\n";
    echo "&lt;/pre&gt;";
    echo "&lt;/div&gt;"; // End results div

} else {
    echo "&lt;p class='results'&gt;Submit the form to see the demonstration.&lt;/p&gt;";
}
?&gt;
            </code></pre>
        </div>
    </div>
</body>
</html>