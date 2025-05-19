<?php 
include '../connection.php';

$data = array();

$sql = "
  SELECT
    id,
    artist, 
    album,
    album_cover, 
    SUM(2022_sales) AS total_sales 
  FROM sales_report 
  GROUP BY artist, album
";

$query = mysqli_query($conn, $sql);
$data = [];

while ($row = mysqli_fetch_assoc($query)) {
    $data[] = array(
        "artist" => $row['artist'],
        "album"  => $row['album'],
        "sales"  => number_format($row['total_sales']),
        "edit"   => '<button 
                        type="button" 
                        class="btn btn-primary btn-sm edit-btn" 
                        data-bs-toggle="modal" 
                        data-bs-target="#editModal"
                        data-id="' . $row['id'] . '"
                        data-artist="' . htmlspecialchars($row['artist']) . '"
                        data-album="' . htmlspecialchars($row['album']) . '"
                        data-sales="' . $row['total_sales'] . '"
                        data-cover="' . @$row['album_cover'] . '"

                    >Edit</button>',

                    
        "delete" => '<button 
                        type="button" 
                        class="btn btn-danger btn-sm delete-btn" 
                        data-id="' . $row['id'] . '"
                    >Delete</button>'

        
    );
}






echo json_encode($data);

?>