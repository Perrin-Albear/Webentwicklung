<?php $title = 'Todos';
$h = "ToDos (Aktuelles Projekt)";
include 'Header.php';
?>

<div class="row">
    <?php include 'Sidebar.php';
    include 'AufgabenTabelle.php';
    include 'ReiterTabelle.php'; ?>
    <div class="col">
        <div class="row">
            <? global $personen;
            foreach ($reiter as $item):?>
            <div class="col">
                <div class="card">
                    <div class="card-header"><? echo $item['Name']?>:</div>
                    <ul class="list-group list-group-flush">
                        <? global $aufgaben;
                        foreach ($aufgaben as $value):
                            if ($value['Reiter'] == $item['Name']):?>
                                <li class="list-group-item"><?echo $value['Aufgabenbezeichnung']?></li>
                            <?endif;
                        endforeach;?>
                    </ul>
                </div>
            </div>
            <? endforeach;?>
        </div>
    </div>
</div>
<?php include 'Footer.php' ?>