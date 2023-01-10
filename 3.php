<!DOCTYPE html>
    <html>
        <head>
            <title> 3 </title>
        </head>
        <body>
            <table border="1">
                <?php
for ($i = 0;$i < 11;$i++) {
    switch ($i % 2) {
        case 0:
        case 2:
        case 4:
        case 6:
        case 8:
        case 10:
            echo "<tr bgcolor=' #ffc69f '>";
            break;
        case 1:
        case 3:
        case 5:
        case 7:
        case 9:
            echo "<tr bgcolor=' #f6e157 '>";
            break;
    }
    if ($i == 0) {
        echo "<td bgcolor=' #6f78d6 '></td>";
    } else {
        echo "<td bgcolor=' #db9cd2 '>$i</td>";
    }
    for ($j = 50;$j < 61;$j++) {
        if ($i == 0) {
            echo "<td bgcolor=' #db9cd2 '>$j</td>";
        } else {
            if ($j % $i) {
                echo "<td>-</td>";
            } else {
                echo "<td>*</td>";
            }
        }
    }
    echo "</tr>";
}
?>