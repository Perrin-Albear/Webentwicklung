<?php $title = 'Aufgaben';
$h = "Aufgaben";
include 'Header.php';
?>

<div class="row">
    <?php include 'Sidebar.php'; ?>

    <div class="col-sm-8">
        <?php include 'AufgabenTabelle.php';
        echo aufgabenTabelle();
        ?>
        <br>
        <br>
        <br>

        <form>
            <h3 class="font-weight-bold">Bearbeiten/Erstellen:</h3>
            <div class="form-group" style="margin-bottom: 1em">
                <label for="AufgabenBezeichnung">Aufgabenbezeichnung:</label>
                <input type="text" class="form-control" id="aufgabeAuswaehlen" placeholder="Aufgabe"></input>
            </div>
            <div class="form-group" style="margin-bottom: 1em">
                <label for="ReiterBeschreibung">Reiterbeschreibung:</label>
                <textarea class="form-control" id="ReiterBeschreibung" rows="3" placeholder="Beschreibung"></textarea>
            </div>
            <div class="form-group" style="margin-bottom: 1em">
                <label for="ErstellDatum">Erstelldatum:</label>
                <input type="date" class="form-control" id="ErstellDatum"></input>
            </div>
            <div class="form-group" style="margin-bottom: 1em">
                <label for="FaelligkeitsDatum">Fällig bis:</label>
                <input type="date" class="form-control" id="FaelligkeitsDatum"></input>
            </div>
            <div class="form-group" style="margin-bottom: 1em">
                <label for="reiterAuswaehlen">Zugehöriger Reiter:</label>
                <?include 'ReiterTabelle.php';
                reiterDropDown(); ?>
            </div>
            <div class="form-group" style="margin-bottom: 1em">
                <label for="personAuswaehlen">Zuständig:</label>
                <? include 'PersonenTabelle.php';
                personenAuswaehlen();
                ?>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-bottom: 1em">Speichern</button>
            <button type="submit" class="btn btn-info" style="margin-bottom: 1em">Reset</button>
        </form>
    </div>

</div>
<?php include 'Footer.php' ?>

