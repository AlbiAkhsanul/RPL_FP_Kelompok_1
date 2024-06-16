<?php
$order = $data['order'];
$penalties = $data['penalties'];
var_dump($data);
echo "<hr>";
var_dump($order);
echo "<hr>";
var_dump($penalties);
?>
<h1>
    Ini Halaman Detail Orders
</h1>
<hr>
<?php if ($_SESSION['is_admin'] === 1) : ?>
    <a href="<?= BASEURL ?>/penalty/create/<?= $order['order_id'] ?>">
        <button>Buat Penalty Untuk Order Ini</button>
    </a>
<?php endif ?>
<hr>