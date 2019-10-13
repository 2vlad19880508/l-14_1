<?php

require_once 'InterfaceCSV.php';

class Read implements InterfaceCSV
{
    private $file;

    public function ReadFile($file)
    {

        if (file_exists($file)) {

            $arrstr = file($file);

            echo '<table border=1>';
            foreach ($arrstr as &$value) {
                $arr = explode(';', $value);
                echo '<tr>';
                foreach ($arr as &$value) {
                    echo '<td>' . $value . '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
            echo '<br>';

        } else {
            echo 'Файл не существует';
        }
    }


    public function WriteFile($file, $somecontent)
    {
        // TODO: Implement WriteFile() method.
    }
}