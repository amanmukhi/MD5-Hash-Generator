function myFunction1() {
  // Get the text field
  var copyText = document.getElementById("your_password").innerText;

  // alert(copyText);

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText);
  
  // Alert the copied text
  alert("Copied the text: " + copyText);
}

function myFunction2() {
  // Get the text field
  var copyText = document.getElementById("md5_hsh").innerText;

  // alert(copyText);

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText);
  
  // Alert the copied text
  alert("Copied the text: " + copyText);
}

function myFunction3() {
  // Get the text field
  var copyText = document.getElementById("sha1_hash").innerText;

  // alert(copyText);

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText);
  
  // Alert the copied text
  alert("Copied the text: " + copyText);
}

function myFunction4() {
  // Get the text field
  var copyText = document.getElementById("sha256_hash").innerText;

  // alert(copyText);

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText);
  
  // Alert the copied text
  alert("Copied the text: " + copyText);
}