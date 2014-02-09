<?php
/**
 * @file
 * hackerspace_core.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function hackerspace_core_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'server-development';
  $context->description = '';
  $context->tag = 'hackerspace::server';
  $context->conditions = array(
    'server_vars' => array(
      'values' => array(
        'variables' => array(
          0 => array(
            'name' => 'HTTP_HOST',
            'op' => 'strpos',
            'negate' => 1,
            'value' => 'hackerspace.org.au',
          ),
        ),
        'and_or' => 0,
      ),
    ),
  );
  $context->reactions = array(
    'module' => array(
      'stage_file_proxy' => 'enable',
    ),
    'variable' => array(
      'stage_file_proxy_origin' => 'http://hackerspace.org.au',
      'stage_file_proxy_hotlink' => 1,
      'stage_file_proxy_origin_dir' => 'sites/hackerspace.org.au/files',
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('hackerspace::server');
  $export['server-development'] = $context;

  return $export;
}
