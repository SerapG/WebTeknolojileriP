function validate(){
  var isim = document.getElementById("isim").value;
  var soyisim = document.getElementById("soyisim").value;
  var email = document.getElementById("email").value;
  var mesaj = document.getElementById("mesaj").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(!isNaN(isim)){
    text = "Lütfen isminizi giriniz!";
    error_message.innerHTML = text;
    return false;
  }
  if(!isNaN(soyisim)){
    text = "Lütfen soyisminizi giriniz!";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Lütfen E-mailinizi giriniz!";
    error_message.innerHTML = text;
    return false;
  }
  if(mesaj.length <= 140){
    text = "Lütfen en az 140 karakter giriniz!";
    error_message.innerHTML = text;
    return false;
  }
  alert("FORM BAŞARIYLA DOLDURULDU!");
  return true;
}