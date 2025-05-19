<?php
include '../connection.php';

if (isset($_POST['artist'])) {
    $artist = mysqli_real_escape_string($conn, $_POST['artist']);

    $sql = "SELECT album, 2022_sales FROM sales_report WHERE artist LIKE '%$artist%' GROUP BY album";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<ul class='list-group'>";
        while ($row = mysqli_fetch_assoc($result)) {

        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
        <strong>{$row['album']}</strong>
        <span class='badge bg-primary rounded-pill'>Sales: " . number_format($row['2022_sales']) . "</span>
      </li>";

        }
        echo "</ul>";
    } else {
        echo "<p>No albums found for this artist.</p>";
    }
}
