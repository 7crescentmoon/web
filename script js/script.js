// slider otomatis 
let counter = 1;
setInterval(function () {
  document.getElementById("radio" + counter).checked = true;
  counter++;
  if (counter > 5) {
    counter = 1;
  }
}, 4500);

// ini hanya data dummy, tidak memiliki data base
function register() {
  let user = document.getElementById("username").value;
  let pass = document.getElementById("password").value;
  let email = document.getElementById("email").value;

  if (user == "" && pass == "" && email == "") {
    alert(`Form jagan kosong`);
  } else {
    alert(
      `data dengan username ${user.toUpperCase()} sudah ditambahakan. "Note : ini hanya data Dummy"`
    );
    window.open("index.php");
  }
}

//username = admin, pw = admin
function login(){
    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;

    if (user === "admin" && pass === "admin"){
        window.open("main.php");
    } else{
        alert("username atau password")
    }

}
