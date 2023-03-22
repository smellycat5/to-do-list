<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
	<title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>

    <form method="post" action="add.php">
		<label for="new-task">New Task:</label>
		<input type="text" id="new-task" name="new-task" required>
		<button type="submit">Add</button>
	</form>
</header>
<hr>
<header>
    <h1 align= left> Your TO-DO List</h1>
    <table>
        <?php
            $statement = $pdo->prepare('select * from task');
            $statement ->execute();

            $tasks = $statement ->fetchAll(PDO::FETCH_ASSOC);//load or fetch from database
        ?> 
        <?php foreach ($tasks as $taskss):?>
            <tr>
                <td>
                    <?php if ($taskss['completed']):?> 
                        <strike><?= $taskss['description']; ?></strike>
                    <?php else: ?>
                        <?=$taskss['description'];?> 
                    <?php endif; ?>
                </td>
                <td>
                    <a href="done.php?id=<?php echo $taskss['id']?>" button class="button button2">done</a>
                </td>  
                <td>
                    <a href="delete.php?id=<?php echo $taskss['id']?>" button class="button button1">delete</a>
                </td>
            <tr>
        <?php endforeach; ?>
        <hr>
   </table> 
</header>
<a href ="404.php">aboutus</a>    
</body>
</html> 