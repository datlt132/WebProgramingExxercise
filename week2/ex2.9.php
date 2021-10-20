<html>
<head><title>Receving Input</title></head>
<body>
    <h1>Thank You: Got your input</h1>
    <?php
        $name = $_GET["name"];
        $class = $_GET["class"];
        $university = $_GET["university"];
        print "<br> Hello, $name";
        print "<br> you are studying at $class, $university";
        if(isset($_GET["hobby1"])){
            $hobby1 = $_GET["hobby1"];
            print "<br> Hobby is $hobby1";
        }
        if(isset($_GET["hobby2"])){
            $hobby2 = $_GET["hobby2"];
            print "<br> Hobby is $hobby2";
        }
        if(isset($_GET["hobby3"])){
            $hobby3 = $_GET["hobby3"];
            print "<br> Hobby is $hobby3";
        }
    ?>
</body>
</html>
