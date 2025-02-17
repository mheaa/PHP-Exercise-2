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
    // Step 1: Create the array with given cities
    $cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

    // Step 2: Print values separated by commas using a loop (no implode)
    echo "<p><strong>Original list:</strong> ";
    $total = count($cities);
    for ($i = 0; $i < $total; $i++) {
        echo $cities[$i];
        if ($i < $total - 1) {
            echo ", "; // Add comma except for last city
        }
    }
    echo "</p>";

    // Step 3: Sort the array
    sort($cities);

    // Step 4: Print values as an unordered list using a loop
    echo "<h2>Sorted Cities</h2>";
    echo "<ul>";
    foreach ($cities as $city) {
        echo "<li>$city</li>";
    }
    echo "</ul>";

    // Step 5: Add more cities
    array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

    // Step 6: Sort the array again
    sort($cities);

    // Step 7: Print the new sorted list using a loop
    echo "<h2>Updated Sorted Cities</h2>";
    echo "<ul>";
    foreach ($cities as $city) {
        echo "<li>$city</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>
