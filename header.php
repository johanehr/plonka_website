<?php

// Inspired by: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav
$header = '
  <header>

    <nav class="topnav">
      <div class="menu_logo">
        <a href="home.php"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c9/Formal_Seal_of_Stockholm_University%2C_Stockholm%2C_Sverige.svg/1200px-Formal_Seal_of_Stockholm_University%2C_Stockholm%2C_Sverige.svg.png" alt="Small Plonka logo"></a>
        <p>Plonka</p>
      </div>
      <div class="menu_link_container">
        <div class="menu_link">
          <a href="how-does-it-work.php">How does it work?</a>
        </div>
        <div class="menu_link">
          <a href="sponsor.php">Sponsor</a>
        </div>
        <div class="menu_link">
          <a href="mission.php">Mission</a>
        </div>
        <div class="menu_button">
          <div class="fancy_button">
            <a href="sign-up.php">Get started!</a>
          </div>
        </div>
      </div>
      <div class = "menu_expand"
        <a href="javascript:void(0);" class="icon" onclick="toggleDropdownMenu()">
          <i class="material-icons">menu</i>
        </a>
      </div>
    </nav>

    <div id="mobile_menu">
      <div class="mobile_menu_link">
        <a href="how-does-it-work.php">How does it work?</a>
      </div>
      <div class="mobile_menu_link">
        <a href="sponsor.php">Sponsor</a>
      </div>
      <div class="mobile_menu_link">
        <a href="mission.php">Mission</a>
      </div>
      <div class="mobile_menu_link">
        <a href="sign-up.php">Get started!</a>
      </div>
    </div>
  </header>

';

$header_works = '
  <header>
    <nav class="topnav" id="responsive_menu">
      <a href="home.php" class="logo">LOGO</a>
      <a href="how-does-it-work.php">How does it work?</a>
      <a href="sponsor.php">Sponsor</a>
      <a href="mission.php">Mission</a>
      <a href="javascript:void(0);" class="icon" onclick="showDropdownMenu()">
        <i class="material-icons">menu</i>
      </a>
    </nav>
  </header>

';

  $header_old = '
    <header>
      <nav>
        <div class="menu">
          <div class="menu_logo">
            <a href="home.php"></a>
          </div>
          <div class="menu_link">
            <a href="how-does-it-work.php">How does it work?</a>
          </div>
          <div class="menu_link">
            <a href="sponsor.php">Sponsor</a>
          </div>
          <div class="menu_link">
            <a href="mission.php">Mission</a>
          </div>
          <div class="menu_button">
            <a href="sign-up.php">Get plonking!</a>
          </div>
        </div>
      </nav>
    </header>

    // TODO: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav
  ';
?>
