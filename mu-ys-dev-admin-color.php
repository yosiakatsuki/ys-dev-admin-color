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

if ( ! file_exists( __DIR__ . '/ys-dev-admin-color/ys-dev-admin-color.php' ) ) {
	return;
}
require_once __DIR__ . '/ys-dev-admin-color/ys-dev-admin-color.php';
