<?php

/**
 * Created by PhpStorm.
 * User: Marcelo Gaia
 * Date: 2015-10-01
 * Time: 8:34 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Globals {
    private static $data = null;
    private static $initialized = false;

    private static function initialize() {
        if (self::$initialized)
            return;

        /*
         * Custom constants
         */
        $ci =& get_instance();
        $test['header'] = $ci->load->view('_header','',true);
        $test['footer'] = $ci->load->view('_footer','',true);

        self::$data = $test;
        self::$initialized = true;
    }

    public static function get_data() {
        self::initialize();
        return self::$data;
    }
}