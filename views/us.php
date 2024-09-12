<?php 
$posts = [
    ['title' => 'Some US 1', 'body' => 'Some US 1'],
    ['title' => 'Some US 2', 'body' => 'Some US 2'],
    ['title' => 'Some US 3', 'body' => 'Some US 3'],
    ['title' => 'Some US 4', 'body' => 'Some US 4'],
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