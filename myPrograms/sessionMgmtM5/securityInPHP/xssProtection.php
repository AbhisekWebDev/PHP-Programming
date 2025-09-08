<!-- 
    XSS (Cross-Site Scripting) Protection
        Problem:
            Attackers inject malicious JavaScript into forms or URLs, which can run on users’ browsers. 
-->

<!-- Vulnerable Example -->
<?php
    echo "Welcome " . $_GET['name'];
?>
<!-- If someone visits: index.php?name=<script>alert('Hacked')</script> → alert box executes.  -->

<!-- Secure Solution (Escape Output) -->
<?php
    echo "Welcome " . htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');
?>
<!-- Always sanitize output using htmlspecialchars() or strip_tags(). -->
