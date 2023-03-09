<?php

# Константа безопасности
define('MUK_ACCESS', true);

# Устанавливаем заголовки: Тип данных: HTML, кодировка: utf-8
header('Content-Type:text/html;charset=utf-8');

# Стартуем сессию
session_start();

# Подключение файла базовых настроек (чтоб быстро разворачивать на разных хостингах)
require_once 'config.php';

# Подключение расширенного файла настроек (внутренние настройки - пути к шаблонам и т.д.)
require_once 'core/base/settings/internal_settings.php';