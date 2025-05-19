<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    body {
      background: #f8f9fa;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .login-container {
      width: 100%;
      max-width: 400px;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      background-color: white;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h3 class="text-center mb-4">Login</h3>
    <form id="loginForm">
      <div class="mb-3">
        <label for="text" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" required />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" required />
      </div>
      <div id="loginMessage" class="text-danger mb-3"></div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <script>
    $("#loginForm").on("submit", function (e) {
        

      e.preventDefault(); // prevent actual form submission

      const username = $("#username").val();
      const password = $("#password").val();

      $.ajax({
        url: "backend/login_backend.php", 
        type: "POST",
        data: { username, password },

        success: function (response) {


          if(response.includes("Successful login")) {
            


                            window.location.href = "dashboard.php"; 



          }else{

              Swal.fire({
                title: "Invalid Credentials",
                text: "Please check your username and password.",
                icon: "error",
                confirmButtonText: "OK"
              });
          }
          
        },

      });
    });
  </script>

</body>
</html>
