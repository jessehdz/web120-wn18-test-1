<?php include 'includes/header.php'?>
<?php
//contact template

if(isset($_POST['Submit']))
{//send email?
    
    /*echo '<pre>';
    var_dump($_POST);
    echo '</pre>';*/
    
    
    $to = "jessi.hernandez@seattlecentral.edu";
    
    $subject = "My WebSite Feedback " . date("m/d/y, G:i:s");
    
    //collect and clean $POST data
    $FirstName = minimal_clean_post('FirstName');
    $LastName = minimal_clean_post('LastName');
    $Email = minimal_clean_post('Email');
    $Comments = minimal_clean_post('Comments');
    
    
    //build body of email
    $text = '';//initialize variable
    $text .= 'First Name: ' . $FirstName . PHP_EOL . PHP_EOL; 
    $text .= 'Last Name: ' . $LastName . PHP_EOL . PHP_EOL; 
    //PHP_EOL = white space / margin / padding
    $text .= 'Email: ' . $Email . PHP_EOL . PHP_EOL;
    $text .= 'Comments: ' . $Comments . PHP_EOL . PHP_EOL;
    
    $headers = 'From: noreply@jesseh-codes.com' . PHP_EOL .
                'Reply-To: ' .$Email . PHP_EOL .
                'X-Mailer: PHP/' . phpversion();
    
    mail($to,$subject,$text,$headers);
    
    echo '
    <div class="row">
        <div class="col-lg-12">
            <h3>Message Sent</h3>
            <p>Thank you for your submission!</p>
            <p>We will contact you within 24 hours!</p>
        </div>
    </div>
    ';

}else{//show form!

    <?php include 'includes/multiple.php'?>

} ?>

    <?php include 'includes/footer.php';

function minimal_clean_post($key){
    if(isset($_POST[$key])){
        return strip_tags(trim($_POST[$key]));
    } else {
        return '';
    }
}

?>
