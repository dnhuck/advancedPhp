<html>
    <body>
        <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post" enctype="multipart/form-data">
            <?php if (isset($cmsErrorsArray['title']))                 
            { ?>
                <div><?php echo $cmsErrorsArray['title']; ?>
            <?php } ?>
            title: <input type="text" name="title" value="<?php echo (isset($cmsDataArray['title']) ? $cmsDataArray['title'] : ''); ?>"/><br>
            h1: <input type="text" name="h1" value="<?php echo (isset($cmsDataArray['h1']) ? $cmsDataArray['h1'] : ''); ?>"/><br>
            keywords: <input type="text" name="keywords" value="<?php echo (isset($cmsDataArray['keywords']) ? $cmsDataArray['keywords'] : ''); ?>"/><br>
            url key: <input type="text" name="url_key" value="<?php echo (isset($cmsDataArray['url_key']) ? $cmsDataArray['url_key'] : ''); ?>"/><br>
            content: <textarea name="content"><?php echo (isset($cmsDataArray['content']) ? $cmsDataArray['content'] : ''); ?></textarea><br>
            article image: <input type="file" name="banner_image"/><br>
            <input type="hidden" name="cms_id" value="<?php echo (isset($cmsDataArray['cms_id']) ? $cmsDataArray['cms_id'] : ''); ?>"/>
            <input type="submit" name="Save" value="Save"/>
            <input type="submit" name="Cancel" value="Cancel"/>            
        </form>        
    </body>
</html>