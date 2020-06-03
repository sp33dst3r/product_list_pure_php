<?php include 'header.php' ?>
<a class="btn btn-primary" href="/products">К списку</a>
<?php foreach ($prod[0] as $k => $p): ?>
    <?php if($k == 'picture'): ?>
        <div><?php echo $k, ":  "?> <img style="width: 200px;" src="/assets/img/<?=$p?>" /> </div>
    <?php elseif($k == 'on_stock'): ?>
        <div><?php echo $k, ":  ", (($good['on_stock'] == '1') ? 'Есть в наличии':'Нет в наличии')?></div>
    <?php else: ?>
        <div><?php echo $k, ":  ", $p?></div>
    <?php endif; ?>
    
<?php endforeach; ?>

<?php include 'footer.php' ?>