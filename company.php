<?php include("header.php") ?>
<div class="content-wrapper">
	<div class="settings-sidebar">
		<div class="list-group">
			<?php include("settings-sidebar-include.php");?>
		</div>
	</div>
	<div class="setting-content">
		<h1>Company Setup</h1>
		<!-- <ul class="nav nav-tabs">
		  <li class="active"><a href="#home" data-toggle="tab">Locallization</a></li>
		  <li><a href="#profile" data-toggle="tab">Branding</a></li>
		</ul> 
		<div id="myTabContent" class="tab-content setting-details">
			  <div class="tab-pane fade active in" id="home">
			      </div>
		  <div class="tab-pane fade" id="profile">
		    <p>Company branding</p>
		  </div>
		</div>-->
   <div class="panel panel-default">
		<div class="panel-body">
		<form class="form-horizontal col-sm-9">
			<h4>Company Details</h4>
			 <div class="form-group row">
			    <label for="Agentname" class="col-sm-3 form-control-label">Name of the Company</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="Agentname" placeholder="Enter Company Name">
			    </div>
			  </div>
			  <br>
			  <h4>Web Property</h4>
			  <div class="form-group row">
			    <label for="Agentname" class="col-sm-3 form-control-label">Web Property #1</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="Agentname" placeholder="https://wwww.mycompany.com/">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="Agentname" class="col-sm-3 form-control-label">Web Property #2</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="Agentname" placeholder="https://wwww.mycompany.com/">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="Agentname" class="col-sm-3 form-control-label"></label>
			    <div class="col-sm-9">
			      <button type="submit" class="btn btn-default" formaction="type.php">Add More</button>
			    </div>
			  </div>
			   <div class="form-group row">
			    <label for="Agentname" class="col-sm-3 form-control-label">Support Domain</label>
			    <div class="col-sm-9">

			      <div class="input-group">
			      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
			      <div class="input-group-addon">PureCloud.com</div>
			    </div>
			    <small>Need vanity support URL at support.yourcompany.com? </small>

			    </div>
			  </div>
			  <br>
			  <h4>Localization</h4>
			  
			  <div class="form-group row">
			    <label for="Agentname" class="col-sm-3 form-control-label">Default Timezone</label>
			    <div class="col-sm-9">
			      <select class="form-control" id="exampleSelect1">
                  <option value="0">India UTC+05:30</option>
                  <option value="1">India UTC+05:30</option>
                  <option value="2">India UTC+05:30</option>
                  <option value="3">India UTC+05:30</option>
                  <option value="4">India UTC+05:30</option>
                  <option value="5">India UTC+05:30</option>
                </select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="Agentname" class="col-sm-3 form-control-label">Primary Language</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="Agentname" placeholder="English">
			    </div>
			  </div>
			  <br>
			  <h4>Authorized Person</h4>
			  <div class="form-group row">
			    <label for="Agentname" class="col-sm-3 form-control-label">Name</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="Agentname" placeholder="Enter Name">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="Agentname" class="col-sm-3 form-control-label">Email ID</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="Agentname" placeholder="Enter Ofiicial Email ID">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="Agentname" class="col-sm-3 form-control-label">Phone Number</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="Agentname" placeholder="Enter Phone Number">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="Agentname" class="col-sm-3 form-control-label">Address</label>
			    <div class="col-sm-9">
			      <textarea class="form-control" placeholder="Enter Office Address"></textarea>
			    </div>
			  </div>
			  

		<div class="clearfix"></div>

        <div class="form-group row">
            <div class="col-sm-8  col-sm-push-3">
            <button type="submit" class="btn btn-default" formaction="type.php">Cancel</button>
            <button type="submit" class="btn btn-primary" formaction="type.php">Save</button>
            </div>
          </div>

	</form>
			
		
	</div>
</div>


	</div>	
</div>
<?php include("footer.php") ?>