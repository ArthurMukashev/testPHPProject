<?php

# Проверка наличия константы безопасности
defined('MUK_ACCESS') or die('Access Denied');

# Константы

const TEMPLATE_DIR = 'templates/default';           # Путь к папке с шаблонами проекта
const ADMIN_TEMPLATE = 'admin/views';               # Путь к папке с шаблонами административной панели

const COOKIE_VERSION = '1.0.0';                     # Версия куки-файлов (при авторизации ставится кука), если ее изменить то все выйдут из системы
const CRYPT_KEY = '';                               # Ключ-шифрования (НЕ СОЛЬ)
const COOKIE_TIME = 60;                             # Время жизни куки (типо время бездействия - если 60 мин ничего не делал то разлогин)
const BLOCK_TIME = 3;                               # Время блокировки пользователя (если пароль неправильно ввел 3 раза, то на 3 дня досвидания)

# Постраничная навигация
const QTY = 8;                                      # Кол-во элементов на 1 странице
const QTY_LINKS = 3;                                # Кол-во ссылок левее и правее активной

# Пути к CSS и JS файлам
## Административная панель
const ADMIN_CSS_JS = [
    'styles' => [],
    'scripts' => []
];

## Пользовательская часть сайта
const USER_CSS_JS = [
    'styles' => [],
    'scripts' => []
];

# Импортируем пространство имен
use core\base\exceptions\RouteException;

# Автозагрузчик классов
## чтобы можно было использовать команду use namespace\Class; и создавать новые классы

function autoloadMainClasses($className)
{
    # заменить все \ на / (\\ чтобы PHP правильно экранировал символ \)
    $className = str_replace('\\', '/', $className);

    # Если не подключается данный файл (@ для того чтобы PHP не выстреливал предупреждения)
    if (@!include_once $className . '.php') {
        throw new RouteException('Неверное имя файла для подключения - ' . $className);     # выбросить исключение RouteException с текстом
    }
}

# функция автозагрузчика классов (на вход подается функция ОБРАБОТКИ путей)
spl_autoload_register('autoloadMainClasses');