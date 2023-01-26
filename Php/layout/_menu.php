<?php

require_once("./menu.php");
$menus = new Menu();
?>
<ul>
	<?php
		foreach($menus->items as $item)
		{
	 ?>
	<li><a href="<?php $item['link'] ?>"><?= $item['title'] ?></a></li>
	<?php } ?>
</ul>