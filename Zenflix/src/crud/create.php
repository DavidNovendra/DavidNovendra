<html>

<head>
  <?php
    require('../../config.php');
    include('../templates/header.php');

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {

        $tittles = $_POST['tittles'];
        $typef = $_POST['typef'];
        $genre = $_POST['genre'];
        $director = $_POST['director'];
        $stars = $_POST['stars'];
        $tahun = $_POST['tahun'];
        $cover = $_POST['cover'];
        

        $query = "INSERT INTO films(tittles, typef, genre, director, stars, tahun, cover) VALUES('$tittles', '$typef', '$genre', '$director', '$stars', '$tahun', '$cover')";
                
        // Insert user data into table
        $result = mysqli_query($conn, $query );
    }
  ?>

  <title>Add New Film</title>
</head>
</head>

<body>
  <div class="container row">
    <div class="col-6 mx-auto">
      <a class="btn btn-primary mb-4" href="../../dashboard.php" role="button">Go to Home</a>
      <h3>Add Film</h3>
      <hr>

      <form action="" method="POST">
        <?php if(isset($result) && $result === true) : ?>
        <div class="alert alert-success" role="alert">
          successfully Added Film
        </div>
        <?php endif ?>

        <div class="form-group">
          <label for="tittles">Tittles</label>
          <input type="text" name="tittles" class="form-control" id="tittles" placeholder="enter movie tittle"
            required>
        </div>

        <div>
        <label for="tittles">Type</label>
                <select for="typef" name="typef" id="typef" placeholder="Select Movie Type"
                  class="selectpicker mb-2">
                    <option>Film</option>
                    <option>Tv Shows</option>
                </select>
        </div>

        <div class="form-group">
          <label for="genre">Genre</label>
          <input type="text" name="genre" class="form-control" id="genre" placeholder="genre" required>
        </div>

        <div class="form-group">
          <label for="director">Director</label>
          <input type="text" name="director" class="form-control" id="director" placeholder="director" required>
        </div>

        <div class="form-group">
          <label for="stars">Stars</label>
          <input type="text" name="stars" class="form-control" id="stars" placeholder="stars" required>
        </div>

        <div class="form-group">
          <label for="tahun">Tahun</label>
          <input type="number" name="tahun" class="form-control" id="tahun" placeholder="tahun" required>
        </div>

        <div class="form-group">
          <label for="cover">Cover</label>
          <input type="varchar" name="cover" class="form-control" id="cover" placeholder="cover" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>

</html>