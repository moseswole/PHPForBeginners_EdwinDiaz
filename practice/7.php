<?php include "functions.php"; ?>
<?php include "includes/header.php";?>


<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">



        <?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/

		$connection = mysqli_connect('localhost', 'root', 'root', 'practice7');
		if(!connection) {
			die('Connection could not be established');
		}

		$query = "SELECT * FROM practice7";

		$result = mysqli_query($connection, $query);

		if(!result) {
			die("Query invalid" . mysqli_error($connection));
		}

		while($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$quote = $row['quote'];
			echo "<h1>$id</h1>";
			echo "<p>$quote</p>";
		}
	
	?>





    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php"; ?>