<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends MY_Model{

    protected $_table = "post";
    protected $primary_key = "post_id";
    protected $return_type = "array";

}