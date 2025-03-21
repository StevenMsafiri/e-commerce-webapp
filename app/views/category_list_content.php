<h1>Categories</h1>
<ul>
    <?php foreach ($categories as $category): ?>
        <li>
            <a href="index.php?action=list_by_category&category_id=<?php echo $category['id']; ?>">
                <?php echo $category['name']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>