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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'J?{WvV+! [Rw$XE4RkfpY%cho4j_J/g4Zy`H0TTn!<@ujBcRjuFSD&}o)8jbi!Qt');
define('SECURE_AUTH_KEY',  ':mBBe00XH[D3TkZNu.A&&[fBg=3#awKdBlf-IR[=7Dv[KZiStigoj99En8}u/pn;');
define('LOGGED_IN_KEY',    '{;<_any*56Ue5TV`9IKF)vtp3sM4g>a@ozkH/eSD[R|qAvkuSq6-DA_o<JR>,a2{');
define('NONCE_KEY',        'MTw2_PNN;F%Bn!R?fD>aZD689*dK0zBr3RjL[]FO7i$5m;R,@7r{R;unVaok>v3A');
define('AUTH_SALT',        'q~#:O}od>pPtchrI7yi$Bo7o_1I|~MLiu|E=R*k-35Dym3r$_Kegr-:m*a5jA51_');
define('SECURE_AUTH_SALT', 'kC7CW:$0F`(Sp!8DNVH^L^yxzo.}7:D)5b{y8L3MP:>`cNc%V<[TLCLT==;}X;jw');
define('LOGGED_IN_SALT',   '=P9@2#nIcFwKo]ve/[/I<Mb;oAqSzj?SfPOtx1W?@x^ aww+qAf@,eCDiybvdQ/`');
define('NONCE_SALT',       '16Vcs38SrvHrg]O(GWJ Gcn lY%P,pg.En,CE=6l6v 7^;&x@cQAfPdE*xVXX-BX');

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
