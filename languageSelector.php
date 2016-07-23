<?php header("Content-type: application/javascript"); ?>

$(function() {
    $("#languageSelect").change(function () {
        var language = this.value;
        alert(language);
        <?php session_start();?>
        if(language == 'English'){
            <?php $_SESSION['language'] = "English"; ?>
            alert('<?php echo $_SESSION['language']."New" ?>');
        } else if(language =='සිංහල') {
            <?php $_SESSION['language'] = "Sinhala"; ?>
            alert('<?php echo $_SESSION['language']."New" ?>');
        }        
        
        location.reload();    
        //$("#ABC").hide().fadeIn('fast');
    });
});
    
    
    

