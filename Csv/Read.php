<?php



class Read
{
    private $file;

    public function ReadFile($file)
    {

        if (file_exists($file)) {

            $arrstr = file($file);
            $arrstrHead = explode(";", $arrstr[0]);

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

}