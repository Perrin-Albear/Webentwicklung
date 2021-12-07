<?php
$reiter = array(
    array('Name'=> 'ToDo',
        'Beschreibung' => 'Dinge die erledigt werden müssen'),
    array('Name'=> 'Erledigt',
        'Beschreibung' => 'Dinge die erledigt sind'),
    array('Name'=> 'Verschoben',
        'Beschreibung' => 'Dinge die später erledigt werden'),
);

function reiterTabelle()
{
    global $reiter;
    if (count($reiter) > 0):?>
        <table class="table" >
            <thead class="table-light" >
            <tr >
                <th ><?echo implode('</th><th>', array_keys(current($reiter)));?> </th >
                <th scope = "col" ></th >
            </tr >
            </thead >
            <tbody style="border-top: none">
            <?foreach ($reiter as $row): array_map('htmlentities', $row);?>
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


<? function reiterDropDown() {
    global $reiter;?>
    <select class="form-control" id="reiterAuswaehlen">
        <option value="" selected disabled> Reiter </option>
        <?foreach ($reiter as $row):?>
            <option>
            <?echo $row['Name'];?>
            </option>
        <? endforeach;?>
            </option>
    </select>
<?php
    }
?>