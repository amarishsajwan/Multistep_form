let next1 = document.getElementById("next1");
//switch to next form div after checking validation
next1.addEventListener("click", () => {
  let result1 = validateNext1();
  console.log(result1);
  if (!result1) {
    return false;
  } else {
    document.getElementById("progressBar").style.width = "33%";
    document.getElementById("step1").style.display = "none";
    document.getElementById("step2").style.display = "block";
  }
});

let prev2 = document.getElementById("prev2");
prev2.addEventListener("click", function () {
  document.getElementById("progressBar").style.width = "0%";
  document.getElementById("step1").style.display = "block";
  document.getElementById("step2").style.display = "none";
});

let next2 = document.getElementById("next2");
next2.addEventListener("click", () => {
  let result2 = validateNext2();
  console.log("result2", result2);

  if (!result2) {
    return false;
  } else {
    document.getElementById("progressBar").style.width = "66%";
    document.getElementById("step2").style.display = "none";
    document.getElementById("step3").style.display = "block";
  }
});

const prev3 = document.getElementById("prev3");
prev3.addEventListener("click", function () {
  document.getElementById("progressBar").style.width = "33%";
  document.getElementById("step2").style.display = "block";
  document.getElementById("step3").style.display = "none";
});
const submit = document.getElementById("submit");
const submitForm = document.getElementById("regForm");
const submitBtn = document.querySelector("#submit");
const confirmSubmit = document.getElementById("confirmSubmit");
const hidden = document.getElementById("addButton");
submitBtn.addEventListener("click", () => {
  if (validateNext3() == true) {
    let modalTrigger = new bootstrap.Modal(
      document.getElementById("staticBackdrop")
    );
    document.getElementById("progressBar").style.width = "100%";
    let InputName = document.getElementById("InputName").value;

    let InputUserName = document.getElementById("InputUserName").value;

    let InputEmail = document.getElementById("InputEmail").value;

    let f_name = document.getElementById("f_name").value;

    let l_name = document.getElementById("l_name").value;

    let Inputgender = document.querySelector(
      'input[name="gender"]:checked'
    ).value;

    let dob = document.getElementById("dob").value;

    let PhoneNumber = document.getElementById("PhoneNumber").value;

    let ResidentialAddress =
      document.getElementById("ResidentialAddress").value;

    let PermanentAddress = document.getElementById("PermanentAddress").value;

    let Zipcode = document.getElementById("Zipcode").value;

    let State = document.getElementById("State").value;

    let Country = document.getElementById("Country").value;

    let BankName = document.getElementById("BankName").value;

    let BranchName = document.getElementById("BranchName").value;

    let AccountHolderName = document.getElementById("AccountHolderName").value;

    let AccountNo = document.getElementById("AccountNo").value;

    let AccountCreatedDate = document.getElementById("createdDate").value;

    // Add form data to modal
    const formDataList = document.getElementById("formDataList");
    formDataList.innerHTML = "";
    formDataList.innerHTML +=
      "</div><strong>Name:</strong> " + InputName + "</div>";
    formDataList.innerHTML +=
      "<div><strong>User Name:</strong> " + InputUserName + "</div>";
    formDataList.innerHTML +=
      "<div><strong>Email:</strong> " + InputEmail + "</div>";
    formDataList.innerHTML +=
      "<div><strong>Firt Name:</strong> " + f_name + "</div>";
    formDataList.innerHTML +=
      "<div><strong>Last Name:</strong> " + l_name + "</div>";
    formDataList.innerHTML +=
      "<div><strong>Gender:</strong> " + Inputgender + "</div>";
    formDataList.innerHTML +=
      "<div><strong>Date of Birth:</strong> " + dob + "</div>";
    formDataList.innerHTML +=
      "<div><strong>PhoneNumber:</strong> " + PhoneNumber + "</div>";
    formDataList.innerHTML +=
      "<div><strong>Residential Address:</strong> " +
      ResidentialAddress +
      "</div>";
    formDataList.innerHTML +=
      "<div><strong>PermanentAddress:</strong> " + PermanentAddress + "</div>";
    formDataList.innerHTML +=
      "<div><strong>Zipcode:</strong> " + Zipcode + "</div>";
    formDataList.innerHTML +=
      "<div><strong>State:</strong> " + State + "</div>";
    formDataList.innerHTML +=
      "<div><strong>Country:</strong> " + Country + "</div>";
    formDataList.innerHTML +=
      "<div><strong>Bank Name:</strong> " + BankName + "</div>";
    formDataList.innerHTML +=
      "<div><strong>Branch Name:</strong> " + BranchName + "</div>";
    formDataList.innerHTML +=
      "<div><strong>Account Holder Name:</strong> " +
      AccountHolderName +
      "</div>";
    formDataList.innerHTML +=
      "<div><strong>Account Created Date:</strong> " +
      AccountCreatedDate +
      "</div>";
    modalTrigger.show();
  } else {
    return false;
  }
});
confirmSubmit.addEventListener("click", () => {
  console.log("hello");
  addButton.click();
  document.getElementById("regForm").reset();
  location.reload();
});

//copy residential address to permanent address by ticking check box

const checking = document.getElementById("check");

checking.addEventListener("click", () => {
  let item = document.getElementById("check").checked;
  if (item) {
    console.log("checked");

    document.getElementById("PermanentAddress").value =
      document.getElementById("ResidentialAddress").value;
  }
});

function printError(elemId, hintMsg) {
  document.getElementById(elemId).innerHTML = hintMsg;
  return false;
}
//validation function
function validateNext1() {
  // Retrieving the values of form elements
  const name = document.getElementById("InputName").value;
  const username = document.getElementById("InputUserName").value;
  const email = document.getElementById("InputEmail").value;
  const password = document.getElementById("InputPassword").value;
  const confirmPassword = document.getElementById("InputConfirmPassword").value;
  // Defining error variables with a default value
  let nameErr =
    (usernameErr =
    emailErr =
    passwordErr =
    confirmPasswordErr =
      true);

  // Validate name
  if (name == "") {
    printError("nameErr", "**Please enter your name");
  } else {
    let regex = /^[a-zA-Z\s]+$/;
    if (regex.test(name) === false) {
      printError("nameErr", "**Please enter a valid name");
    } else {
      printError("nameErr", "");
      nameErr = false;
      console.log(nameErr);
    }
  }

  //validate username
  if (username == "") {
    printError("usernameErr", "**Please enter your name");
  } else {
    let regex = /^[a-zA-Z\s\w]+$/;
    // let regex = /[\w\d]+/;
    if (regex.test(username) === false) {
      printError("usernameErr", "**Please enter a valid name");
    } else {
      printError("usernameErr", "");
      usernameErr = false;
    }
  }

  // Validate email address
  if (email == "") {
    printError("emailErr", "**Please enter your email address");
  } else {
    // Regular expression for basic email validation
    let regex = /^\S+@\S+\.\S+$/;
    if (regex.test(email) === false) {
      printError("emailErr", "**Please enter a valid email address");
    } else {
      printError("emailErr", "");
      emailErr = false;
    }
  }
  // Validate email password
  if (password == "") {
    printError("passwordErr", "**Please enter  Password");
  } else {
    if (password.length < 8) {
      printError(
        "passwordErr",
        "**Password length must be atleast 8 characters"
      );
    } else {
      printError("passwordErr", "");
      passwordErr = false;
    }
  }
  // Validate Confirm Password
  if (confirmPassword == "") {
    printError("confirmPasswordErr", "**Please enter Confirm Password");
  } else {
    if (confirmPassword != password) {
      printError(
        "confirmPasswordErr",
        "** Confirm Password must be same as above Password"
      );
    } else {
      printError("confirmPasswordErr", "");
      confirmPasswordErr = false;
    }
  }

  // Prevent the form from being submitted if there are any errors
  if (
    nameErr ||
    usernameErr ||
    emailErr ||
    passwordErr ||
    confirmPasswordErr == true
  ) {
    return false;
  } else {
    return true;
  }
}

function validateNext2() {
  const f_name = document.getElementById("f_name").value;
  const l_name = document.getElementById("l_name").value;
  const gender = document.getElementsByName("gender");
  // const genderFemale = document.getElementById("GenderFemale").value;
  // const genderOther = document.getElementById("GenderOther").value;
  const dob = document.getElementById("dob").value;
  const PhoneNumber = document.getElementById("PhoneNumber").value;
  const raddress = document.getElementById("ResidentialAddress").value;
  console.log(raddress);
  const paddress = document.getElementById("PermanentAddress").value;
  console.log(paddress);
  const zipcode = document.getElementById("Zipcode").value;
  const state = document.getElementById("State").value;
  const country = document.getElementById("Country").value;

  let f_nameErr =
    (l_nameErr =
    genderErr =
    dobErr =
    telephoneErr =
    ResidentialAddressErr =
    PermanentAddressErr =
    ZipcodeErr =
    stateErr =
    CountryErr =
      true);

  if (f_name == "") {
    printError("f_nameErr", "**Please enter your name");
  } else {
    let regex = /^[a-zA-Z\s]+$/;
    if (regex.test(f_name) === false) {
      printError("f_nameErr", "**Please enter a valid name");
    } else {
      printError("f_nameErr", "");
      f_nameErr = false;
    }
  }

  if (l_name == "") {
    printError("l_nameErr", "**Please enter your Last name");
  } else {
    let regex = /^[a-zA-Z\s]+$/;
    if (regex.test(l_name) === false) {
      printError("l_nameErr", "**Please enter a valid Last name");
    } else {
      printError("l_nameErr", "");
      l_nameErr = false;
    }
  }
  for (let i = 0; i < gender.length; i++) {
    if (gender[i].checked) {
      printError("genderErr", "");
      genderErr = false;
      break;
    } else {
      printError("genderErr", "Please Enter gender");
    }
  }

  if (dob == "") {
    printError("dobErr", "**Please enter DOB");
  } else {
    dobErr = false;
  }

  if (PhoneNumber == "") {
    printError("telephoneErr", "**Please enter Phone Number");
  } else {
    let regex = /^\d{10}$/;
    if (regex.test(PhoneNumber) === false) {
      printError(
        "telephoneErr",
        "**Please enter a valid 10-digit Phone Number"
      );
    } else {
      printError("telephoneErr", "");
      telephoneErr = false;
    }
  }
  if (raddress == "") {
    console.log("raddress is blank");
    printError("ResidentialAddressErr", "**Please enter Residential Address");
  } else {
    printError("ResidentialAddressErr", "");
    ResidentialAddressErr = false;
  }
  if (paddress == "") {
    console.log("paddress is blank");
    printError("PermanentAddressErr", "**Please enter Permanent Address");
  } else {
    printError("PermanentAddressErr", "");
    PermanentAddressErr = false;
  }
  if (zipcode == "") {
    printError("ZipcodeErr", "**Please enter Zipcode");
  } else {
    let regex = /^\d{6}$/;
    if (regex.test(zipcode) === false) {
      printError("ZipcodeErr", "**Please enter a valid  Zipcode");
    } else {
      printError("ZipcodeErr", "");
      ZipcodeErr = false;
    }
  }
  if (state == "") {
    printError("stateErr", "**Please enter state");
  } else {
    let regex = /^[a-zA-Z\s]+$/;
    if (regex.test(state) === false) {
      printError("stateErr", "**Please enter a valid  state name");
    } else {
      printError("stateErr", "");
      stateErr = false;
    }
  }
  if (country == "") {
    printError("CountryErr", "**Please enter Country");
  } else {
    let regex = /^[a-zA-Z\s]+$/;
    if (regex.test(country) === false) {
      printError("CountryErr", "**Please enter a valid 6-digit Zipcode");
    } else {
      printError("CountryErr", "");
      CountryErr = false;
    }
  }
  if (
    f_nameErr ||
    l_nameErr ||
    genderErr ||
    dobErr ||
    telephoneErr ||
    ResidentialAddressErr ||
    PermanentAddressErr ||
    ZipcodeErr ||
    stateErr ||
    CountryErr == true
  ) {
    return false;
  } else {
    return true;
  }
}
function validateNext3() {
  const BankName = document.getElementById("BankName").value;
  const BranchName = document.getElementById("BranchName").value;
  const AccountHolderName = document.getElementById("AccountHolderName").value;
  const AccountNo = document.getElementById("AccountNo").value;
  const createdDate = document.getElementById("createdDate").value;
  let =
    BankNameErr =
    BranchNameErr =
    AccountHolderNameErr =
    AccountNoErr =
    createdDateErr =
      true;
  if (BankName == "") {
    printError("BankNameErr", "**Please enter Bank Name");
  } else {
    let regex = /^[a-zA-Z\s]+$/;
    if (regex.test(BankName) === false) {
      printError("BankNameErr", "**Please enter a valid Bank name");
    } else {
      printError("BankNameErr", "");
      BankNameErr = false;
    }
  }
  if (BranchName == "") {
    printError("BranchNameErr", "**Please enter Branch Name");
  } else {
    let regex = /^[a-zA-Z\s]+$/;
    if (regex.test(BranchName) === false) {
      printError("BranchNameErr", "**Please enter a valid Branch name");
    } else {
      printError("BranchNameErr", "");
      BranchNameErr = false;
    }
  }
  if (AccountHolderName == "") {
    printError("AccountHolderNameErr", "**Please enter Account Holder Name");
  } else {
    let regex = /^[a-zA-Z\s]+$/;
    if (regex.test(AccountHolderName) === false) {
      printError(
        "AccountHolderNameErr",
        "**Please enter a Account Holder name"
      );
    } else {
      printError("AccountHolderNameErr", "");
      AccountHolderNameErr = false;
    }
  }

  if (AccountNo == "") {
    printError("AccountNoErr", "**Please enter Account Number");
  } else {
    let regex = /^\d+$/;
    if (regex.test(AccountNo) === false) {
      printError(
        "AccountNoErr",
        "**Please enter a valid 12 digit Account Number"
      );
    } else {
      printError("AccountNoErr", "");
      AccountNoErr = false;
    }
  }
  if (createdDate == "") {
    printError("createdDateErr", "**Please enter Account Created Date");
  } else {
    createdDateErr = false;
  }
  if (
    BankNameErr ||
    BranchNameErr ||
    AccountHolderNameErr ||
    AccountNoErr ||
    createdDateErr == true
  ) {
    console.log(
      BankNameErr,
      BranchNameErr,
      AccountHolderNameErr,
      AccountNoErr,
      createdDateErr
    );
    return false;
  } else {
    console.log(
      BankNameErr,
      BranchNameErr,
      AccountHolderNameErr,
      AccountNoErr,
      createdDateErr
    );
    return true;
  }
}
