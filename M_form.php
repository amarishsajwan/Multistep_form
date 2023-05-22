<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Multistep form</title>

  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <!-- Submit Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Submitted Form Data:</p>
          <ul id="formDataList"></ul>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="cancel" data-bs-dismiss="modal">Cancel</button>
          <button type="button" id="confirmSubmit" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end of modal -->



  <!-- Progress Bar + display % value -->
  <div class="progress mt-3" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0"
    aria-valuemax="100">
    <div class="progress-bar" id="progressBar" style="width: 0%"></div>
  </div>

  <!-- Progress Bar without % value -->

  <!-- form  div-->
  <div class="mains  mt-5 ">
    <h2 class="text-center mt-1 mb-5">Multistep Form </h2>

    <form id="regForm" action="handle_form.php" method="POST" target="_blank">

      <!-- step-1 -->
      <div id="step1" class="step  row g-3">
        <h5>Account Information</h5>
        <div class="col-12">
          <div class="form-floating mb-3">
            <input type="text" name="InputName" class="form-control invalid" id="InputName" placeholder="name">
            <div class="error" id="nameErr"></div>

            <label for="floatingInput">Name*</label>
          </div>
        </div>
        <div class="col-12">
          <div class="form-floating mb-3 test">
            <input type="text" class="form-control" id="InputUserName" name="InputUserName" placeholder="Password">
            <div class="error" id="usernameErr"></div>

            <label for="userName">User Name*</label>
          </div>
        </div>
        <div class="col-12">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" name="InputEmail" id="InputEmail" placeholder="name@example.com">
            <div class="error" id="emailErr"></div>

            <label for="InputEmail">Email address*</label>
          </div>
        </div>
        <div class="col-12">
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="InputPassword" name="InputPassword" onchange=""
              placeholder="Password">
            <div class="error" id="passwordErr"></div>

            <label for="InputPassword">Password*</label>
          </div>
        </div>
        <div class="col-12">
          <div class="form-floating mb-3 ">
            <input type="password" class="form-control" id="InputConfirmPassword" name="confirmPassword"
              placeholder="Password">
            <div class="error" id="confirmPasswordErr"></div>

            <label for="InputConfirmPassword">Confirm Password*</label>
          </div>
        </div>
        <div class="d-grid gap-2 d-md-flex m-2 justify-content-md-end">

          <button class="btn btn-primary" id="next1" type="button">Next</button>
        </div>
      </div>


      <!-- step 2  -->
      <div id="step2" class="step row g-3 " style="display: none;">
        <h5>Personal Information</h5>
        <div class="col-12">
          <div class="row">
            <div class=" col-md-6">
              <div class="form-floating mb-3 test">
                <input type="text" class="form-control " id="f_name" name="f_name" placeholder="First Name">
                <div class="error" id="f_nameErr"></div>

                <label for="f_name">First Name*</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3 tests">
                <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last Name">
                <div class="error" id="l_nameErr"></div>
                <label for="l_name">Last Name*</label>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <fieldset class="mb-3">
            <div class="row  justify-content-center">
              <legend class="col-form-label  col-md-4 p-0  ">Gender*</legend>

              <div class="form-check form-check-inline col-md-2">

                <input class="form-check-input" type="radio" name="gender" id="GenderMale" value="Male">



                <label class="form-check-label" for="GenderMale">
                  Male
                </label>
              </div>

              <div class="form-check  form-check-inline col-md-2">
                <input class="form-check-input" type="radio" name="gender" id="GenderFemale" value="Female">
                <label class="form-check-label" for="GenderFemale">
                  Female
                </label>
              </div>
              <div class="form-check   form-check-inline col-md-2 ">
                <input class="form-check-input" type="radio" name="gender" id="GenderOther" value="Other">

                <label class="form-check-label" for="GenderOther">
                  Other
                </label>
              </div>


            </div>
            <div class="error" id="genderErr"></div>
          </fieldset>

        </div>
        <div class="col-12">
          <div class="form-floating mb-3">
            <input type="date" name="dob" class="form-control " id="dob" placeholder="name">
            <div class="error" id="dobErr"></div>

            <label for="floatingInput">Date of Birth*</label>
          </div>
        </div>

        <div class="col-12">
          <div class="form-floating mb-3 ">
            <input type="tel" class="form-control" name="PhoneNumber" id="PhoneNumber" placeholder="Phone Number">
            <div class="error" id="telephoneErr"></div>


            <label for="PhoneNumber">Phone Number*</label>
          </div>
        </div>

        <div class="col-12">

          <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="ResidentialAddress"
              name="ResidentialAddress" style="height: 100px"></textarea>
            <div class="error" id="ResidentialAddressErr"></div>

            <label for="ResidentialAddress"> Residential Address*</label>
          </div>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="check" name="checks">
            <label for="check" class="form-check-label text-muted">
              Same as Residential Address
            </label>
          </div>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="PermanentAddress"
              name="PermanentAddress" style="height: 100px"></textarea>
            <div class="error" id="PermanentAddressErr"></div>

            <label for="PermanentAddress">Permanent Address*</label>
          </div>
        </div>
        <div class="col-12">
          <div class="row">
            <div class=" col-3">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="Zipcode" name="Zipcode" placeholder="Zipcode">
                <div class="error" id="ZipcodeErr"></div>
                <label for="Zipcode">Zip Code*</label>
              </div>
            </div>

            <div class="col-3">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="State" name="State" placeholder="Day">
                <div class="error" id="stateErr"></div>

                <label for="State">State*</label>
              </div>
            </div>
            <div class="col-3">

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="Country" name="Country" placeholder="Year">
                <div class="error" id="CountryErr"></div>

                <label for="Country">Country*</label>
              </div>
            </div>
          </div>
        </div>

        <div class="d-grid gap-2 d-md-flex m-2 justify-content-md-end">
          <button class="btn btn-primary " id="prev2" type="button">Previous</button>
          <button class="btn btn-primary" id="next2" type="button">Next</button>
        </div>
      </div>

      <!-- step 3 -->
      <div id="step3" class="step row g-3 " style="display: none;">

        <h5>Bank Information</h5>
        <div class="col-12">
          <div class="row">
            <div class="col-md-6">
              <div class="form-floating mb-3 test">
                <input type="text" class="form-control" id="BankName" name="BankName" placeholder="BankName">
                <div class="error" id="BankNameErr"></div>
                <label for="BankName">Bank Name*</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3 tests">
                <input type="text" class="form-control" id="BranchName" name="BranchName" placeholder="Last Name">
                <div class="error" id="BranchNameErr"></div>

                <label for="BranchName">Branch Name*</label>
              </div>
            </div>
          </div>
        </div>
        <input type="hidden" id="form-data" name="form-data">
        <div class="col-12">
          <div class="form-floating  mb-3">
            <input type="text" class="form-control" id="AccountHolderName" name="AccountHolderName"
              placeholder="AccountHolderName">
            <div class="error" id="AccountHolderNameErr"></div>


            <label for="floatingInput">Account Holder Name*</label>
          </div>
        </div>
        <div class="col-12">
          <div class="form-floating  mb-3">
            <input type="text" class="form-control" id="AccountNo" name="AccountNo" placeholder="Account_No">
            <div class="error" id="AccountNoErr"></div>

            <label for="AccountNo">Account Number*</label>
          </div>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="col-4">
              <p style="
              margin-left: 10px;
              margin-top: 16px;">Account Created* :</p>
            </div>
            <div class="col-8">
              <div class="form-floating mb-3">
                <input type="date" name="createdDate" class="form-control " id="createdDate" placeholder="createdDate">
                <div class="error" id="createdDateErr"></div>

                <label for="floatingInput">Account Created *</label>
              </div>
            </div>
          </div>
        </div>

        <div class="d-grid gap-2 d-md-flex m-2 justify-content-md-end">
          <input type="submit" id="addButton" value="Add" style="display: none;">
          <button class="btn btn-primary" id="prev3" type="button">Previous</button>
          <button type="button" class="btn btn-primary" id="submit">Submit</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <script src="form.js"></script>


</body>

</html>