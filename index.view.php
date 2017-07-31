
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		header{
		background:#e3e3e3;
		padding: #e2m;
		text-align: center;
	}

	</style>
</head>
<body>
<body>
	<header> 
		<ul>

		<li><a href="/about.php">About Page</li>
		<li><a href="/contact.php">Contact Us</li>
		</ul>

	<h1>My task</h1>
		<ul>
		<?php foreach ($tasks as $task): ?>
			<li>
				<?php if($task->completed): ?>
					<strike><?= $task->description; ?></strike>
				<?php else: ?>
					<?=$task->description; ?>

				<?php endif ; ?>

				</li>
				<?php endforeach; ?>
				



		</ul>




		
	</header>
</body>

</body>
</html>