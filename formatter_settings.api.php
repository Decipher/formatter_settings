<?php
/**
 * @file
 * Hooks provided by the Formatter Settings module.
 */

/**
 * Returns form elements for a formatter's settings.
 *
 * @param $content_type
 *   The Content Type of the Node the Formatter is attached to.
 * @param $field_name
 *   The name of the Field the Formatter is attached to.
 * @param $formatter_name
 *   The name of the Formatter being used.
 * @param $settings
 *   An array containing the context specific Formatter Settings.
 *
 * @return
 *   The form elements for the formatter settings.
 */
function hook_formatter_settings_form($content_type, $field_name, $formatter_name, $settings) {
  $element = array();

  if ($formatter_name == 'trimmed') {
    $element['trim_length'] = array(
      '#title' => t('Trim length'),
      '#type' => 'textfield',
      '#size' => 10,
      '#default_value' => isset($settings['trim_length']) ? $settings['trim_length'] : 600,
      '#required' => TRUE,
    );
  }

  return $element;
}

/**
 * Returns a short summary for the current formatter settings of an instance.
 *
 * @param $content_type
 *   The Content Type of the Node the Formatter is attached to.
 * @param $field_name
 *   The name of the Field the Formatter is attached to.
 * @param $formatter_name
 *   The name of the Formatter being used.
 * @param $settings
 *   An array containing the context specific Formatter Settings.
 *
 * @return
 *   A string containing a short summary of the formatter settings.
 */
function hook_formatter_settings_summary($content_type, $field_name, $formatter_name, $settings) {
  $summary = '';

  if ($formatter_name == 'trimmed') {
    $summary = t('Trim length') . ': ' . (isset($settings['trim_length']) ? $settings['trim_length'] : 600);
  }

  return $summary;
}
