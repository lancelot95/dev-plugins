<?php
spl_autoload_register('simplarity_autoloader');
function simplarity_autoloader($class_name)
{
  if (strpos($class_name, 'App') !== false) {
    $classes_dir = realpath(plugin_dir_path(__FILE__)) . DIRECTORY_SEPARATOR;
    $class_file = str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';
    require_once $classes_dir . $class_file;
  }
}