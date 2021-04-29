<html>
    <body>
        <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post" enctype="multipart/form-data">

                <?php if (isset($faqErrorsArray['faq_question']))                 
                { ?>
                    <div><?php echo $faqErrorsArray['faq_question']; ?>
                <?php } ?>
            faq question: <textarea name="faq_question"><?php echo (isset($faqDataArray['faq_question']) ? $faqDataArray['faq_question'] : ''); ?></textarea><br>

                <?php if (isset($faqErrorsArray['faq_answer']))                 
                { ?>
                    <div><?php echo $faqErrorsArray['faq_date']; ?>
                <?php } ?>
            faq Answer: <textarea name="faq_answer"><?php echo (isset($faqDataArray['faq_answer']) ? $faqDataArray['faq_answer'] : ''); ?></textarea><br>
            
         
            
            <input type="hidden" name="faq_id" value="<?php echo (isset($faqDataArray['faq_id']) ? $faqDataArray['faq_id'] : ''); ?>"/>
            <input type="submit" name="Save" value="Save"/>
            <input type="submit" name="Cancel" value="Cancel"/>            
        </form>        
    </body>
</html>