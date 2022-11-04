<?php
    /*

        Auteur: Siemen van de Braak, Gigi
        Aanmaakdatum: 15-04-2022

        Omschrijving: Formulier

    */
?>
<?php
  isset($_POST['voorwaarden']) ? $accepted = $_POST['voorwaarden'] : $accepted = "";
  if ($accepted == "") {
    echo "<h1 style='text-align: center'>U heeft de voorwaarden niet geaccepteerd. <br> U moet deze accepteren om verder te gaan. <br><br> U wordt binnen 5 seconden teruggestuurd naar de vorige pagina. <br> Of klik <a href='form.php'>hier</a> om terug te gaan</h1>";
    header("refresh:5;url=form.php");
    die();
  };
  // variabelen declareren
  $name = $_POST['name'];
  $birthday = $_POST['birthday'];
  $email = $_POST['email'];
  //maakt integers van de radio vragen
  $question1 = (int) $_POST['question-1-answers'];
  $question2 = (int) $_POST['question-2-answers'];
  $question3 = (int) $_POST['question-3-answers'];
  $question4 = (int) $_POST['question-4-answers'];
  $question5 = (int) $_POST['question-5-answers'];
  $question6 = (int) $_POST['question-6-answers'];
  $question7 = (int) $_POST['question-7-answers'];
  $question8 = (int) $_POST['question-8-answers'];
  $question9 = (int) $_POST['question-9-answers'];
  $question10 = (int) $_POST['question-10-answers'];
  $question11 = (int) $_POST['question-11-answers'];
  $question12 = (int) $_POST['question-12-answers'];

  // berekenen totaal van Software Developer
  $totalSD = $question1 + $question2 + $question3 + $question4;

  // berekenen totaal van Expert System and Devices
  $totalESD = $question5 + $question6 + $question7 + $question8;

  // berekenen totaal van Allround medewerker System and Devices
  $totalASD = $question9 + $question10 + $question11 + $question12;

  // totaal van alles berekenen
  $total = $totalSD + $totalESD + $totalASD;


  // Calculate the best proffesion
  if ($totalSD > $totalESD && $totalSD > $totalASD) {
    $advise = "<a href='https://www.kw1c.nl/opleiding/25604o10/software-developer-bol'>Software Developer</a>";
  } else if ($totalESD > $totalSD && $totalESD > $totalASD) {
    $advise = "<a href='https://www.kw1c.nl/opleiding/25606o10/expert-it-systems-and-devices-bol'>Expert System and Devices</a>";
  } else if ($totalASD > $totalSD && $totalASD > $totalESD) {
    $advise = "<a href='https://www.kw1c.nl/opleiding/25605o10/allround-medewerker-it-systems-and-devices-bol'>Allround medewerker System and Devices</a>";
  } else if ($totalSD == $totalESD && $totalSD > $totalASD) {
    $advise = "<a href='https://www.kw1c.nl/opleiding/25604o10/software-developer-bol'>Software Developer</a> en <a href='https://www.kw1c.nl/opleiding/25606o10/expert-it-systems-and-devices-bol'>Expert System and Devices</a>";
  } else if ($totalSD == $totalASD && $totalSD > $totalESD) {
    $advise = "<a href='https://www.kw1c.nl/opleiding/25604o10/software-developer-bol'>Software Developer</a> en <a href='https://www.kw1c.nl/opleiding/25605o10/allround-medewerker-it-systems-and-devices-bol'>Allround medewerker System and Devices</a>";
  } else if ($totalESD == $totalASD && $totalESD > $totalSD) {
    $advise = "<a href='https://www.kw1c.nl/opleiding/25606o10/expert-it-systems-and-devices-bol'>Expert System and Devices</a> en <a href='https://www.kw1c.nl/opleiding/25605o10/allround-medewerker-it-systems-and-devices-bol'>Allround medewerker System and Devices</a>";
  } else if ($totalSD == $totalESD && $totalSD == $totalASD) {
    $advise = "<a href='https://www.kw1c.nl/opleiding/25604o10/software-developer-bol'>Software Developer</a>, <a href='https://www.kw1c.nl/opleiding/25606o10/expert-it-systems-and-devices-bol'>Expert System and Devices</a> of <a href='https://www.kw1c.nl/opleiding/25605o10/allround-medewerker-it-systems-and-devices-bol'>Allround medewerker System and Devices</a>";
  }
   else {
    $advise = "Error";
  }
 //kleur berekening SD
  if ($totalSD >= 120) {
    $SDbackgroundColor = "green";
  } elseif ($totalSD >= 80) {
    $SDbackgroundColor = "orange";
  } else {
    $SDbackgroundColor = "red";
  }
//kleur berekening ESD
  if ($totalESD >= 120) 
  {
    $ESDbackgroundColor = "green";
  } elseif ($totalESD >= 80) {
    $ESDbackgroundColor = "orange";
  } else {
    $ESDbackgroundColor = "red";
  }
//kleur berekening ASD
  if ($totalASD >= 120) {
    $ASDbackgroundColor = "green";
  } elseif ($totalASD >= 80) {
    $ASDbackgroundColor = "orange";
  } else {
    $ASDbackgroundColor = "red";
  }
//symbool geven als vraag voor 40 punten beantwoord is
  if ($question1 == 40) {
    $question1answer = "A. Ik heb ervaring met alle bovenstaande talen";
    $question1iconColor = "badgedCheckmark";
    $question1icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>';
  }
  //symbool geven als vraag voor 30 punten beantwoord is
  elseif ($question1 == 30) {
    $question1answer = "B. Ik ben bekend met sommige van de bovenstaande talen";
    $question1iconColor = "checkmark";
    $question1icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
//symbool geven als vraag voor 15 punten beantwoord is
  }
  elseif ($question1 == 15) {
    $question1answer = "C. Ik heb er wel van de bovenstaande talen gehoord, maar ik heb geen ervaring";
    $question1iconColor = "scale";
    $question1icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>';
  }
  //symbool geven als vraag voor 5 punten beantwoord is
  elseif ($question1 == 5) {
    $question1answer = "D. Ik ken geen van de bovenstaande talen";
    $question1iconColor = "x";
    $question1icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  //foutmelding
  else {
    $question1answer = "Error";
  };

  if ($question2 == 40) {
    $question2answer = "A. Ja dit vind ik leuk";
    $question2iconColor = "badgedCheckmark";
    $question2icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>';
  }
  elseif ($question2 == 30) {
    $question2answer = "B. Het lijkt me wel interessant";
    $question2iconColor = "checkmark";
    $question2icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  elseif ($question2 == 15) {
    $question2answer = "C. Weet ik niet";
    $question2iconColor = "scale";
    $question2icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>';
  }
  elseif ($question2 == 5) {
    $question2answer = "D. Nee totaal niet";
    $question2iconColor = "x";
    $question2icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  else {
    $question2answer = "Error";
  };

  if ($question3 == 40) {
    $question3answer = "A. Ja";
    $question3iconColor = "badgedCheckmark";
    $question3icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>';
  }
  elseif ($question3 == 30) {
    $question3answer = "B. Redelijk";
    $question3iconColor = "checkmark";
    $question3icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  elseif ($question3 == 15) {
    $question3answer = "C. Niet Echt";
    $question3iconColor = "scale";
    $question3icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>';
  }
  elseif ($question3 == 5) {
    $question3answer = "D. Nee";
    $question3iconColor = "x";
    $question3icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  else {
    $question3answer = "Error";
  };

  if ($question4 == 40) {
    $question4answer = "A. Ja";
    $question4iconColor = "badgedCheckmark";
    $question4icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>';
  }
  elseif ($question4 == 30) {
    $question4answer = "B. Redelijk";
    $question4iconColor = "checkmark";
    $question4icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  elseif ($question4 == 15) {
    $question4answer = "C. Niet Echt";
    $question4iconColor = "scale";
    $question4icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>';
  }
  elseif ($question4 == 5) {
    $question4answer = "D. Nee";
    $question4iconColor = "x";
    $question4icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  else {
    $question4answer = "Error";
  };

  if ($question5 == 40) {
    $question5answer = "A. Ja";
    $question5iconColor = "badgedCheckmark";
    $question5icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>';
  }
  elseif ($question5 == 30) {
    $question5answer = "B. Redelijk";
    $question5iconColor = "checkmark";
    $question5icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  elseif ($question5 == 15) {
    $question5answer = "C. Niet Echt";
    $question5iconColor = "scale";
    $question5icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>';
  }
  elseif ($question5 == 5) {
    $question5answer = "D. Nee";
    $question5iconColor = "x";
    $question5icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  else {
    $question5answer = "Error";
  };

  if ($question6 == 40) {
    $question6answer = "A. Ja";
    $question6iconColor = "badgedCheckmark";
    $question6icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>';
  }
  elseif ($question6 == 30) {
    $question6answer = "B. Redelijk";
    $question6iconColor = "checkmark";
    $question6icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  elseif ($question6 == 15) {
    $question6answer = "C. Niet Echt";
    $question6iconColor = "scale";
    $question6icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>';
  }
  elseif ($question6 == 5) {
    $question6answer = "D. Nee";
    $question6iconColor = "x";
    $question6icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  else {
    $question6answer = "Error";
  };

  if ($question7 == 40) {
    $question7answer = "A. Ja";
    $question7iconColor = "badgedCheckmark";
    $question7icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>';
  }
  elseif ($question7 == 30) {
    $question7answer = "B. Redelijk";
    $question7iconColor = "checkmark";
    $question7icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  elseif ($question7 == 15) {
    $question7answer = "C. Niet Echt";
    $question7iconColor = "scale";
    $question7icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>';
  }
  elseif ($question7 == 5) {
    $question7answer = "D. Nee";
    $question7iconColor = "x";
    $question7icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  else {
    $question7answer = "Error";
  };

  if ($question8 == 40) {
    $question8answer = "A. Ja";
    $question8iconColor = "badgedCheckmark";
    $question8icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>';
  }
  elseif ($question8 == 30) {
    $question8answer = "B. Redelijk";
    $question8iconColor = "checkmark";
    $question8icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  elseif ($question8 == 15) {
    $question8answer = "C. Niet Echt";
    $question8iconColor = "scale";
    $question8icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>';
  }
  elseif ($question8 == 5) {
    $question8answer = "D. Nee";
    $question8iconColor = "x";
    $question8icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  else {
    $question8answer = "Error";
  };

  if ($question9 == 40) {
    $question9answer = "A. Ja dit vind ik leuk";
    $question9iconColor = "badgedCheckmark";
    $question9icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>';
  }
  elseif ($question9 == 30) {
    $question9answer = "B. Dit lijkt me wel interessant";
    $question9iconColor = "checkmark";
    $question9icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  elseif ($question9 == 15) {
    $question9answer = "C. Weet ik niet";
    $question9iconColor = "scale";
    $question9icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>';
  }
  elseif ($question9 == 5) {
    $question9answer = "D. Nee totaal niet";
    $question9iconColor = "x";
    $question9icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  else {
    $question9answer = "Error";
  };

  if ($question10 == 40) {
    $question10answer = "A. Ja dit vind ik leuk";
    $question10iconColor = "badgedCheckmark";
    $question10icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>';
  }
  elseif ($question10 == 30) {
    $question10answer = "B. Dit lijkt me wel interessant";
    $question10iconColor = "checkmark";
    $question10icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  elseif ($question10 == 15) {
    $question10answer = "C. Weet ik niet";
    $question10iconColor = "scale";
    $question10icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>';
  }
  elseif ($question10 == 5) {
    $question10answer = "D. Nee totaal niet";
    $question10iconColor = "x";
    $question10icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  else {
    $question10answer = "Error";
  };

  if ($question11 == 40) {
    $question11answer = "A. Ja dit vind ik leuk";
    $question11iconColor = "badgedCheckmark";
    $question11icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>';
  }
  elseif ($question11 == 30) {
    $question11answer = "B. Dit lijkt me wel interessant";
    $question11iconColor = "checkmark";
    $question11icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  elseif ($question11 == 15) {
    $question11answer = "C. Weet ik niet";
    $question11iconColor = "scale";
    $question11icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>';
  }
  elseif ($question11 == 5) {
    $question11answer = "D. Nee totaal niet";
    $question11iconColor = "x";
    $question11icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  else {
    $question11answer = "Error";
  };

  if ($question12 == 40) {
    $question12answer = "A. Ja dit vind ik leuk";
    $question12iconColor = "badgedCheckmark";
    $question12icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>';
  }
  elseif ($question12 == 30) {
    $question12answer = "B. Dit lijkt me wel interessant";
    $question12iconColor = "checkmark";
    $question12icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  elseif ($question12 == 15) {
    $question12answer = "C. Weet ik niet";
    $question12iconColor = "scale";
    $question12icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>';
  }
  elseif ($question12 == 5) {
    $question12answer = "D. Nee totaal niet";
    $question12iconColor = "x";
    $question12icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
  }
  else {
    $question12answer = "Error";
  };

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>
    Resultaten | KW1C
  </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Sintony&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/result.css">
</head>

<body>
  <!-- include om de navigatie toe te voegen -->
  <?php
        include("../includes/navbar.php")
    ?>
  <!-- vragen terug laten tonen aan gebruiker -->
      <section>
    <div class="container">
      <div class="titleContainer">
        <h1 class="title">Algemene Info</h1>
        <p class="titleText">Hieronder jouw persoonlijke gegevens die je hebt ingevuld</p>
      </div>
      <div class="answersContainer">
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <h2 class="question">Naam</h2>
            <p class="answer"><?=$name?></p>
          </div>
        </div>
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <h2 class="question">Geboortedatum</h2>
            <p class="answer"><?=$birthday?></p>
          </div>
        </div>
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <h2 class="question">E-mail</h2>
            <p class="answer"><?=$email?></p>
          </div>
        </div>
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <h2 class="question">Datum van invoer</h2>
            <p class="answer"><?= date('Y-m-d'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="titleContainer">
        <h1 class="title">Software Developer</h1>
        <p class="titleText">Hieronder jouw antwoorden voor de Software Developer vragen</p>
      </div>
      <div class="answersContainer <?=$SDbackgroundColor?>">
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <div class="icons <?=$question1iconColor?>">
              <svg class="svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <?=$question1icon?>
              </svg>
            </div>
            <h2 class="question">1. Heb je al enige ervaring met talen zoals: HTML, CSS, JavaScript of PHP?</h2>
            <p class="answer"><?=$question1answer?></p>
          </div>
        </div>
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <div class="icons <?=$question2iconColor?>">
              <svg class="svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <?=$question2icon?>
              </svg>
            </div>
            <h2 class="question">2. Lijkt het je leuk om te leren hoe websites gebouwd worden?</h2>
            <p class="answer"><?=$question2answer?></p>
          </div>
        </div>
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <div class="icons <?=$question3iconColor?>">
              <svg class="svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <?=$question3icon?>
              </svg>
            </div>
            <h2 class="question">3. Vind je het testen en verbeteren van software interessant?</h2>
            <p class="answer"><?=$question3answer?></p>
          </div>
        </div>
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <div class="icons <?=$question4iconColor?>">
              <svg class="svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <?=$question4icon?>
              </svg>
            </div>
            <h2 class="question">4. Werk je graag in teamverband?</h2>
            <p class="answer"><?=$question4answer?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="titleContainer">
        <h1 class="title">Expert System and Devices</h1>
        <p class="titleText">Hieronder jouw antwoorden voor de Software Developer vragen</p>
      </div>
      <div class="answersContainer <?=$ESDbackgroundColor?>">
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <div class="icons <?=$question5iconColor?>">
              <svg class="svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <?=$question5icon?>
              </svg>
            </div>
            <h2 class="question">5. Ben je goed in probleemoplossingen bedenken?</h2>
            <p class="answer"><?=$question5answer?></p>
          </div>
        </div>
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <div class="icons <?=$question6iconColor?>">
              <svg class="svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <?=$question6icon?>
              </svg>
            </div>
            <h2 class="question">6. Lijkt het je leuk om te werken met informatiesystemen en deze te beheren</h2>
            <p class="answer"><?=$question6answer?></p>
          </div>
        </div>
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <div class="icons <?=$question7iconColor?>">
              <svg class="svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <?=$question7icon?>
              </svg>
            </div>
            <h2 class="question">7. Vind je security interessant?</h2>
            <p class="answer"><?=$question7answer?></p>
          </div>
        </div>
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <div class="icons <?=$question8iconColor?>">
              <svg class="svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <?=$question8icon?>
              </svg>
            </div>
            <h2 class="question">8. Lijkt het je leuk om gebruikers te kunnen ondersteunen?</h2>
            <p class="answer"><?=$question8answer?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="titleContainer">
        <h1 class="title">Allround medewerker System and Devices</h1>
        <p class="titleText">Hieronder jouw antwoorden voor de Software Developer vragen</p>
      </div>
      <div class="answersContainer <?=$ASDbackgroundColor?>">
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <div class="icons <?=$question9iconColor?>">
              <svg class="svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <?=$question9icon?>
              </svg>
            </div>
            <h2 class="question">9. Vind je het leuk om computers in elkaar te zetten en uit elkaar te halen?</h2>
            <p class="answer"><?=$question9answer?></p>
          </div>
        </div>
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <div class="icons <?=$question10iconColor?>">
              <svg class="svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <?=$question10icon?>
              </svg>
            </div>
            <h2 class="question">10. Vind je het leuk om met netwerken te werken?</h2>
            <p class="answer"><?=$question10answer?></p>
          </div>
        </div>
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <div class="icons <?=$question11iconColor?>">
              <svg class="svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <?=$question11icon?>
              </svg>
            </div>
            <h2 class="question">11. Vind je het leuk om meer over Windows en Linux te leren?</h2>
            <p class="answer"><?=$question11answer?></p>
          </div>
        </div>
        <div class="answerContainer">
          <div class="answerContainerBlue">
            <div class="icons <?=$question12iconColor?>">
              <svg class="svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <?=$question12icon?>
              </svg>
            </div>
            <h2 class="question">12. Vind je het leuk om klanten te helpen door middel van een servicedesk?</h2>
            <p class="answer"><?=$question12answer?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="adviceContainer">
  <div class="advicesContainer">

    <div class="titleContainer">
      <h2 class="adviceTitle">Advies</h2>
        <!-- advies opleiding tonen -->
      <p class="advise">Wij adviseren om de opleiding <?=$advise?> te kiezen</p>
    </div>

      <!-- toont de stats voor alle opleidingen -->
    <div class="statsContainer">

      <div class="statContainer">
        <div class="stats"><?=$totalSD?></div>
        <div class="statsDescription">Punten Behaald voor SD</div>
      </div>

      <div class="statContainer">
        <div class="stats"><?=$totalESD?></div>
        <div class="statsDescription">Punten Behaald voor ESD</div>
      </div>

      <div class="statContainer">
        <div class="stats"><?=$totalASD?></div>
        <div class="statsDescription">Punten Behaald voor ASD</div>
      </div>

      <div class="statContainer">
        <div class="stats"><?=$total?></div>
        <div class="statsDescription">Punten Behaald</div>
      </div>

      <div class="statContainer">
        <div class="stats">480</div>
        <div class="statsDescription">Maximale Punten</div>
      </div>


      <div class="statContainer">
        <div class="stats">60</div>
        <div class="statsDescription">Minimale Punten</div>
      </div>

    </div>
  </div>
</div>
<div class="adviceContainer">
  <div class="advicesContainer">

    <div class="titleContainer">
      <h2 class="adviceTitle">Score van SD</h2>
    </div>

      <!-- score berekening voor de eerste 4 vragen met forloop -->
    <div class="score">
      <?php
$i = 1;
$totalValueESD = 0;
foreach ($_POST as $key => $value) 
{  
    if(str_contains($key, 'question') && $i <= 4)
    {
      $value = (int) $value;
      $totalValueESD += $value;
      echo '<div class="statContainer">
      <div class="stats">' . $totalValueESD .'</div><div class="statsDescription">Punten behaald voor vraag '. $i++ .'</div></div>';
    }
};
?>
    </div>
  </div>
</div>

<div class="adviceContainer">
  <div class="advicesContainer">

    <div class="titleContainer">
      <h2 class="adviceTitle">Score van ESD</h2>
    </div>

      <!-- score berekening voor de vragen 4 tm 8 met forloop -->
    <div class="score">
      <?php
    $i = 5;
$totalValueESD = 0;
foreach ($_POST as $key => $value) 
{  
    if(str_contains($key, 'question-5') || str_contains($key, 'question-6') || str_contains($key, 'question-7') || str_contains($key, 'question-8') && $i <= 8)
    {
      $value = (int) $value;
      $totalValueESD += $value;
      echo '<div class="statContainer">
      <div class="stats">' . $totalValueESD .'</div><div class="statsDescription">Punten behaald voor vraag '. $i++ .'</div></div>';
    }
};
?>
    </div>
  </div>
</div>

<div class="adviceContainer">
  <div class="advicesContainer">
    <div class="titleContainer">
      <h2 class="adviceTitle">Score van ASD</h2>
    </div>

      <!-- score berekening voor de laatste 4 vragen met forloop -->
    <div class="score">
      <?php
      $i = 9;
  $totalValueESD = 0;
  foreach ($_POST as $key => $value) 
  {  
      if(str_contains($key, 'question-9') || str_contains($key, 'question-10') || str_contains($key, 'question-11') || str_contains($key, 'question-12') && $i <= 12)
      {
        $value = (int) $value;
        $totalValueESD += $value;
        echo '<div class="statContainer">
        <div class="stats">' . $totalValueESD .'</div><div class="statsDescription">Punten behaald voor vraag '. $i++ .'</div></div>';
      }
  };
  ?>
    </div>
  </div>
</div>
  <?php
  //include voor footer
        include("../includes/footer.php")
    ?>
</body>

</html>