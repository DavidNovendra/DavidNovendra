<html>

<head>
  <?php
    require('../../config.php');
    include('../templates/header.php');

    $id = $_GET['id'];
    $query = "SELECT * FROM films WHERE id = $id";
    $films = mysqli_query($conn, $query);
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {

        $tittles = $_POST['tittles'];
        $typef = $_POST['typef'];
        $genre = $_POST['genre'];
        $director = $_POST['director'];
        $stars = $_POST['stars'];
        $tahun = $_POST['tahun'];
        $cover = $_POST['cover'];
        

        $query = "UPDATE films SET tittles='$tittles', typef = '$typef', genre = '$genre', director = '$director', stars = '$stars', tahun = '$tahun', cover = '$cover' WHERE id = '$id'";
                
        // update data
        $result = mysqli_query($conn, $query );
    }
  ?>
     
  <title>Edit Film</title>
</head>
</head>

<body>
  <div class="container row">
    <div class="col-6 mx-auto">
      <a class="btn btn-primary mb-4" href="../../dashboard.php" role="button">Go to Home</a>

      <h3>Edit Film</h3>
      <hr>

      <form action="" method="POST">
        <?php if(isset($result) && $result === true) : ?>
        <div class="alert alert-success" role="alert">
          successfully edit Film
        </div>
        <?php endif ?>
          
        <?php foreach($films as $film) : ?>
          
          <div class="form-group">
          <label for="tittles">Tittles</label>
          <input type="text" name="tittles" class="form-control" id="tittles" placeholder="enter movie tittle"
          value="<?= $film['tittles']?>" required>
        </div>

        <div>
        <label for="typef">Type </label>
            <select for="typef" name="typef" id="typef" placeholder="select movie type "
              class="selectpicker mb-2">
             <option>Film</option>
               <option>Tv Shows</option>
            </select>
        </div>      

        <div class="form-group">
          <label for="genre">Genre</label>
          <input type="text" name="genre" class="form-control" id="genre" placeholder="genre" value="<?= $film['genre']?>" required>
        </div>
        <div class="form-group">
          <label for="director">Director</label>
          <input type="text" name="director" class="form-control" id="director" placeholder="director" value="<?= $film['director']?>" required>
        </div>
        <div class="form-group">
          <label for="stars">Stars</label>
          <input type="text" name="stars" class="form-control" id="stars" placeholder="stars" value="<?= $film['stars']?>" required>
        </div>

        <div class="form-group">
          <label for="tahun">Tahun</label>
          <input type="number" name="tahun" class="form-control" id="tahun" placeholder="tahun" value="<?= $film['tahun']?>" required>
        </div>

        <div class="form-group">
          <label for="cover">Cover</label>
          <input type="varchar" name="cover" class="form-control" id="cover" placeholder="cover" value="<?= $film['cover']?>" required>
        </div>

        <?php endforeach ?>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>

</html>