<?php

namespace Intergaz\Models;

use Intergaz\Data\Database;

abstract class Model 
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }
}