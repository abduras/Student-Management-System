<h1 class="text-primary"><i class="fa fa-user-plus"></i>Add Student <small>Add New Student</small></h1>
	<ol class="breadcrumb">
<li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
<li class="active"><i class="fa fa-user-plus"></i> Add Student</li>
	</ol>
	
	<?php
	
	
	
	if(isset($_POST['add-student'])){
		$name = $_POST['name'];  
		$roll = $_POST['roll']; 
		$city = $_POST['city']; 
		$pcontact = $_POST['pcontact']; 
		$class = $_POST['class']; 
		
		$picture = explode('.',$_FILES['picture']['name']); 
		$picture_ex = end($picture);
		
		$picture_name = $roll.'.'.$picture_ex;
		
		$query ="INSERT INTO `student_info`(`name`, `roll`, `class`, `city`, `pcontact`, `photo`) VALUES('$name','$roll','$class','$city','$pcontact','$picture_name')";
		
		$result = mysqli_query($link,$query);
		
		if($result){
			
			$Success = "Data Inset Success";
			move_uploaded_file($_FILES['picture']['tmp_name'],'student_images/'.$picture_name);
		} else {
			$error = "Wrong";
		}
		
	
	
	}
	
	?>
	
	<div class="row">
	
	<?php
	if(isset($Success)){echo'<p class="alart alart-Success col-sm-6">'.$Success.'</p>';}?>
	<?php if(isset($error)){echo'<p class="alart alart-danger col-sm-6">'.$error.'</p>';}?>
	</div>
	

<div class="row">
	<div class="col-sm-6">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Student Name</label>
				<input type="text" name="name" placeholder="Student Name" id="name" class="form-control"required =""/>
			</div>
				<div class="form-group">
				<label for="roll">Student Roll</label>
				<input type="text" name="roll" placeholder="Student Roll" id="roll" class="form-control" pattern="[0-9]{6}"required =""/>
			</div>
			
			<div class="form-group">
				<label for="city">city</label>
				<input type="text" name="city" placeholder="city" id="city" class="form-control"required =""/>
			</div>
				<div class="form-group">
				<label for="pcontact">PContact</label>
				<input type="text" name="pcontact" placeholder="01*********" id="pcontact" class="form-control" pattern="01[7|5|6|3|9|8][0-9]{8}"required =""/>
			</div>
				<div class="form-group">
				<label for="class">Class</label>
					<select id="class" class="form-control" name="class">
						<option value="">Select</option>
						<option value="1st">1st</option>
						<option value="2nd">2nd</option>
						<option value="3rd">3rd</option>
						<option value="4th">4th</option>
						<option value="5th">5th</option>
					</select>
			</div>
				<div class="form-group">
				<label for="picture">Picture</label>
				<input type="file" name="picture" id="picture"required =""/>
				<div class="form-group">
					<input type="submit" value="Add Student" name="add-student" class="btn btn-primary pull-right">
				</div>
				
			</div>
		</form>
	</div>
</div> 