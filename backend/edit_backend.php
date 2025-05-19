<?php 
include '../connection.php'; // Include your database connection file

$artist       = $_POST['artist'];
$album        = $_POST['album'];
$total_sales  = $_POST['total_sales'];
$id           = $_POST['id'];



if (isset($_FILES['artist_image']) && $_FILES['artist_image']['error'] === 0) {

    $file_tmp  = $_FILES['artist_image']['tmp_name'];
    $file_name = basename($_FILES['artist_image']['name']);
    $file_ext  = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    // Validate extension
    $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($file_ext, $allowed_ext)) {
        die("Invalid file type.");
    }

    // Generate new unique file name using timestamp
    $timestamp = time(); // or use date("YmdHis")
    $new_file_name = "album_" . $timestamp . "." . $file_ext;

    $upload_dir  = '../uploaded_albums/';
    $upload_path = $upload_dir . $new_file_name;

    // Make sure directory exists
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }

    // Move file
    if (move_uploaded_file($file_tmp, $upload_path)) {
        echo "Upload successful! Saved as: " . $new_file_name;
    } else {
        echo "Upload failed.";
    }

    // This can now be saved to your database:
    $file_pathing = 'uploaded_albums/' . $new_file_name;

} else {
    echo "No file uploaded or upload error.";
}




$sql = "UPDATE sales_report SET artist = '$artist', album = '$album', 2022_sales = '$total_sales', album_cover = '$file_pathing' WHERE id = '$id'";
$query = mysqli_query($conn, $sql);


?>