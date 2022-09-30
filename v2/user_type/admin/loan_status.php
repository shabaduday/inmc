<?php 
  include '../../sidebar.php';
  include '../../topbar.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Loan Status</h1>
  </div>

  <!-- Approved Loan -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Approved Loan</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="#" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Borrower Name</th>
              <th>Date of Application</th>
              <th>Date of Released</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>04/25/2011</td>
              <td>05/25/2011</td>
              <td>
                <a href=''>Claim</a>
              </td>
            </tr>
            <tr>
              <td>Garrett Winters</td>
              <td>07/25/2011</td>
              <td>08/25/2011</td>
              <td>
                <a href=''>Claim</a>
              </td>
            </tr>
            <tr>
              <td>Ashton Cox</td>
              <td>01/12/2009</td>
              <td>02/12/2009</td>
              <td>
                <a href=''>Claim</a>
              </td>
            </tr>
            <tr>
              <td>Cedric Kelly</td>
              <td>03/29/2012</td>
              <td>04/29/2012</td>
              <td>
                <a href=''>Claim</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Declined Loan -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Declined Loan</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="#" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Borrower Name</th>
              <th>Date of Application</th>
              <th>Date of Declined</th>
              <th>Reason</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Airi Satou</td>
              <td>11/28/2008</td>
              <td>12/28/2008</td>
              <td></td>
            </tr>
            <tr>
              <td>Brielle Williamson</td>
              <td>12/02/2012</td>
              <td>11/02/2013</td>
              <td></td>
            </tr>
            <tr>
              <td>Herrod Chandler</td>
              <td>08/06/2012</td>
              <td>09/06/2012</td>
              <td></td>
            </tr>
            <tr>
              <td>Rhona Davidson</td>
              <td>10/14/2010</td>
              <td>11/14/2010</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<?php include 'footer.php'; ?>