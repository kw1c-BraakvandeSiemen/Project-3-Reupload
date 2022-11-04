/*

  Auteur: Gigi
  Aanmaakdatum: 13-04-2022

  Omschrijving: javascript voor navbar

*/

//functie om de navbar te kunnen tonen / verbergen
function mobileNavbar()
{
    var x = document.getElementById("mobileNav");
    if (x.classList.contains("hidden")) {
        x.classList.remove("hidden");
    } else {
        x.classList.add("hidden");
    }
};