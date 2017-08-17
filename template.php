<?php
/**
 * @file
 *   Template File
 */

/**
 * Implements template_preprocess_page(&$variables).
 */
function delight_preprocess_page(&$variables) {
  $directory = drupal_get_path('theme', 'delight');
  drupal_add_css($directory . '/css/delight.min.css');
  // kpr($variables);
}
