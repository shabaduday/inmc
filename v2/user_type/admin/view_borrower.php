<?php 
  include '../../sidebar.php';
  include '../../topbar.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Borrower -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tiger Nixon</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="#" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Loan Name</th>
              <th>Interest</th>
              <th>Amount</th>
              <th>Terms</th>
              <th>Date Applied</th>
              <th>Date Released</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Emergency</td>
              <td>1%</td>
              <td>10000</td>
              <td>12 months</td>
              <td>11/28/2008</td>
              <td>12/28/2008</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <a href="loan_history.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Back</a>

</div>
<!-- /.container-fluid -->

<?php include '../../footer.php'; ?>