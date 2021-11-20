<?php
require_once('../db/config.php');
require_once('header.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
  <li class="nav-item">
      <a class="navbar-brand material-icons" href="index.php">Dashboard  <i class="fas fa-home"></i></a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand material-icons" href="division.php">Division  <i class="fas fa-business-time"></i></a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand material-icons" href="department.php">Department  <i class="fas fa-industry"></i></a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand material-icons" href="branch.php">Branch  <i class="fas fa-code-branch"></i></a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand material-icons nav-active" href="occupation.php">Occupation  <i class="fas fa-industry"></i></a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand material-icons" href="allowance.php">Allowance / Deduction  <i class="fas fa-money-bill-alt"></i></a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand material-icons" href="leave.php">Leave Master  <i class="fas fa-pencil-alt"></i></a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand material-icons" href="employee.php">Employee  <i class="fas fa-user-plus"></i></a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand material-icons" href="bank.php">Bank Detail  <i class="fas fa-bank"></i></a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand material-icons" href="payroll.php">Payroll  <i class="fas fa-credit-card"></i></a>
    </li>

  </ul>
  <form class="form-inline my-2 my-lg-0">
  <a class="nav-link mr-sm-2" href="#"><?php echo $_SESSION['user']; ?>  <i class="fas fa-user"></i></a>
    <a class="btn btn-outline-primary my-2 my-sm-0" href="logout.php">Logout  <i class="fas fa-sign-out-alt"></i></a>
  </form>
</div>
</nav>

<div class="container" style="background-color:white;">
    <div class="row">
        <div class="col-md-8" align="right" style="padding:10px;">
&nbsp;        <button class="btn btn-success" data-toggle="modal" data-target="#myModal"><span>Add </span><i class="fas fa-plus"></i>
        </div>
        <div class="col-md-4" style="padding:10px;">
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        </div>
    </div>
<table class="table">
  <thead><tr><th>S.No</th><th>Occupation Code</th><th>Occupation Name</th><th>Action</th></tr></thead>
  <tbody id="myTable">
      <tr>
      <td>1</td>
        <td>Occupation1</td>
        <td>division one</td>
        <td><button class="btn btn-primary js-division-edit" data-toggle="modal" data-target="#myModaledit"><i class="fas fa-edit"></i></button>
        <button class="btn btn-danger js-btndiv-delete"><i class="fas fa-trash"></i></button></td>
      </tr>
      <tr>
      <td>2</td>
        <td>Occupation2</td>
        <td>division two</td>
        <td><button class="btn btn-primary js-division-edit" data-toggle="modal" data-target="#myModaledit"><i class="fas fa-edit"></i></button>
        <button class="btn btn-danger js-btndiv-delete"><i class="fas fa-trash"></i></button></td>
      </tr>
      <tr>
      <td>3</td>
        <td>Occupation3</td>
        <td>division three</td>
        <td><button class="btn btn-primary js-division-edit" data-toggle="modal" data-target="#myModaledit"><i class="fas fa-edit"></i></button>
        <button class="btn btn-danger js-btndiv-delete"><i class="fas fa-trash"></i></button></td>
      </tr>
    </tbody>
  </table>
</div>

<!-- The Modal for Add -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Occupation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form>
          <div class="form-group">
            <label for="Occupationcode">Occupation Code</label>
            <input type="text" class="form-control js-dep-add" id="exampleInputEmail1" placeholder="Occupation code">
          </div>
          <div class="form-group">
            <label for="Occupationname">Occupation Name</label>
            <input type="text" class="form-control js-name-add" id="exampleInputPassword1" placeholder="Occupation Name">
          </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success js-btndiv-add" data-dismiss="modal">Add</button>
      </div>

    </div>
  </div>
</div>

<!-- The Modal for Edit-->
<div class="modal" id="myModaledit">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form>
          <div class="form-group">
            <label for="Occupationcode">Occupation Code</label>
            <input type="text" class="form-control js-dep-edit" id="exampleInputEmail1" placeholder="Division code">
          </div>
          <div class="form-group">
            <label for="Occupationname">Occupation Name</label>
            <input type="text" class="form-control js-name-edit" id="exampleInputPassword1" placeholder="Division Name">
          </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success js-btndiv-update" data-dismiss="modal">Update</button>
      </div>

    </div>
  </div>
</div>

<script src="custom/division.js"></script>