<?php
include 'connection.php'; // Include your database connection file

$sql = "SELECT artist, album, SUM(2022_sales) AS total_sales FROM sales_report GROUP BY artist ORDER BY total_sales DESC LIMIT 1";
$query = mysqli_query($conn, $sql);
$fetch = mysqli_fetch_assoc($query);




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="logout-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Logout
</button>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4 text-center">Dashboard Overview</h2>


  <div class="row g-4">

    <div class="col-md-3">
      <div class="card text-white bg-primary h-100 text-center">
        <div class="card-body d-flex flex-column justify-content-center">
          <h5 class="card-title">Currently Top 1 Artist</h5>
          <p class="card-text fs-3 fw-bold"><?= $fetch['artist'] ?></p>
          <br>
            Album: <?= $fetch['album'] ?>
            <br>
            Total Sold: <?= number_format($fetch['total_sales']) ?>
        </div>
        <div class="card-footer">
        </div>
      </div>
    </div>


    <div class="col-md-3">
      <div class="card text-white bg-success h-100 text-center">
        <div class="card-body d-flex flex-column justify-content-center">
          <p class="card-text fs-3 fw-bold">Shortest Word</p>
        </div>
        <a href="shortest_word.php" class="text-white text-decoration-none">View</a>
        <div class="card-footer">
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card text-white bg-warning h-100 text-center">
        <div class="card-body d-flex flex-column justify-content-center">
          <p class="card-text fs-3 fw-bold">Word Search</p>
        </div>
        <a href="word_search.php" class="text-white text-decoration-none">View</a>
        <div class="card-footer">
        </div>
      </div>
    </div>



    <div class="col-md-3">
      <div class="card text-white bg-danger h-100 text-center">
        <div class="card-body d-flex flex-column justify-content-center">
          <p class="card-text fs-3 fw-bold">CRUD</p>
        </div>
        <a href="crud.php" class="text-white text-decoration-none">View</a>
        <div class="card-footer">
        </div>
      </div>
    </div>




    <div class="col-md-3">
      <div class="card text-white bg-black h-100 text-center">
        <div class="card-body d-flex flex-column justify-content-center">
          <p class="card-text fs-3 fw-bold">MySQL Queries</p>
        </div>
        <a href="queries.txt" class="text-white text-decoration-none">View</a>
        <div class="card-footer">
        </div>
      </div>
    </div>




  </div>
</div>

<label for="artist_image" class="form-label">Search Artist</label>
<input type="text" id="search_artist" class="form-control" placeholder="Search artist...">
<div id="album_list"></div>

<br>
<br>
<!-- Collapsible Section -->
<div class="card">
  <div class="card-header" id="headingSales">
    <h2 class="mb-0">
      <button class="btn btn-link text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSales" aria-expanded="true" aria-controls="collapseSales">
        Combined Album Sales per Artist
      </button>
    </h2>
  </div>

  <div id="collapseSales" class="collapse show" aria-labelledby="headingSales">
    <div class="card-body">
      <div class="row">
        <?php

        $sql = "SELECT artist, SUM(2022_sales) AS total_sales 
                FROM sales_report 
                GROUP BY artist 
                ORDER BY total_sales DESC";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <div class="col-md-4">
            <div class="card mb-3 shadow-sm">
              <div class="card-body text-center">
                <h5 class="card-title"><?= htmlspecialchars($row['artist']) ?></h5>
                <p class="card-text text-muted">Total Sales</p>
                <span class="badge bg-success fs-5"><?= number_format($row['total_sales']) ?></span>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<br>
<br>
<br>
<br>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>


<script>
      $(document).on("click", "#logout-btn", function() {

        
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to logout?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, logout!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "logout.php"; // Redirect to logout page
            }
        });

        
      });
    </script>




<script>
  $('#search_artist').on('keyup', function() {
    let keyword = $(this).val();
    if (keyword.length >= 2) {
      $.ajax({
        url: 'backend/search_albums.php',
        method: 'POST',
        data: { artist: keyword },
        success: function(response) {
          $('#album_list').html(response);
        }
      });
    } else {
      $('#album_list').html('');
    }
  });
</script>