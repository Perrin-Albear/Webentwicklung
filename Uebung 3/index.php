<?php $title = 'Login';
$h = "Login";
include 'Header.php';
?>
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <form>
            <div class="form-group" style="margin-bottom: 1em">
                <label for="exampleInputEmail1">E-Mail-Adresse</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-Mail-Adresse eingeben">
            </div>
            <div class="form-group" style="margin-bottom: 1em">
                <label for="exampleInputPassword1">Passwort</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Passwort">
            </div>
            <div class="form-check" style="margin-bottom: 1em">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">AGBs und Datenschutzbestimmungen akzeptieren</label>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-bottom: 1em">Einloggen</button>
        </form>
        <p class="text-justify" style="margin-bottom: 1em">Noch nicht registriert? <a href="Personen.html" class="btn-link" >Registrierung</a></p>
        <p class="text-justify" style="margin-bottom: 1em">Da der Login Vorgang technisch noch nicht realisiert wurde: <a href="Todos.php" class="btn-link" >Überspringen</a></p>
    </div>
</div>
<?php include 'Footer.php';?>
