<?php

# Проверка наличия константы безопасности
defined('MUK_ACCESS') or die('Access Denied');

# Константы
const SITE_URL = 'http://im.my';    # Полный путь к сайту
const PATH = '/';                   # Корень пути к сайту

# Подключение к БД
const HOST = 'localhost';           # Хост
const USER = 'root';                # Имя пользователя
const PASS = '';                    # Пароль
const DB = 'test';                  # название БД
