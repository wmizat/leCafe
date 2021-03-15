<?php
  //Post Method
  //require __DIR__.'/./src/config/db.php';
  $db = new db();
  $pdo = $db->connect();
  $id = $_GET['id'];
  $sql = 'SELECT * FROM users WHERE id=:id';
  $statement = $pdo->prepare($sql);
  $statement->execute([':id' => $id ]);
  $person = $statement->fetch(PDO::FETCH_OBJ);
    if (isset ($_POST['name'])  && isset($_POST['email']) ) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $sql = 'UPDATE users SET name=:name, email=:email WHERE id=:id';
      $statement = $pdo->prepare($sql);
        if ($statement->execute([':name' => $name, ':email' => $email, ':id' => $id])) {
          header("refresh:0.1 /");
        }
    }
 ?>


<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update User</h2>
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
          <input value="<?= $person->name; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" value="<?= $person->email; ?>" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update person</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
