<?php include 'header.php' ?>

<?php
use app\models\Cart;
parse_str($_SERVER['QUERY_STRING'], $query_string);
$query_string['order'] = 'price';
$rdr_str = http_build_query($query_string);
#var_dump(Cart::is_in_cart(1));


?>

<a class="btn btn-primary" href="<?=parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)."?sorting=name"?>">Сортировать по названию</a>
<a class="btn btn-primary" href="<?=parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)."?sorting=price"?>">Сортировать по цене</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Название</th>
      <th scope="col">Описание</th>
      <th scope="col">Изображение</th>
      <th scope="col">Цена</th>
      <th scope="col">На складе</th>
      <th scope="col">Корзина</th>
    </tr>
  </thead>
  <tbody>
      <?php $counter = 1; foreach($goods as $good): ?>
        <tr>
            <td><a href='/products/view/<?=$good['id']?>'><?=$good['name']?></a></td>
            <td><?=$good['description']?></td>
            <td><img src="/assets/img/<?=$good['picture']?>" /></td>
            <td><?=$good['price']?></td>
            <td><?=(($good['on_stock'] == '1') ? 'Есть в наличии':'Нет в наличии') ?></td>
            <td><?php echo (Cart::is_in_cart($good['id']) == true ? "<span data-id='".$good['id']."' class='cart-btn out'>Удалить из корзины</span>" : "<span data-id='".$good['id']."' class='cart-btn in'>Добавить в корзину</span>") ?></td>
        </tr>
      <?php $counter++; endforeach; ?>
  </tbody>
</table>

<?php if($count > 10): ?>
    <?php
  
  
  $count_pages = ceil($count / 10);
 
  $active = $page;
  $sorting = isset($_GET['sorting']) ? "?sorting=".$_GET['sorting'] : ""; 
  $count_show_pages = 10;
  $url = "/products/page/1/".$sorting;
  $url_page = "/products/page/";
  if ($count_pages > 1) { 
   
    $left = $active - 1;
    $right = $count_pages - $active;
    if ($left < floor($count_show_pages / 2)) $start = 1;
    else $start = $active - floor($count_show_pages / 2);
    $end = $start + $count_show_pages - 1;
    if ($end > $count_pages) {
      $start -= ($end - $count_pages);
      $end = $count_pages;
      if ($start < 1) $start = 1;
    }
?>
  
  <div id="pagination">
    <span>Страницы: </span>
    <?php if ($active != 1) { ?>
      <a href="<?=$url?>" title="Первая страница">&lt;&lt;&lt;</a>
      <a href="<?php if ($active == 2) { ?><?=$url?><?php } else { ?><?=$url_page.($active - 1).$sorting?><?php } ?>" title="Предыдущая страница">&lt;</a>
    <?php } ?>
    <?php for ($i = $start; $i <= $end; $i++) { ?>
      <?php if ($i == $active) { ?><span><?=$i?></span><?php } else { ?><a href="<?php if ($i == 1) { ?><?=$url?><?php } else { ?><?=$url_page.$i.$sorting ?><?php } ?>"><?=$i?></a><?php } ?>
    <?php } ?>
    <?php if ($active != $count_pages) { ?>
      <a href="<?=$url_page.($active + 1).$sorting?>" title="Следующая страница">&gt;</a>
      <a href="<?=$url_page.$count_pages.$sorting?>" title="Последняя страница">&gt;&gt;&gt;</a>
    <?php } ?>
  </div>
<?php } ?>
<?php endif; ?>

<?php include 'footer.php' ?>