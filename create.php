<?php require 'header.php'; ?>
<?php
  $db = new db();
  $pdo = $db->connect();
  echo 'Congratulations Database is working, that great'; //check database connection
  $message = '';
  if (isset ($_POST['name'])  && isset($_POST['email']) ) 
    {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $sql = 'INSERT INTO users(name, email) VALUES(:name, :email)';
      $statement = $pdo->prepare($sql);
      if ($statement->execute([':name' => $name, ':email' => $email])) {
        $message = 'data inserted successfully';
        header("refresh:1.5 /");
      }
      
    }
 ?>

 <!-- HTML -->
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create a User</h2>
    </div>
    <div class="card-body">

      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>

          <form method="post">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control" value="<?php //if (isset($_POST['name'])) echo $_POST ['name'];?>" require>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" value="<?php //if (isset($_POST['email'])) echo $_POST ['email']; ?>" require>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info">Create a User</button>
            </div>
          </form>


    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
