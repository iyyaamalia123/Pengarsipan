var var_global = "";

//fungsi callPage
function callPage(file_php, param = "") {
  if (param != "") {
    var_global = param;
  }

  $.ajax(file_php, {
    type: "GET",
    success: function (data, status, xhr) {
      $("#kontenphp").php(data);

      var judul = "";

      if (file_php == "data_karyawan.php") {
        judul = "Data Karyawan";
      } else {
        judul = "Gaji Karyawan";
      }

      $("title").php(judul);
    },
    error: function (jqXHR, textStatus, errorMsg) {
      $("#kontenphp").php("Error" + errorMsg);
      $("title").php(Error);
    },
  });
}

var base_url = "http://127.0.0.1:8000/";
