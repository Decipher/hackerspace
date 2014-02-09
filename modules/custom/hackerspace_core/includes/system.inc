<?php
/**
 * @file
 * System module integration.
 */

/**
 * Implements hook_init().
 */
function hackerspace_core_init() {
  module_invoke_all('hackerspace_core_init');
}

/**
 * Implements hook_preprocess().
 */
function hackerspace_core_preprocess(&$vars, $hook) {
  drupal_alter('hackerspace_core_preprocess', $vars, $hook);
  drupal_alter("hackerspace_core_preprocess_{$hook}", $vars);
}

/**
 * Implements hook_form_alter().
 */
function hackerspace_core_form_alter(&$form, $form_state, $form_id) {
  // Debug code; display $form_id.
  if (module_exists('devel') && isset($_GET['debug']) && ($_GET['debug'] == 1 || isset($_GET['debug']['form_id']))) {
    dpm($form_id, '$form_id');
  }

  drupal_alter('hackerspace_core_form', $form, $form_state, $form_id);
  drupal_alter("hackerspace_core_form_{$form_id}", $form, $form_state);
}
