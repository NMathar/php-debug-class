<?php

class debug
{

    private $pre_text = "Debug Output: ";


    /*
     * Constructor of debug class
     *
     */
    public function __construct()
    {

    }

    public function debug_to_console($data)
    {
        if (is_array($data) || is_object($data)) {
            $output = json_encode($data);
        } else {
            $output = $data;
        }
        $this->draw_log($output);
    }

    public function print_info()
    {
        $info_arr = array(
            "SERVER_ADDR" => $_SERVER['SERVER_ADDR'],
            "SERVER_NAME" => $_SERVER['SERVER_NAME'],
            "SERVER_SOFTWARE" => $_SERVER['SERVER_SOFTWARE'],
            "SERVER_PROTOCOL" => $_SERVER['SERVER_PROTOCOL'],
            "DOCUMENT_ROOT" => $_SERVER['DOCUMENT_ROOT'],
            "REQUEST_URI" => $_SERVER['REQUEST_URI'],
            "PHP_SELF" => $_SERVER['PHP_SELF'],
            "YOUR_IP" => $_SERVER['REMOTE_ADDR'],
        );

        foreach ($info_arr as $key => $value) {
            $this->draw_log($key . " = " . $value);
        }


    }

    private function draw_log($output)
    {
        echo "<script>console.log( '" . $output . "' );</script>";
    }
}

?>