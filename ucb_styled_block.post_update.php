<?php

/**
 * @file
 * Post-update hooks for the CU Boulder Styled Block module.
 */

/**
 * Add alert background style options to ucb_styled_block configuration.
 *
 * Ensures existing sites get the new class mappings so the background style
 * class applies correctly in the template.
 */
function ucb_styled_block_post_update_add_alert_background_styles(): void {
  $config = \Drupal::configFactory()->getEditable('ucb_styled_block.configuration');
  $background_styles = $config->get('block_styles.background_style') ?: [];

  $alert_options = [
    'bs_background_style_alert_red' => 'bs-background-styled bs-background-alert-red',
    'bs_background_style_alert_orange' => 'bs-background-styled bs-background-alert-orange',
    'bs_background_style_alert_yellow' => 'bs-background-styled bs-background-alert-yellow',
    'bs_background_style_alert_pink' => 'bs-background-styled bs-background-alert-pink',
  ];

  foreach ($alert_options as $key => $output) {
    if (!isset($background_styles[$key])) {
      $background_styles[$key] = $output;
    }
  }

  $block_styles = $config->get('block_styles') ?: [];
  $block_styles['background_style'] = $background_styles;
  $config->set('block_styles', $block_styles);
  $config->save();
}

/**
 * Add Alert Pink background style option to ucb_styled_block configuration.
 */
function ucb_styled_block_post_update_add_alert_pink_background_style(): void {
  $config = \Drupal::configFactory()->getEditable('ucb_styled_block.configuration');
  $background_styles = $config->get('block_styles.background_style') ?: [];

  if (!isset($background_styles['bs_background_style_alert_pink'])) {
    $background_styles['bs_background_style_alert_pink'] = 'bs-background-styled bs-background-alert-pink';
    $block_styles = $config->get('block_styles') ?: [];
    $block_styles['background_style'] = $background_styles;
    $config->set('block_styles', $block_styles);
    $config->save();
  }
}
