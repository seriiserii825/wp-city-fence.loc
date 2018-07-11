<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'city-fence');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pthp`qn4lg8Udd^DaGsFH$wOZ/fhfgx/Zg]oHQMJoCzT**E%>X@OYG<]-H^1VKMJ');
define('SECURE_AUTH_KEY',  'jje*w+aB{KeloTw]>-f E<=JU5e7;pgC1Bjk-EOGI~hOA?)@n~o=1q]1b5t$ficx');
define('LOGGED_IN_KEY',    '5A})^V!j_u@ojg-Kp[[g)36$,P7we+I.G1qn|/zV Kz7Upa4$s~b3`?&;yO;wN>]');
define('NONCE_KEY',        'E#&)3M;$~h:@{:~!9x(ViRJ$qh_jBO&EtId2DV@/3th*ny<W:<i]%(*Cb(>>ACMy');
define('AUTH_SALT',        'RE5;`DbzpWqn,h%,&:5VAugi5rAM(f<j1JJI>uNj9jd)nsGS1^-Vt,E3n>yF/kcj');
define('SECURE_AUTH_SALT', ' [cq``z+ {5!ab@5^z}/ZW;,#1#pmaVJaoX8SFH3?]*O_(ro_i#?.??)=:GWBMeA');
define('LOGGED_IN_SALT',   ')mQ>RxhEAZd6=Sjo#af1bg+8Sr`5lI^>OV!)F@1O9OnT(<yGg7E32)7jHd<hk3v+');
define('NONCE_SALT',       '9f/+|SYMk=Un2|&XO=!S{$W@d-Ql<xW5P^H!c}M8hMjkSCW FELgU}Zx3 RD/n`J');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
