<?php
/**
 * Created by PhpStorm.
 * User: lezzz
 * Date: 14/3/2019
 * Time: 18:44
 */

$config = parse_ini_file('config.ini');

error_reporting($config['error_report']);

date_default_timezone_set($config['timezone']);

setlocale($config['locate_config'],$config['locate_locale']);

