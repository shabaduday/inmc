<?php 
  include '../../sidebar.php';
  include '../../topbar.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- View -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">View:</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="#" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Date of Payment</th>
              <th>Next Payment</th>
              <th>Amount</th>
              <th>Interests</th>
              <th>Previous Balance</th>
              <th>Current Balance</th>
              <th>OR Number</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>11/28/2008</td>
              <td>12/28/2008</td>
              <td>10000</td>
              <td>1000</td>
              <td>NONE</td>
              <td>10000</td>
              <td>-----</td>
              <td>NOT PAID</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<?php include 'footer.php'; ?>