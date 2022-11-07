<?php
/**
 * Plugin Name: 開発環境のカラーを強制変更するプラグイン(ys-dev-admin-color)
 * Plugin URI: https://github.com/yosiakatsuki/ys-dev-admin-color
 * Description: 開発環境の管理画面のカラー設定を強制的に変更して開発環境を操作しているかどうかをわかりやすくするためのプラグイン
 * Version: 1.0.0
 * Author: yosiakatsuki
 * Author URI: https://yosiakatsuki.net
 * License: GPL-2.0 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: ys-dev-admin-color
 * Domain Path: languages
 * Requires PHP: 7.4.0
 * Requires at least: 6.1
 * Update URI : https://github.com/yosiakatsuki/ys-dev-admin-color
 *
 * @package ys_dev_admin_color
 */

defined( 'ABSPATH' ) || die();


add_filter( 'get_user_option_admin_color', function ( $result, $option, $user ) {

	if ( ! file_exists( __DIR__ . '/config.json' ) ) {
		return $result;
	}
	$config = json_decode( file_get_contents( __DIR__ . '/config.json' ), JSON_OBJECT_AS_ARRAY );
	if ( ! is_array( $config ) ) {
		return $result;
	}

	foreach ( $config as $key => $value ) {
		if ( $key === $user->data->user_login || $key === $user->data->user_email ) {
			$result = $value;
		}
	}

	return $result;
}, 10, 3 );

