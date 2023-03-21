<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'tickets' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'jr' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Yn_q1F]-ND7eZ/-)' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'phm5m-nZp0O M.CGQLS^wS8-Iiji>&Eoi1fK}x*mUZ8$C)7DyF%qxha5Hb{,!kPA' );
define( 'SECURE_AUTH_KEY',  '<B;LpUMyxr*X>DFbjEd:^h-]I),koJJBQbrnzK@t5FA5!b(e9%!qP*_rKwxr,0_)' );
define( 'LOGGED_IN_KEY',    'z;Kf@7HH y%+J;W;Y)eh?0 3*Y(xP~Km-A=+He5;h>L}AY-%ALxB=U&}kR9w }V}' );
define( 'NONCE_KEY',        'SfK5xz{IQ:5p9I}B;L&qPy33eBC>N(5/1y4Sv@qb+^x]nnob)Npy=q+:cc|c>`7D' );
define( 'AUTH_SALT',        'Hm.k5_I?Y}$Q}_|`W_CL Nf;wF}Vu>W{14w=Y &6Jx*EkTHbQU1/H^F5a<5gy=$`' );
define( 'SECURE_AUTH_SALT', '@7+VtnB1oJ;Hy:_(I=GNa.N$xvqJ>m-%Z7YMykT7oj xt4F~~eC[Bw)R%/r&vDbu' );
define( 'LOGGED_IN_SALT',   'B^#zM=fse-^y_J2Mvqng5Te{]r6y6.+uLlL~wz}W=z>)XQlQT/bz)RYg2}xCOp?R' );
define( 'NONCE_SALT',       '[PBt(9_E*&7X(C2Sz F_nm}e2hP/=WA|`v%``Uevi_$4fx-*[[ib*x stf4Nz.J ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
