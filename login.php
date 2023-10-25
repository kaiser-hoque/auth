
<?php
    require_once ('include/header.php')
?>
<body >
  <div class="container mt-5 co-md-6 ">
    <h2>Login Form</h2>
    <form action="login.process.php">
      <div class="mb-3">
        <label for="name" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Password</label>
        <input type="email" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Bootstrap JS scripts (not required for the form) -->
  
