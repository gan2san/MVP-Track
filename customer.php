<?php include("header.php") ?>
<div class="content-wrapper">
	<div class="settings-sidebar">
		<div class="list-group">
			<?php include("settings-sidebar-include.php");?>
		</div>
	</div>
	<div class="setting-content">
		<h1>Manage Customers</h1>

		<div class="panel panel-default">
		  <div class="panel-body">
		    <input type="text" name="" placeholder="Search" id="" class="form-control">
		  </div>
		</div>
		<div class="panel panel-default settings-listing">
		  <!-- Default panel contents -->
		  <div class="panel-heading">
		  	<button class="btn btn-default">Add Customer</button>
		  	<button class="btn btn-default">Bulk Import</button>
		  </div>

		  <!-- Table -->
		  <table class="table">
			  <thead>
			    <tr>
			      <th></th>
			      <th>Name</th>
			      <th>Email</th>
			      <th>Phone No.</th>
			      <th>Actions</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row" width="20"><img class="thumb" src="https://stage-inin-directory-service-profile.s3.amazonaws.com/94927748/b661/4e3f/8da1/9af69d747921.jpg" alt=""></th>
			      <td><strong>Mark Rudniki</strong> <br><small>Admin</small></td>
			      <td>mark@inin.com</td>
			      <td>9876543210</td>
			      <td>
			      	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default"  onclick="location.href='customer-edit-details.php';" >Edit Customer</button>
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    
					    <li><a href="#">Reset Password</a></li>
					    <li><a href="#">Delete</a></li>
					  </ul>
					</div>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row" width="20"><img class="thumb" src="https://stage-inin-directory-service-profile.s3.amazonaws.com/94927748/b661/4e3f/8da1/9af69d747921.jpg" alt=""></th>
			      <td><strong>Ganesh Badhe</strong> <br><small>Supervisor</small></td>
			      <td>ganesh@inin.com</td>
			      <td>9876543210</td>
			      <td>
			      	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default"  onclick="location.href='customer-edit-details.php';" >Edit Customer</button>
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    
					    <li><a href="#">Reset Password</a></li>
					    <li><a href="#">Delete</a></li>
					  </ul>
					</div>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row" width="20"><img class="thumb" src="https://stage-inin-directory-service-profile.s3.amazonaws.com/94927748/b661/4e3f/8da1/9af69d747921.jpg" alt=""></th>
			      <td><strong>Venky Benjamin</strong> <br><small>Sr. Customer Support Executive</small></td>
			      <td>venky@inin.com</td>
			      <td>9876543210</td>
			      <td>
			      	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default"  onclick="location.href='customer-edit-details.php';" >Edit Customer</button>
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    
					    <li><a href="#">Reset Password</a></li>
					    <li><a href="#">Delete</a></li>
					  </ul>
					</div>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row" width="20"><img class="thumb" src="https://stage-inin-directory-service-profile.s3.amazonaws.com/94927748/b661/4e3f/8da1/9af69d747921.jpg" alt=""></th>
			      <td><strong>Suraj Jadhav</strong> <br><small>Sr. Customer Support Executive</small></td>
			      <td>suraj@inin.com</td>
			      <td>9876543210</td>
			      <td>
			      	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default"  onclick="location.href='customer-edit-details.php';" >Edit Customer</button>
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    
					    <li><a href="#">Reset Password</a></li>
					    <li><a href="#">Delete</a></li>
					  </ul>
					</div>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row" width="20"><img class="thumb" src="https://stage-inin-directory-service-profile.s3.amazonaws.com/94927748/b661/4e3f/8da1/9af69d747921.jpg" alt=""></th>
			      <td><strong>Evans Belly</strong> <br><small>Admin</small></td>
			      <td>evans@inin.com</td>
			      <td>9876543210</td>
			      <td>
			      	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default"  onclick="location.href='customer-edit-details.php';" >Edit Customer</button>
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    
					    <li><a href="#">Reset Password</a></li>
					    <li><a href="#">Delete</a></li>
					  </ul>
					</div>
			      </td>
			    </tr>
			  </tbody>
			</table>

		</div>
	</div>	
</div>
<?php include("footer.php") ?>

https://stage-inin-directory-service-profile.s3.amazonaws.com/94927748/b661/4e3f/8da1/9af69d747921.jpg