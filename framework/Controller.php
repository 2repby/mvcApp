<?php
/**
 * Created by PhpStorm.
 * User: kda
 * Date: 19.03.2020
 * Time: 23:14
 */

namespace Framework;


class Controller
{
    protected function view($template_path, $data){
        $template = file_get_contents('app/MVC/Views/'.$template_path);
        extract($data,EXTR_SKIP);
        ob_start();
        eval("?>".$template."<?");
        $content = ob_get_contents();
        ob_clean();
        return $content;
    }
}