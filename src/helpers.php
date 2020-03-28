<?php




if (!function_exists('helper_function')) {
    /**
     * helper function
     * @param input1 can be nulled
     * @param input2 can be nulled
     */
    function helper_function(?String $input1, ?String $input2) : void
    {
        echo 'this is helper function';
    }
}