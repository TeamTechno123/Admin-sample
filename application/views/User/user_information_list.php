<!DOCTYPE html>
<html>

<style>
  td{
    padding:2px 10px !important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <h4>USER INFORMATION</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fa fa-list"></i> List User Information</h3>
              <div class="card-tools">
                <a href="user_information" class="btn btn-sm btn-block btn-primary">Add User</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>User Name</th>
                  <th>City</th>
                  <th>Model No.</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>1</td>
                    <td>Demo User</td>
                    <td>Demo</td>
                    <td>1234567890</td>
                    <td>
                      <a href=""> <i class="fa fa-edit"></i> </a>
                      <a class="ml-4" href="" onclick="return confirm('Delete Confirm');"> <i class="fa fa-trash"></i> </a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>

</body>
</html>
