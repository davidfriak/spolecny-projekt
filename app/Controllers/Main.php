<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Location;
use App\Models\Rider;



class Main extends BaseController
{
    var $location;
    var $rider;

    public function __construct() {
        $this->rider = new Rider();
        $this->location = new Location();
    }

    public function zavodnici()
    {
        $data['riders'] = $this->rider->where("country", "fr")->orderby("last_name", "asc")->findAll();

        return view('hlavnistranka', $data);
    }
}
