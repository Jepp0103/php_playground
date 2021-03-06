<?php 
    $msg =  '';
    $msgClass = '';

    if (filter_has_var(INPUT_POST, 'submit')) {
        //Get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        //Check required fields
        if(!empty($email) && !empty($name) && !empty($message)) {
            echo 'PASSED';
            //Check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $msg  = "Please use a valid email";
                $msgClass = "alert-danger";
            } else {
                echo "PASSED";

                $toEmail = "jeppe@mail.com";
                $subject = "Contact request From ".$name;
                $body = "<h2>Contact Request</h2>
                    <h4>Name</h4><p>".$name."</p>
                    <h4>Name</h4><p>".$email."</p>
                    <h4>Name</h4><p>".$message."</p>
                    ";
            

                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8" . "
                    \r\n";

                //Additional Headers
                $headers .= "From: " .$name. "<".$email.">". "\r\n";

                if(mail($toEmail, $subject, $body, $headers)) {
                    //Email sent
                    $msg = "Your email has been sent";
                    $msgClass = "alert-success";
                } else {
                    $msg = "Your email was not sent";
                    $msgClass = "alert-danger";            
                }
            }
        }

    } else {
        //Failed
        $msg  = "Please fill in all fields";
        $msgClass = "alert-danger";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">My website</a>
            </div>
        </div>
    </nav>
    <div class="container">	
        <?php if ($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?>
            </div>
        <?php endif; ?>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	      <div class="form-group">
		      <label>Name</label>
		      <input type="text" name="name" class="form-control" 
              value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
	      </div>
	      <div class="form-group">
	      	<label>Email</label>
	      	<input type="text" name="email" class="form-control" value=
              "<?php echo isset($_POST['email']) ? $email : ''; ?>">
	      </div>
	      <div class="form-group">
	      	<label>Message</label>
              <textarea name="message" class="form-control"><?php echo isset($_POST['name']) ? $message : ''; ?>
              </textarea>
	      </div>
	      <br>
	      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>