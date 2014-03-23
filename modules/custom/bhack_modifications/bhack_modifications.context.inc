<?php
/**
 * @file
 * bhack_modifications.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function bhack_modifications_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'server-production';
  $context->description = '';
  $context->tag = 'hackerspace::server';
  $context->conditions = array(
    'server_vars' => array(
      'values' => array(
        'variables' => array(
          0 => array(
            'name' => 'HTTP_HOST',
            'op' => '==',
            'negate' => 0,
            'value' => 'bhack.in',
          ),
        ),
        'and_or' => 0,
      ),
    ),
  );
  $context->reactions = array(
    'variable' => array(
      '#set' => array(
        'cache' => 0,
        'cache_lifetime' => 0,
        'page_compression' => 0,
        'preprocess_css' => 0,
        'preprocess_js' => 0,
      ),
      'cache' => 1,
      'cache_lifetime' => '3600',
      'page_compression' => '1',
      'preprocess_css' => 1,
      'preprocess_js' => 1,
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('hackerspace::server');
  $export['server-production'] = $context;

  return $export;
}
