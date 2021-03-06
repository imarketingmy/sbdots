@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Add New User Group</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <form method="POST" action="{{ url('admin/groups') }}" enctype="multipart/form-data">
			                	@csrf
							    <div class="form-group">
							        <label>Group Name</label>
							        <input type="text" name="name" class="form-control" placeholder="Diamond" required>
							    </div>
							    <div class="form-group">
							        <label>Group Icon <a href="https://fontawesome.com/icons?d=listing&m=free" target="_blank">(Font Awesome Class)</a></label>
							        <input  type="text" name="icon" class="form-control" placeholder="gem" required>
							    </div>
							    
							    <div class="form-group">
							        <label>Icon Color Code <a href="https://flatuicolors.com" target="_blank">(Color Picker)</a></label>
							        <input type="text" name="color" class="form-control" placeholder="#414123" required>
							    </div>
							    <div class="form-group">
							        <button type="submit" class="btn btn-info">Add New</button>
							    </div>
							</form>
			                <br />
			            </div>
			        </div>
			    </div>
			</div>
		</div>
    </div>
@include('admin.footer')
</body></html>