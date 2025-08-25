</div> <!-- konec main-layout -->

<!-- Přihlašovací / Registrační modal -->
<div id="overlay" class="overlay hidden" onclick="closeModal()"></div>
<div id="formModal" class="form-modal hidden">
  <!-- Zavírací tlačítko -->
  <span class="close-btn" onclick="closeModal()">&times;</span>
  <h3 id="formTitle">Přihlášení</h3>

  <!-- Přihlášení -->
  <div id="loginForm">
    <input type="email" placeholder="Email">
    <input type="password" placeholder="Heslo">
  </div>

  <!-- Registrace -->
  <div id="registerForm" class="hidden">
    <!-- Výběr role -->
    <select id="roleSelect" onchange="toggleRoleFields()">
      <option value="" disabled selected>Jsem:</option>
      <option value="clen">Člen</option>
      <option value="fitko">Fitness centrum</option>
    </select>

    <!-- Pole pro člena -->
    <div id="memberFields" class="hidden">
      <input type="text" placeholder="Jméno">
      <input type="text" placeholder="Příjmení">
      <input type="date" placeholder="Datum narození">
      <input type="email" placeholder="Email">
      <input type="password" placeholder="Heslo">
      <input type="password" placeholder="Potvrzení hesla">

      <div id="gymSelectContainer">
        <label for="gymSelect">Vyberte fitness centrum:</label>
        <select id="gymSelect">
          <option value="fitko1">Fitness Centrum 1</option>
          <option value="fitko2">Fitness Centrum 2</option>
          <option value="fitko3">Fitness Centrum 3</option>
        </select>
      </div>
    </div>

    <!-- Pole pro fitness centrum -->
    <div id="gymFields" class="hidden">
      <input type="text" placeholder="Název fitness centra">
      <input type="text" placeholder="Adresa">
      <input type="tel" placeholder="Telefon">
      <input type="email" placeholder="Email">
    </div>
  </div>

  <button id="formActionBtn" onclick="login()">PŘIHLÁSIT SE</button>
  <a href="#" id="switchLink" onclick="switchForm(event)">Registrace</a>
</div>

<footer>
  &copy; 2025 GymFlow. Všechna práva vyhrazena.
</footer>

<script src="JavaScript/script.js"></script>
</body>
</html>