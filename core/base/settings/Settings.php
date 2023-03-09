<?php

# Класс настроек
namespace core\base\settings;


class Settings
{
    # закрытое статическое свойство - экземпляр класса
    private static $_instance;

    private function __construct()                  # закрытый конструктор класса
    {
    }

    private function __clone()                      # закрытый копирователь объектов класса
    {
    }

    public static function getInstance()            # статический метод - шаблон проектирования Singleton
    {
        if (self::$_instance instanceof self) {
            return self::$_instance;
        }

        return self::$_instance = new self;
    }

    # закрытое свойство - массив маршрутов
    private $routes = [
        'admin' => [                                # Административная панель
            'name' => 'admin',                          # название (алиас) в адресной строке
            'path' => 'core/admin/controllers/',        # путь к классам-контроллерам администратора
            'hrUrl' => false                            # флаг - использование человекопонятных URL
        ],
        'settings' => [                             # Настройки
            'path' => 'core/base/settings/',            # путь к классам-настройкам сайта
        ],
        'plugins' => [                              # Плагины
            'path' => 'core/plugins/',                  # путь к плагинам
            'hrUrl' => false,                           # флаг - использование человекопонятных URL
        ],
        'user' => [                                 # Пользовательская часть
            'path' => 'core/user/controllers',          # Путь к классам-контроллерам
            'hrUrl' => true,                            # ОБЯЗАТЕЛЬНО человекопонятные URL
            'routes' => [                               # Дополнительные маршруты

            ]
        ],
        'default' => [                              # Раздел "по умолчанию"
            'controller' => 'IndexController',          # используемый контроллер
            'inputMethod' => 'inputData',               # метод по умолчанию для сбора данных
            'outputMethod' => 'outputData',             # метод по умолчанию для передачи данных в шаблоны
        ]
    ];
}