<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $viewName;
    protected $viewParams = [];

    public function render($viewName = null, $params = null) {
        $viewParams = !empty($params) ? $params : $this->viewParams;
        
        if (!empty($viewName)) {
            return view($viewName, $viewParams);
        }

        if (isset($this->viewName)) {
            return view($this->viewName, $viewParams);
        }
    }
}
