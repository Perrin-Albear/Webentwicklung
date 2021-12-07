<?php
$title = 'Reiter';
$h = "Reiter";
include 'Header.php';
?>
    <div class="row">
        <?php include 'Sidebar.php'; ?>

        <div class="col-sm-8">
            <?php include 'ReiterTabelle.php';
              echo reiterTabelle();
            ?>
            <br>
            <br>
            <br>

            <form class="form-group">
                <h3 class="font-weight-bold">Bearbeiten/Erstellen:</h3>
                <div class="form-group" style="margin-bottom: 1em">
                    <label for="ReiterAuswaehlen">Bezeichnung des Reiters:</label>
                    <? echo reiterDropDown(); ?>
                </div>
                <div class="form-group" style="margin-bottom: 1em">
                    <label for="ReiterBeschreibung">Reiterbeschreibung</label>
                    <textarea class="form-control" id="ReiterBeschreibung" rows="3" placeholder="Beschreibung"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-bottom: 1em">Speichern</button>
                <button type="submit" class="btn btn-info" style="margin-bottom: 1em">Reset</button>
            </form>
        </div>
    </div>

<?php include 'footer.php' ?>
