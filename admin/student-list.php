  <?php include_once 'db_config.php'; ?>
  <?php include_once 'helper.php'; ?>

  <?php 

    $query = "SELECT * FROM `students`";
    $result = $mysqli->query($query);
    
    $num_results = $result->num_rows;
    // dumper($num_results);
    
  ?>
  <?php include_once 'header.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once 'sidebar.php'; ?>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Students</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10">
            <a href="add-student.php" class="btn btn-success float-right">Add New</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll No.</th>
                    <th>Reg No.</th>
                    <th>Email</th>
                    <th>Mobile No.</th>
                    <th>Status</th>
                    <td>Created At</td>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    if ($num_results > 0) {
                      while( $row = $result->fetch_assoc() ){
                        extract($row);
                  ?>
                    <tr>
                      <td><?php echo $id; ?></td>
                      <td><?php echo $name; ?></td>
                      <td> <?php echo $roll_no; ?></td>
                      <td> <?php echo $reg_no; ?></td>
                      <td> <?php echo $email; ?></td>
                      <td><?php echo $mobile; ?></td>
                      <td>
                        <?php
                          $statuss = ($status == 1) ? 'Active': 'InActive' ; 
                          $bg_color = ($status == 1) ? 'success': 'danger' ; 
                        ?>
                        <span class="badge bg-<?php echo $bg_color; ?>"><?php echo $statuss; ?></span>
                      </td>
                      <td>
                        <?php 
                          // echo $created_at; // March 10, 2001
                          $date = date_create($created_at);
                          echo date_format($date,"M d, Y"); 
                          ?>
                        <!-- March 10, 2001 -->
                      </td>
                      <td>
                        <a href="edit-student?id=<?php echo $id; ?>" class="btn btn-outline-primary btn-sm"><i class="far fa-edit"></i> Edit</a>
                        <a href="del-student?id=1" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i> Del</a>
                      </td>
                    </tr>
                  <?php
                      }
                    } //else {
                      //echo "No records found!@";
                    //}
                  ?>
                  









                  <!-- <tr>
                    <td>1</td>
                    <td>
                      John Doe
                    </td>
                    <td> johndoe@gmail.com</td>
                    <td>+880 123 456 789</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>March 10, 2001</td>
                    <td>
                      <a href="" class="btn btn-outline-primary btn-sm"><i class="far fa-edit"></i> Edit</a>
                      <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i> Del</a>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>
                      John Doe
                    </td>
                    <td> johndoe@gmail.com</td>
                    <td>+880 123 456 789</td>
                    <td><span class="badge bg-danger">InActive</span></td>
                    <td>March 10, 2001</td>
                    <td>
                      <a href="" class="btn btn-outline-primary btn-sm"><i class="far fa-edit"></i> Edit</a>
                      <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i> Del</a>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>
                      John Doe
                    </td>
                    <td> johndoe@gmail.com</td>
                    <td>+880 123 456 789</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>March 10, 2001</td>
                    <td>
                      <a href="" class="btn btn-outline-primary btn-sm"><i class="far fa-edit"></i> Edit</a>
                      <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i> Del</a>
                    </td>
                  </tr> -->
                  
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once 'footer.php'; ?>
  

  