<?php
$personen = array(
    array('Name'=> 'David Scholtz',
        'E-Mail' => 'nichtmeine@richtige.de',
        'In Projekt' => '<input type="checkbox" class="form-check-input" id="Check1">'),
    array('Name'=> 'Max Mustermann',
        'E-Mail' => 'mustermann@muster.de',
        'In Projekt' => '<input type="checkbox" class="form-check-input" id="Check2">')
);

function personenTabelle()
{
    global $personen;
    if (count($personen) > 0):?>
        <table class="table" >
            <thead class="table-light" >
            <tr >
                <th ><?echo implode('</th><th>', array_keys(current($personen)));?> </th >
                <th scope = "col" ></th >
            </tr >
            </thead >
            <tbody style="border-top: none">
            <?foreach ($personen as $row): array_map('htmlentities', $row);?>
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


<? function personenAuswaehlen() {
    global $personen;?>
    <select class="form-control" id="personAuswaehlen">
        <option value="" selected disabled> Person </option>
        <?foreach ($personen as $row):?>
            <option>
                <?echo $row['Name'];?>
            </option>
        <? endforeach;?>
        </option>
    </select>
    <?php
}
?>