<h1 class="text-primary"><i class="fa fa-users"></i>all users <small>all users</small></h1>
	<ol class="breadcrumb">
<li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
<li class="active"><i class="fa fa-user-plus"></i> all users</li>
	</ol>	
	
	
	<table id="data" class="table table-hover table-bordered table-striped">
					<thead>
						<tr>
							
							<th>Name</th>
							<th>Emil</th>
							<th>Username</th>
							<th>Photo</th>
							
						</tr>
					</thead>
					<tbody>
					
						<?php
					
					$db_sinfo = mysqli_query($link, "SELECT * FROM `users`");
					while($row = mysqli_fetch_assoc($db_sinfo)){?>
					
					
						<tr>
							
							<td><?php echo ucwords($row['name']);?></td>
							<td><?php echo $row['email'];?></td>
							<td><?php echo $row['username'];?></td>
							<td><img style="width: 100px" src="images/<?php echo $row['photo'];?>" alt=""></td>
							
						</tr>
						<?php
						
					}
						?>
					</tbody>
				</table>

