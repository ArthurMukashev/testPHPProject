<?php

define('MUK_ACCESS', true);                         # Константа безопасности

# Устанавливаем заголовки: Тип данных: HTML, кодировка: utf-8
header('Content-Type:text/html;charset=utf-8');

session_start();                                    # Стартуем сессию

require_once 'config.php';                          # Подключение файла базовых настроек (чтоб быстро разворачивать на разных хостингах)


# Подключение расширенного файла настроек (внутренние настройки - пути к шаблонам и т.д.)
require_once 'core/base/settings/internal_settings.php';

# Импортируем пространства имен
use core\base\exceptions\RouteException;            # класс-исключение маршрутов
use core\base\controllers\RouteController;          # класс-контроллер маршрутов


# Блок try-catch
## Try - выполняет инструкции в фигурных скобках пока не встретит throw new Exception
## Catch (Exception) - останавливает выполнение блока Try как только он поймал throw и выполняет свои действия в фигурных скобках

try {
    RouteController::getInstance()->route();        # Вызов статического метода у класса RouteController, а потом вызов метода route()
} catch (RouteException $e) {
    exit($e->getMessage());
}


