<?php include("header.php") ?>
<div class="content-wrapper">
	<div class="general-layout">
		<div class="title">
			<!-- <button class="btn btn-default"><i class="glyphicon glyphicon-home"></i></button>  -->
			<h1>Ticket Details</h1>
		</div>
		<div class="inbox-wrapper">
			<div class="faceted-search">


<div>

  
  <!-- Tab panes -->

    	<div class="panel-group">
		<div class="panel panel-default" style="height:500px">
				      
				      <div id="collapse1" class="panel-collapse collapse in">
				        <div class="panel-body">

  							<h4>Views</h4>
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
				  </div>




 

</div>





				   

			</div>
			<div class="inbox">
				<div class="panel panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading">
				  	
					
				  	<button class="btn btn-default" formaction="index.php"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button>
				  	<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Reply</button>
				  		<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> SMS</button>
				  		<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Add CC</button>
				  		<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Transfer</button>
				  		<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> Forward</button>
				  
					</div>
				  	<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default">Quick Action</button>
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Add Note</span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="#">Split</a></li>
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
						<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default">Delete</button>
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Add Note</span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="#">Spam Ticket</a></li>
					  </ul>
					</div>
					  <button class="btn btn-primary">Add Ticket</button>
					  <button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i></button>
					  <button class="btn btn-default"><i class="glyphicon glyphicon-chevron-right"></i></button>

					</div>
				  </div>

		  <!-- Table -->


		

		<div class="row" style="background:#eee">
			<div class="col-sm-9">
				<div class="panel panel-default">
				     <div class="panel-body" style="min-height: 605px;text-align: center;">
						<h1 class="text-muted">Ticket Details goes here...</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="panel panel-default">
				     <div class="panel-body">
				


	    	<div class="panel-group" id="accordion">
					    
					    <div class="panel panel-default">
					      <div class="panel-heading">
					        <h4 class="panel-title">
					          <a data-toggle="collapse"  data-parent="#collapse2" href="#collapse2">Ticket Facts</a>
					        </h4>
					      </div>
					      <div id="collapse2" class="panel-collapse collapse in">
					        <div class="panel-body">
					        	
					        	<div class="form-group">
						            <label for="inputPassword3" class=" form-control-label">Assigned To</label>
						            <div >
						                <select class="form-control" id="exampleSelect1">
						                  <option value="0">Group 01</option>
						                  <option value="1">Group 02</option>
						                  <option value="2">Group 03</option>
						                  <option value="3">Group 04</option>
						                  <option value="4">Group 05</option>
						                  <option value="5">Group 06</option>
						                </select>

						                <select class="form-control" id="exampleSelect1" style="margin-top:3px">
						                  <option value="0">Agent 1</option>
						                  <option value="1">Agent 02</option>
						                </select>
						            </div>
					          	</div>

					          	<div class="form-group">
						            <label for="inputPassword3" class=" form-control-label">Priority</label>
						            <div >
						                <select class="form-control" id="exampleSelect1">
						                  <option value="0">Critical</option>
						                  <option value="1">Low</option>
						                </select>
						            </div>
					          	</div>
					          	<div class="form-group">
						            <label for="inputPassword3" class=" form-control-label">Status</label>
						            <div >
						                <select class="form-control" id="exampleSelect1">
						                  <option value="0">Open</option>
						                  <option value="1">Closed</option>
						                </select>
						            </div>
					          	</div>
					          	<div class="form-group">
						            <label for="inputPassword3" class=" form-control-label">Type</label>
						            <div >
						                <select class="form-control" id="exampleSelect1">
						                  <option value="0">Question</option>
						                  <option value="1">Suggestion</option>
						                </select>
						            </div>
					          	</div>
					          	<div class="form-group">
						            <label for="inputPassword3" class=" form-control-label">Tags</label>
						            <div >
						                <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" />
						            </div>
					          	</div>





					        </div>
					      </div>
					    </div>
					    <div class="panel panel-default">
					      <div class="panel-heading">
					        <h4 class="panel-title">
					          <a data-toggle="collapse"  data-parent="#collapse3" href="#collapse3">User Profile</a>
					        </h4>
					      </div>
					      <div id="collapse3" class="panel-collapse collapse">
					        <div class="panel-body" style="text-align:center">
					        	<img src="images/download.svg" alt="..." class="img-circle" width="80"><br/>
					        	<b>Waheed Panjri</b><br >
					        	<small>UX Designer</small>
					        </div>
					      </div>
					    </div>


					    <div class="panel panel-default">
					      <div class="panel-heading">
					        <h4 class="panel-title">
					          <a data-toggle="collapse"  data-parent="#collapse4" href="#collapse4">To Do List</a>
					        </h4>
					      </div>
					      <div id="collapse4" class="panel-collapse collapse">
					        <div class="panel-body" >
					        	


					        	<form >
								  
								   <div class="form-group">
									      <input type="email" class="form-control" id="inputEmail3" placeholder="Add Task">
									 </div>

									  <div class="form-group">
								      <div class="checkbox">
								        <label>
								          <input type="checkbox"> Email to Shomu
								        </label>
								      </div>
								    
								  </div>
								  <div class="form-group">
								   
								      <div class="checkbox">
								        <label>
								          <input type="checkbox"> Take print of Invoice
								        </label>
								      </div>
								    
								  </div>
								  <div class="form-group">
								   
								      <div class="checkbox">
								        <label>
								          <input type="checkbox"> Draft mail for Alia
								        </label>
								      </div>
								    
								  </div>
								  <div class="form-group">
								   
								      <div class="checkbox">
								        <label>
								          <input type="checkbox"> Call to Ramesh
								        </label>
								      </div>
								    
								  </div>
								  
								</form>



					        </div>
					      </div>
					    </div>

					


				</div>
				</div>
				</div>
			</div>

		</div>	


		  

		</div>
			</div>
		</div>
	</div>
</div>
<?php include("footer.php") ?>