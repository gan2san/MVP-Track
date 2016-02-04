<?php include("header.php") ?>
<div class="content-wrapper">
	<div class="settings-sidebar">
		<div class="list-group">
			<?php include("settings-sidebar-include.php");?>
		</div>
	</div>
	<div class="setting-content">
		<h1>Manage Agents</h1>

		<div class="panel panel-default">
		  <div class="panel-body">
		    <input type="text" name="" placeholder="Search" id="" class="form-control">
		  </div>
		</div>
		<div class="panel panel-default settings-listing">
		  <!-- Default panel contents -->
		  <div class="panel-heading">
		  	<button class="btn btn-default" onclick="location.href='agents-edit-details.php';">Add Agent</button>
		  	<button class="btn btn-default">Bulk Import</button>
		  	<button class="btn btn-default">Invite All</button>
		  </div>


		  <!-- Table -->
		  <table class="table">
			  <thead>
			    <tr>
			      <th></th>
			      <th>Name</th>
			      <th>Email</th>
			      <th>Actions</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row" width="20"><img class="thumb" src="https://stage-inin-directory-service-profile.s3.amazonaws.com/94927748/b661/4e3f/8da1/9af69d747921.jpg" alt=""></th>
			      <td><strong>Mark Rudniki</strong> <br><small>Admin</small></td>
			      <td>mark@inin.com</td>
			      <td>
			      	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default"  onclick="location.href='agents-edit-details.php';" >Edit Agent</button><!-- data-toggle="modal" data-target="#agentModal" -->
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
			      <td>
			      	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default"  onclick="location.href='agents-edit-details.php';" >Edit Agent</button><!-- data-toggle="modal" data-target="#agentModal" -->
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
			      <td>
			      	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default"  onclick="location.href='agents-edit-details.php';" >Edit Agent</button><!-- data-toggle="modal" data-target="#agentModal" -->
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
			      <td>
			      	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default"  onclick="location.href='agents-edit-details.php';" >Edit Agent</button><!-- data-toggle="modal" data-target="#agentModal" -->
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
			      <td>
			      	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default"  onclick="location.href='agents-edit-details.php';" >Edit Agent</button><!-- data-toggle="modal" data-target="#agentModal" -->
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


<!-- Modal -->
<div class="modal fade" id="agentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Agent</h4>
      </div>
      <div class="modal-body">
        

        <form>
        	<h4>Get Started</h4>

		  <div class="form-group row">
		    <label for="Agentname" class="col-sm-3 form-control-label">Upload Photo</label>
		    <div class="col-sm-9">
		    	<img src="http://jewelry.customer360.co/themes/ngCus/images/profpic.jpg">
		     <label class="file">
			  <input type="file" id="file">
			  <span class="file-custom"></span>
			</label>
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="Agentname" class="col-sm-3 form-control-label">Agent Name</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="Agentname" placeholder="Enter Agent Name">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="display-agentname" class="col-sm-3 form-control-label">Display Name</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="display-agentname" placeholder="Enter Display Agent Name">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="emailId" class="col-sm-3 form-control-label">Email ID</label>
		    <div class="col-sm-9">
		      <input type="email" class="form-control" id="emailId" placeholder="Enter email ID"><br/>
		      <input type="email" class="form-control" id="emailId" placeholder="Enter email ID">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="inputPassword3" class="col-sm-3 form-control-label">Phone</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="inputPassword3" placeholder="Enter Phone Number">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="inputPassword3" class="col-sm-3 form-control-label">Role</label>
		    <div class="col-sm-9">
		      <select class="form-control" id="exampleSelect1">
			      <option>Select Role</option>
			      <option>Agent</option>
			      <option>Admin</option>
			    </select>
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="inputPassword3" class="col-sm-3 form-control-label">Designation</label>
		    <div class="col-sm-9">
		      <select class="form-control" id="exampleSelect1">
			      <option>Select Designation</option>
			      <option>Manager</option>
			      <option>Lead</option>
			    </select>
		    </div>
		  </div>
		   <div class="form-group row">
		    <label for="inputPassword3" class="col-sm-3 form-control-label">Business Hours</label>
		    <div class="col-sm-9">
		      <select class="form-control" id="exampleSelect1">
			      <option>Select Hours</option>
			      <option>0-1</option>
			      <option>1-2</option>
			      <option>2-3</option>
			    </select>
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="inputPassword3" class="col-sm-3 form-control-label">Assigned Group</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="display-agentname" placeholder="Enter Group">
		    </div>
		  </div>

<br /><br />
		  <h4>Agent Backup Management</h4>
		<div class="form-group row">
		    <label for="inputPassword3" class="col-sm-3 form-control-label">Permanent Backup John Mark</label>
		    <div class="col-sm-9">
		      <select class="form-control" id="exampleSelect1">
			      <option value="1">John Mark</option>
                    <option value="2">James Smith</option>
                    <option value="3">Greg Botham</option>
                    <option value="4">Laura Clark</option>
                    <option value="5">Mary Max</option>
			    </select>
		    </div>
		  </div>
		Í

<br /><br />
		  <h4>Roles & Access</h4>
		<div class="form-group row">
		    <label for="inputPassword3" class="col-sm-3 form-control-label">Role</label>
		    <div class="col-sm-9">
		      <select class="form-control" id="exampleSelect1">
			      <option value="1">Select Role</option>
                    <option value="2">Agent</option>
                    <option value="3">Admin</option>
			    </select>
			    <small>PureCloud enables you to create custom roles that suit your own organizational structure and workflow. Roles outline agent permissions to various sub-systems.</small>
		    </div>
		  </div>



		  <div class="form-group row">
		    <label class="col-sm-3">Access</label>
		    <div class="col-sm-9">
		      <div class="radio">
		        <label>
		          <input type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
		          Global
		        </label>
		      </div>
		      <div class="radio">
		        <label>
		          <input type="radio" name="gridRadios" id="gridRadios2" value="option2">
		          Group
		        </label>
		      </div>
		      <div class="radio disabled">
		        <label>
		          <input type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
		          Agent
		        </label>
		      </div>
		      <small>PureCloud uses access levels to define what an agent can do. Each user account has a global, group or agent access level associated with it. This access level indicates scope of actions.</small>
		    </div>
		  </div>

		</form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php") ?>

https://stage-inin-directory-service-profile.s3.amazonaws.com/94927748/b661/4e3f/8da1/9af69d747921.jpg