<html>
<body>
<? include('subtpl.php.tpl'); ?>
Hallo <?=$name?>
<p>alle Namen</p>
<ul>
	<? foreach($namen as $name) : ?>
		<li><?=$name['firstname']?> <?=$name['lastname']?></li>
	<? endforeach; ?>
</ul>

<p><?</p>
</body>
</html>
