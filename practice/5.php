<?php include "functions.php";?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>


		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php

/*  Step1: Use a pre-built math function here and echo it

Step 2:  Use a pre-built string function here and echo it

Step 3:  Use a pre-built Array function here and echo it

 */

echo pow(10, 5);
echo '<br>';
echo strlen('Mein Name ist Hase');
echo '<br>';
echo count([12, 12, 12, 12]);

?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php";?>