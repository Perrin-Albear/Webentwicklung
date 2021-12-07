<?php
$aufgaben = array(
    array('Aufgabenbezeichnung'=> 'Html lernen',
        'Beschreibung der Aufgabe' => 'Html lernen',
        'Reiter' => 'ToDo',
        'Zuständig' => 'David Scholtz'),
    array('Aufgabenbezeichnung'=> 'Html Projekt umsetzen',
        'Beschreibung der Aufgabe' => 'Html Projekt umsetzen',
        'Reiter' => 'ToDo',
        'Zuständig' => 'David Scholtz'),
    array('Aufgabenbezeichnung'=> 'Bei Porta für die Veranstaltung anmelden',
        'Beschreibung der Aufgabe' => 'Bei Porta für die Veranstaltung anmelden',
        'Reiter' => 'Erledigt',
        'Zuständig' => 'David Scholtz'),
    array('Aufgabenbezeichnung'=> 'Vorlesungen besuchen',
        'Beschreibung der Aufgabe' => 'Vorlesungen besuchen',
        'Reiter' => 'Erledigt',
        'Zuständig' => 'David Scholtz'),
    array('Aufgabenbezeichnung'=> 'Eigenes Html Projekt starten',
        'Beschreibung der Aufgabe' => 'Eigenes Html Projekt starten',
        'Reiter' => 'Verschoben',
        'Zuständig' => 'David Scholtz'),
);

function aufgabenTabelle()
{
    global $aufgaben;
    if (count($aufgaben) > 0):?>
        <table class="table" >
            <thead class="table-light" >
            <tr >
                <th ><?echo implode('</th><th>', array_keys(current($aufgaben)));?> </th >
                <th scope = "col" ></th >
            </tr >
            </thead >
            <tbody style="border-top: none">
            <?foreach ($aufgaben as $row): array_map('htmlentities', $row);?>
                <tr >
                    <td ><? echo implode('</td><td>', $row);?> </td >
                    <td >
                        <div style = "float: right" >
                            <i style = " color: deepskyblue" class="far fa-edit" ></i >
                            <i style = " color: deepskyblue" class="far fa-trash-alt" ></i >
                        </div >
                    </td >
                </tr >
            <? endforeach; ?>
            </tbody >
        </table >
    <? endif;
}
?>


<? function aufgabeAuswaehlen() {
    global $aufgaben;?>
    <select class="form-control" id="aufgabeAuswaehlen">
        <option value="" selected disabled> Aufgabe </option>
        <?foreach ($aufgaben as $row):?>
            <option>
                <?echo $row['Aufgabenbezeichnung'];?>
            </option>
        <? endforeach;?>
        </option>
    </select>
    <?php
}
?>