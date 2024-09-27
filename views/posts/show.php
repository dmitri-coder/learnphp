<?php include __DIR__ . '/../partials/header.php'; ?>

<style>
table, th, td {
  border:3px solid black;
  background-color: grey;
}
</style> 
<main class="container">
    <table class="table table-hover table-bordered">
      <tr>
        <th>Heading</th>
        <td><?=$post->title?></td> 

      </tr>
      <tr>
      <th>Content</th></td>
        <td><?=$post->body?></td>
      </tr>
    </table>

</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>