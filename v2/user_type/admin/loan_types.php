<?php 
  include '../../sidebar.php';
  include '../../topbar.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Loan Types</h1>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="add_loan_types.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Add Loan Types</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Loan Name</th>
              <th>Max Amount</th>
              <th>Min Amount</th>
              <th>Interest</th>
              <th>Loan Terms</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Emergency</td>
              <td>50,000</td>
              <td>10,000</td>
              <td>1%</td>
              <td>12 months</td>
              <td>
                <a href='update_loan_types.php'>Edit</a> 
                / 
                <a href='delete_loan_types.php'>Delete</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<?php include 'footer.php'; ?>