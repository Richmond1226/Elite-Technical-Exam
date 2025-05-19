<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Data Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
</head>
<body>
  <div class="container mt-5">
    <h3 class="mb-4">User List</h3>
    <table class="table table-striped" id="request_getData" width="100%">


          <thead>
          <tr>
          <th>Artist</th>
          <th>Album</th>
          <th>Sales</th>
          <th>Edit</th>
          <th>Delete</th>

          </tr>
          </thead>
      </table>
      
  </div>

</div>

  </div>





<!-- Edit Modal -->
<div class="modal fade" id="edit_details" tabindex="-1" aria-labelledby="editDetailsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <input type="hidden" class="form-control" id="id" name="artist">
        <input type="text" class="form-control" id="existing_image" name="artist">
        <h5 class="modal-title" id="editDetailsLabel">Edit Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label for="artist" class="form-label">Artist</label>
          <input type="text" class="form-control" id="artist" name="artist">
        </div>

        <div class="mb-3">
          <label for="album" class="form-label">Album</label>
          <input type="text" class="form-control" id="album" name="album">
        </div>

        <div class="mb-3">
          <label for="total_sales" class="form-label">Total Sales</label>
          <input type="text" class="form-control" id="total_sales" name="total_sales">
        </div>
      </div>

      
        <div class="mb-3">
          <label for="artist_image" class="form-label">Upload Image</label>
          <input class="form-control" type="file" id="artist_image" accept="image/*">
        </div>



        <div class="mb-3">
          <center><img id="image_preview" src="#" alt="Image Preview" class="img-thumbnail" style="max-height: 200px; display: none;"></center>
        </div>





      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="edit-btn-save">Save changes</button>
      </div>





    </div>
  </div>
</div>











<!-- Read Details -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>














  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>

$('#request_getData').dataTable({
        scrollX: true,
        processing: true,
        "destroy": true,
        "order": [[0, "desc"]],
        "searching": true,
        ajax: {
            url: "backend/data_table_backend.php",
            'dataSrc': ""
        },
        "columns": [


          { "data": "artist"  },
          { "data": "album"  },
          { "data": "sales"  },
          { "data": "edit"  },
          { "data": "delete"  },


          ]
          });
  </script>







<script>
      $(document).on("click", ".edit-btn", function() {

        const id         = $(this).data("id")
        const artist     = $(this).data("artist")
        const album      = $(this).data("album")
        const sales      = $(this).data("sales")
        const cover      = $(this).data("cover")

        


        $('#id').val(id);
        $('#artist').val(artist);
        $('#album').val(album);
        $('#total_sales').val(sales);
        $('#existing_image').val(cover);


        
        $('#edit_details').modal('show');



         // Set album cover preview
         if (cover) {
           $('#image_preview').attr('src', cover).show();
         } else {
           $('#image_preview').hide();
         }


      });
    </script>












<script>
  $(document).on("click", "#edit-btn-save", function(e) {
    e.preventDefault();

    // grab your form element (or just create new FormData)
    let formData = new FormData();
    formData.append('id',         $('#id').val());
    formData.append('artist',     $('#artist').val());
    formData.append('album',      $('#album').val());
    formData.append('total_sales',$('#total_sales').val());
    

    let fileInput = $('#artist_image')[0];
    if (fileInput.files.length > 0) {

      formData.append('artist_image', fileInput.files[0]);
    }else{

        formData.append('artist_image', $('#existing_image').val());
    }




    $.ajax({
      url: "backend/edit_backend.php",
      type: "POST",
      data: formData,
      processData: false, 
      contentType: false, 
      success: function(response) {

  // Reload the DataTable without resetting pagination
  $('#request_getData').DataTable().ajax.reload(null, false);

        Swal.fire({
          title: "Edit Successful",
          text: "Details have been updated successfully.",
          icon: "success",
        });
        $('#edit_details').modal('hide');
      },

           



      error: function(xhr, status, error) {


        Swal.fire({
          title: "Error",
          text: "There was an error saving your changes.",
          icon: "error",
        });
      }
    });
  });
</script>





<script>
  $(document).on("click", ".delete-btn", function(e) {
        const id         = $(this).data("id")
    

    Swal.fire({
  title: "Are you sure you want to delete this?",
  showDenyButton: true,
  confirmButtonText: "Yes",
  denyButtonText: `No`
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {



       $.ajax({
      url: "backend/delete_backend.php",
      type: "POST",
    data: { id },
      success: function(response) {

  // Reload the DataTable without resetting pagination
  $('#request_getData').DataTable().ajax.reload(null, false);

        Swal.fire({
          title: "Deleted Successful",
          text: "Data have been deleted successfully.",
          icon: "success",
        });
      },

           



      error: function(xhr, status, error) {


        Swal.fire({
          title: "Error",
          text: "There was an error deleting your data.",
          icon: "error",
        });
      }
    });






  } else if (result.isDenied) {

    Swal.fire("Changes are not saved", "", "info");




  }
});


  });
    </script>




</body>
</html>
