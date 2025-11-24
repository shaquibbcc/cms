
  <?php include_once 'db_config.php'; ?>
  <?php include_once 'helper.php'; ?>

  <?php

    if (isset($_POST['submitStudent'])) {

      // dumper($_POST);

      

      $name = $_POST['name'];
      $roll_no = $_POST['roll_no'];
      $reg_no = $_POST['reg_no'];
      $mobile_no = $_POST['mobile_no'];
      $email = $_POST['email'];

      $query = "INSERT INTO `students` (`name`, `roll_no`, `reg_no`, `email`, `mobile`) VALUES ('$name', '$roll_no', '$reg_no', '$email', '$mobile_no');";

      // dumper($query, true);

      if ($mysqli->query($query)) {
        $check_msg = true;
        // echo "data saved successfully!";
      } 
      else {
        echo "Error, Try again!";
      }
      
    }




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
            <a href="student-list.php" class="btn btn-success float-right">Student List</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- <div class="col-md-3"></div> -->
          <div class="offset-md-3 col-md-6">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Students</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" class="form-horizontal">
                <div class="card-body">
                  <?php
                   if (isset($check_msg)) {
                  ?>
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-success"></i> Alert!</h5>
                    Data saved successfully!
                  </div>
                  <?php
                   }

                  ?>
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="roll_no" class="col-sm-2 col-form-label">Roll No.</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="roll_no" name="roll_no" placeholder="Roll No.">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="reg_no" class="col-sm-2 col-form-label">Reg No.</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="reg_no" name="reg_no" placeholder="Reg No.">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="mobile_no" class="col-sm-2 col-form-label">Mobile No.</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile No">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right submitStudent" name="submitStudent">Save</button>
                  <!-- <button type="submit" class="btn btn-default float-right">Cancel</button> -->
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once 'footer.php'; ?>
  

  