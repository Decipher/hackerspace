<?php
/**
 * @file
 * hackerspace_core.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function hackerspace_core_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
}
