<?php
include("connect.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">    
    </head>
    <body>
            <DIV class="content">

                <form action="#" method="POST" >
                <div class="title">
                    REGISTRATION FORM
                </div>

                <div class="form" >

                    <div class="input_feild">
                        <label>first name</label>
                        <input type="text" class="input" name="first">
                    </div>
                    
                    <div class="input_feild">
                        <label>last name</label>
                        <input type="text" class="input" name="second">
                    </div>

                    <div class="input_feild">
                        <label>middle name</label>
                        <input type="text" class="input" name="third">
                    </div>

                    <div class="input_feild">
                        <label>password</label>
                        <input type="password" class="input" name="fourth">
                    </div>

                    <div class="input_feild">
                        <label>confirm password</label>
                        <input type="password" class="input" name="fifth">
                    </div>

                    <div class="input_feild">
                        <label>GENDER</label>
                        <select class="selectbox" name="sixth">
                            <option value="MALE">MALE</option>
                            <option value="FEMALE">FEMALE</option>
                            <option value="TRANS">TRANS</option>
                            <option value="OTHER">OTHER</option>
                            <option value="OTHERWISE">otherwise not say</option>
                        </select>
                    </div>

                    <div class="input_feild">
                        <label>EMAIL</label>
                        <input type="text" class="input" name="seventh">
                    </div>

                    <div class="input_feild">
                        <label>PHONE NO:</label>
                        <input type="text" class="input" name="eighth">
                    </div>

                    <div class="input_feild">
                        <label>Adress</label>
                        <textarea cols="15" rows="5" class="textarea" name="nine"></textarea>
                    </div>

                    <div class="input_feild_terms">
                        <label class="check">
                            <input type="checkbox" name="">
                            <span class="checkmark">
                            <p>
                            I Agree The Terms and Conditions.
                            </p>
                            </span>
                        </label>
                        
                    </div>
                    
                    <div class="input_feild">
                        <input type="submit" value="register" class="btn" name="register">
                    </div>    
                </div> 
                </form>   
            </DIV>
    </body>
</html>
<?php
if ($_POST['register']){
    
    $_fname         = $_POST['first'];
    $_lname         = $_POST['second'];
    $_mname         = $_POST['third'];
    $_password      = $_POST['fourth'];
    $_con_password  = $_POST['fifth'];
    $_gender        = $_POST['sixth'];
    $_email         = $_POST['seventh'];
    $_phno          = $_POST['eight'];
    $_adress        = $_POST['nine'];

    //currently not using this function
    //if($_fname !="" && $_lname !="" && $_mname !="" && $_password !="" && $_con_password !="" && $_gender !="" && $_email !="" && $_phno !="" && $_adress !=""){

    $query = "INSERT INTO register values('$_fname','$_lname','$_mname','$_password','$_con_password','$_gender','$_email','$_phno','$_adress')";
    $data = mysqli_query($conn,$query);

    if($data){
        echo "data INSERTED SUCESSFULLY";
    }
    else{
        echo "ERROR 1025";
    }
//not under use case    
//}
//else{
    //echo "please fill all credentials";
//}

}
?>