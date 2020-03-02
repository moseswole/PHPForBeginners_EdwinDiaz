<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->



    <article class="main-content col-xs-8">


        <?php  

	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/

	$myText = "Dieser Text soll gehasht werden";

	$hashFormat = "$2y$10$";
	$salt = "iusesomecrazystrings22";
	$hashSalt = $hashFormat . $salt;
	$myText = crypt($myText, $hashSalt);

	echo $myText;

	//new way
	$myText2 = "This should be hashed the new way";
	$myTextHash= password_hash($myText2, PASSWORD_BCRYPT);

	
	$enteredText ="This should be hashed the new wa";
	$correct = password_verify($enteredText, $myTextHash);

	if($correct) {
		echo 'Correct Password';
	} else {
		echo 'Wrong Password';
	}

	?>



    </article>
    <!--MAIN CONTENT-->
    <?php include "includes/footer.php"; ?>