<!doctype html>
<html>
    <head><!--The head of the webpage where all the links are stored.-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LuiRC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="Style/style.css"><!--The link/path to the style file with all the styles used to style the webpage.-->
    </head>
    <body>
        <?php
            $connect = mysqli_connect("localhost","root","","relaxation_center");
            $reservations = mysqli_query($connect,"SELECT * FROM reservations");

            echo '<table class="reservation-container">';
            echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Age</th>";
            echo "<th>Email</th>";
            echo "<th>Phone</th>";
            echo "<th>Note</th>";
            echo "<th>Program</th>";
            echo "</tr>";
            while ($single_reservation = mysqli_fetch_assoc($reservations)) {
                echo "<tr>";
                echo "<td>".$single_reservation["name"]."</td>";
                echo "<td>".$single_reservation["age"]."</td>";
                echo "<td>".$single_reservation["email"]."</td>";
                echo "<td>".$single_reservation["phone"]."</td>";
                echo "<td>".$single_reservation["note"]."</td>";
                echo "<td>".$single_reservation["program"]."</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>