<?php
    require_once __DIR__ . '/data/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/style/style.css">
  <title>PHP-Dischi</title>
</head>
<body>

  <header class='color_bl_light'>
  <div class='left'>
    <i class="fab fa-spotify"></i>
  </div>
  <div class="right">
    <select name="select_gen" id="gen">
    <option value="default">Generi Musicali</option>
      <option value="rock">rock</option>
      <option value="blues">blues</option>
      <option value="pop">pop</option>
      <option value="reggae">reggae</option>
    </select>
  </div>
  </header>

  <main>
    <div class="wrapper">
      <?php
        foreach($covers as $album){
      ?>
      <div class="card color_bl_light"> 

        <img src="<?php echo $album['poster']?>" alt="<?php echo $album['title']?>">

        <h2>
            <?php
                echo $album['title'];
            ?>
        </h2>
        <h1>
            <?php
                echo $album['author'];
            ?>
        </h1>
        <h3>
            <?php
                echo $album['year'];
            ?>
        </h3>
       </div>
      
      <?php } ?>
    </div>
  </main>


</body>
</html>