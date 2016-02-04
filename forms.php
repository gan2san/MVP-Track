<?php include("header.php") ?>
<div class="content-wrapper">
	<div class="settings-sidebar">
		<div class="list-group">
			<?php include("settings-sidebar-include.php");?>
		</div>
	</div>
	<div class="setting-content">
		<h1>Manage Forms</h1>
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#home" data-toggle="tab">Ticket Form</a></li>
		  <li><a href="#profile" data-toggle="tab">Customer Satisfaction Form</a></li>
		</ul>
		<div id="myTabContent" class="tab-content setting-details">
			  <div class="tab-pane fade active in" id="home">
			    <form class="form-horizontal">
				  <fieldset>
				    <div class="form-group">
				      <label for="inputEmail" class="col-lg-3 control-label">Email</label>
				      <div class="col-lg-8">
				        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="inputPassword" class="col-lg-3 control-label">Password</label>
				      <div class="col-lg-8">
				        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
				        <div class="checkbox">
				          <label>
				            <input type="checkbox"> Checkbox
				          </label>
				        </div>
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="textArea" class="col-lg-3 control-label">Textarea</label>
				      <div class="col-lg-8">
				        <textarea class="form-control" rows="3" id="textArea"></textarea>
				        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="col-lg-3 control-label">Radios</label>
				      <div class="col-lg-8">
				        <div class="radio">
				          <label>
				            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
				            Option one is this
				          </label>
				        </div>
				        <div class="radio">
				          <label>
				            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
				            Option two can be something else
				          </label>
				        </div>
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="select" class="col-lg-3 control-label">Selects</label>
				      <div class="col-lg-8">
				        <select class="form-control" id="select">
				          <option>1</option>
				          <option>2</option>
				          <option>3</option>
				          <option>4</option>
				          <option>5</option>
				        </select>
				        <br>
				        <select multiple="" class="form-control">
				          <option>1</option>
				          <option>2</option>
				          <option>3</option>
				          <option>4</option>
				          <option>5</option>
				        </select>
				      </div>
				    </div>
				    
				  </fieldset>
	</form>
			  </div>
		  <div class="tab-pane fade" id="profile">
		    <p>CSAT Form</p>
		  </div>
		</div>
		<div class="save-form">
			<button class="btn btn-primary">Save</button>
		<button class="btn  btn-link">Cancel</button>
		</div>
	</div>	
</div>
<?php include("footer.php") ?>