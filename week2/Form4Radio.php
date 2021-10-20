<html>
<head><title>Receving Input</title></head>
<body>
    <h1>Thank You: Got your input</h1>
    <?php
        $email = $_GET["email"];
        $contact = $_GET["contact"];
        print "<br> Your email address is $email";
        print "<br> Contact preference is $contact";
    ?>
</body>
</html>
