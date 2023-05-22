<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>


  <table id="example" class="table table-striped ms-2" style="width:100%">
    <thead>
      <tr>
        <th>Sno</th>
        <th>Username</th>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender:</th>
        <th>DOB:</th>
        <th>PhoneNumber</th>
        <th>Address </th>
        <th>Bank Name</th>
        <th>Branch Name</th>
        <th>Account Holder Name</th>
        <th>Account Created Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      
      include 'db_connect.php';
      $sql = "SELECT * FROM users";
      $result = mysqli_query($conn,$sql);
      $sno = 0;
      while($row = mysqli_fetch_assoc($result)){
      $id=$row['user_id'];
      $username = $row['username'];
      $email = $row['email'];
      $f_name = $row['first_name'];
      $l_name = $row['last_name'];
      $gender = $row['gender'];
      $dob = $row['dob'];
      $PhoneNumber = $row['phone_no'];
      $RAddress = $row['r_address'];
      $PAddress = $row['p_address'];
      $Zipcode = $row['zip_code'];
      $State = $row['state'];
      $Country = $row['country'];
      $BankName = $row['bank_Name'];
      $BranchName = $row['branch_name'];
      $AccountHolderName = $row['account_holder_name'];
      $AccountNo = $row['account_no'];
      $createdDate = $row['account_created_date'];
      $sno=$sno+1 ;
      echo'<tr data-id="'.$id.'">
        <td>'.$sno.'</td>
        <td>'.$username.'</td>
        <td>'.$email.'</td>
        <td>'.$f_name.'</td>
        <td>'.$l_name.'</td>
        <td>'.$gender.'</td>
        <td>'.$dob.'</td>
        <td>'.$PhoneNumber.'</td>
        <td>'.$PAddress.'""</td>
        <td>'.$BankName.'</td>
        <td>'.$BranchName.'</td>
        <td>'.$AccountHolderName.'</td>
        <td>'.$createdDate.'</td>
        <td>
          <a href="edit_form.php?uid='.$id.'" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
              <path
                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
            </svg></a>
          <button type="button" class="btn" onclick="deleteRow(this)">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill"
              viewBox="0 0 16 16">
              <path
                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
            </svg>
          </button>
        </td>


      </tr>';
      }
      ?>

    </tbody>
    <tfoot>
      <tr>
        <th>Sno</th>
        <th>Username</th>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender:</th>
        <th>DOB:</th>
        <th>PhoneNumber</th>
        <th>Address </th>
        <th>Bank Name</th>
        <th>Branch Name</th>
        <th>Account Holder Name</th>
        <th>Account Created Date</th>
        <th>Action</th>
      </tr>
    </tfoot>
  </table>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">

  </script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <script>
  $(document).ready(function() {
    $('#example').DataTable({
      scrollY: 500,
      scrollX: 800,
    });
  });
  </script>
  <script>
  //Delete a particular Row Data 
  function deleteRow(button) {
    if (confirm("Are you sure you want to delete this row?")) {
      let row = button.parentNode.parentNode; // get the parent (tr) of the parent (td) of the button
      let id = row.getAttribute("data-id");

      // create form to submit data to PHP script
      let form = document.createElement("form");
      form.method = "post";
      form.action = "delete.php";

      // add field to form
      let idField = document.createElement("input");
      idField.type = "hidden";
      idField.name = "id";
      idField.value = id;
      form.appendChild(idField);

      // submit form and reload page
      document.body.appendChild(form);
      form.submit();
    }
  }
  </script>
</body>

</html>