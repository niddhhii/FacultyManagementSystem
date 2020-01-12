<?php
include 'dbconnect.php';
if(!isset($_SESSION["Emp_Id"]))
	header('Location:logout.php');
else{
	$empid=$_SESSION["Emp_Id"];

	$sql = "SELECT * FROM login WHERE Emp_Id=$empid";
		$result = $conn->query($sql);
		$row = mysqli_fetch_assoc($result);
		$cb = $row['created_by'];
		if($cb == NULL)
		{
			$_SESSION["Emp_Id"]=$empid;
			$_SESSION["forgotpasswordeid"] = $empid;
			$_SESSION["Security_Answer"] =1;
			$_SESSION["new_id"]='yes';
			header('Location:ChangePassword.php');
		}
		if($row["P1"] == "FALSE")
		{
			header('Location:main.php#section21');
		}

		$myData = array('id'=>$empid);
		$arg = base64_encode( json_encode($myData) );

	//IMAGE//
	if(isset($_POST["submitprofile"]))
	{
		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		if(!empty($file))
		{
		  	$sql = "UPDATE personal_details SET Profile_Pic='$file' where Emp3_Id=$empid";
		  	$result = $conn->query($sql);
		}
	  	header('Location:profile.php');
	}

	//profile section
	$sql = "SELECT * FROM personal_details WHERE Emp3_Id=$empid";
		$result = $conn->query($sql);
		$row = mysqli_fetch_assoc($result);
		$name=$row["Name"];
		$email=$row["Email"];
		$contact=$row["Contact"];
		$gender=$row["gender"];
		$address=$row["Address"];
		$join_pos=$row["Join_Pos"];
		$join_date=$row["Join_Date"];
		$pro1=$row["Prom_1"];
		$pro1_date=$row["Prom_1_Date"];
		$dob=$row["DOB"];
		$profilepic=$row["Profile_Pic"];

		$sql = "SELECT * FROM academic_details WHERE Emp2_Id=$empid";
		$result = $conn->query($sql);
		$row1 = mysqli_fetch_assoc($result);
		$sscInstitute=$row1["SSC_Institute"];
		$sscPercentile=$row1["SSC_Percentile"];
		$sscYear=$row1["SSC_Year"];
		$sscMarksheet=$row1["SSC_Marksheet"];
		if(!$sscMarksheet == null){
			$myData1 = array('pub'=>'','academic'=>'ssc','sttp'=>'','cid'=>'');
			$arg1 = base64_encode( json_encode($myData1) );
			$ssc='<a href="showpdf.php?parameter='.$arg1.'">Read</a>';
		}
		else
			$ssc = "PDF not Inserterd";

		$hscInstitute=$row1["HSC_Institute"];
		$hscPercentile=$row1["HSC_Percentile"];
		$hscYear=$row1["HSC_Year"];
		$hscMarksheet=$row1["HSC_Marksheet"];
		if($hscMarksheet == null)
			$hsc="PDF Not Inserted";
		else{
			$myData1 = array('pub'=>'','academic'=>'hsc','sttp'=>'','cid'=>'');
			$arg1 = base64_encode( json_encode($myData1) );
			$hsc='<a href="showpdf.php?parameter='.$arg1.'">Read</a>';
		}
		$bachelorsIn=$row1["Bachelors_In"];
		$bachelorsInstitute=$row1["Bachelors_Institute"];
		$bachelorsPercentile=$row1["Bachelors_Percentile"];
		$bachelorsYear=$row1["Bachelors_Year"];
		$bachelorsMarksheet=$row1["Bachelors_Marksheet"];
		if($bachelorsMarksheet == null)
			$bach="PDF Not Inserted";
		else{
			$myData1 = array('pub'=>'','academic'=>'btech','sttp'=>'','cid'=>'');
			$arg1 = base64_encode( json_encode($myData1) );
			$bach='<a href="showpdf.php?parameter='.$arg1.'">Read</a>';
		}
		$mastersIn=$row1["Masters_In"];
		$mastersInstitute=$row1["Masters_Institute"];
		$mastersPercentile=$row1["Masters_Percentile"];
		$mastersYear=$row1["Masters_Year"];
		$mastersMarksheet=$row1["Masters_Marksheet"];
		if($mastersMarksheet == null)
			$mast="PDF Not Inserted";
		else{
			$myData1 = array('pub'=>'','academic'=>'mtech','sttp'=>'','cid'=>'');
			$arg1 = base64_encode( json_encode($myData1) );
			$mast='<a href="showpdf.php?parameter='.$arg1.'">Read</a>';
		}
		$phdIn=$row1["Phd_In"];
		$phdInstitute=$row1["Phd_Institute"];
		$phdPercentile=$row1["Phd_Percentile"];
		$phdYear=$row1["Phd_Year"];
		$phdMarksheet=$row1["Phd_Marksheet"];
		if($phdMarksheet == null)
			$phdi="PDF Not Inserted";
		else{
			$myData1 = array('pub'=>'','academic'=>'phd','sttp'=>'','cid'=>'');
			$arg1 = base64_encode( json_encode($myData1) );
			$phdi='<a href="showpdf.php?parameter='.$arg1.'">Read</a>';
		}
		$courseid=array();
		$coursecategory=array();
		$coursesem=array();
		$courseyear=array();
		$temp=0;

		$sql="SELECT * from courses where Emp8_Id=$empid";
		$result=$conn->query($sql);
		while($row = mysqli_fetch_assoc($result))
		{
			$courseid[$temp]=$row["Course_Id"];
			$coursecategory[$temp]=$row["Category"];
			$coursesem[$temp]=$row["Semester"];
			$courseyear[$temp]=$row["Year"];
			$temp++;
		}
	}
?>
