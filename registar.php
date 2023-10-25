
<?php
    require_once ('include/header.php')
?>
<body>
  <div class="container mt-5 co-md-6 ">
    <h2>Registration Form</h2>
    <form action="register_process.php" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">password</label>
        <input type="tel" class="form-control" id="phone" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>

  <!-- Bootstrap JS scripts (not required for the form) -->
  
