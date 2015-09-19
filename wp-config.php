<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy, używanej lokalizacji WordPressa
 * i ABSPATH. Więćej informacji znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */
set_time_limit(0);
// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/usr/home/kraczo/domains/sp4bilgoraj.pl/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'kraczo_sp4');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'kraczo_sp4');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'Kraczosp4');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'mysql.2ap.pl');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'VM#$xWad,c3jIZwC&A;G)4FJr:>tR5q<ku2].}s*|bUi`fBvl~{?X[e86@hOL9P_ ');
define('SECURE_AUTH_KEY', 'GRYoZJ9VOp~nm;du)PTD(Fr|A!@X]a.?5$:&81[ki7s4M,gKE0x>lC_SUWfB}^<w ');
define('LOGGED_IN_KEY', '{>/)`E]F*b@#9GMJjR1f;8ewKHpBqnXto7V^Y0hl[}vz<~2i3xc.uAmrDg|:,TPC ');
define('NONCE_KEY', 'rT1pum4Lo#JP!hxcDRWF{<d.2VZSi]%kj8lN6q0I)>s$E^G|9;XtCfaz*bw,y3}Q ');
define('AUTH_SALT', 'K:D2uN{|vCOikU4@]g}>*PS(I$6WB/f!<[w)h_a%JR8XAlMYmjTsp3x95Q^z,d~V ');
define('SECURE_AUTH_SALT', '#k$5YNwGDcQldH.|3{sp>Chv2&n;:)a1ruVU6gR@[x8,S%!jzP9BOot`X^A?(J<I ');
define('LOGGED_IN_SALT', '$hI^vo;imLVau`&HlY:JwQ5390WZB/zKTdD@t7E!,)>41yg<s?R[f_F*}%c2nPp] ');
define('NONCE_SALT', 'Es5rBQn,}dX69V<e|u4]M^@Ll8*`{vO;:Ppqw%1zW_0g2a#h!mcytRA~xi[?HbJ3 ');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Kod lokalizacji WordPressa, domyślnie: angielska.
 *
 * Zmień to ustawienie, aby włączyć tłumaczenie WordPressa.
 * Odpowiedni plik MO z tłumaczeniem na wybrany język musi
 * zostać zainstalowany do katalogu wp-content/languages.
 * Na przykład: zainstaluj plik de_DE.mo do katalogu
 * wp-content/languages i ustaw WPLANG na 'de_DE', aby aktywować
 * obsługę języka niemieckiego.
 */
define('WPLANG', 'pl_PL');

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
