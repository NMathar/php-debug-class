<?php

class debug
{

    private $pre_text = "Debug Output: ";

    //declare useful variables


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
            $output = $this->pre_text . " " . $data;
        }
        echo "<script>console.log( '" . $output . "' );</script>";
    }
}

?>