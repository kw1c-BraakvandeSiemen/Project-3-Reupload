<!--

  Auteur: Siemen van de Braak, Gigi, Thijs Kivit
  Aanmaakdatum: 06-04-2022

  Omschrijving: navbar

-->

<script src="/assets/javascript/navbar.js" defer></script>
<link rel="stylesheet" href="/assets/css/navbar.css" />
  <div id="nav">
    <header id="header">
      <!-- Logo invoegen in navbar -->
      <a href="/index.php"><img src="/assets/images/kw1cLogo.svg" alt="Logo KW1C" /></a>

      <!-- Navigatie links -->
      <nav id="navbar" class="hidden-mobile">
        <a href="/index.php" class="navbarItem">Home</a>
        <a href="https://www.kw1c.nl/opleidingen"  target="_blank" class="navbarItem">Opleidingen</a>
        <a href="https://www.kw1c.nl/studiekeuze"  target="_blank" class="navbarItem">Studiekeuze</a>
        <a href="https://www.kw1c.nl/volwassenen-werkgevers/trainingen-opleidingen-en-cursussen"  target="_blank" class="navbarItem">Volwassenen</a>
        <a href="https://www.kw1c.nl/studenteninfo"  target="_blank" class="navbarItem">Studenteninfo</a>
        <a href="/assets/pages/form.php" class="navbarItem">Zelftest</a>
      </nav>


        <!-- rode menu knop -->
      <button onclick="mobileNavbar()" type="button" id="mobileNavbarButton">
          <!-- vector afbeelding -->
        <svg id="svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </header>
 <!-- mobiele nav -->
    <ul id="mobileNav" class="hidden">
      <li class="liItem">
        <a href="/index.php" class="linkItem">Home</a>
      </li>
      <li class="liItem">
        <a href="https://www.kw1c.nl/opleidingen"  target="_blank" class="linkItem">Opleidingen</a>
      </li>
      <li class="liItem">
        <a href="https://www.kw1c.nl/studiekeuze"  target="_blank" class="linkItem">Studiekeuze</a>
      </li>
      <li class="liItem">
        <a href="https://www.kw1c.nl/volwassenen-werkgevers/trainingen-opleidingen-en-cursussen"  target="_blank" class="linkItem">Volwassenen</a>
      </li>
      <li class="liItem">
        <a href="https://www.kw1c.nl/studenteninfo"  target="_blank" class="linkItem">Studenteninfo</a>
      </li>
      <li class="liItem">
        <a href="/assets/pages/form.php" class="linkItem">Zelftest</a>
      </li>
    </ul>
  </div>
