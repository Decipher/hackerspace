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

/**
 * Implements hook_default_page_manager_pages_alter().
 */
function hackerspace_core_default_page_manager_pages_alter(&$data) {
  if (isset($data['groups_directory'])) {
    $data['groups_directory']->access['plugins'] = array(
      0 => array(
        'name' => 'subdomain_group',
        'settings' => NULL,
        'not' => TRUE,
      ),
    ); /* WAS: '' */
  }
}
