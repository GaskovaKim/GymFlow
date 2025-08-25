function openModal() {
  document.getElementById("formModal").classList.remove("hidden");
  document.getElementById("overlay").classList.remove("hidden");

  // Reset formuláře na výchozí stav (login)
  showLoginForm();
}


function closeModal() {
  document.getElementById("formModal").classList.add("hidden");
  document.getElementById("overlay").classList.add("hidden");
  

  // Reset formuláře
  showLoginForm();
}

function switchForm(event) {
  event.preventDefault();
  const title = document.getElementById("formTitle");
  const switchLink = document.getElementById("switchLink");
  const actionBtn = document.getElementById("formActionBtn");
  const loginForm = document.getElementById("loginForm");
  const registerForm = document.getElementById("registerForm");

  if (title.textContent === "Přihlášení") {
    showRegisterForm();
  } else {
    showLoginForm();
  }
}

function showLoginForm() {
  const title = document.getElementById("formTitle");
  const switchLink = document.getElementById("switchLink");
  const actionBtn = document.getElementById("formActionBtn");
  const loginForm = document.getElementById("loginForm");
  const registerForm = document.getElementById("registerForm");

  title.textContent = "Přihlášení";
  actionBtn.textContent = "PŘIHLÁSIT SE";
  switchLink.textContent = "Registrace";
  loginForm.classList.remove("hidden");
  registerForm.classList.add("hidden");

  // Reset role a pole v registraci
  document.getElementById("roleSelect").value = "";
  document.getElementById("memberFields").classList.add("hidden");
  document.getElementById("gymFields").classList.add("hidden");
}

function showRegisterForm() {
  const title = document.getElementById("formTitle");
  const switchLink = document.getElementById("switchLink");
  const actionBtn = document.getElementById("formActionBtn");
  const loginForm = document.getElementById("loginForm");
  const registerForm = document.getElementById("registerForm");

  title.textContent = "Registrace";
  actionBtn.textContent = "REGISTROVAT";
  switchLink.textContent = "Přihlásit se";
  loginForm.classList.add("hidden");
  registerForm.classList.remove("hidden");

  // Reset role a pole
  document.getElementById("roleSelect").value = "";
  document.getElementById("memberFields").classList.add("hidden");
  document.getElementById("gymFields").classList.add("hidden");
}

function toggleRoleFields() {
  const role = document.getElementById("roleSelect").value;
  const memberFields = document.getElementById("memberFields");
  const gymFields = document.getElementById("gymFields");

  if(role === "clen") {
    memberFields.classList.remove("hidden");
    gymFields.classList.add("hidden");
  } else if(role === "fitko") {
    memberFields.classList.add("hidden");
    gymFields.classList.remove("hidden");
  }
}

// Přihlášení a odhlášení
function login() {
  closeModal();
  document.getElementById("loginBtn").classList.add("hidden");
  document.getElementById("profileBtn").classList.remove("hidden");
  document.getElementById("logoutBtn").classList.remove("hidden");
  showPage("profilePage");
}

function logout() {
  document.getElementById("loginBtn").classList.remove("hidden");
  document.getElementById("profileBtn").classList.add("hidden");
  document.getElementById("logoutBtn").classList.add("hidden");
  showPage("homePage");
}

function showPage(pageId) {
  document.querySelectorAll(".page-content").forEach(p => p.classList.add("hidden"));
  document.getElementById(pageId).classList.remove("hidden");
}

// Registrace nebo login AJAX
async function submitForm() {
  const title = document.getElementById("formTitle").textContent;

  let url = "";
  let formData = new FormData();

  if (title === "Přihlášení") {
    url = "login.php";
    formData.append("email", document.getElementById("loginEmail").value);
    formData.append("heslo", document.getElementById("loginPassword").value);
  } else {
    url = "register.php";
    formData.append("role", document.getElementById("roleSelect").value);
    formData.append("jmeno", document.getElementById("registerFirstName").value);
    formData.append("prijmeni", document.getElementById("registerLastName").value);
    formData.append("email", document.getElementById("registerEmail").value);
    formData.append("heslo", document.getElementById("registerPassword").value);
    if (document.getElementById("roleSelect").value === "fitko") {
      formData.append("nazev", document.getElementById("gymName").value);
      formData.append("adresa", document.getElementById("gymAddress").value);
      formData.append("telefon", document.getElementById("gymPhone").value);
      formData.append("oteviraci_doba", document.getElementById("gymHours").value);
    }
  }

  try {
    const response = await fetch(url, {
      method: "POST",
      body: formData
    });
    const result = await response.json();

    if (result.success) {
      alert(result.message);
      closeModal();
      document.getElementById("loginBtn").classList.add("hidden");
      document.getElementById("profileBtn").classList.remove("hidden");
      document.getElementById("logoutBtn").classList.remove("hidden");
      showPage("profilePage");
    } else {
      alert("Chyba: " + result.message);
    }
  } catch (err) {
    alert("Server error: " + err);
  }
}
