<header class="header">
  <h1 class="header__title">Grocery List</h1>
  <form action="index.php" method="post">
    <input type="hidden" name="search">
    <label for="search"></label>
    <input type="search" name="search" id="search">
    <input type="submit" value="search">
  </form>
</header>

<main class="main">
  <section class="items__container">
    <h2 class="hidden">items</h2>
    <?php foreach ($items as $item): ?>
      <article class="item">
        <h3 class="hidden"><?php echo $item['name'] ?></h3>
        <form action="">
          <input type="hidden" name="">
          <button class="item__favbutton"><img src="../assets/emptyFav.png" alt=""></button>
        </form>
        <img src="<?php echo $item['foto_item'] ?>" alt="<?php echo $item['name'] ?>">
        <div>
          <p class="item__name"><?php echo $item['name'] ?></p>
          <p class="item__cat">cat: <?php echo $item['cat'] ?></p>
        </div>
        <a class="item__menu" href="index.php?page=details&amp;id=<?php echo $item['id'] ?>"><img src="../assets/menu.png" alt="details menu"></a>
      </article>
    <?php endforeach; ?>
  </section>

  <section class="footer">
    <h2 class="hidden">buttons menu</h2>
    <a class="footer__button" href=""><i class="fas fa-plus"></i></a>
    <a class="footer__button" href=""><i class="far fa-star"></i></a>
  </section>
</main>
