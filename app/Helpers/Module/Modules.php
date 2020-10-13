<?php
namespace App\Helpers\Module;
 
use App\Navigation;
 
class Modules {

    public static function getModules() 
    {
        Modules::assembleModules();
    }

    public static function assembleModules()
    {
    	$modules = Navigation::where('active',1)->get();
    	/*echo '<pre>';
    	print_r($modules);
    	echo '</pre>'; */   	
        $arrayModules = array();
    	foreach ($modules as $key => $value) {
            $submodules = array();
            if(!empty($value['id_submodules'])){
                $submodules = explode(',', $value['id_submodules']);
            }
            $arraySubmenu = array();
            if (count($submodules) > 0) {
                foreach ($submodules as $keys => $module) {
                   
                    if ($value['id_module'] === $module) {
                        $arraySubmenu[$value['name']] = array(
                                                            'icon'=> 'icon',
                                                            'submenu' => array(),
                                                            'link' => 'link'
                                                        );
                    }
                }
            }
            $arrayModules[$value['name']] = array(
                'icon'=> 'icon',
                'submenu' => $arraySubmenu,
                'link' => 'link'
            );

    	}
    }
}