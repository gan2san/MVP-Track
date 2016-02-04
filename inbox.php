<?php include("header.php") ?>
<div class="content-wrapper">
	<div class="general-layout">
		<div class="title">
			<!-- <button class="btn btn-default"><i class="glyphicon glyphicon-home"></i></button>  -->
			<h1>Tickets</h1>
		</div>
		<div class="inbox-wrapper">
			<div class="faceted-search">
				  <div class="panel-group" id="accordion">
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse"  data-parent="#collapse1" href="#collapse1">Views</a>
				        </h4>
				      </div>
				      <div id="collapse1" class="panel-collapse collapse in">
				        <div class="panel-body">
				        	<label>All</label>
				        	<label>Open</label>
				        	<label>Resolved</label>
				        	<label>On Hold</label>
				        	<label>Suspended</label>
				        	<label><i class="glyphicon glyphicon-plus"></i> More</label>
				        	<!-- <label><input type="checkbox" name="" id=""> Reopened</label>
				        	<label><input type="checkbox" name="" id=""> Closed</label>
				        	<label><input type="checkbox" name="" id=""> Pending</label> -->
				        </div>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse"  data-parent="#collapse2" href="#collapse2">Ticket ID</a>
				        </h4>
				      </div>
				      <div id="collapse2" class="panel-collapse collapse">
				        <div class="panel-body">
				        	<input type="text" name="" id="" class="form-control" placeholder="Ticket ID">
				        </div>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse"  data-parent="#collapse3" href="#collapse3">Status</a>
				        </h4>
				      </div>
				      <div id="collapse3" class="panel-collapse collapse">
				        <div class="panel-body">
				        	<label><input type="checkbox" name="" id=""> Open</label>
				        	<label><input type="checkbox" name="" id=""> Resolved</label>
				        	<label><input type="checkbox" name="" id=""> On Hold</label>
				        	<label><input type="checkbox" name="" id=""> Suspended</label>
				        	<label><input type="checkbox" name="" id=""> Reopened</label>
				        	<label><i class="glyphicon glyphicon-plus"></i> More</label>
				        	<!-- <label><input type="checkbox" name="" id=""> Closed</label>
				        	<label><input type="checkbox" name="" id=""> Pending</label> -->
				        </div>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse"  data-parent="#collapse4" href="#collapse4">Priority</a>
				        </h4>
				      </div>
				      <div id="collapse4" class="panel-collapse collapse">
				        <div class="panel-body">...</div>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse"  data-parent="#collapse5" href="#collapse5">Agent</a>
				        </h4>
				      </div>
				      <div id="collapse5" class="panel-collapse collapse">
				        <div class="panel-body">...</div>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse"  data-parent="#collapse6" href="#collapse6">Requestor</a>
				        </h4>
				      </div>
				      <div id="collapse6" class="panel-collapse collapse">
				        <div class="panel-body">...</div>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse"  data-parent="#collapse7" href="#collapse7">Date Time</a>
				        </h4>
				      </div>
				      <div id="collapse7" class="panel-collapse collapse">
				        <div class="panel-body">...</div>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse"  data-parent="#collapse8" href="#collapse8">Source</a>
				        </h4>
				      </div>
				      <div id="collapse8" class="panel-collapse collapse">
				        <div class="panel-body">...</div>
				      </div>
				    </div>
				  </div> 

			</div>
			<div class="inbox">
				<div class="panel panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading">
				  	
					
				  	<button class="btn btn-default"><i class="glyphicon glyphicon-repeat"></i></button>
				  	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default">Bulk Action</button>
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="#">Bulk Reply</a></li>
					    <li><a href="#">Bulk Forward</a></li>
					  </ul>
					</div>
					<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default">Merge</button>
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="#">Split</a></li>
					  </ul>
					</div>
					<div class="pull-right">
					  <button class="btn btn-primary">Add Ticket</button>
					  <button class="btn btn-default"><i class="glyphicon glyphicon-chevron-down"></i></button>
					  <button class="btn btn-default"><i class="glyphicon glyphicon-chevron-up"></i></button>

					</div>
				  </div>

		  <!-- Table -->
		  <table class="table">
			  <thead>
			    <tr>
			      <th>
			      	<div class="btn-group">
					  <button type="button" class="btn btn-link dropdown-toggle has-checkbox no-padding" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <input type="checkbox" name="" id=""> <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
					        <li>
						      <a href="#">All</a>
						    </li>
						    <li>
						      <a href="#" class="active">Open</a>
						    </li>
						    <li>
						      <a href="#">Resolved</a>
						    </li>
						    <li>
						      <a href="#">On Hold</a>
						    </li>
						    <li>
						      <a href="#">Suspended</a>
						    </li>
						    <li>
						      <a href="#">Reopened</a>
						    </li>
						    <li>
						      <a href="#">Closed</a>
						    </li>
						    <li>
						      <a href="#">Pending</a>
						    </li>
					  </ul>
					</div>
			      </th>
			      <th>Subject</th>
			      <th>Requestor</th>
			      <th>Agent</th>
			      <th>Status</th>
			      <th>Priority</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr onclick="location.href='ticket-details.php';">
			      <th><input type="checkbox" name="" id=""></th>
			      <td> Ut neque ratione tempore quod, quia doloremque?</td>
			      <td>Mark Rudniki </td>
			      <td>Sapna Suryavanshi</td>
			      <td>Open</td>
			      <td>High</td>
			    </tr>
			    <tr onclick="location.href='ticket-details.php';">
			      <th><input type="checkbox" name="" id=""></th>
			      <td> Iste voluptas, illum delectus animi aliquid recusandae!</td>
			      <td>Ganesh Badhe </td>
			      <td>Sapna Suryavanshi</td>
			      <td>Open</td>
			      <td>High</td>
			    </tr>
			    <tr onclick="location.href='ticket-details.php';">
			      <th><input type="checkbox" name="" id=""></th>
			      <td> Alias officiis expedita soluta officia, perspiciatis veniam.</td>
			      <td>Venky Benjamin </td>
			      <td>Pradeep Jaiswar</td>
			      <td>Open</td>
			      <td>High</td>
			    </tr>
			    <tr onclick="location.href='ticket-details.php';">
			      <th><input type="checkbox" name="" id=""></th>
			      <td> Id omnis, nobis laborum, ad minus atque.</td>
			      <td>Suraj Jadhav </td>
			      <td>Sangam Angre</td>
			      <td>Open</td>
			      <td>High</td>
			    </tr>
			    <tr onclick="location.href='ticket-details.php';">
			      <th><input type="checkbox" name="" id=""></th>
			      <td> Consectetur, quidem quia minus, impedit odio cumque.</td>
			      <td>Evans Belly </td>
			      <td>Pradeep Jaiswar</td>
			      <td>Open</td>
			      <td>High</td>
			    </tr>
			    <tr onclick="location.href='ticket-details.php';">
			      <th><input type="checkbox" name="" id=""></th>
			      <td> Ut neque ratione tempore quod, quia doloremque?</td>
			      <td>Mark Rudniki </td>
			      <td>Sapna Suryavanshi</td>
			      <td>Open</td>
			      <td>High</td>
			    </tr>
			    <tr onclick="location.href='ticket-details.php';">
			      <th><input type="checkbox" name="" id=""></th>
			      <td> Iste voluptas, illum delectus animi aliquid recusandae!</td>
			      <td>Ganesh Badhe </td>
			      <td>Sapna Suryavanshi</td>
			      <td>Open</td>
			      <td>High</td>
			    </tr>
			    <tr onclick="location.href='ticket-details.php';">
			      <th><input type="checkbox" name="" id=""></th>
			      <td> Alias officiis expedita soluta officia, perspiciatis veniam.</td>
			      <td>Venky Benjamin </td>
			      <td>Pradeep Jaiswar</td>
			      <td>Open</td>
			      <td>High</td>
			    </tr>
			    <tr onclick="location.href='ticket-details.php';">
			      <th><input type="checkbox" name="" id=""></th>
			      <td> Id omnis, nobis laborum, ad minus atque.</td>
			      <td>Suraj Jadhav </td>
			      <td>Sangam Angre</td>
			      <td>Open</td>
			      <td>High</td>
			    </tr>
			    <tr onclick="location.href='ticket-details.php';">
			      <th><input type="checkbox" name="" id=""></th>
			      <td> Consectetur, quidem quia minus, impedit odio cumque.</td>
			      <td>Evans Belly </td>
			      <td>Pradeep Jaiswar</td>
			      <td>Open</td>
			      <td>High</td>
			    </tr>
			    <tr onclick="location.href='ticket-details.php';">
			      <th><input type="checkbox" name="" id=""></th>
			      <td> Ut neque ratione tempore quod, quia doloremque?</td>
			      <td>Mark Rudniki </td>
			      <td>Sapna Suryavanshi</td>
			      <td>Open</td>
			      <td>High</td>
			    </tr>
			    <tr onclick="location.href='ticket-details.php';">
			      <th><input type="checkbox" name="" id=""></th>
			      <td> Iste voluptas, illum delectus animi aliquid recusandae!</td>
			      <td>Ganesh Badhe </td>
			      <td>Sapna Suryavanshi</td>
			      <td>Open</td>
			      <td>High</td>
			    </tr>
			    <tr onclick="location.href='ticket-details.php';">
			      <th><input type="checkbox" name="" id=""></th>
			      <td> Alias officiis expedita soluta officia, perspiciatis veniam.</td>
			      <td>Venky Benjamin </td>
			      <td>Pradeep Jaiswar</td>
			      <td>Open</td>
			      <td>High</td>
			    </tr>
			    <tr onclick="location.href='ticket-details.php';">
			      <th><input type="checkbox" name="" id=""></th>
			      <td> Id omnis, nobis laborum, ad minus atque.</td>
			      <td>Suraj Jadhav </td>
			      <td>Sangam Angre</td>
			      <td>Open</td>
			      <td>High</td>
			    </tr>
			    <tr onclick="location.href='ticket-details.php';">
			      <th><input type="checkbox" name="" id=""></th>
			      <td> Consectetur, quidem quia minus, impedit odio cumque.</td>
			      <td>Evans Belly </td>
			      <td>Pradeep Jaiswar</td>
			      <td>Open</td>
			      <td>High</td>
			    </tr>
			  
			  
			  </tbody>
			</table>

		</div>
			</div>
		</div>
	</div>
</div>
<?php include("footer.php") ?>