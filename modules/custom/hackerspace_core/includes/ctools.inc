<?php
/**
 * @file
 * Chaos tools module integration.
 */

/**
 * Implements hook_ctools_plugin_directory() .
 */
function hackerspace_core_ctools_plugin_directory($owner, $plugin_type) {
  if ($owner == 'ctools' && $plugin_type == 'access') {
    return 'plugins/' . $plugin_type;
  }
}
