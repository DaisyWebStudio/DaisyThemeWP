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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'daisy_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'daisy-a' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345z' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+H%97xw1}mgri 9Ghp/j{86?ley;7ST(5%/?~>x_R.dklrdmAa@wE^k6a@j7NM#?' );
define( 'SECURE_AUTH_KEY',  '!e0^`S.EF#)KUg6Nni,Go>q2H]1{ql1AA(z::_g3WzS{ncCs9JS{P#~o]WEVo @Z' );
define( 'LOGGED_IN_KEY',    '[njow_)//6r{~R&}<d,F_Sz0g8*n-[4x w&le2` It.vQTLg>FxYn74Cq51f}fTY' );
define( 'NONCE_KEY',        'BD=@<^Wy8Ay$eJ$b`B.Jf]GTCpO1acYA#rFty;Tx)Xv^qZ#g,>v_)5R1~ljhrd2L' );
define( 'AUTH_SALT',        '}S4T/1`Xc(+Q<%].Jm~g[CXj~*wt$_w22v@=6sqQ>O..-i}V`L[]CX/qIdK7]Hl|' );
define( 'SECURE_AUTH_SALT', '/ZE+~t1ez#F):G>.;1ez1Xy87ohk%RYQ0q><`Zuu~IS/3zQ,<Gu8iCU=7)q7<0D}' );
define( 'LOGGED_IN_SALT',   ':-kA]DmQ6cIm<E6Rvo#C~<+#`GBL~7H,/e:|,5R?MRr=DUz^1;QC-V~1I0W}OjD8' );
define( 'NONCE_SALT',       '8#m_BGJ{sTg19w?${:xUnDgF`m$s&:cBp0UM`r81zaZO}_WKOM?/|)-6_!xe|OPx' );

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
define( 'WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
