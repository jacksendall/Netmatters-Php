<?php
    require 'header.php';
?>

<div class="container">


<div class="">
<form method="post" action="contact.inc.php" class="contact-us-form">
<h1>How Can We Help You?</h1>
<?php 
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl, "error=emptyfields") == true) {
        echo "
        <div class=\"form-return error\">
        Please complete all fields!
        <button id=\"hide\">x</button>  
        </div>
        ";
    }
    elseif (strpos($fullUrl, "error=invalidmail") == true) {
        echo "
        <div class=\"form-return error\">
        Please enter a valid email address!
        <button id=\"hide\">x</button>  
        </div>
        ";
    }
    elseif (strpos($fullUrl, "error=sqlerror") == true) {
        echo "
        <div class=\"form-return error\">
        SQL Error! Please contact an administrator.
        <button id=\"hide\">x</button>  
        </div>
        ";
    }
    elseif (strpos($fullUrl, "enquiry=success") == true) {
        echo "
        <div class=\"form-return success\">
        Your message has been sent!
        <button id=\"hide\">x</button>  
        </div>
        ";
    };

?>



    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <p>Your Name</p>
                <input type="text" name="name">
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <p>Your Telephone Number</p>
                <input type="text" name="phone">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <p>Your Email</p>
                <input type="text" name="mail">
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <p>Subject</p>
                <input type="text" name="subject">
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <p>Message</p>
        <textarea style="width: 100%;" id="message" name="message"></textarea> 
    </div>

    <div class="form-group">
        <input type="checkbox" name="marketing">
      <p class="inline-checkbox">Please tick this box if you wish to receive marketing information from us. Please see our <a href="/privacy">Privacy Policy</a> for more information on how we use your data.</p>
    </div>

    <div class="form-group">
        <button class="btn btn-menu-nm btn-dark-nm" type="submit" name="submit-message">SEND ENQUIRY</button>
    </div>

</form>



</div>


</div>
<script>
        document.querySelector("#hide").addEventListener("click", function(event) {
            document.querySelector(".form-return").classList.add("hide");
            event.preventDefault();
        });
    </script>
<?php
    require 'footer.php';
?>