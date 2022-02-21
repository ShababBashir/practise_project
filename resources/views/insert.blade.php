<div id="add_product" class="modal fade" role="dialog">
  	<div class="modal-dialog modal-lg">
    	<!-- Modal content-->
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<div class=" col-lg-12">
					<div class="page-inner py-1">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class=" pb-2 fw-bold">
									<i class="fas fa-edit">Product</i>
								</h2>
								<h5 class=" op-7 mb-2">Markeeting</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<ul class="breadcrumbs">
									<li class="nav-home">
										<a href="#">
											<i class="fas fa-home"></i>
										</a>
										<i class="separator"> &nbsp; / &nbsp;</i>
									</li>
									<li class="nav-item">
										<a href="#">Forms</a>
										<i class="separator"> &nbsp; / &nbsp;</i>
									</li>
									<li class="nav-item">
										<a href="#">Product Form</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
	      	</div>
	      	<form >
	      		@csrf
		      		<div class="modal-body">
						<div class="row py-2">
							<label id="message"></label>
							<label class="col-lg-3 " for="email2">Product Name</label>
							<input type="text" class="form-control col-lg-8" name="p_name" id="P_name" placeholder="Enter Product Name">
						</div>
						<div class="row py-2">
							<label class="col-lg-3" for="email2">Product Price</label>
							<input type="text" name="p_price" class="form-control col-lg-8" id="p_price" placeholder="Enter Price">
						</div>
					</div>
			      	<div class="modal-footer">
			      		<button class="btn btn-focus" type="submit" >Submit</button>	
			    	</div>
		    </form>
  		</div>
	</div>
</div>