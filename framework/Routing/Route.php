<?php
/**
 * Created by PhpStorm.
 * User: kda
 * Date: 05.03.2020
 * Time: 12:33
 */
namespace Framework\Routing;
class Route
{
    const METHOD_GET = 1;
    const METHOD_POST = 2;

    private $path;
    private $action;
    private $type;

    public function __construct($path, $action, $type)
    {
        $this->path = $path;
        $this->action = $action;
        $this->type = $type;
    }
    public function getParams(){
        $params = [];
        preg_match_all('/{([a-z]\w*)}/',$this->path,$params);
        return $params[1];
    }
    public function getMask(){
        $params = $this->getParams();
        $path = $this->path;
        foreach ($params as $param){
            $path = preg_replace("/{[a-z]\w*}/","(\w*)",$path);
        }
        return '~'.$path.'~';
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }


}