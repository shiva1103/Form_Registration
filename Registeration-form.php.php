<!DOCTYPE html>  
<html>  
<head>  
<style>  
.error {color: #FF0001;}  
</style>  
</head>  
<body> 
<h2>Registration Form</h2>  
<span class = "error">* required field </span>  
<br><br>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
    Name:   
    <input type="text" name="name">  
    <span class="error">* </span>  
    <br><br>  
    E-mail:   
    <input type="text" name="email">  
    <span class="error">* </span>  
    <br><br>  
    Mobile No:   
    <input type="text" name="mobileno">  
    <span class="error">*  </span>  
    <br><br>  
    Website:   
    <input type="text" name="website">  
    <span class="error"> </span>  
    <br><br>  
    Gender:  
    <input type="radio" name="gender" value="male"> Male  
    <input type="radio" name="gender" value="female"> Female  
    <input type="radio" name="gender" value="other"> Other  
    <span class="error">* </span>  
    <br><br>  
    Agree to Terms of Service:  
    <input type="checkbox" name="agree">  
    <span class="error">* </span>  
    <br><br>                            
    <input type="submit" name="submit" value="Submit">   
    <br><br>                             
</form>  
</body>  
</html>  