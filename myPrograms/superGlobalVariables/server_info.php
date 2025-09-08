<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVER Superglobal</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>`$_SERVER` Superglobal Information</h2>
    <p>This array contains information such as headers, paths, and script locations.</p>

    <table>
        <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($_SERVER as $key => $value) {
                // Some values might be arrays, so handle them appropriately
                if (is_array($value)) {
                    $value = implode(", ", $value); // Convert array to string for display
                }
                echo "<tr>";
                echo "<td>" . htmlspecialchars($key) . "</td>";
                echo "<td>" . htmlspecialchars($value) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <h3>Common `$_SERVER` variables:</h3>
    <ul>
        <li><b>`$_SERVER['PHP_SELF']`</b>: The filename of the currently executing script relative to the document root.</li>
        <li><b>`$_SERVER['SERVER_NAME']`</b>: The name of the host server (e.g., `localhost`).</li>
        <li><b>`$_SERVER['HTTP_HOST']`</b>: The Host header from the current request (e.g., `localhost:8080`).</li>
        <li><b>`$_SERVER['REMOTE_ADDR']`</b>: The IP address from which the user is viewing the current page.</li>
        <li><b>`$_SERVER['REQUEST_METHOD']`</b>: The request method used to access the page (e.g., `GET`, `POST`).</li>
        <li><b>`$_SERVER['REQUEST_URI']`</b>: The URI which was given in order to access this page.</li>
        <li><b>`$_SERVER['QUERY_STRING']`</b>: The query string, if any.</li>
        <li><b>`$_SERVER['DOCUMENT_ROOT']`</b>: The document root directory under which the current script is executing.</li>
        <li><b>`$_SERVER['HTTP_USER_AGENT']`</b>: Contents of the `User-Agent` header, providing browser and OS info.</li>
        <li><b>`$_SERVER['HTTPS']`</b>: Set to a non-empty value if the script was loaded over a secure HTTPS connection.</li>
    </ul>
</body>
</html>