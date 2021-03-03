<?php
require_once('../inc/NewsArticles.class.php');

$newsArticle = new NewsArticles();

$articleList = $newsArticle->getList();

//var_dump($articleList); die;

?>
<html>
    <body>
        <div>News Articles - 
            <a href="/Week06/public/article-edit.php">Add New Article</a>
        </div>        
        <div>
            <!-- header info -->
            <div style="clear:both;">
                <div style="float:left; border:1px solid black;">Article Title</div>
                <div style="float:left; border:1px solid black;">Article Author</div>
                <div style="float:left; border:1px solid black;">Article Date</div>
                <div style="float:left; border:1px solid black;">&nbsp;</div>
                <div style="float:left; border:1px solid black;">&nbsp;</div>
            </div>
            <?php foreach ($articleList as $articleData) { ?>
                <div style="clear:both;">
                    <div style="float:left; border:1px solid black;"><?php echo $articleData['articleTitle']; ?></div>
                    <div style="float:left; border:1px solid black;"><?php echo $articleData['articleAuthor']; ?></div>
                    <div style="float:left; border:1px solid black;"><?php echo $articleData['articleDate']; ?></div>
                    <div style="float:left; border:1px solid black;"><a href="/Week06/public/article-edit.php?articleID=<?php echo $articleData['articleID']; ?>">Edit</a></div>
                    <div style="float:left; border:1px solid black;"><a href="/Week06/public/article-view.php?articleID=<?php echo $articleData['articleID']; ?>">View</a></div>
                </div>
            <?php } ?>                
        </div>
    </body>
</html>