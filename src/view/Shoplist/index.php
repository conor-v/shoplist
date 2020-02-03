<section>
  <h2>Grocery list</h2>
  <form action="index.php" method="post">
    <input type="hidden" name="search">
    <label for="search"></label>
    <input type="search" name="search" id="search">
    <input type="submit" value="search">
  </form>

  <?php foreach ($items as $item): ?>
  <?php endforeach; ?>
</section>

