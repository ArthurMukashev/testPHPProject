<?php

# Класс-контроллер маршрутов
namespace core\base\controllers;


class RouteController
{
    private static $_instance;              # закрытое статическое свойство

    private function __clone()              # закрытый копирователь объектов
    {
    }

    public static function getInstance()    # метод получения единственного экземпляра класса
    {
        # реализация шаблона SingleTone - один экземпляр класса НА ВЕСЬ ПРОЕКТ
        ## если статическое свойство содержит объект класса
        if (self::$_instance instanceof self) {
            return self::$_instance;        # вернуть свойство, содержащее объект (т.е. объект)
        }

        return self::$_instance = new self; # вернуть свойство, предварительно создав объект (т.е. вызвав конструктор)
    }

    private function __construct()          # закрытый конструктор класса
    {
    }

}