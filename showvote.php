<?php
include('security.php');

$sql = 'select * from pres1 where id=1'; // change this id as per your need
$result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));

?>
<!DOCTYPE html>
<html lang="en">

	<head>
	<script type="text/javascript">
			function promptForClose() {
			var the_answer = confirm(" ");

			if(the_answer == true) {
				window.location = "justvoteblock.php";

				}
				else if(the_answer == false) {
				window.location = "justvoteblock.php";
				
			} else {
				setTimeout('promptForClose()', 500);
			}
			}

			function definitelyClose() {
			top.opener = self;
			top.window.close();
			}

			</script>

	
		<title>voting result</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>total result</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin" onload="setTimeout('promptForClose()',500);">
	
		
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				

								
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.html">Home</a>
							</li>

							<li class= "active">
								Vote Result
							</li>
							
                        </ul><!-- /.breadcrumb -->
                        


        </div><!-- /.main-container -->
		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<hr>
        <div>
            <strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
               SUG PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM check1 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        </div>



        <div>
            <hr>
            <?php
            $sql = 'select * from pres1 where id=2'; // change this id as per your need
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<div>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM check2 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		</div>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
	</div>

			<div>
           
            <?php
            $sql = 'select * from pres1 where id=3'; // change this id as per your need
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
         
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
			<div>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM check3 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		</div>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>

		
		<div>
           
            <?php
            $sql = 'select * from pres1 where id=4'; // change this id as per your need
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>
			
			<div>
		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM check4 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		</div>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>

			<div>
           
            <?php
            $sql = 'select * from pres1 where id=5'; // change this id as per your need
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>
			
			<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM check5 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
		<hr>
</div>


<div>
           
            <?php
            $sql = 'select * from vice1 where id=1'; // change this id as per your need
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
           
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG VICE PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM vcheck1 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from vice1 where id=2'; // change this id as per your need
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
         
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG VICE PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM vcheck2 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from vice1 where id=3'; // change this id as per your need
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
         
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>

		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG VICE PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM vcheck3 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>

		
		<div>
           
            <?php
            $sql = 'select * from vice1 where id=4'; // change this id as per your need
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>

			<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG VICE PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM vcheck4 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from vice1 where id=5'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG VICE PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM vcheck5 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
		<hr>
</div>


			
			<div>
           
            <?php
            $sql = 'select * from sen1 where id=1'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG SENATE PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM scheck1 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>

		
		
		<div>
            <?php
            $sql = 'select * from sen1 where id=2'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
         
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG SENATE PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM scheck2 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from sen1 where id=3'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
           
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG SENATE PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM scheck3 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>



<div>
           
            <?php
            $sql = 'select * from sen1 where id=4'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
			<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG SENATE PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM scheck4 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>

<div>
           
            <?php
            $sql = 'select * from sen1 where id=5'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG SENATE PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM scheck5 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
		<hr>
</div>



<div>
           
            <?php
            $sql = 'select * from fossu1 where id=1'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG FOSSU PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM fcheck1 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from fossu1 where id=2'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG FOSSU PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM fcheck2 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from fossu1 where id=3'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG FOSSU PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM fcheck3 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from fossu1 where id=4'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>
			<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG FOSSU PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM fcheck4 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>

<div>
           
            <?php
            $sql = 'select * from fossu1 where id=5'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG FOSSU PRESIDENT
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM fcheck5 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
		<hr>
</div>


<div>
           
            <?php
            $sql = 'select * from gensec1 where id=1'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG GENERAL SECRETARY
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM gscheck1 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>

<div>
           
            <?php
            $sql = 'select * from gensec1 where id=2'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
			<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG GENERAL SECRETARY
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM gscheck2 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from gensec1 where id=3'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
			<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG GENERAL SECRETARY
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM gscheck3 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from gensec1 where id=4'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
			<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG GENERAL SECRETARY
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM gscheck4 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from gensec1 where id=5'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG GENERAL SECRETARY
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM gscheck5 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
		<hr>
</div>

<div>
           
            <?php
            $sql = 'select * from pro1 where id=1'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>
			<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>

		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG P.R.O
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM procheck1 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from pro1 where id=2'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG P.R.O
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM procheck2 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from pro1 where id=3'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
          
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
		<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG P.R.O
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM procheck3 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from pro1 where id=4'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
			<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG P.R.O
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM procheck4 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>



<div>
           
            <?php
            $sql = 'select * from pro1 where id=5'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
			<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG P.R.O
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM procheck5 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
		<hr>
</div>


<div>
           
            <?php
            $sql = 'select * from sports1 where id=1'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
          	 ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
			<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG SPORTS DIRECTOR
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM spcheck1 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from sports1 where id=2'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
			<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG SPORTS DIRECTOR
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM spcheck2 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from sports1 where id=3'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
           	?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
			<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG SPORTS DIRECTOR
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM spcheck3 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>


<div>
           
            <?php
            $sql = 'select * from sports1 where id=4'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
			<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG SPORTS DIRECTOR
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM spcheck4 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
</div>



<div>
           
            <?php
            $sql = 'select * from sports1 where id=5'; 
            $result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
            ?>

		<?php
		if(mysqli_num_rows($result) > 0 )        
		{
			while($row = mysqli_fetch_array($result))
				{
		?>
			<strong ><P>NAME : <P>
        <?php echo $row['fullname']; ?>
        </strong>

        <strong ><P>POST : <P>
                SUG SPORTS DIRECTOR
        </strong>

        <strong ><P>Department : <P>
        <?php echo $row['department']; ?>
        </strong>

        <strong ><P>Total Number of Voters : <P>
        <?php
                
                $query = "SELECT id FROM spcheck5 ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  '.$row.'</h4>';
            ?>
        
        </strong>
		<?php
			} 
		}
			else {
				echo "No Record Found";
			}
		?>
        <hr>
		<hr>
</div>




		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>
	</body>
</html>
