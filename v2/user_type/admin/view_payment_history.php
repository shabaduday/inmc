<?php 
  include '../../sidebar.php';
  include '../../topbar.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">View Payment History</h1>
  </div>

  <!-- View Payment History -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">View Payment History</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="#" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Loan Types</th>
              <th>Loan Name</th>
              <th>Loan Interest</th>
              <th>Amount</th>
              <th>Date Applied</th>
              <th>Date Released</th>
              <th>Balance</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1. New Loan</td>
              <td>Emergency</td>
              <td>1%</td>
              <td>20000</td>
              <td>11/28/2008</td>
              <td>12/28/2008</td>
              <td>10000</td>
              <td>
                <a href='view_loan_payment.php'>View</a> 
                / 
                <a href='update_loan_payment.php'>Update</a>
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