<?php $title = 'Projekte';
$h = "Projekte";
include 'Header.php';
?>

<div class="row">
    <?php include 'Sidebar.php'; ?>
    <div class="col-sm-8">
        <form>
            <h3 class="font-weight-bold">Projekt Auswählen:</h3>
            <div class="form-group" style="margin-bottom: 1em">
                <select class="form-control" id="ProjektAuswaehlen">
                    <option value="" selected disabled>- bitte auswählen -</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-bottom: 1em">Auswählen</button>
            <button type="submit" class="btn btn-primary" style="margin-bottom: 1em">Bearbeiten</button>
            <button type="submit" class="btn btn-danger" style="margin-bottom: 1em">Löschen</button>
            <h3 class="font-weight-bold">Projekt bearbeiten/erstellen:</h3>
            <div class="form-group" style="margin-bottom: 1em">
                <label class="form-check-label" for="ProjektName">Projektname</label>
                <input type="password" class="form-control" id="ProjektName" placeholder="Projekt">
            </div>
            <div class="form-group" style="margin-bottom: 1em">
                <label for="ProjektBeschreibung">Projektbeschreibung</label>
                <textarea class="form-control" id="ProjektBeschreibung" rows="3" placeholder="Beschreibung"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-bottom: 1em">Speichern</button>
            <button type="submit" class="btn btn-info" style="margin-bottom: 1em">Reset</button>
        </form>
    </div>
</div>
<?php include 'Footer.php' ?>