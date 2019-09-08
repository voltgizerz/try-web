function hamburgerFunc() {
  document.getElementById('sidebar').classList.toggle('animationSideBar');
  document.getElementById('navbar').classList.toggle('animationNavbar');
  document
    .getElementById('dashboardData')
    .classList.toggle('animationDashboardData');
}

function displaySearch(e) {
  console.log(e);
  if (e.keyCode === 13) {
    var elm = document.getElementById('searchInput');
    alert('You are search for text "' + elm.value + '"');
  }
}

function validateForm() {
  var x = document.forms['myForm']['name'].value;
  var y = document.forms['myForm']['email'].value;
  var z = document.forms['myForm']['nomorHandphone'].value;
  var t = document.forms['myForm']['tanggalLahir'].value;

  //VALIDASI NAMA
  if (x == '') {
    alert('Nama must be filled out!');
    return false;
  } else if (!/^[a-zA-Z\s]*$/g.test(document.forms['myForm']['name'].value)) {
    alert('Nama only allowed letters and space!');
    return false;
  }

  //VALIDASI EMAIL
  if (y == '') {
    alert('Email must be filled out!');
    return false;
  } else if (
    !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(
      document.forms['myForm']['email'].value
    )
  ) {
    alert('Email not Valid!');
    return false;
  }

  //VALIDASI TANGGAL LAHIR
  if (t == '') {
    alert('Tanggal Lahir must be filled out!');
    return false;
  } else if (
    !/^\d{4}[\-\/\s]?((((0[13578])|(1[02]))[\-\/\s]?(([0-2][0-9])|(3[01])))|(((0[469])|(11))[\-\/\s]?(([0-2][0-9])|(30)))|(02[\-\/\s]?[0-2][0-9]))$/.test(
      document.forms['myForm']['tanggalLahir'].value
    )
  ) {
    alert('FORMAT TANGGAL LAHIR YYYY-MM-DD ');
    return false;
  }

  //VALIDASI NO HP
  if (z == '') {
    alert('Nomor Handphone must be filled out!');
    return false;
  } else if (
    !/^\d{10}$/.test(document.forms['myForm']['nomorHandphone'].value)
  ) {
    alert('Nomor Handphone only allowed 10 digits numbers!');
    return false;
  }

  //VALIDASI GENDER
  if (
    document.forms['myForm']['male'].checked == false &&
    document.forms['myForm']['female'].checked == false
  ) {
    alert('Gender must be filled out!');
    return false;
  }
}


function validateForm2() {
  var x = document.forms['myForm2']['name'].value;
  var y = document.forms['myForm2']['email'].value;
  var z = document.forms['myForm2']['nomorHandphone'].value;
  var q = document.forms['myForm2']['ipk'].value;
  var r = document.forms['myForm2']['alamat'].value;
  var s = document.forms['myForm2']['kota'].value;

  //VALIDASI NAMA
  if (x == '') {
    alert('Nama must be filled out!');
    return false;
  } else if (!/^[a-zA-Z\s]*$/g.test(document.forms['myForm2']['name'].value)) {
    alert('Nama only allowed letters and space!');
    return false;
  }

  //VALIDASI GENDER
  if (
    document.forms['myForm2']['male'].checked == false &&
    document.forms['myForm2']['female'].checked == false
  ) {
    alert('Gender must be filled out!');
    return false;
  }

  //VALIDASI EMAIL
  if (y == '') {
    alert('Email must be filled out!');
    return false;
  } else if (
    !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(
      document.forms['myForm2']['email'].value
    )
  ) {
    alert('Email not Valid!');
    return false;
  }

  //VALIDASI NO HP
  if (z == '') {
    alert('Nomor Handphone must be filled out!');
    return false;
  } else if (
    !/^\d{10}$/.test(document.forms['myForm2']['nomorHandphone'].value)
  ) {
    alert('Nomor Handphone only allowed 10 digits numbers!');
    return false;
  }

  var v = document.getElementById('grade');
  if (v.value == '') {
    alert('Pendidikan must be filled out!');
    return false;
  }

  //VALIDASI CUMLAUDE
  if (
    document.forms['myForm2']['ya'].checked == false &&
    document.forms['myForm2']['tidak'].checked == false
  ) {
    alert('Cumlaude must be filled out!');
    return false;
  }

  //VALIDASI IPK
  if (q == '') {
    alert('IPK must be filled out!');
    return false;
  } else if (!/^[0-3]\.?\d{0,2}|[4].[0]{0,2}$/g.test(document.forms['myForm2']['ipk'].value)) {
    alert('WRONG IPK FORMAT : X.XX !!!');
    return false;
  }

  //VALIDASI ALAMAT
  if (r == '') {
    alert('Alamat must be filled out!');
    return false;
  } else if (
    !/^[#.0-9a-zA-Z\s,-]+$/g.test(document.forms['myForm2']['alamat'].value)
  ) {
    alert('Not a Valid Addrress!');
    return false;
  }

  //VALIDASI KOTA
  if (s == '') {
    alert('Kota must be filled out!');
    return false;
  } else if (!/^[a-zA-Z\s]*$/g.test(document.forms['myForm2']['kota'].value)) {
    alert('Kota only allowed letters and space!');
    return false;
  }
}