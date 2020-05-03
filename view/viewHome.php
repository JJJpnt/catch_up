<?php
echo "viewhome...<br>";
foreach($posts as $post)
{
    echo "viewhome foreach...<br>";
?>
<h1>ARTCILES :</h1>
<h3><?= $post->getArticle_title() ?></h3>
<time><?= $post->getArticle_date() ?></time>
<p><?= $post->getArticle_text() ?></p>

<?php
}
?>