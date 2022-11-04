<?php
    /*

        Auteur: Siemen van de Braak, Gigi
        Aanmaakdatum: 015-04-2022

        Omschrijving: Formulier

    */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Vragenlijst | KW1C
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sintony&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <!-- include om de navigatie toe te voegen -->
    <?php
        include("../includes/navbar.php")
    ?>
    <main id="container">
        <div id="flexContainer">
            <div id="formContainer">
                <form action="result.php" method="post">
                    <div id="questionContainer">
                        <div id="spacing">
                            <h1 id="titel" class="text-white">Zelftest</h1>
                            <div>
                                <?php
                                    //tijd van het openen van de zelftest
                                    date_default_timezone_set('Europe/Amsterdam');
                                    $tijd = date("G"); //tijd in uren bepalen

                                    //Als het vroeger is dan 6 uur moet de tekst goede nacht zeggen
                                    if($tijd < 6)
                                    {
                                        echo "<p class='text-white'>Goedenacht, lijkt een opleiding in de ICT sector iets voor jou, <br> maar weet je niet helemaal welke richting bij jou past?<br> Dan is deze zelftest de perfecte manier om te zien wat bij jou past.</p>";
                                    }
                                    //Als het vroeger is dan 12 uur moet de tekst goedemorgen zeggen
                                    elseif($tijd < 12)
                                    {
                                        echo "<p class='text-white'>Goedemorgen, lijkt een opleiding in de ICT sector iets voor jou, <br> maar weet je niet helemaal welke richting bij jou past?<br> Dan is deze zelftest de perfecte manier om te zien wat bij jou past.</p>";
                                    }
                                    //Als het vroeger is dan 18 uur moet de tekst goedemiddag zeggen
                                    elseif($tijd < 18)
                                    {
                                        echo "<p class='text-white'>Goedemiddag, lijkt een opleiding in de ICT sector iets voor jou, <br> maar weet je niet helemaal welke richting bij jou past?<br> Dan is deze zelftest de perfecte manier om te zien wat bij jou past.</p>";
                                    }
                                    //Als het vroeger is dan 24 uur moet de tekst goede avond zeggen zeggen
                                    elseif($tijd < 24)
                                    {
                                        echo "<p class='text-white'>Goede avond, lijkt een opleiding in de ICT sector iets voor jou, <br> maar weet je niet helemaal welke richting bij jou past?<br> Dan is deze zelftest de perfecte manier om te zien wat bij jou past.</p>";
                                    }
                                    // Als er toch iets fout gaat, een algemene begroeting zeggen
                                    else
                                    {
                                        echo "<p class='text-white'>Goedendag, lijkt een opleiding in de ICT sector iets voor jou, <br> maar weet je niet helemaal welke richting bij jou past?<br> Dan is deze zelftest de perfecte manier om te zien wat bij jou past.</p>";
                                    };
                                ?>
                            </div>
                            <h2 class="text-xl text-white">Algemene Info</h2>
                            <!-- Naam -->
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">Naam</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input required id="name" name="name" type="text" placeholder="Naam" class="algemeneInput">
                                    </div>
                                </div>
                            </fieldset>
                            <!-- Datum van invoer -->
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">Geboortedatum</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input required id="birthday" name="birthday" type="date" max="<?= date('Y-m-d'); ?>" class="algemeneInput">
                                    </div>
                                </div>
                            </fieldset>
                            <!-- Email -->
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">E-Mail</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input required id="email" name="email" type="email" placeholder="E-mailadress" class="algemeneInput">
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Software dev -->
                            <!-- vraag 1 -->
                            <hr>
                            <h2 class="text-xl text-white">Software Developer</h2>
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">1. Heb je al enige ervaring met talen zoals: HTML, CSS, JavaScript of PHP?</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input required id="question-1-answer-A" name="question-1-answers" type="radio" value="40" class="inputs">
                                        <label for="question-1-answer-A" class="labels">A. Ik heb ervaring met alle bovenstaande talen</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-1-answer-B" name="question-1-answers" type="radio" value="30" class="inputs">
                                        <label for="question-1-answer-B" class="labels">B. Ik ben bekend met sommige van de bovenstaande talen</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-1-answer-C" name="question-1-answers" type="radio" value="15" class="inputs">
                                        <label for="question-1-answer-C" class="labels">C. Ik heb er wel van de bovenstaande talen gehoord, maar ik heb geen ervaring</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-1-answer-D" name="question-1-answers" type="radio" value="5" class="inputs">
                                        <label for="question-1-answer-D" class="labels">D. Ik ken geen van de bovenstaande talen</label>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- vraag 2 -->
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">2. Lijkt het je leuk om te leren hoe websites gebouwd worden?</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input required id="question-2-answer-A" name="question-2-answers" type="radio" value="40" class="inputs">
                                        <label for="question-2-answer-A" class="labels">A. Ja dit vind ik leuk</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-2-answer-B" name="question-2-answers" type="radio" value="30" class="inputs">
                                        <label for="question-2-answer-B" class="labels">B. Het lijkt me wel interessant</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-2-answer-C" name="question-2-answers" type="radio" value="15" class="inputs">
                                        <label for="question-2-answer-C" class="labels">C. Weet ik niet</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-2-answer-D" name="question-2-answers" type="radio" value="5" class="inputs">
                                        <label for="question-2-answer-D" class="labels">D. Nee totaal niet</label>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- vraag 3 -->
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">3. Vind je het testen en verbeteren van software interessant?</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input required id="question-3-answer-A" name="question-3-answers" type="radio" value="40" class="inputs">
                                        <label for="question-3-answer-A" class="labels">A. Ja</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-3-answer-B" name="question-3-answers" type="radio" value="30" class="inputs">
                                        <label for="question-3-answer-B" class="labels">B. Redelijk</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-3-answer-C" name="question-3-answers" type="radio" value="15" class="inputs">
                                        <label for="question-3-answer-C" class="labels">C. Niet Echt</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-3-answer-D" name="question-3-answers" type="radio" value="5" class="inputs">
                                        <label for="question-3-answer-D" class="labels">D. Nee</label>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- vraag 4 -->
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">4. Werk je graag in teamverband?</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input required id="question-4-answer-A" name="question-4-answers" type="radio" value="40" class="inputs">
                                        <label for="question-4-answer-A" class="labels">A. Ja</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-4-answer-B" name="question-4-answers" type="radio" value="30" class="inputs">
                                        <label for="question-4-answer-B" class="labels">B. Redelijk</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-4-answer-C" name="question-4-answers" type="radio" value="15" class="inputs">
                                        <label for="question-4-answer-C" class="labels">C. Niet echt</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-4-answer-D" name="question-4-answers" type="radio" value="5" class="inputs">
                                        <label for="question-4-answer-D" class="labels">D. Nee</label>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Expert system and devices -->
                            <!-- vraag 1 -->
                            <hr>
                            <h2 class="text-xl text-white">Expert System and Devices</h2>
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">5. Ben je goed in probleemoplossingen bedenken?</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input required id="question-5-answer-A" name="question-5-answers" type="radio" value="40" class="inputs">
                                        <label for="question-5-answer-A" class="labels">A. Ja</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-5-answer-B" name="question-5-answers" type="radio" value="30" class="inputs">
                                        <label for="question-5-answer-B" class="labels">B. Redelijk</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-5-answer-C" name="question-5-answers" type="radio" value="15" class="inputs">
                                        <label for="question-5-answer-C" class="labels">C. Niet echt</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-5-answer-D" name="question-5-answers" type="radio" value="5" class="inputs">
                                        <label for="question-5-answer-D" class="labels">D. Nee</label>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- vraag 2 -->
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">6. Lijkt het je leuk om te werken met informatiesystemen en deze te beheren</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input required id="question-6-answer-A" name="question-6-answers" type="radio" value="40" class="inputs">
                                        <label for="question-6-answer-A" class="labels">A. Ja</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-6-answer-B" name="question-6-answers" type="radio" value="30" class="inputs">
                                        <label for="question-6-answer-B" class="labels">B. Redelijk</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-6-answer-C" name="question-6-answers" type="radio" value="15" class="inputs">
                                        <label for="question-6-answer-C" class="labels">C. Niet echt</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-6-answer-D" name="question-6-answers" type="radio" value="5" class="inputs">
                                        <label for="question-6-answer-D" class="labels">D. Nee</label>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- vraag 3 -->
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">7. Vind je security interessant?</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input required id="question-7-answer-A" name="question-7-answers" type="radio" value="40" class="inputs">
                                        <label for="question-7-answer-A" class="labels">A. Ja</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-7-answer-B" name="question-7-answers" type="radio" value="30" class="inputs">
                                        <label for="question-7-answer-B" class="labels">B. Redelijk</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-7-answer-C" name="question-7-answers" type="radio" value="15" class="inputs">
                                        <label for="question-7-answer-C" class="labels">C. Niet echt</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-7-answer-D" name="question-7-answers" type="radio" value="5" class="inputs">
                                        <label for="question-7-answer-D" class="labels">D. Nee</label>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- vraag 4 -->
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">8. Lijkt het je leuk om gebruikers te kunnen ondersteunen?</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input required id="question-8-answer-A" name="question-8-answers" type="radio" value="40" class="inputs">
                                        <label for="question-8-answer-A" class="labels">A. Ja</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-8-answer-B" name="question-8-answers" type="radio" value="30" class="inputs">
                                        <label for="question-8-answer-B" class="labels">B. Redelijk</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-8-answer-C" name="question-8-answers" type="radio" value="15" class="inputs">
                                        <label for="question-8-answer-C" class="labels">C. Niet echt</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-8-answer-D" name="question-8-answers" type="radio" value="5" class="inputs">
                                        <label for="question-8-answer-D" class="labels">D. Nee</label>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Allround medewerker system en devices -->
                            <!-- vraag 1 -->
                            <hr>
                            <h2 class="text-xl text-white">Allround medewerker System and Devices</h2>
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">9. Vind je het leuk om computers in elkaar te zetten en uit elkaar te halen?</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input required id="question-9-answer-A" name="question-9-answers" type="radio" value="40" class="inputs">
                                        <label for="question-9-answer-A" class="labels">A. Ja dit vind ik leuk</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-9-answer-B" name="question-9-answers" type="radio" value="30" class="inputs">
                                        <label for="question-9-answer-B" class="labels">B. Dit lijkt me wel interessant</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-9-answer-C" name="question-9-answers" type="radio" value="15" class="inputs">
                                        <label for="question-9-answer-C" class="labels">C. Weet ik niet</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-9-answer-D" name="question-9-answers" type="radio" value="5" class="inputs">
                                        <label for="question-9-answer-D" class="labels">D. Nee totaal niet</label>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- vraag 2 -->
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">10. Vind je het leuk om met netwerken te werken?</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input required id="question-10-answer-A" name="question-10-answers" type="radio" value="40" class="inputs">
                                        <label for="question-10-answer-A" class="labels">A. Ja dit vind ik leuk</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-10-answer-B" name="question-10-answers" type="radio" value="30" class="inputs">
                                        <label for="question-10-answer-B" class="labels">B. Dit lijkt me wel interessant</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-10-answer-C" name="question-10-answers" type="radio" value="15" class="inputs">
                                        <label for="question-10-answer-C" class="labels">C. Weet ik niet</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required selected id="question-10-answer-D" name="question-10-answers" type="radio" value="5" class="inputs">
                                        <label for="question-10-answer-D" class="labels">D. Nee totaal niet</label>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- vraag 3 -->
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">11. Vind je het leuk om meer over Windows en Linux te leren?</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input required id="question-11-answer-A" name="question-11-answers" type="radio" value="40" class="inputs">
                                        <label for="question-11-answer-A" class="labels">A. Ja dit vind ik leuk</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-11-answer-B" name="question-11-answers" type="radio" value="30" class="inputs">
                                        <label for="question-11-answer-B" class="labels">B. Dit lijkt me wel interessant</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-11-answer-C" name="question-11-answers" type="radio" value="15" class="inputs">
                                        <label for="question-11-answer-C" class="labels">C. Weet ik niet</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-11-answer-D" name="question-11-answers" type="radio" value="5" class="inputs">
                                        <label for="question-11-answer-D" class="labels">D. Nee totaal niet</label>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- vraag 4 -->
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">12. Vind je het leuk om klanten te helpen door middel van een servicedesk?</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input required id="question-12-answer-A" name="question-12-answers" type="radio" value="40" class="inputs">
                                        <label for="question-12-answer-A" class="labels">A. Ja dit vind ik leuk</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-12-answer-B" name="question-12-answers" type="radio" value="30" class="inputs">
                                        <label for="question-12-answer-B" class="labels">B. Dit lijkt me wel interessant</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-12-answer-C" name="question-12-answers" type="radio" value="15" class="inputs">
                                        <label for="question-12-answer-C" class="labels">C. Weet ik niet</label>
                                    </div>
                                    <div class="inputFlexContainer">
                                        <input required id="question-12-answer-D" name="question-12-answers" type="radio" value="5" class="inputs">
                                        <label for="question-12-answer-D" class="labels">D. Nee totaal niet</label>
                                    </div>
                                </div>
                            </fieldset>
                            <!--
                                Algemene Voorwaarden
                            -->
                            <hr>
                            <fieldset class="fieldsets">
                                <div>
                                    <legend class="legends">Ga je akkoord met de <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Algemene Voorwaarden</a>?</legend>
                                </div>
                                <div class="inputContainer">
                                    <div class="inputFlexContainer">
                                        <input id="voorwaarden" name="voorwaarden" type="checkbox" class="inputs">
                                        <label for="voorwaarden" class="labels">Ja, ik ga akkoord met de algemene voorwaarden</label>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- 
                                Submit Button
                            -->
                            <div id="buttonContainer">
                                <input type="submit" value="Submit" id="submitButton">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
    //include voor footer
        include("../includes/footer.php")
    ?>
</body>

</html>