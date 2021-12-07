<?php $title = 'Personen';
$h = "Personen";
include 'Header.php';
?>

<div class="row">
    <?php include 'Sidebar.php'; ?>

    <div class="col-sm-8">
        <?php include 'PersonenTabelle.php';
        echo personenTabelle();
        ?>
        <br>
        <br>
        <br>

        <form>
            <h3 class="font-weight-bold">Bearbeiten/Erstellen:</h3>
            <div class="form-group" style="margin-bottom: 1em">
                <label for="UserName">Username:</label>
                <input type="text" class="form-control" id="UserName" placeholder="Username"></input>
            </div>
            <div class="form-group" style="margin-bottom: 1em">
                <label for="EmailAdresse">E-Mail-Adresse:</label>
                <input type="email" class="form-control" id="EmailAdresse" placeholder="E-Mail-Adresse eingeben"></input>
            </div>
            <div class="form-group" style="margin-bottom: 1em">
                <label for="Passwort">Passwort:</label>
                <input type="password" class="form-control" id="Passwort" placeholder="Passwort"></input>
            </div>
            <div class="form-check" style="margin-bottom: 1em">
                <input type="checkbox" class="form-check-input" id="ProjektZuordnen">
                <label class="form-check-label" for="ProjektZuordnen">Dem Projekt zuordnen</label>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-bottom: 1em">Speichern</button>
            <button type="submit" class="btn btn-info" style="margin-bottom: 1em">Reset</button>
        </form>
    </div>

</div>
<?php include 'Footer.php' ?>

