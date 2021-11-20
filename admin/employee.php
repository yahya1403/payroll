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
      <a class="navbar-brand material-icons nav-active" href="employee.php">Employee  <i class="fas fa-user-plus"></i></a>
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

<div class="container-fluid" style="background-color:white;">
    <div class="row">
        <div class="col-md-8" align="right" style="padding:10px;">
&nbsp;        <button class="btn btn-success" data-toggle="modal" data-target="#myModal"><span>Add </span><i class="fas fa-plus"></i>
        </div>
        <div class="col-md-4" style="padding:10px;">
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        </div>
    </div>
<table class="table">
  <thead><tr><th>Employee Code</th><th>First Name</th><th>Surname</th><th>Gender</th><th>Division</th><th>Department</th><th>Occupation</th><th>Branch</th><th>D.O.B</th><th>Date of join</th><th>Mobile Number</th><th>Address</th><th>Basic pay/hr</th><th>Income tax %</th><th>NPF</th><th>NPF %</th><th>NPF Number</th><th>Employee type</th><th>Action</th></tr></thead>
  <tbody id="myTable">
      <tr>
      <td>1</td>
        <td>MD</td>
        <td>Name</td>
        <td>male</td>
        <td>Div1</td>
        <td>Dep1</td>
        <td>occ1</td>
        <td>b1</td>
        <td>17/02/1998</td>
        <td>17/02/2021</td>
        <td>1234</td>
        <td>trcy</td>
        <td>12.5</td>
        <td>1.5</td>
        <td>npf</td>
        <td>1</td>
        <td>123</td>
        <td>divone</td>
        <td><button class="btn btn-primary js-division-edit" data-toggle="modal" data-target="#myModaledit"><i class="fas fa-edit"></i></button>
        <button class="btn btn-danger js-btndiv-delete"><i class="fas fa-trash"></i></button></td>
      </tr>
      <tr>
      <td>2</td>
      <td>MD</td>
      <td>Name</td>
      <td>male</td>
      <td>Div1</td>
      <td>Dep1</td>
      <td>occ1</td>
      <td>b1</td>
      <td>17/02/1998</td>
      <td>17/02/2021</td>
      <td>1234</td>
      <td>trcy</td>
      <td>12.5</td>
      <td>1.5</td>
      <td>npf</td>
      <td>1</td>
      <td>123</td>
      <td>divone</td>
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
        <h4 class="modal-title">Add Department</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form>
          <div class="form-group">
            <label for="">Employee Code</label>
            <input type="text" class="form-control js-empcode-add" id="exampleInputEmail1" placeholder="Employee code">
          </div>
          <div class="form-group">
            <label for="">First Name</label>
            <input type="text" class="form-control js-fname-add" id="exampleInputPassword1" placeholder="First Name">
          </div>
          <div class="form-group">
            <label for="">Surname</label>
            <input type="text" class="form-control js-sur-add" id="exampleInputPassword1" placeholder="Surname">
          </div>
          <div class="form-group">
            <label for="">Gender</label>
            <input type="radio" class="js-gender-add" name="gender" value="male">Male
            <input type="radio" class="js-gender-add" name="gender" value="female">Female
          </div>
          <div class="form-group">
            <label for="">Division/Company Name</label>
            <input type="text" class="form-control js-div-add" id="exampleInputPassword1" placeholder="Division">
          </div>
          <div class="form-group">
            <label for="">Department</label>
            <input type="text" class="form-control js-dep-add" id="exampleInputPassword1" placeholder="Department">
          </div>
          <div class="form-group">
            <label for="">Occupation</label>
            <input type="text" class="form-control js-occu-add" id="exampleInputPassword1" placeholder="Occupation">
          </div>
          <div class="form-group">
            <label for="">Branch</label>
            <input type="text" class="form-control js-branch-add" id="exampleInputPassword1" placeholder="Branch">
          </div>
          <div class="form-group">
            <label for="">D.O.B</label>
            <input type="date" class="form-control js-sur-add" id="exampleInputPassword1" placeholder="Date of Birth">
          </div>
          <div class="form-group">
            <label for="">Date of join</label>
            <input type="date" class="form-control js-sur-add" id="exampleInputPassword1" placeholder="Date of join">
          </div>
          <div class="form-group">
            <label for="">Mobile Number</label>
            <input type="text" class="form-control js-phone-add" id="exampleInputPassword1" placeholder="Mobile Number">
          </div>
          <div class="form-group">
            <label for="">Address</label>
            <textarea cols="5" rows="3" class="form-control js-address-add" id="exampleInputPassword1" placeholder="Address"></textarea>
          </div>
          <div class="form-group">
            <label for="">Basic Pay/hr</label>
            <input type="text" class="form-control js-basic-add" id="exampleInputPassword1" placeholder="Basic pay/hr">
          </div>
          <div class="form-group">
            <label for="">Income tax %</label>
            <input type="text" class="form-control js-income-add" id="exampleInputPassword1" placeholder="Income tax %">
          </div>
          <div class="form-group">
            <label for="">NPF</label>
            <input type="text" class="form-control js-npf-add" id="exampleInputPassword1" placeholder="NPF">
          </div>
          <div class="form-group">
            <label for="">NPF %</label>
            <input type="text" class="form-control js-npf%-add" id="exampleInputPassword1" placeholder="NPF %">
          </div>
          <div class="form-group">
            <label for="">NPF Number</label>
            <input type="text" class="form-control js-npfno-add" id="exampleInputPassword1" placeholder="NPF Number">
          </div>
          <div class="form-group">
            <label for="">Employee Type</label>
            <input type="text" class="form-control js-emptype-add" id="exampleInputPassword1" placeholder="Employee type">
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