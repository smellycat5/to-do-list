<?php
require_once('xxx.php');
    $statement = $pdo->prepare('select * from task');
    $statement ->execute();
    $tasks = $statement ->fetchAll(PDO::FETCH_CLASS, 'Task');
?>
<?php ?>
            <?php foreach ($tasks as $taskss):?>
                <li>
                    <?php if ($taskss ->completed):?> 
                        <strike><?= $taskss->description; ?></strike>
                    <?php else: ?>
                        <?=$taskss->description;?> 
                    <?php endif; ?>
                </li> 
            <?php endforeach; ?>