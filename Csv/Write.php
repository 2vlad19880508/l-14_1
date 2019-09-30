<?php


class Write
{
    private $file;
    private $somecontent;

    /**
     * @param $file
     */
    public function WriteFile($file, $somecontent)
    {

        $this->somecontent =  $somecontent;

// Вначале давайте убедимся, что файл существует и доступен для записи.
        if (is_writable($file)) {

            // В нашем примере мы открываем $filename в режиме "дописать в конец".
            // Таким образом, смещение установлено в конец файла и
            // наш $somecontent допишется в конец при использовании fwrite().
            if (!$handle = fopen($file, 'a')) {
                echo "Не могу открыть файл ($file)";
                exit;
            }

            // Записываем $somecontent в наш открытый файл.
            if (fwrite($handle, $somecontent) === FALSE) {
                echo "Не могу произвести запись в файл ($file)";
                exit;
            }

            echo "Ура! Записали ($somecontent) в файл ($file)";

            fclose($handle);

        } else {
            echo "Файл $file недоступен для записи";
        }
    }
}