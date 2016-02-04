<?php include("header.php") ?>
<div class="content-wrapper">
	<div class="settings-sidebar">
		<div class="list-group">
			<?php include("settings-sidebar-include.php");?>
		</div>
	</div>
	<div class="setting-content">
		<h1>Manage Roles</h1>

		<div class="panel panel-default">
		  <div class="panel-body">
		    <input type="text" name="" placeholder="Search" id="" class="form-control">
		  </div>
		</div>
		<div class="panel panel-default settings-listing">
		  <!-- Default panel contents -->
		  <div class="panel-heading">
		  	<button class="btn btn-default" onclick="location.href='roles-edit-details.php';" >Add Roles</button>
		  </div>

		  <!-- Table -->
		  <table class="table">
			  <thead>
			    <tr>
			      <th></th>
			      <th>Name</th>
			      <th>No. of Agents</th>
			      <th>Status</th>
			      <th>Actions</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row" width="20"><img class="thumb" src="https://stage-inin-directory-service-profile.s3.amazonaws.com/94927748/b661/4e3f/8da1/9af69d747921.jpg" alt=""></th>
			      <td><strong>Superadmin</strong> <br><small>Possimus, totam. Porro quo reprehenderit dolorum in.</small></td>
			      <td>10</td>
			      <td><input type="checkbox" class="switch" data-size="mini" checked></td>
			      <td>
			      	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default" onclick="location.href='roles-edit-details.php';" >Edit Roles</button><!-- data-toggle="modal" data-target="#rolesModal" -->
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="#">Delete</a></li>
					  </ul>
					</div>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row" width="20"><img class="thumb" src="https://stage-inin-directory-service-profile.s3.amazonaws.com/94927748/b661/4e3f/8da1/9af69d747921.jpg" alt=""></th>
			      <td><strong>Admin</strong> <br><small>Possimus, totam. Porro quo reprehenderit dolorum in.</small></td>
			      <td>10</td>
			      <td><input type="checkbox" class="switch" data-size="mini" checked></td>
			      <td>
			      	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default" onclick="location.href='roles-edit-details.php';" >Edit Roles</button><!-- data-toggle="modal" data-target="#rolesModal" -->
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="#">Delete</a></li>
					  </ul>
					</div>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row" width="20"><img class="thumb" src="https://stage-inin-directory-service-profile.s3.amazonaws.com/94927748/b661/4e3f/8da1/9af69d747921.jpg" alt=""></th>
			      <td><strong>Agent</strong> <br><small>Assumenda, impedit iusto, consequuntur aut voluptatibus quidem.</small></td>
			      <td>10</td>
			      <td><input type="checkbox" class="switch" data-size="mini" checked></td>
			      <td>
			      	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default" onclick="location.href='roles-edit-details.php';" >Edit Roles</button><!-- data-toggle="modal" data-target="#rolesModal" -->
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="#">Delete</a></li>
					  </ul>
					</div>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row" width="20"><img class="thumb" src="https://stage-inin-directory-service-profile.s3.amazonaws.com/94927748/b661/4e3f/8da1/9af69d747921.jpg" alt=""></th>
			      <td><strong>Analyst</strong> <br><small>Quae cum blanditiis, natus, repellendus facere ex.</small></td>
			      <td>10</td>
			      <td><input type="checkbox" class="switch" data-size="mini" checked></td>
			      <td>
			      	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default" onclick="location.href='roles-edit-details.php';" >Edit Roles</button><!-- data-toggle="modal" data-target="#rolesModal" -->
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
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
<div class="modal fade" id="rolesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Role</h4>
      </div>
      <div class="modal-body">
        
        <form>
        	<h4>Role Details</h4>

		  <div class="form-group row">
		    <label for="Agentname" class="col-sm-3 form-control-label">Role Name</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="Agentname" placeholder="Enter Role Name">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="Agentname" class="col-sm-3 form-control-label">Role Description</label>
		    <div class="col-sm-9">
		      <textarea class="form-control" placeholder="Enter Description"></textarea>
		    </div>
		  </div>

<br><br>
		  <h4>System Level</h4>


<div class="form-group">
    <table class="roles-data-table" cellpadding="0" cellspacing="0" border="1">
        <tbody><tr>
            
            <td class="col-sm-6 roles-table no-padding">
                <div class="form-group row">

				    <div class="col-sm-11 col-xs-push-1">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> <strong>Helpdesk System</strong>
				        </label>
				      </div>
				    </div>
				  </div>

                <div class="roles-col-chkboxspc">
                    <div class="clearfix"></div>
                    <ul>
                        <li>Can Manage Tickets</li>
                        <li>Can Assign Tickets</li>
                        <li>Can Respond/ Resolve to Tickets</li>
                        <li>Can Spam/ Print or Delete Tickets</li>
                        <li>Can Merge/ Split Tickets</li>
                        <li>Can Add Internal Notes</li>
                    </ul>
                </div>
            </td>
            <td class="col-sm-6 roles-table no-padding">
               
                <div class="roles-col-chkboxspc">
                	 <div class="form-group row">
                    <div class="col-sm-11 col-xs-push-1">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> <strong>Helpdesk Settings</strong>
				        </label>
				      </div>
				    </div>
				  </div>

                    <div class="clearfix"></div>
                    <ul>
                        <li>Can Manage Views</li>
                        <li>Can Setup Ticket Routing Rules</li>
                        <li>Can Setup SLAs</li>
                        <li>Can Define Quick Actions</li>
                        <li>Can Define Ticket Form</li>
                        <li>Can Manage Ticket Priority, Status and Type</li>
                    </ul>
                </div>
            </div>
            </td>
        </tr>
    	</tbody>
	</table>
</div>

<div class="form-group">
    <table class="roles-data-table" cellpadding="0" cellspacing="0" border="1">
        <tbody><tr>
            
            <td class="col-sm-6 roles-table no-padding">
                <div class="form-group row">

				    <div class="col-sm-11 col-xs-push-1">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> <strong>Chat System</strong>
				        </label>
				      </div>
				    </div>
				  </div>

                <div class="roles-col-chkboxspc">
                    <div class="clearfix"></div>
                    <ul>
                        <li>Can Chat with multiple Visitors</li>
                        <li>Can open Conversations as Ticket or Feedback</li>
                        <li>Can do Screen Capture, Sharing and Recording</li>
                        <li>Can Profile the Visitors</li>
                        <li>Can Ban a Visitor</li>
                        <li>Can Add Visitor to Customer List</li>
                    </ul>
                </div>
            </td>
            <td class="col-sm-6 roles-table no-padding">
               
                <div class="roles-col-chkboxspc">
                	 <div class="form-group row">
                    <div class="col-sm-11 col-xs-push-1">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> <strong>Chat Settings</strong>
				        </label>
				      </div>
				    </div>
				  </div>

                    <div class="clearfix"></div>
                    <ul>
	                    <li>Can Manage Pre-Chat and Post-Chat Form</li>
	                    <li>Can Setup Chat Routing Rules</li>
	                    <li>Can Define Proactive Chat Criteria and Rules</li>
	                    <li>Can Configure Limits and Permissions</li>
	                    <li>Can define the End-Chat Process</li>
	                </ul>
                </div>
            </div>
            </td>
        </tr>
    	</tbody>
	</table>
</div>

        <div class="clearfix"></div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<?php include("footer.php") ?>

https://stage-inin-directory-service-profile.s3.amazonaws.com/94927748/b661/4e3f/8da1/9af69d747921.jpg