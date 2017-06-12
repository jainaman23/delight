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
  kpr($variables);
}
