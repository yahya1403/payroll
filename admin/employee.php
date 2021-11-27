<?php
require_once('../db/config.php');
require_once('header.php');
$sql = "SELECT employee.*,branch.branch_name,occupation.occu_name,division.div_name,department.dep_name FROM employee,branch,occupation,division,department WHERE employee.branch=branch.id AND employee.occupation=occupation.id AND employee.division=division.id AND employee.department=department.id";
$result = mysqli_query($conn, $sql);
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
  <?php 
  $sno=1;
    while($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?php echo $row['emp_code']; ?></td>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['surname']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['div_name']; ?></td>
        <td><?php echo $row['dep_name']; ?></td>
        <td><?php echo $row['occu_name']; ?></td>
        <td><?php echo $row['branch_name']; ?></td>
        <td><?php echo $row['d_o_b']; ?></td>
        <td><?php echo $row['date_of_join']; ?></td>
        <td><?php echo $row['mobile_no']; ?></td>
        <td><?php echo $row['emp_address']; ?></td>
        <td><?php echo $row['basic_pay']; ?></td>
        <td><?php echo $row['income_tax']; ?></td>
        <td><?php echo $row['npf']; ?></td>
        <td><?php echo $row['npf_per']; ?></td>
        <td><?php echo $row['npf_number']; ?></td>
        <td><?php echo $row['emp_type']; ?></td>
        <td><button data-id="<?php echo $row['id']; ?>" class="btn btn-primary js-btn-select" data-toggle="modal" data-target="#myModaledit"><i class="fas fa-edit"></i></button>
        <button data-id="<?php echo $row['id']; ?>" class="btn btn-danger js-btn-delete"><i class="fas fa-trash"></i></button></td>
      </tr>
      <?php 
     }
  ?>

    </tbody>
  </table>
</div>

<!-- The Modal for Add -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Department</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form>
        <div class="row">
          <div class="form-group col-6">
            <label for="">Employee Code</label>
            <input type="text" class="form-control js-empcode-add" id="exampleInputEmail1" placeholder="Employee code">
          </div>
          <div class="form-group col-6">
            <label for="">First Name</label>
            <input type="text" class="form-control js-fname-add" id="exampleInputPassword1" placeholder="First Name">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-6">
            <label for="">Surname</label>
            <input type="text" class="form-control js-sname-add" id="exampleInputPassword1" placeholder="Surname">
          </div>
          <div class="form-group col-6">
            <label for="">Gender</label><br/>
            <input type="radio" class="js-gender-add" name="agender" value="male" checked>Male
            <input type="radio" class="js-gender-add" name="agender" value="female">Female
          </div>
        </div>
        <div class="row">
          <div class="form-group col-6">
            <label for="">Division/Company Name</label>
            <select class="form-control js-div-add"></select>
          </div>
          <div class="form-group col-6">
            <label for="">Department</label>
            <select class="form-control js-dep-add"></select>
          </div>
          </div>
        <div class="row">
          <div class="form-group col-6">
            <label for="">Occupation</label>
            <select class="form-control js-occu-add"></select>
          </div>
          <div class="form-group col-6">
            <label for="">Branch</label>
            <select class="form-control js-branch-add"></select>
          </div>
          </div>
        <div class="row">
          <div class="form-group col-6">
            <label for="">D.O.B</label>
            <input type="date" class="form-control js-dob-add" id="exampleInputPassword1" placeholder="Date of Birth">
          </div>
          <div class="form-group col-6">
            <label for="">Date of join</label>
            <input type="date" class="form-control js-doj-add" id="exampleInputPassword1" placeholder="Date of join">
          </div>
          </div>
        <div class="row">
          <div class="form-group col-6">
            <label for="">Mobile Number</label>
            <input type="text" class="form-control js-phone-add" id="exampleInputPassword1" placeholder="Mobile Number">
          </div>
          <div class="form-group col-6">
            <label for="">Address</label>
            <textarea cols="5" rows="3" class="form-control js-address-add" id="exampleInputPassword1" placeholder="Address"></textarea>
          </div>
          </div>
        <div class="row">
          <div class="form-group col-6">
            <label for="">Basic Pay/hr</label>
            <input type="text" class="form-control js-basic-add" id="exampleInputPassword1" placeholder="Basic pay/hr">
          </div>
          <div class="form-group col-6">
            <label for="">Income tax %</label>
            <input type="text" class="form-control js-tax-add" id="exampleInputPassword1" placeholder="Income tax %">
          </div>
          </div>
        <div class="row">
          <div class="form-group col-6">
            <label for="">NPF</label>
            <input type="text" class="form-control js-npf-add" id="exampleInputPassword1" placeholder="NPF">
          </div>
          <div class="form-group col-6">
            <label for="">NPF %</label>
            <input type="text" class="form-control js-npfp-add" id="exampleInputPassword1" placeholder="NPF %">
          </div>
          </div>
        <div class="row">
          <div class="form-group col-6">
            <label for="">NPF Number</label>
            <input type="text" class="form-control js-npfno-add" id="exampleInputPassword1" placeholder="NPF Number">
          </div>
          <div class="form-group col-6">
            <label for="">Employee Type</label>
            <input type="text" class="form-control js-emptype-add" id="exampleInputPassword1" placeholder="Employee type">
          </div>
          </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success js-btn-add" data-dismiss="modal">Add</button>
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
      <div class="row">
        <div class="form-group col-6">
          <label for="">Employee Code</label>
          <input type="hidden" class="form-control js-id-edit">
          <input type="text" class="form-control js-empcode-edit" id="exampleInputEmail1" placeholder="Employee code">
        </div>
        <div class="form-group col-6">
          <label for="">First Name</label>
          <input type="text" class="form-control js-fname-edit" id="exampleInputPassword1" placeholder="First Name">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-6">
          <label for="">Surname</label>
          <input type="text" class="form-control js-sname-edit" id="exampleInputPassword1" placeholder="Surname">
        </div>
        <div class="form-group col-6">
          <label for="">Gender</label><br/>
          <input type="radio" class="js-m-edit" name="egender" value="male">Male
          <input type="radio" class="js-f-edit" name="egender" value="female">Female
        </div>
      </div>
      <div class="row">
        <div class="form-group col-6">
          <label for="">Division/Company Name</label>
          <select class="form-control js-div-edit"></select>
        </div>
        <div class="form-group col-6">
          <label for="">Department</label>
          <select class="form-control js-dep-edit"></select>
        </div>
        </div>
      <div class="row">
        <div class="form-group col-6">
          <label for="">Occupation</label>
          <select class="form-control js-occu-edit"></select>
        </div>
        <div class="form-group col-6">
          <label for="">Branch</label>
          <select class="form-control js-branch-edit"></select>
        </div>
        </div>
      <div class="row">
        <div class="form-group col-6">
          <label for="">D.O.B</label>
          <input type="date" class="form-control js-dob-edit" id="exampleInputPassword1" placeholder="Date of Birth">
        </div>
        <div class="form-group col-6">
          <label for="">Date of join</label>
          <input type="date" class="form-control js-doj-edit" id="exampleInputPassword1" placeholder="Date of join">
        </div>
        </div>
      <div class="row">
        <div class="form-group col-6">
          <label for="">Mobile Number</label>
          <input type="text" class="form-control js-phone-edit" id="exampleInputPassword1" placeholder="Mobile Number">
        </div>
        <div class="form-group col-6">
          <label for="">Address</label>
          <textarea cols="5" rows="3" class="form-control js-address-edit" id="exampleInputPassword1" placeholder="Address"></textarea>
        </div>
        </div>
      <div class="row">
        <div class="form-group col-6">
          <label for="">Basic Pay/hr</label>
          <input type="text" class="form-control js-basic-edit" id="exampleInputPassword1" placeholder="Basic pay/hr">
        </div>
        <div class="form-group col-6">
          <label for="">Income tax %</label>
          <input type="text" class="form-control js-tax-edit" id="exampleInputPassword1" placeholder="Income tax %">
        </div>
        </div>
      <div class="row">
        <div class="form-group col-6">
          <label for="">NPF</label>
          <input type="text" class="form-control js-npf-edit" id="exampleInputPassword1" placeholder="NPF">
        </div>
        <div class="form-group col-6">
          <label for="">NPF %</label>
          <input type="text" class="form-control js-npfp-edit" id="exampleInputPassword1" placeholder="NPF %">
        </div>
        </div>
      <div class="row">
        <div class="form-group col-6">
          <label for="">NPF Number</label>
          <input type="text" class="form-control js-npfno-edit" id="exampleInputPassword1" placeholder="NPF Number">
        </div>
        <div class="form-group col-6">
          <label for="">Employee Type</label>
          <input type="text" class="form-control js-emptype-edit" id="exampleInputPassword1" placeholder="Employee type">
        </div>
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

<script src="custom/employee.js"></script>
<script src="custom/search.js"></script>