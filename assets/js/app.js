function validasi(){
    var username = document.forms["myForm"]["username"].value;
    var password = document.forms["myForm"]["password"].value;
    if( username == "adit@gmail.com" && password == "12345678"){
      return true;
    }
    else if(username =="" || password ==""){
      alert("Harap masukan email dan password Anda");
      return false;
    }
    else{
      alert("Email atau password yang Anda masukan SALAH");
      return false;
    }
  }

  