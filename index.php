<!DOCTYPE html>
<html lang="en">
<!-- head html-tag -->
<?php require_once 'includes/head.php'; ?>
<body>

<header>
  <div class="">
    <div class="cell">
      <b><i class="typcn typcn-info-large-outline"></i>Cascade Framework Dashboard</b>
    </div>
  </div>
</header>

<div class="wrapper">
  <nav class="side-navbar">
    <ul class="navmenu" style="list-style-type:none;">
      <li><a class="sub-navlink" href=""><i class="typcn typcn-group"></i>&nbsp;Option Here</a>
        <ul class="sub-navmenu">
          <li><a href="#">Hello 1</a></li>
          <li><a href="#">Hello 2</a></li>
        </ul>
      </li>

      <li><a class="navlink" href="#"><i class="typcn typcn-user"></i>&nbsp;Link Here</a>

      </li>
      <li><a class="navlink" href="#"><i class="typcn typcn-link-outline"></i>&nbsp;Other Link Here</a></li>
    </ul>
  </nav>

  <div class="main-content">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
          <div class="table-wrap">
            <div class="table-title">
              <h3>Table title</h3>
            </div>
            <div class="table-content">
              <table class="border datatable">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Function</th>
                    <th>Location</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>James</td>
                      <td>Team Lead</td>
                      <td>New York</td>
                  </tr>
                  <tr>
                      <td>John</td>
                      <td>Developer</td>
                      <td>Kansas</td>
                  </tr>
                  <tr>
                      <td>Sarah</td>
                      <td>Designer</td>
                      <td>New York</td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


  </div><!-- main-content -->

</div><!-- wrapper -->



<script src="vendor/jquery/jquery.min.js"></script>
<script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('.datatable').DataTable();
} );
</script>
</body>
</html>
