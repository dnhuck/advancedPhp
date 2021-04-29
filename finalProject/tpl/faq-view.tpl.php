<html>
    <body>
        faq question: <?php echo (isset($faqDataArray['faq_question']) ? $faqDataArray['faq_question'] : ''); ?><br>
        faq answer: <?php echo (isset($faqDataArray['faq_answer']) ? $faqDataArray['faq_answer'] : ''); ?><br>

        <a href="faq-list.php">Back to List</a>        
    </body>
</html>