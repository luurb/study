<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Venue</title>
</head>
<body>
    <h1>Add Venue</h1>
    <table>
        <tr>
            <td>
                <?php
                print $request->getFeedbackString("</td></tr><tr>td>");
                ?>
            </td>
        </tr>
    </table>
    <form action="addvenue.php" method="GET">
        <input type="submit" name="submitted" value="yes"/>
        <input type="text" name="venue_name"/>
    </form>
</body>
</html>