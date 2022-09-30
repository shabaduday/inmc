<?php 
  include '../../sidebar.php';
  include '../../topbar.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Loan Application</h1>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Loan Application</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Borrower Name</th>
              <th>Date of Application</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>04/25/2011</td>
              <td>Approved</td>
              <td>
                <a href='view_loan_application.php'>View Application</a> 
                / 
                <a href='javascript:window.print();'>Print Disbursement Voucher</a>
              </td>
            </tr>
            <tr>
              <td>Garrett Winters</td>
              <td>07/25/2011</td>
              <td>Declined</td>
              <td>
                <a href='view_loan_application.php'>View Application</a> 
                / 
                <a href='javascript:window.print();'>Print Disbursement Voucher</a>
              </td>
            </tr>
            <tr>
              <td>Ashton Cox</td>
              <td>01/12/2009</td>
              <td>Approved</td>
              <td>
                <a href='view_loan_application.php'>View Application</a> 
                / 
                <a href='javascript:window.print();'>Print Disbursement Voucher</a>
              </td>
            </tr>
            <tr>
              <td>Cedric Kelly</td>
              <td>03/29/2012</td>
              <td>Approved</td>
              <td>
                <a href='view_loan_application.php'>View Application</a> 
                / 
                <a href='javascript:window.print();'>Print Disbursement Voucher</a>
              </td>
            </tr>
            <tr>
              <td>Airi Satou</td>
              <td>11/28/2008</td>
              <td>Declined</td>
              <td>
                <a href='view_loan_application.php'>View Application</a> 
                / 
                <a href='javascript:window.print();'>Print Disbursement Voucher</a>
              </td>
            </tr>
            <tr>
              <td>Brielle Williamson</td>
              <td>12/02/2012</td>
              <td>Declined</td>
              <td>
                <a href='view_loan_application.php'>View Application</a> 
                / 
                <a href='javascript:window.print();'>Print Disbursement Voucher</a>
              </td>
            </tr>
            <tr>
              <td>Herrod Chandler</td>
              <td>08/06/2012</td>
              <td>Approved</td>
              <td>
                <a href='view_loan_application.php'>View Application</a> 
                / 
                <a href='javascript:window.print();'>Print Disbursement Voucher</a>
              </td>
            </tr>
            <tr>
              <td>Rhona Davidson</td>
              <td>10/14/2010</td>
              <td>Declined</td>
              <td>
                <a href='view_loan_application.php'>View Application</a> 
                / 
                <a href='javascript:window.print();'>Print Disbursement Voucher</a>
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