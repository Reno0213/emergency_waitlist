const pass = document.getElementById("my-input");
function buttonClick() {
    if (pass.value.includes("admin")) {
      window.location.href = "http://127.0.0.1:5500/admin.html";
    }
  }