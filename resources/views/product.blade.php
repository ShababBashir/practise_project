@include('header')
@include('sidebar')
@include('insert')
			<div class="content">
				<div class="card col-lg-12">
					<div class="card-header">
						<div class="row">
							<div>
								<h2 class=" pb-0 fw-bold">
									<i class="fas fa-edit">Product Table</i>
								</h2>
								<ul class="breadcrumbs">
									<li class="nav-home">
										<a href="#">
											<i class="fas fa-home"></i>
										</a>
									</li>
									<li class="separator">
										<i class="flaticon-right-arrow"></i>
									</li>
									<li class="nav-item">
										<a href="#">Tables</a>
									</li>
									<li class="separator">
										<i class="flaticon-right-arrow"></i>
									</li>
									<li class="nav-item">
										<a href="#">Product Table</a>
									</li>
								</ul>
							</div>
							<div class="ml-md-auto">
								<ul class="nav nav-pills ">
									<li class="nav-item ">
										<button type="button" class="nav-link btn btn-default btn-xs" data-toggle="modal" data-target="#add_product" id="hide"><span class="fa fa-plus"></span></button>
									</li>
									<li class="nav-item">
										<a class="nav-link btn btn-primary btn-xs" href="#"><span class="fas fa-sync-alt" style="color: white;"></span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Basic</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="basic-datatables" class="display table table-striped table-hover" >
										<thead>
											<tr>
												<th>Product Name</th>
												<th>Product Price</th>
												<th>Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
												@foreach($posts as $post)
												<tr>
													<td >{{$post->p_name}}</td>
													<td >{{$post->p_price}}</td>
													<td >{{$post->startdate}}</td>
													<td >
														<button type="button" class="btn btn-primary">Edit</button>
														<button type="button" class="btn btn-danger">Delete</button>
													</td>
												</tr>
												@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
@include('Footer')