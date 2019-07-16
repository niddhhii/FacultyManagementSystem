<?php include 'deleteform_php.php'; ?>
<html>
<html lang="en">
<head>
	<title>Delete : <?php echo $form; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=NTR' rel='stylesheet'>
	<style>
		.navbar
		{
			background-color : #1F54AB;
			border : none;
			border-radius : 0px;
		}

		.right
		{
			float : right;
		}

		#navleft
		{
			color : white;
			margin-top : 1%;
			font-size : 18px;
		}
		#setbtn
		{
			background-color : #1F54AB;
			margin-top:9px;
			border : none;
			font-size : 20px;
		}
		::-webkit-scrollbar
		{
			width : 7px;
			height : 10px;  
		}
		::-webkit-scrollbar-thumb
		{
		    background: #1F54AB; 
		    border-radius : 30px;
		    width : 10px;
		}
		::-webkit-scrollbar-thumb:hover
		{
		    background: #1F54AB; 
		    border-radius : 30px
		}
	</style>
</head>

<body>


	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="nav navbar-nav navbar-left" id ="navleft">
				<b>Employee ID : <?php echo $empid; ?></b>
			</div>
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
			</div>

		<div class="collapse navbar-collapse" id ="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<div class="dropdown">
						<button id ="setbtn" class="btn btn-primary" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></button>
						<ul class="dropdown-menu">
							<li><a href="security.php"><font style="color:black;">Forgot Password</font></a></li>
							<li class="divider"></li>
							<li><a href="logout.php"><font style="color:black;">Log out &nbsp <span class="glyphicon glyphicon-log-in"></span></font></a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<div class="col-lg-3 col-md-2 col-xs-1 col-sm-2"></div>

	<div class="container-fluid col-lg-6 col-md-8 col-xs-9 col-sm-8">
		<!-- COURSES TAUGHT -->
		<div id ="section3" class="well">
			<form method="post" onsubmit="return coursesvalidation()" name="coursestaught">
			<legend><h2><center>Courses Taught</center></h2></legend>
			<div style="font-size:17px;">
				<div class="form-group">
					<b>Course Type :</b> <?php echo $courseid; ?>
				</div>
				<br>
				<div class="form-group">
					<b>Course: </b><?php echo $coursecategory; ?>
				</div>

				<br>
				<div class="form-group">
					<b>Course Year : </b><?php echo $courseyear; ?>
				</div>
				<br>
				<div class="form-group">
					<b>Course Semester : </b><?php echo $coursesem; ?>
				</div>
			</div>
			<br>
			<div class="form-group">
				<div class="right">
					<input type="submit" class="btn" value="Cancel" name = "return"> &nbsp
					<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Delete" name = "delete">
				</div>
			</div>
		</form>
			<br>
		</div>

		<!-- PROJECTS-GUIDED -->
		<div id ="section4" class="well">
			<form method="POST" name="project" onsubmit="return projguided()" enctype="multipart/form-data">
			<legend><h2><center>Projects Guided</center></h2></legend>
			<div style="font-size:17px;">
			<div class="form-group">
				<b>Project Name :</b> <?php echo $title; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Project Type :</b> <?php echo $description; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Project Description :</b> <?php echo $type; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Project Year :</b> <?php echo $year; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Student Details :</b>
			</div>
			<br>
				<?php

    					echo "<div class='table-responsive '>";
    					echo "<table class='table table-bordered'>";
    					echo "<tr>";
    					echo "<th class='sabserial'>Sr.No.</th>";
    					echo "<th>Name</th>";
          				echo "<th>Roll Number</th>";
         				echo "<th>Email</th>";
          				echo "</tr>";

            					echo '<tr><td>1</td><td>'.$s1name.'</td><td>'.$s1roll.'</td><td>'.$s1email.'</td></tr>';


            					echo '<tr><td>2</td><td>'.$s2name.'</td><td>'.$s2roll.'</td><td>'.$s2email.'</td></tr>';


            					echo '<tr><td>3</td><td>'.$s3name.'</td><td>'.$s3roll.'</td><td>'.$s3email.'</td></tr>';


            					echo '<tr><td>4</td><td>'.$s4name.'</td><td>'.$s4roll.'</td><td>'.$s4email.'</td></tr>';

      					echo "</table>";
        				echo "</div>";

				?>
			</div>
			<br>
			<div class="form-group">
				<div class="right">
					<input type="submit" class="btn" value="Cancel" name = "return"> &nbsp
					<input type="submit"  style="color:white;" class="btn btn-primary btn-md" value="Delete" name = "delete">
				</div>
			</div>
			</form>
			<br>
		</div>

		<!-- PUBLICATIONS-BOOKS -->
		<div id ="section41" class="well">
			<form method="POST"  name="publicationbooks" enctype="multipart/form-data">
			<center>
				<legend><h2>Publications</h2></legend>
				<h3>Books</h3>
			</center>
			<div style="font-size:17px;">
			<div class="form-group">
				<b>Book Name :</b> <?php echo $bookname; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Book ISBN :</b> <?php echo $isbn; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Book Date :</b> <?php echo $datepub; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Book Edition :</b> <?php echo $edition; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Book Publisher's Name :</b> <?php echo $pubname; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Author's Name :</b> <?php echo $author; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Author's Institute :</b> <?php echo $authorinst; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Co-Author 1:</b> <?php echo $coa1; ?><br>
				<b>Co-Author Institue :</b> <?php echo $coa1inst; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Co-Author 2 :</b> <?php echo $coa2; ?><br>
				<b>Co-Author Institute :</b> <?php echo $coa2inst; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Co-Author 3 :</b> <?php echo $coa3; ?><br>
				<b>Co-Author Institute :</b> <?php echo $coa3inst; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Book's Cover Page :</b>

				<?php
				if(!empty($cover))
					echo $pdf1;

				else
					echo "<b>Not Inserted</b>";
				?>
			</div>
			<br>
			</div>
			<div class="form-group">
				<div class="right">
					<input type="submit"  class="btn" value="Cancel" name = "return"> &nbsp
					<input type="submit"  style="color:white;" class="btn btn-primary btn-md" value="Delete" name = "delete">
				</div>
			</div>
			</form>
			<br>
		</div>

		<!-- PUBLICATIONS-JOURNAL -->
		<div id ="section42" class="well">
			<form method="POST"  name="publicationjournals" enctype="multipart/form-data">
			<center>
				<legend><h2>Publications</h2></legend>
				<h3>Journals</h3>
			</center>
			<br>
			<div style="font-size:17px;">
			<div class="form-group">
				<b>Paper's Title :</b> <?php echo $title;?>
			</div>
			<br>
			<div class="form-group">
				<b>Journal Name :</b> <?php echo $title;?>
			</div>
			<br>
			<div class="form-group">
				<b>First Author :</b> <?php echo $title;?>
			</div>
			<br>
			<div class="from-group">
				<b>Co - Authors :</b> <?php if($count == 0) echo "* Not Inserted *";?>
				<?php echo $count; ?>
				<?php
					for($i=1; $i<=$count; $i++)
					{
						if($i == 1){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 1 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa1";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa1aff";
							echo "</div>";
						}
						if($i == 2){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 2 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa2";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa2aff";
							echo "</div>";
						}
						if($i == 3){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 3 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa3";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa3aff";
							echo "</div>";
						}
						if($i == 4){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 4 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa4";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa4aff";
							echo "</div>";
						}
						if($i == 5){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 5 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa5";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa5aff";
							echo "</div>";
						}
						if($i == 6){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 6 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa6";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa6aff";
							echo "</div>";
						}
						if($i == 7){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 7 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa7";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa7aff";
							echo "</div>";
						}
						if($i == 8){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 8 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa8";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa8aff";
							echo "</div>";
						}
						if($i == 9){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 9 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa9";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa9aff";
							echo "</div>";
						}
						if($i == 10){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 10 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa10";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa10aff";
							echo "</div>";
						}
					}
				?>
			</div>
			<br>
			<div class="form-group">
				<b>Publisher's Name :</b> <?php echo $title;?>
			</div>
			<br>
			<div class="form-group">
				<b>Digital Object Identifier :</b> <?php echo $doi;?>
			</div>
			<br>
			<div class="form-group">
				<b>Date of Publication :</b> <?php echo $date;?>
			</div>
			<br>
			<div class="form-group">
				<b>Impact Factor :</b> <?php echo $impactfactor;?>
			</div>
			<br>
			<div class="form-group">
				<b>Journal's Type :</b> <?php echo $type;?>
			</div>
			<br>
			<div class="form-group">
				<b>Volume :</b> <?php echo $volume;?>
			</div>
			<br>
			<div class="form-group">
				<b>Is it a book chapter :</b> <?php echo $bookchapter;?>
			</div>
			<br>
			<div class="form-group">
				<b>Issue No :</b> <?php echo $issue;?>
			</div>
			<br>
			<div class="form-group">
				<b>Peer Reviewed :</b> <?php echo $peerreviewed;?>
			</div>
			<br>
			<div class="form-group">
				<b>Page Number :</b> <?php echo $pageno;?>
			</div>
			<br>
			<div class="form-group">
				<b>ISSN Number :</b> <?php echo $issn;?>
			</div>
			<br>
			<div class="form-group">
				<b>Paid :</b> <?php echo $paid;?>
			</div>
			<br>
			<div class="form-group">
				<b>Citation Index :</b> <?php echo $citation;?>
			</div>
			<br>
			<div class="form-group">
				<b>Listed in SJR :</b> <?php echo $sjr;?>
			</div>
			<br>
			<div class="form-group">
				<b>Paper :</b>
				<?php
				if(!empty($paperpdf))
					echo $pdf2;
				else
					echo "<b>Not inserted.</b>";
				?>
			</div>
			<br>
			<div class="form-group">
				<b>Certificate :</b>
				<?php
				if(!empty($certificate))
					echo $pdf3;
				else
					echo "<b>Not inserted.</b>";
				?>
			</div>
			<br>
			</div>
			<div class="form-group">
				<div class="right">
					<input type="submit"  class="btn" value="Cancel" name = "return"> &nbsp
					<input type="submit"  style="color:white;" class="btn btn-primary btn-md" value="Delete" name = "delete">
				</div>
			</div>
			</form>
			<br>
		</div>

		<!-- PUBLICATIONS-CONFERENCES -->
		<div id ="section43" class="well">
			<center>
				<legend><h2>Publications</h2></legend>
				<h3>Conferences</h3>
			</center>
			<br>
			<form method="POST" name="publicationconf" enctype="multipart/form-data">
			<div style="font-size:17px;">
			<div class="form-group">
				<b>Conference Name :</b> <?php echo $name;?>
			</div>
			<br>
			<div class="form-group">
				<b>Author :</b> <?php echo $author;?>
			</div>
			<br>
			<div class="from-group">
				<b>Co - Authors :</b> <?php if($count == 0) echo "* Not Inserted *";?>
				<?php
					for($i=1; $i<=$count; $i++)
					{
						if($i == 1){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 1 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa1";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa1aff";
							echo "</div>";
						}
						if($i == 2){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 2 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa2";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa2aff";
							echo "</div>";
						}
						if($i == 3){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 3 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa3";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa3aff";
							echo "</div>";

						}
						if($i == 4){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 4 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa4";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa4aff";
							echo "</div>";
						}
						if($i == 5){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 5 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa5";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa5aff";
							echo "</div>";
						}
						if($i == 6){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 6 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa6";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa6aff";
							echo "</div>";
						}
						if($i == 7){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 7 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa7";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa7aff";
							echo "</div>";
						}
						if($i == 8){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 8 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa8";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa8aff";
							echo "</div>";
						}
						if($i == 9){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 9 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa9";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa9aff";
							echo "</div>";
						}
						if($i == 10){
							echo "<div class='form-group'><br>";
							echo "<b>Co-Author 10 :</b>";
							echo "<br><br>";
							echo "<b>Name :</b> $coa10";
							echo "<br>";
							echo "<b>Affiliation :</b> $coa10aff";
							echo "</div>";
						}
					}
				?>
			</div>
			<br><br>
			<div class="form-group">
				<b>Date of Publication :</b> <?php echo $name;?>
			</div>
			<br>
			<div class="form-group">
				<b>Type :</b> <?php echo $type;?>
			</div>
			<br>
			<div class="form-group">
				<b>H-Index :</b> <?php echo $hindex;?>
			</div>
			<br>
			<div class="form-group">
				<b>Digital Object Identifier :</b> <?php echo $doi;?>
			</div>
			<br>
			<div class="form-group">
				<b>Publisher's Name :</b> <?php echo $pubname;?>
			</div>
			<br>
			<div class="form-group">
				<b>Proceeding Name :</b> <?php echo $procname;?>
			</div>
			<br>
			<div class="form-group">
				<b>Peer Reviewed :</b> <?php echo $peer;?>
			</div>
			<br>
			<div class="form-group">
				<b>Theme :</b> <?php echo $theme;?>
			</div>
			<br>
			<div class="form-group">
				<b>Page Number :</b> <?php echo $pageno;?>
			</div>
			<br>
			<div class="form-group">
				<b>Paid :</b> <?php echo $paid;?>
			</div>
			<br>
			<div class="form-group">
				<b>ISSN / ISBN Number :</b> <?php echo $issn;?>
			</div>
			<br>
			<div class="form-group">
				<b>Organiser :</b> <?php echo $organizer;?>
			</div>
			<br>
			<div class="form-group">
				<b>Venue :</b> <?php echo $place;?>
			</div>
			<br>
			<div class="form-group">
				<b>Presented :</b> <?php echo $presented;?>
			</div>
			<br>
			<div class="form-group">
				<b>Presentation :</b> <?php echo $poster;?>
			</div>
			<br>
			<div class="form-group">
				<b>Presentation Document :</b>
				<?php
					if(!empty($posterpdf))
						echo $pdf7;
					else
						echo "<b>Not Inserted</b>";
				?>
			</div>
			<br>
			<div class="form-group">
				<b>Through Web :</b> <?php echo $web;?>
			</div>
			<br>
			<div class="form-group">
				<b>Citation Index :</b> <?php echo $citation;?>
			</div>
			<br>
			<div class="form-group">
				<b>Paper :</b>
				<?php
					if(!empty($paperpdf))
						echo $pdf4;
					else
						echo "<b>Not Inserted</b>";
				?>
			</div>
			<br>
			<div class="form-group">
				<b>Certificate :</b>
				<?php
					if(!empty($certificate))
						echo $pdf5;
					else
						echo "<b>Not Inserted</b>";
				?>
			</div>
			<br>
			</div>
			<div class="form-group">
				<div class="right">
					<input type="submit"  class="btn" value="Cancel" name = "return"> &nbsp
					<input type="submit"  style="color:white;" class="btn btn-primary btn-md" value="Delete" name = "delete">
				</div>
			</div>
			</form>
			<br>
		</div>


		<!--STTP-ATTENDED-->
		<div id ="section51" class="well">
			<form method="POST" action="" name="sttpattended" onsubmit="return validateAttended()"  enctype="multipart/form-data">
			<center>
				<legend><h2>STTP</h2></legend>
				<h3>Attended</h3>
			</center>
			<div style="font-size:17px;">
			<div class="form-group">
				<b>Name of the Event :</b> <?php echo $title; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Event Type :</b> <?php echo $eventtype; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Date From :</b> <?php echo $datefrom; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Date To :</b> <?php echo $dateto; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Organised By :</b> <?php echo $organizedby; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Location :</b> <?php echo $place; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Duration :</b> <?php echo $duration; ?>
			</div>
			<br>
			<div class="form-group">
				<b>No.of Participants Attended :</b> <?php echo $totalparticipation; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Speaker :</b> <?php echo $speaker; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Certificate :</b>
				<?php
				if(!empty($certificate))
					echo $pdf6;
				else
					echo "<b>Not inserted</b>";
				?>
			</div>
			<br>
			</div>
			<div class="form-group">
				<div class="right">
					<input type="submit" class="btn" value="Cancel" name = "return"> &nbsp
					<input type="submit"  style="color:white;" class="btn btn-primary btn-md" value="Delete" name = "delete">
				</div>
			</div>
			</form>
			<br>
		</div>

		<!-- STTP-ORGNISED -->
		<div id ="section52" class="well">
			<form onsubmit="return sttpo()" method="POST" name="sttporganised">
			<center>
				<legend><h2>STTP</h2></legend>
				<h3>Organised</h3>
			</center>
			<div style="font-size:17px;">
			<div class="form-group">
				<b>Name of the Event :</b> <?php echo $name;?>
			</div>
			<br>
			<div class="form-group">
				<b>Event type :</b> <?php echo $type;?>
			</div>
			<br>
			<div class="form-group">
				<b>Date From :</b> <?php echo $datefrom;?>
			</div>
			<br>
			<div class="form-group">
				<b>Date To :</b> <?php echo $dateto;?>
			</div>
			<br>
			<div class="form-group">
				<b>Location :</b> <?php echo $place;?>
			</div>
			<br>
			<div class="form-group">
				<b>Role :</b> <?php echo $role;?>
			</div>
			<br>
			<div class="form-group">
				<b>Number Of Participants :</b> <?php echo $noparticipants;?>
			</div>
			<br>
			</div>
			<div class="form-group">
				<div class="right">
					<input type="submit" class="btn" value="Cancel" name = "return"> &nbsp
					<input type="submit"  style="color:white;" class="btn btn-primary btn-md" value="Delete" name = "delete">
				</div>
			</div>
			</form>
				<br>
		</div>

		<!-- STTP-DELIVERED -->
		<div id ="section53" class="well">
			<form action="" method="POST" onsubmit="return validateDeli()" name="sttpdelivered">
			<center>
				<legend><h2>STTP</h2></legend>
				<h3>Delivered</h3>
			</center>
			<div style="font-size:17px;">
			<div class="form-group">
				<b>Name of the Event :</b> <?php echo $name;?>
			</div>
			<br>
			<div class="form-group">
				<b>Event Type :</b> <?php echo $eventtype;?>
			</div>
			<br>
			<div class="form-group">
				<b>Date From :</b> <?php echo $datefrom;?>
			</div>
			<br>
			<div class="form-group">
				<b>Date To :</b> <?php echo $dateto;?>
			</div>
			<br>
			<div class="form-group">
				<b>Activity Description :</b> <?php echo $description;?>
			</div>
			<br>
			<div class="form-group">
				<b>Place Delivered :</b> <?php echo $place;?>
			</div>
			<br>
			<div class="form-group">
				<b>Duration :</b> <?php echo $duration;?>
			</div>
			</div>
			<br>
			<div class="form-group">
				<div class="right">
					<input type="submit" class="btn" value="Cancel" name = "return"> &nbsp
					<input type="submit"  style="color:white;" class="btn btn-primary btn-md" value="Delete" name = "delete">
				</div>
			</div>
			</form>
			<br>
		</div>

		<!--CO-CURRICULAR ACTIVITIES-->
		<div id ="section6" class="well">
			<form method="POST" onsubmit="return co()" name="co6">
			<legend><h2><center>Co-curricular Activities</center></h2></legend>
			<div style="font-size:17px;">
			<div class="form-group">
				<b>Name :</b> <?php echo $name; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Description :</b> <?php echo $description; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Date :</b> <?php echo $date; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Role :</b> <?php echo $role; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Type :</b> <?php echo $type; ?>
			</div>
			</div>
			<br>
			<div class="form-group">
				<div class="right">
					<input type="submit" class="btn" value="Cancel" name="return"> &nbsp
					<input type="submit"  style="color:white;" class="btn btn-primary btn-md" value="Delete" name="delete">
				</div>
			</div>
			</form>
			<br>
		</div>

		<!--EXTRA ACTIVITIES-->
		<div id ="section7" class="well">
			<form method="POST" onsubmit="return extra()" name="ext7">
			<legend><h2><center>Extra Activities</center></h2></legend>
			<div style="font-size:17px;">
			<div class="form-group">
				<b>Name :</b> <?php echo $name; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Description :</b> <?php echo $description; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Date :</b> <?php echo $date; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Role :</b> <?php echo $role; ?>
			</div>
			<br>
			<div class="form-group">
				<b>Location :</b> <?php echo $place; ?>
			</div>
			</div>
			<br>
			<div class="form-group">
				<div class="right">
					<input type="submit" class="btn" value="Cancel" name="return"> &nbsp
					<input type="submit"  style="color:white;" class="btn btn-primary btn-md" value="Delete" name="delete">
				</div>
			</div>
			</form>
			<br>
		</div>

	</div>

</body>

</html>