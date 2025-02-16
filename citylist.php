<!DOCTYPE html>
<html>
<head>
    <title>City List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f2; /* soft pastel pink */
            text-align: center;
        }
        h1 {
            font-style: italic;
            color: #ff66b2; /* cutie pink */
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #ffccdd; /* light pastel pink */
            margin: 5px;
            padding: 8px;
            border-radius: 8px;
            display: inline-block;
        }
    </style>
</head>
<body>

    <h1>City List</h1>

    <?php
    // create array with given cities
    $cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

    // print values separated by commas
    echo "<p><strong>Original list:</strong> " . implode(", ", $cities) . "</p>";

    // sort the array
    sort($cities);

    // print values as an unordered list
    echo "<h2>Sorted Cities</h2>";
    echo "<ul>";
    foreach ($cities as $city) {
        echo "<li>$city</li>";
    }
    echo "</ul>";

    // add more cities
    array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

    // sort the array again
    sort($cities);

    // print the new sorted list
    echo "<h2>Updated Sorted Cities</h2>";
    echo "<ul>";
    foreach ($cities as $city) {
        echo "<li>$city</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>
