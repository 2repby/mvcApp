<?php

namespace Framework;

abstract class Model
{
    //получение одного элемента данных по идентификатору
    public function getById($id){
        return $this->getWhere([$this->getIdField()=>$id]);
    }

    //получение набора элементов данных, удовлетворяющих условию
    public abstract function getWhere($conditions);

    //получение полного набора данных модели
    public function all(){
        return $this->getWhere([]);
    }

    //удаление одного элемента данных по идентификатору
    public function deleteById($id){
        return $this->getWhere([$this->getIdField()=>$id]);
    }

    //удаление набора элементов данных, удовлетворяющих условию
    public abstract function deleteWhere($conditions);

    //удаление набора элементов данных, удовлетворяющих условию
    public function updateById($id, $data){
        return $this->updateWhere([$this->getIdField()=>$id], $data);
    }

    //изменение набора элементов данных, удовлетворяющих условию
    public abstract function updateWhere($conditions, $data);

    //создание одного элемента данных
    public abstract function create($fields);

    //получение названия поля данных, используемого в качестве идентификатора
    protected function getIdField(){
        return "id";
    }
}