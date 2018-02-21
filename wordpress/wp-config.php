<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kmvphoto_ss_dbname596');

/** MySQL database username */
define('DB_USER', 'kmvphoto_ss_d596');

/** MySQL database password */
define('DB_PASSWORD', 'lxrhqB3AjHgD');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'j}e/Z!;m@hkbd{XR%b;Hx&JwJJrD!ZK(F!ETQRCTAC+IL&%Inl@]K}>e[XZ|nDUoCz>oniNAtV$VCBbeRR=r+oc=Ahh$;xSg?t]V$N=p[Bq_YEpKtdrpAO+CoZ<BRL}}');
define('SECURE_AUTH_KEY', 'Rsz+]t%McE%l}uMIce!&{b!=$@@O|pZVXTM)/and&A$eqP^kcv@@X]@YlAid<jWNhqN$bFREtjOkEOsPb$TxQ]G&?l^RM_&L<SgU=$fK|j(*<X=*L@=^zHZ?W!>>/%->');
define('LOGGED_IN_KEY', '!^(ePqzR|Ik=J]DNCJIB$bsSvO<b=G}>P!FSk]cRY*Mk*@^SE!AplHst=PvbCqb=lNfFPnbPt(nBMH<XT/SU%POPfD/Wneb%voOeG)PnNQ}-%_EdcIPWiALJA/SCPVs+');
define('NONCE_KEY', '-O&sGp&aajbug$DShzLW%{^w{CD<n@Aaa^nGyTThpM<eh*;&iBu>oPJ>L%OkqnGB&qBPboO_wMJNk&eQJ[oGucihhuPz]o/FIw+*B*UYKAXD)Uvy*vPjCEQ&gXj<CpQ=');
define('AUTH_SALT', 'XGHr[hwsTN!AhjS$PzHe{TkhL((}]E%jgO-$L|rbkGT=LQ-f-%{OmNB^im<jQ^ZX%Ti$xtT]LCM[xQ;=;gRRvc^&vZ%SAGjizcaM|t$orwv[KMXtUQUB&LijR%z|GM$d');
define('SECURE_AUTH_SALT', 'VBPU@Y{>w)dZwiq@a=-;CR(S;VMNpr/;bi$t*_Zvd@M_JPN$(=*PS{@[KLZ_JB^bD]_BUIk>C$NM>dMQKl+;sYuAgGLLC-O/IuhH=RwzE_%OIj)|adFi_gi[&Bohln<C');
define('LOGGED_IN_SALT', 'Y!NGZxupoje/iSsD!LbAZbgv$IJJD+|mHxjpwxGRcP;U{q(aPsqO^o@s[*DoWZg)=Fr(go}ykD+S{=&h)_[Ga?dqFmu<@=a=@gR(i}]e-oeIT;(gX_XOXA|_@SHagS=i');
define('NONCE_SALT', 'jjKT|]O;=^J%YlRu_ljzP&FWs]EFAds^ca!]ok&WzI^Ofwp[Lnx@<|GbKRra>)L(dX{>vSru+p^FhEp)RqgH/vXiVgIvzQv-ZIRuPc|(}F;EYZNdvNxYIX(ddAnZz)BB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_nrib_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
