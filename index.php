<?php

require_once 'Csv/Read.php';
require_once 'Csv/Write.php';

$openfile = new Read();
$openfile->ReadFile('data.csv');


if($_POST) {

    if ($_POST['Name'] == null) {
        echo 'Укажите имя!';
    }
    elseif ($_POST['Berthday'] == null) {
        echo 'Укажите дату!';
    } else {
        $operator = $_POST['Name'] . ';' . $_POST['Berthday'] . "\n";
        $Writefile = new Write();
        $Writefile->WriteFile('data.csv', $operator);
    }
}


?>
<form action="index.php" method="POST">
   Имя <input value="" name="Name">
    Дата <input value="" name="Berthday">
    <button name="submit">Сохранить</button>
</form>



