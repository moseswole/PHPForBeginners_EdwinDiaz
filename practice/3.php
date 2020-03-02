<?php include "functions.php";?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

Step 2: Make a forloop  that displays 10 numbers

Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

$num = 10;
if ($num > 11) {
    echo 'Is bigger than 11';
} elseif ($num > 5) {
    echo 'Is bigger than 5';
} else {
    echo 'Is smaller than 5';
}

for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

$num2 = 5;

switch ($num2) {
    case 1:
        echo 'Is 1';
        break;
    case 2:
        echo 'Is 2';
        break;
    case 3:
        echo 'Is 3';
        break;
    case 4:
        echo 'Is 4';
        break;
    case 5:
        echo 'Is 5';
        break;
    default:
        echo 'Is none of those';
        break;
}

?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php";?>