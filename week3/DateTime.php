<html>
<head><title>Date Time</title></head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
    <td>Enter your name and select date and time for the appointment</td>
    <td>Your name: </td>
    <input type="text" name="name">
    <table>
        <tr>
            <td>Date: </td>
            <td>
                <select name="year">
                    <?php
                    for($i=1900;$i<2100;$i++){
                        print("<option>$i</option>");
                    }
                    ?>
                </select>
            </td>
            <td>
                <select name="month">
                    <?php
                    for($i=1;$i<13;$i++){
                        print("<option>$i</option>");
                    }
                    ?>
                </select>
            </td>
            <td>
                <select name="day">
                    <?php
                    global $day_month;
                    $year = $_GET["year"];
                    $month = $_GET["month"];
                    switch ($month){
                        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                            $day_month = 31;
                            break;
                        case 2:
                            if(date('L',mktime(0,0,0,0,0,$year)) == 1){
                                $day_month = 29;
                            } else {
                                $day_month = 28;
                            }
                            break;
                        default: $day_month = 30;
                            break;
                    }
                    for($i=1;$i<=$day_month;$i++){
                        print("<option>$i</option>");
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Time: </td>
            <td><select name="hour">
                    <?php
                        for($i=0;$i<24;$i++){
                            print("<option>$i</option>");
                        }
                    ?>
                </select></td>
            <td><select name="minute">
                    <?php
                        for($i=0;$i<59;$i++){
                            print("<option>$i</option>");
                        }
                    ?>
                </select></td>
            <td><select name="second">
                    <?php
                    for($i=0;$i<59;$i++){
                        print("<option>$i</option>");
                    }
                    ?>
                </select></td>
        </tr>
        <tr>
            <td align="right"><input type="submit" value="Submit"> </td>
            <td align="left"><input type="reset" value="Reset"></td>
        </tr>
    </table>
    <?php
        $name = $_GET["name"];
        $year = $_GET["year"];
        $month = $_GET["month"];
        $day = $_GET["day"];
        $hour = $_GET["hour"];
        $minute = $_GET["minute"];
        $second = $_GET["second"];
        print "Hello, $name!";
        print "You have choose to have an appointment on $hour:$minute:$second, $day/$month/$year";
        print "More information";
        print "In 12 hors, the time and date is :$minute:$second, $day/$month/$year";
        print "This month has 30 days";
    ?>
</form>
</body>
</html>