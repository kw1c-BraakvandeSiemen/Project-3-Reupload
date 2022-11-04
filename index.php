<?php
//Auteur: Thijs Kivit
//Aanmaakdatum: 07-04-2022
//Omschrijving: index
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Index</title>
    <meta name="description" content="My Page Description">
    <link href="/assets/css/index.css" rel="stylesheet">
    <script src="/assets/javascript/navbar.js" defer> </script>
</head>
<body>
<header>
<?php
//include navbar
include("assets/includes/navbar.php");
?>
</header>
<main>
    <!-- achtergrond afbeelding -->
    <img id="background" src="./assets/images/background.jpeg" alt="background">
    <section id="info">
        <h1>
            ICT-ACADEMIE
        </h1>
        <div>
            <h3>
                Algemeen
            </h3>
            <p>
                Een goede ICT’er is gedreven om te leren en is bereid om kennis te delen met anderen.
                Dat vinden ze bij het bedrijfsleven. Verder moet je wat willen bereiken, plezier hebben
                in wat je doet en goed in een team kunnen werken. Tijdens je studie aan de ICT-Academie
                krijg je hiermee te maken. Dat gebeurt zoveel mogelijk in projectvormen: leren werken en
                werkend leren in klein groepsverband, met opdrachten uit de praktijk. Teamwork dus.
                Belangrijk is verder de adviesraad, die bestaat uit vertegenwoordigers van vooraanstaande
                bedrijven uit de regio.
            </p>
        </div>
        <div>
            <h3>
                Video-impressie
            </h3>
            <div>
                <!-- iframe voor video -->
                <iframe width="90%" height="300" src="https://www.youtube.com/embed/P5E7u8-CRsQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div>
            <h3>
                Domeinvideo Techniek
            </h3>
            <div>
                <!-- iframe voor video -->
                <iframe width="90%" height="300" src="https://www.youtube.com/embed/qa4lm5l_4K0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div>
            <h3>
                Awardgenomineerde 2021: Leon Klerx
            </h3>
            <p>
                Leon Klerkx is in 2021 genomineerd voor de Koning Willem I College Awards.
                Hij won de Award voor Bijzonder Verhaal.
            </p>
            <div>
                <!-- iframe voor video -->
                <iframe width="90%" height="300" src="https://www.youtube.com/embed/wD3flexFmSs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div id="opleidingen">
            <h3>
                Opleidingen binnen deze afdeling
            </h3>
            <h4>
                Niveau 3 - Middelbaar Vakonderwijs
            </h4>
            <a href="https://www.kw1c.nl/opleiding/25605o10/allround-medewerker-it-systems-and-devices-bol">allround medewerker IT systems and devices (bol)</a>
            <p>
                (Niveau 3)
            </p>
            <h4>
                Niveau 4 - Middelbaar Beroepsonderwijs
            </h4>
            <a href="https://www.kw1c.nl/opleiding/25606o10/expert-it-systems-and-devices-bol">expert IT systems and devices (bol)</a>
            <p>
                (Niveau 4)
            </p>
            <a href="https://www.kw1c.nl/opleiding/25604o10/software-developer-bol">software developer (bol)</a>
            <p>
                (Niveau 4)
            </p>
        </div>
    </section>
    <!-- aside voor alle elementen aan de rechter kant -->
    <aside>
        <div>
            <h3>
                Informatie
            </h3>
            <p>
                Download de brochure van deze afdeling:
            </p>
            <a id="brochure" href="https://www.kw1c.nl/media/afdeling/folders/811%20ict%20folderlijn%20aangepast.pdf">Brochure in PDF</a>
        </div>
        <div>
            <h3>
                Contact
            </h3>
            <a>
                073 624 9 600
            </a>
            <br>
            <a>
                info@kw1c.nl
            </a>
        </div>
        <div id="vragen">
            <h3>
                Heb je vragen? Wij geven jou advies:
            </h3>
            <a href="https://www.kw1c.nl/gesprek-met-studieadviseur">Gesprek met een studie-adviseur</a>
            <a href="https://www.kw1c.nl/stel-je-vraag">Stel je vraag online</a>
        </div>
    </aside>
    <?php
    //include voor footer
    include("assets/includes/footer.php");
    ?>
</main>
</body>
</html>