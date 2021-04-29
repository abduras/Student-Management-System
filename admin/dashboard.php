					<h1 class="text-primary"><i class="fa fa-dashboard"></i>Dashboard <small>Statistic Overview</small></h1>
					<ol class="breadcrumb">
					  <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
					</ol>

					<div class="row">
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3">
											<i class="fa fa-users fa-5x"></i>
										</div>
										<div class="col-xs-9">
											<div class="pull-right" style="font-size: 45px">10</div>
											<div class="clearfix"></div>
											<div class="pull-right">All Students</div>
										</div>
									</div>
								</div>
									<a href="">
									<div class="panel-footer">
									<span class="pull-left">All Students</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span>
									<div class="clearfix"></div>
							    </div>
							    </a>
						</div>
					</div>
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3">
											<i class="fa fa-users fa-5x"></i>
										</div>
										<div class="col-xs-9">
											<div class="pull-right" style="font-size: 45px">10</div>
											<div class="clearfix"></div>
											<div class="pull-right">All Students</div>
										</div>
									</div>
								</div>
									<a href="">
									<div class="panel-footer">
									<span class="pull-left">All Students</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span>
									<div class="clearfix"></div>
							    </div>
							    </a>
						</div>
					</div>
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3">
											<i class="fa fa-users fa-5x"></i>
										</div>
										<div class="col-xs-9">
											<div class="pull-right" style="font-size: 45px">10</div>
											<div class="clearfix"></div>
											<div class="pull-right">All Students</div>
										</div>
									</div>
								</div>
									<a href="">
									<div class="panel-footer">
									<span class="pull-left">All Students</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span>
									<div class="clearfix"></div>
							    </div>
							    </a>
						</div>
					</div>
				</div>
				<h3>New Students</h3>
				<div class="table-responsive">
				<table id="data" class="table table-hover table-bordered table-striped">
					<thead>
						<tr>
							<td>ID</td>
							<td>Name</td>
							<td>Roll</td>
							<td>City</td>
							<td>Contact</td>
							<td>Photo</td>
						</tr>
					</thead>
					<tbody>
					
						<?php
					
					$db_sinfo = mysqli_query($link, "SELECT * FROM `student_info`");
					while($row = mysqli_fetch_assoc($db_sinfo)){?>
					
					
						<tr>
							<td><?php echo $row['id'];?></td>
							<td><?php echo ucwords($row['name']);?></td>
							<td><?php echo $row['roll'];?></td>
							<td><?php echo ucwords($row['city']);?></td>
							<td><?php echo $row['pcontact'];?></td>
							<td><img style="width: 100px" src="student_images/<?php echo $row['photo'];?>" alt=""></td>
						</tr>
						<?php
						
					}
						?>
					</tbody>
				</table>
				</div>