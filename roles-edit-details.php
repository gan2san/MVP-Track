<?php include("header.php") ?>
<div class="content-wrapper">
	<div class="settings-sidebar">
		<div class="list-group">
			<?php include("settings-sidebar-include.php");?>
		</div>
	</div>
	<div class="setting-content">
		<h1>Role Details</h1>
  
   <div class="panel panel-default">
		<div class="panel-body">
		 <form class="col-sm-9">
 

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

        <div class="form-group row">
            <div class="col-sm-9 ">
            <button type="submit" class="btn btn-default" formaction="roles.php">Cancel</button>
            <button type="submit" class="btn btn-primary" formaction="roles.php">Save</button>
            </div>
          </div>
		</form>
	</div>
</div>
	
	</div>	
</div>


<?php include("footer.php") ?>

https://stage-inin-directory-service-profile.s3.amazonaws.com/94927748/b661/4e3f/8da1/9af69d747921.jpg