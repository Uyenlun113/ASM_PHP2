<?php
namespace App\Controller;

use eftec\bladeone\BladeOne;

class BaseController {
    protected function render($view,$data=[]) {
        $viewDir = "./app/View";
        $storageDir = "./storage";
        $blade = new BladeOne($viewDir,$storageDir,BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
        echo $blade->run($view,$data); 
    }
}
?>