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
      <a class="navbar-brand material-icons" href="occupation.php">Occupation  <i class="fas fa-industry"></i></a>
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
      <a class="navbar-brand material-icons  nav-active" href="payroll.php">Payroll  <i class="fas fa-credit-card"></i></a>
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
  <thead><tr><th>S.No</th><th>Department Code</th><th>Department Name</th><th>Action</th></tr></thead>
  <tbody id="myTable">
      <tr>
      <td>1</td>
        <td>Department1</td>
        <td>division one</td>
        <td><button class="btn btn-primary js-division-edit" data-toggle="modal" data-target="#myModaledit"><i class="fas fa-edit"></i></button>
        <button class="btn btn-danger js-btndiv-delete"><i class="fas fa-trash"></i></button></td>
      </tr>
      <tr>
      <td>2</td>
        <td>Department2</td>
        <td>division two</td>
        <td><button class="btn btn-primary js-division-edit" data-toggle="modal" data-target="#myModaledit"><i class="fas fa-edit"></i></button>
        <button class="btn btn-danger js-btndiv-delete"><i class="fas fa-trash"></i></button></td>
      </tr>
      <tr>
      <td>3</td>
        <td>Department3</td>
        <td>division three</td>
        <td><button class="btn btn-primary js-division-edit" data-toggle="modal" data-target="#myModaledit"><i class="fas fa-edit"></i></button>
        <button class="btn btn-danger js-btndiv-delete"><i class="fas fa-trash"></i></button></td>
      </tr>
    </tbody>
  </table>
</div>

<!-- The Modal for Add -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Entry payroll</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form>
          <div class="form-group">
            <label for="">Code</label>
            <input type="text" class="form-control js-code-add" id="exampleInputEmail1" placeholder="code">
          </div>
          <div class="form-group">
            <label for="">P.P Ending</label>
            <input type="date" class="form-control js-pp-add" id="exampleInputPassword1">
          </div>
        <div class="form-row">
            <div class="form-group col-md-2">
            <label for="">day1</label>
            <input type="text" class="form-control js-sur-add" id="exampleInputPassword1">
            </div>
            <div class="form-group col-md-2">
            <label for="">day2</label>
            <input type="text" class="form-control js-sur-add" id="exampleInputPassword1">
            </div>
            <div class="form-group col-md-2">
            <label for="">day3</label>
            <input type="text" class="form-control js-sur-add" id="exampleInputPassword1">
            </div>
            <div class="form-group col-md-2">
            <label for="">day4</label>
            <input type="text" class="form-control js-sur-add" id="exampleInputPassword1">
            </div>
            <div class="form-group col-md-2">
            <label for="">day5</label>
            <input type="text" class="form-control js-sur-add" id="exampleInputPassword1">
            </div>
            <div class="form-group col-md-2">
            <label for="">day6</label>
            <input type="text" class="form-control js-sur-add" id="exampleInputPassword1">
            </div>
            <div class="form-group col-md-2">
            <label for="">day7</label>
            <input type="text" class="form-control js-sur-add" id="exampleInputPassword1">
            </div>
            <div class="form-group col-md-2">
            <label for="">day8</label>
            <input type="text" class="form-control js-sur-add" id="exampleInputPassword1">
            </div>
            <div class="form-group col-md-2">
            <label for="">day9</label>
            <input type="text" class="form-control js-sur-add" id="exampleInputPassword1">
            </div>
            <div class="form-group col-md-2">
            <label for="">day10</label>
            <input type="text" class="form-control js-sur-add" id="exampleInputPassword1">
            </div>
            <div class="form-group col-md-2">
            <label for="">day11</label>
            <input type="text" class="form-control js-sur-add" id="exampleInputPassword1">
            </div>
            <div class="form-group col-md-2">
            <label for="">day12</label>
            <input type="text" class="form-control js-sur-add" id="exampleInputPassword1">
            </div>
            <div class="form-group col-md-2">
            <label for="">day13</label>
            <input type="text" class="form-control js-sur-add" id="exampleInputPassword1">
            </div>
            <div class="form-group col-md-2">
            <label for="">day14</label>
            <input type="text" class="form-control js-sur-add" id="exampleInputPassword1">
            </div>
        </div>
        <div class="d-flex flex-row-reverse">
            <div class="form-group col-md-2">
                 <b>--</b>
            </div>
            <div class="form-group col-md-2">
                <b>Normal</b>
            </div>
        </div>
        <div class="d-flex flex-row-reverse">
            <div class="form-group col-md-2">
                 <b>--</b>
            </div>
            <div class="form-group col-md-2">
                <b>OT 1.5</b>
            </div>
        </div>
        <div class="d-flex flex-row-reverse">
            <div class="form-group col-md-2">
                 <b>--</b>
            </div>
            <div class="form-group col-md-2">
                <b>OT 2</b>
            </div>
        </div>
        <div class="d-flex flex-row-reverse">
            <div class="form-group col-md-2">
                 <b>--</b>
            </div>
            <div class="form-group col-md-2">
                <b>Total</b>
            </div>
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
  <div class="modal-dialog modal-xl">
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
            <label for="Departmentcode">Department Code</label>
            <input type="text" class="form-control js-dep-edit" id="exampleInputEmail1" placeholder="Division code">
          </div>
          <div class="form-group">
            <label for="Departmentname">Department Name</label>
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