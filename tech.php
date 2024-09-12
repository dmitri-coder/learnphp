<?php 
$posts = [
    ['title' => 'Some TECH 1', 'body' => 'Some TECH 1'],
    ['title' => 'Some TECH 2', 'body' => 'Some TECH 2'],
    ['title' => 'Some TECH 3', 'body' => 'Some TECH 3'],
    ['title' => 'Some TECH 4', 'body' => 'Some TECH 4'],
];
?>
<?php include 'partials/header.php'; ?>

<main class="container">
  
  <?php include 'partials/hero.php'; ?>
  <?php include 'partials/featured.php'; ?>
  

  <div class="row g-5">
    <div class="col-md-8">
    <?php include 'partials/posts.php'; ?>
    </div>

    <div class="col-md-4">
    <?php include 'partials/sidebar.php'; ?>
    </div>
  </div>

</main>

<?php include 'partials/footer.php'; ?>