@include('header')
@include('sidebar')
<?php 
	include "../connection/db_conn.php";
	$sql = "SELECT * FROM user
	LEFT JOIN ferm ON ferm.id = user.ferm
	LEFT JOIN role ON role.id = user.role";
	$result = $db->query($sql);
?>
				<div class="card">
					<div class="card-title">
						<div class="page-inner py-1">
							<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
								<div>
									<h2 class=" pb-0 fw-bold">
										<i class="fas fa-edit">User Table</i>
									</h2>
									<ul class="breadcrumbs pb-0 fw-bold">
										<li class="nav-home">
											<a href="#">
												<i class="fas fa-home"></i>
											</a>
										</li>
										<li class="separator">
											<i>/</i>
										</li>
										<li class="nav-item">
											<a href="#">Tables</a>
										</li>
										<li class="separator">
											<i>/</i>
										</li>
										<li class="nav-item">
											<a href="#">User Table</a>
										</li>
									</ul>
								</div>
								<div class="ml-md-auto py-2 py-md-0">
									<ul class="nav nav-pills ">
										<li class="nav-item ">
											<button type="button" class="nav-link btn btn-default btn-xs" data-toggle="modal" data-target="#add_user"><span class="fa fa-plus"></span></button>
										</li>
										<li class="nav-item">
											<a class="nav-link btn btn-primary btn-xs" href="#"><span class="fas fa-sync-alt" style="color: white;"></span></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
									<div class="row">
										<div class="col-sm-12 col-md-6">
											<div class="dataTables_length" id="basic-datatables_length">
												<label>Show 
													<select name="basic-datatables_length" aria-controls="basic-datatables" class="form-control form-control-sm">
														<option value="10">10</option>
														<option value="25">25</option>
														<option value="50">50</option>
														<option value="100">100</option>
													</select>
													 entries
												</label>
											</div>
										</div>
										<div class="col-sm-12 col-md-6">
											<div id="basic-datatables_filter" class="dataTables_filter">
												<label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="basic-datatables">
												</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<table id="basic-datatables" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="basic-datatables_info">
												<thead>
													<tr role="row">
														<th class="sorting_asc col-lg-1" >Name</th>
														<th class="sorting col-lg-1" >User Name</th>
														<th class="sorting col-lg-1" >Email</th>
														<th class="sorting col-lg-1" >Password</th>
														<th class="sorting col-lg-1" >Phone No</th>
														<th class="sorting col-lg-1" >CNIC</th>
														<th class="sorting col-lg-1" >Address</th>
														<th class="sorting col-lg-1" >Ferm</th>
														<th class="sorting col-lg-1" >Role</th>
														<th class="sorting col-lg-1" >Action</th>
													</tr>
												</thead>
												
													<tbody>
															<?php if ($result->num_rows > 0) { ?>
														<tr><?php
														  while($row = $result->fetch_assoc()) { ?>
															<td ><?php echo $row['name']?></td>
															<td ><?php echo $row['username']?></td>
															<td ><?php echo $row['email']?></td>
															<td ><?php echo $row['password']?></td>
															<td ><?php echo $row['phoneno']?></td>
															<td ><?php echo $row['cnic']?></td>
															<td ><?php echo $row['address']?></td>
															<td ><?php echo $row['f_name']?></td>
															<td ><?php echo $row['r_name']?></td>
															<td >
																<form  action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
																	<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>"/>
																	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" >Open Modal</button>
																	<button class="btn btn-primary "  name="edit">Edit</button>
																	<button class="btn btn-danger" name="delete">Delete</button>
																</form>				
	    													</td>
														</tr>
														<?php } ?>
														
													<?php }else{ } ?>
														
													</tbody>
											</table>
											<!-- Add User -->
											<div id="add_user" class="modal fade" role="dialog">
											  	<div class="modal-dialog modal-lg">
											    <!-- Modal content-->
											    	<div class="modal-content">
												      	<div class="modal-header">
												        	<div class="card col-lg-12">
																<div class="page-inner py-1">
																	<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
																		<div style="margin-left:17px;">
																			<h2 class=" pb-2 fw-bold">
																				<i class="fas fa-edit">User</i>
																			</h2>
																			<h5 class=" op-7 mb-2">Markeeting</h5>
																		</div>
																		<div class="ml-md-auto py-2 py-md-0">
																			<ul class="breadcrumbs">
																				<li class="nav-home">
																					<a href="#">
																						<i class="fas fa-home"></i>
																					</a>
																				</li>
																				<li class="separator">
																					<i>/</i>
																				</li>
																				<li class="nav-item">
																					<a href="#">Forms</a>
																				</li>
																				<li class="separator">
																					<i>/</i>
																				</li>
																				<li class="nav-item">
																					<a href="#">User Form</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
												      	</div>
												      	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
												      		<div class="modal-body">
																<div class="card-body">
																	<div class="row">
																		<div class="col-lg-3 col-md-6" style="margin-top: 10px;">
																			<div class="form-group">
																				<label for="name">Name</label>
																			</div>
																		</div>
																		<div class="col-lg-9 col-md-6">
																			<div class="form-group" id="nameclass" >
																				<h5 id="namecheck" style="color: red;"></h5>
																				<input type="text" name="name" class="form-control " id="name" placeholder="Enter Name" required>
																			</div>
																		</div>
																		<div class="col-lg-3 col-md-6" style="margin-top: 10px;">
																			<div class="form-group">
																				<label for="username">User Name</label>
																			</div>
																		</div>
																		<div class="col-lg-9 col-md-6" >
																			<div class="form-group" id="userclass">
																				<h5 id="usercheck" style="color: red;"></h5>
																				<input type="text" class="form-control" name="username" id="username" placeholder="Enter User Name" required >		
																			</div>
																		</div>
																		<div class="col-lg-3 col-md-6" style="margin-top: 10px;">
																			<div class="form-group">
																				<label for="email2">Email</label>
																			</div>
																		</div>
																		<div class="col-lg-9 col-md-6">
																			<div class="form-group" id="emailclass">
																				<h5 id="emailcheck" style="color: red;"></h5>
																				<input type="email" name = "email" class="form-control" id="email" placeholder="Enter Email" required>		
																			</div>
																		</div>
																		<div class="col-lg-3 col-md-6" style="margin-top: 10px;">
																			<div class="form-group">
																				<label for="Password">Password</label>
																			</div>
																		</div>
																		<div class="col-lg-9 col-md-6">
																			<div class="form-group" id="passclass">
																				<h5 id="passcheck" style="color: red;"></h5>
																				<input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>		
																			</div>
																		</div>
																		<div class="col-lg-3 col-md-6" style="margin-top: 10px;">
																			<div class="form-group">
																				<label for="Phone">Phone Number</label>
																			</div>
																		</div>
																		<div class="col-lg-9 col-md-6">
																			<div class="form-group" id="phoneclass">
																				<h5 id="Phonecheck" style="color: red;"></h5>
																				<input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number" required>		
																			</div>
																		</div>
																		<div class="col-lg-3 col-md-6" style="margin-top: 10px;">
																			<div class="form-group">
																				<label for="cnic">CNIC</label>
																			</div>
																		</div>
																		<div class="col-lg-9 col-md-6">
																			<div class="form-group" id="cnicclass">
																				<h5 id="cniccheck" style="color: red;"></h5>
																				<input type="text" name="cnic" class="form-control" id="cnic" placeholder="Enter CNIC Number" required>		
																			</div>
																		</div>
																		<div class="col-lg-3 col-md-6" style="margin-top: 10px;">
																			<div class="form-group">
																				<label for="text">Address</label>
																			</div>
																		</div>
																		<div class="col-lg-9 col-md-6">
																			<div class="form-group" id="addclass">
																				<h5 id="addresscheck" style="color: red;"></h5>
																				<input type="text" name="Address" class="form-control" id="Address" placeholder="Enter Address" required>		
																			</div>
																		</div>
																		<div class="col-lg-3 col-md-6" style="margin-top: 10px;">
																			<div class="form-group">
																				<label for="email2">Ferm</label>
																			</div>
																		</div>
																		<div class="col-lg-9 col-md-6" id="fermclass">
																				<div class="form-group">
																					<h5 id="fermcheck" style="color: red;"></h5>
																					<select class="form-control" name="ferm" id="ferm" style="text-align: center; background-color: gray;">
																						<option style=" background-color: white;">NONE SELECTED</option>
																						<?php 
																							$sql = "SELECT * FROM ferm";
																								$result = $db->query($sql);
																							while ($row= mysqli_fetch_assoc($result)) {
																						?>
																						<option value="<?php echo $row['id'];?>" style="color: white;"><?php echo $row['f_name'];?></option>
																					<?php } ?>
																					</select>	
																				</div>
																			</div>
																			<div class="col-lg-3 col-md-6" style="margin-top: 10px;">
																				<div class="form-group">
																					<label for="email2">Role</label>
																				</div>
																			</div>
																			<div class="col-lg-9 col-md-6" id="roleclass">
																				<div class="form-group">
																					<h5 id="rolecheck" style="color: red;"></h5>
																					<select class="form-control" id="role" name="role">
																						<option>Select Role</option>
																						<?php 
																							$sql = "SELECT * FROM role";
																								$result = $db->query($sql);
																							while ($row= mysqli_fetch_assoc($result)) {
																						?>
																						<option value="<?php echo $row['id'];?>"><?php echo $row['r_name'];?></option>
																					<?php } ?>
																					</select>	
																				</div>
																			</div>
																	</div>
																</div>
												      		</div>
													      	<div class="modal-footer">
													      		<button class="btn btn-focus" type="submit" name="submit">Submit</button>	
													    	</div>
													    </form>
											  		</div>
												</div>
											</div>
											<?php 
												if (isset($_POST['submit'])) {
													$name = $_POST['name'];
													$username = $_POST['username'];
													$email = $_POST['email'];
													$password = $_POST['password'];
													$phone = $_POST['phone'];
													$cnic = $_POST['cnic'];
													$Address = $_POST['Address'];
													$ferm = $_POST['ferm'];
													$role = $_POST['role'];

													$data = mysqli_query($db, "INSERT INTO user (name,username,email,password,phoneno,cnic,Address,ferm,role) VALUES ('$name', '$username' , '$email', '$password' ,'$phone' , '$cnic' , '$Address' , '$ferm' , '$role')"); 
													if ($data) { 
																echo "Your data has been Saved";
													}
												}
											?>
											<!--End User -->

																<!-- Modal -->
											<div id="myModal" class="modal fade" role="dialog">
											  <div class="modal-dialog">

											    <!-- Modal content-->
											    <div class="modal-content">
											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal">&times;</button>
											      </div>
											      <div class="modal-body">
											      		<input type="hidden" name="user_id" id="user_id" value="<?php echo $row1['user_id']; ?>" Required />
											      	<div class="row">
												      	<label class="col-lg-3">Name</label>
												      	<input type="text" class="form-control col-lg-8" name="name" id="name"  value="<?php echo $row1['name']; ?>" Required />
												      	<label class="col-lg-3">Userame</label>
												      	<input type="text" class="form-control col-lg-8" name="username" id="username"  value="<?php echo $row1['username']; ?>" Required />
												      	<label class="col-lg-3">Email</label>
												      	<input type="text" class="form-control col-lg-8" name="email" id="email" value="<?php echo $row1['email']; ?>" Required />
												      	<label class="col-lg-3">Password</label>
												      	<input type="text" class="form-control col-lg-8" name="password" id="password"  value="<?php echo $row1['password']; ?>" Required />
												      	<label class="col-lg-3">Phone No</label>
												      	<input type="text" class="form-control col-lg-8" name="phoneno" id="phoneno" value="<?php echo $row1['phoneno']; ?>" Required />
												      	<label class="col-lg-3">Address</label>
												      	<input type="text" class="form-control col-lg-8" name="address" id="address" value="<?php echo $row1['address']; ?>" Required />
												      	<label class="col-lg-3">CNIC</label>
												      	<input type="text" class="form-control col-lg-8" name="cnic" id="cnic" value="<?php echo $row1['cnic']; ?>" Required />
												      	<label class="col-lg-3">Ferm</label>
												      	<select class="form-control col-lg-8" name="f_name" id="f_name" style="text-align: center; background-color: gray;">
															<?php 
																$sql = "SELECT * FROM ferm";
																$result = $db->query($sql);
																while ($row= mysqli_fetch_assoc($result)) {
																	
															?>
															<option value="<?php echo $row['id'];?>" style="text-align: center; background-color: white;"><?php echo $row['f_name'];?></option>
															<?php } ?>
														</select>
														<label class="col-lg-3">Role</label>
														<select class="form-control col-lg-8" name="r_name" id="r_name">
															<?php 
																$sql1 = "SELECT * FROM role";
																$result1 = $db->query($sql1);
																while ($row1= mysqli_fetch_assoc($result1)) {
																	
															?>
															<option value="<?php echo $row1['id'];?>" style="text-align: center; background-color: white;"><?php echo $row1['r_name'];?></option>
															<?php } ?>
														</select>
												    </div>
											      </div>
											      <div class="modal-footer">
											      	<input  type="submit" class="btn btn-default"  name="update" value="Update"/>
											    </div>
											  </div>
											</div>
											<?php 
												if (isset($_POST['edit'])) {
													$id = $_POST['user_id'];
													$sql1 = "SELECT * FROM user Where user_id ={$id}";
													$result1 = $db->query($sql1);
													if ($result1->num_rows > 0) { 
											  			while($row1 = $result1->fetch_assoc()) { ?>

											  				<form  action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
											  					<input type="hidden" name="user_id" id="user_id" value="<?php echo $row1['user_id']; ?>" Required />
											  					<table id="basic-datatables" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="basic-datatables_info">
											  						<tr>
											  							<td>
											  								<p style="text-align: center;"><b>Name</b></p>
											  								<input type="text" class="form-control col-lg-12" name="name" id="name"  value="<?php echo $row1['name']; ?>" Required />
											  							</td>
											  							<td>
											  								<p style="text-align: center;"><b>User Name</b></p>
											  								<input type="text" class="form-control col-lg-12" name="username" id="username"  value="<?php echo $row1['username']; ?>" Required />
											  							</td>
											  							<td>
											  								<p style="text-align: center;"><b>Email</b></p>
											  								<input type="text" class="form-control col-lg-12" name="email" id="email" value="<?php echo $row1['email']; ?>" Required />
											  							</td>
											  							<td>
											  								<p style="text-align: center;"><b>Password</b></p>
											  								<input type="text" class="form-control col-lg-12" name="password" id="password"  value="<?php echo $row1['password']; ?>" Required />
											  							</td>
											  							<td>
											  								<p style="text-align: center;"><b>Phone Number</b></p>
											  								<input type="text" class="form-control col-lg-12" name="phoneno" id="phoneno" value="<?php echo $row1['phoneno']; ?>" Required />
											  							</td>
											  							<td>
											  								<p style="text-align: center;"><b>Address</b></p>
											  								<input type="text" class="form-control col-lg-12" name="address" id="address" value="<?php echo $row1['address']; ?>" Required />
											  							</td>
											  							<td colspan="2">
											  								<p style="text-align: center;"><b>CNIC</b></p>
											  								<input type="text" class="form-control col-lg-12" name="cnic" id="cnic" value="<?php echo $row1['cnic']; ?>" Required />
											  							</td>	
											  							<td>
											  								<p style="text-align: center;"><b>Ferm</b></p>
																			<select class="form-control" name="f_name" id="f_name" style="text-align: center; background-color: gray;">
																				<?php 
																					$sql = "SELECT * FROM ferm";
																					$result = $db->query($sql);
																					while ($row= mysqli_fetch_assoc($result)) {
																						
																				?>
																				<option value="<?php echo $row['id'];?>" style="text-align: center; background-color: white;"><?php echo $row['f_name'];?></option>
																				<?php } ?>
																			</select>
											  							</td>
											  							<td>
											  								<p style="text-align: center;"><b>Role</b></p>
											  								<select class="form-control" name="r_name" id="r_name" style="text-align: center; background-color: gray;">
																				<?php 
																					$sql1 = "SELECT * FROM role";
																					$result1 = $db->query($sql1);
																					while ($row1= mysqli_fetch_assoc($result1)) {
																						
																				?>
																				<option value="<?php echo $row1['id'];?>" style="text-align: center; background-color: white;"><?php echo $row1['r_name'];?></option>
																				<?php } ?>
																			</select>
											  							</td>
											  							<td colspan="2">
											  								<input  type="submit" class="submit form-control btn btn-success"  name="update" value="Update"/>
											  							</td>
											  						</tr>
											  					</table>
															</form>
											<?php
											  			}
											  		}
												}
											?>
											<?php 
												if (isset($_POST['update'])) {
													$id=$_POST['user_id'];
													$name = $_POST['name'];
													$username = $_POST['username'];
													$email = $_POST['email'];
													$password = $_POST['password'];
													$phoneno = $_POST['phoneno'];
													$cnic = $_POST['cnic'];
													$Address = $_POST['address'];
													$ferm = $_POST['f_name'];
													$role = $_POST['r_name'];
													 $sql4 = "UPDATE user SET user_id='{$id}', name='{$name}' , username= '{$username}', email='{$email}', password='{$password}', phoneno='{$phoneno}', cnic='{$cnic}', address='{$Address}', ferm='{$ferm}', role='{$role}' WHERE user_id ={$id}";
													 $data4 = mysqli_query($db,$sql4) or die();
												}
												if (isset($_POST['delete'])) 
												{
												  	$id=$_POST['user_id'];
												  	$db-> query("DELETE FROM user where user_id=$id ") or die( $db->error());
												} 
											?>	
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 col-md-5">
											<div class="dataTables_info" id="basic-datatables_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
											</div>
										</div>
										<div class="col-sm-12 col-md-7">
											<div class="dataTables_paginate paging_simple_numbers" id="basic-datatables_paginate">
												<ul class="pagination">
													<li class="paginate_button page-item previous disabled" id="basic-datatables_previous">
														<a href="#" aria-controls="basic-datatables" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
													</li>
													<li class="paginate_button page-item active">
														<a href="#" aria-controls="basic-datatables" data-dt-idx="1" tabindex="0" class="page-link">1</a>
													</li>
													<li class="paginate_button page-item ">
														<a href="#" aria-controls="basic-datatables" data-dt-idx="2" tabindex="0" class="page-link">2</a>
													</li>
													<li class="paginate_button page-item ">
														<a href="#" aria-controls="basic-datatables" data-dt-idx="3" tabindex="0" class="page-link">3</a>
													</li>
													<li class="paginate_button page-item ">
														<a href="#" aria-controls="basic-datatables" data-dt-idx="4" tabindex="0" class="page-link">4</a>
													</li>
													<li class="paginate_button page-item ">
														<a href="#" aria-controls="basic-datatables" data-dt-idx="5" tabindex="0" class="page-link">5</a>
													</li>
													<li class="paginate_button page-item ">
														<a href="#" aria-controls="basic-datatables" data-dt-idx="6" tabindex="0" class="page-link">6</a>
													</li>
													<li class="paginate_button page-item next" id="basic-datatables_next">
														<a href="#" aria-controls="basic-datatables" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php include 'Footer.php';?>	
