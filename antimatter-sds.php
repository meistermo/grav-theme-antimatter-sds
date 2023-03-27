<?php
namespace Grav\Theme;

use Grav\Common\Theme;
use Grav\Common\Grav;

//Access plugin events in this class
class AntimatterSDS extends Antimatter {
    //Make db accessible to twig
    public function onTwigSiteVariables(): void {
        $this->grav["twig"]->twig_vars["db"] = Grav::instance()['database'];
    }      
}

