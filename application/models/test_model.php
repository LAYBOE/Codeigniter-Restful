<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends MY_Model{

    protected $_table = "test";
    protected $primary_key = "id";
    protected $return_type = "array";

}