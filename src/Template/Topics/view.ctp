<!-- File: src/Template/Topics/view.ctp -->

<h1><?= h($topic->title) ?></h1>
<p><?= h($topic->content) ?></p>

<p>Tags :<?= h($topic->tags) ?></p>
By <h3><?= h($topic->author) ?></h3>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("l");
?>


