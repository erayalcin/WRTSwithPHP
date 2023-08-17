<?php  
    include_once 'header.php';
?>

<!-- Start of Page Content -->

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List Users</h6>
                        </div>
						
						<div class="card-body">
                            <a href="#" class="btn btn-info btn-icon-split">
                                       
                                        <span class="text">Add User</span>
                                    </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
								
									
								
							
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								
                                    <thead>
									
                                        <tr>
										
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Name</th>
                                            <th>Surname</th>
											<th>Phone Number</th>
                                            <th>Department</th>
											<th>Edit</th>
											<th>Delete</th>
                                        </tr>
                                    </thead>
                                   <?php           
						                    // Query users from the database

											$sql_users = "SELECT * FROM users";
											$query_users = mysqli_query($conn, $sql_users);

						                    // Display the users

											while ($row_user = mysqli_fetch_assoc($query_users)) 
						                    { 
						                        // Query department data for department name

						                        $department_id = $row_user["department_id"];
						                        $sql_department = "SELECT * FROM department WHERE department_id = " . $department_id;
						                        $query_department = mysqli_query($conn, $sql_department);
						                        $row_deparment = mysqli_fetch_assoc($query_department);

						                        // Display data for columns

						                        echo "<tr>";
						    					echo "<td>" . $row_user["user_id"]              . "</td>";
						    					echo "<td>" . $row_user["email"]                . "</td>";
						    					echo "<td>" . $row_user["password"]             . "</td>";
						    					echo "<td>" . $row_user["name"]                 . "</td>";
						    					echo "<td>" . $row_user["surname"]              . "</td>";
						    					echo "<td>" . $row_user["phonenumber"]          . "</td>";	
						    					echo "<td>" . $row_deparment["department_name"] . "</td>";						
						    					echo "<td>";
						                ?>
						                            <a href="update_user_form.php?ID=<?php echo $row_user["user_id"];?>"  class="btn btn-success btn-circle">
														<i class="fas fa-fw fa-wrench"></i>
						    					    </a>
						                        </td>						
										<?php							
											}       
										?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<!-- End of Page Content -->

<?php  
    include_once 'footer.php';
?>



 <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
