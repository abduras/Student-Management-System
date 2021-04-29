<h1 class="text-primary"><i class="fa fa-pencil-square-o"></i>update Student<small>update Student</small></h1>
	<ol class="breadcrumb">
<li><a href="index.php?page=dashboard"><i class="fa fa-dashboard">Dashboard</a></li>
li><a href="index.php?page=all-students"><i class="fa fa-users">all students</a></li>
<li class="active"><i class="fa fa-pencil-square-o"></i> update Students</li>
	</ol>	
	
	


	
	
	

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
					<input type="submit" value="update Student" name="update-student" class="btn btn-primary pull-right">
				</div>
				
			</div>
		</form>
	</div>
</div> 