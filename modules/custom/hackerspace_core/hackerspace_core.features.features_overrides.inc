<?php
/**
 * @file
 * hackerspace_core.features.features_overrides.inc
 */

/**
 * Implements hook_features_override_default_overrides().
 */
function hackerspace_core_features_override_default_overrides() {
  // This code is only used for UI in features. Exported alters hooks do the magic.
  $overrides = array();

  // Exported overrides for: page_manager_pages
  $overrides["page_manager_pages.groups_directory.access|plugins"] = array(
    0 => array(
      'name' => 'subdomain_group',
      'settings' => NULL,
      'not' => TRUE,
    ),
  );

 return $overrides;
}
