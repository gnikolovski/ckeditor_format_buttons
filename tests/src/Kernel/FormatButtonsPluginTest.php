<?php

namespace Drupal\Tests\ckeditor_format_buttons\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Tests FormatButtons plugin.
 *
 * @group ckeditor_format_buttons
 */
class FormatButtonsPluginTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = [
    'ckeditor',
    'ckeditor_format_buttons',
  ];

  /**
   * Tests that FormatButtons plugin exists.
   */
  public function testFormatButtons() {
    $plugin_manager = \Drupal::service('plugin.manager.ckeditor.plugin');
    $plugin_definition = $plugin_manager->getDefinition('format_buttons');
    $this->assertEquals($plugin_definition['id'], 'format_buttons');
    $this->assertEquals($plugin_definition['label'], 'Format Buttons');
    $this->assertEquals($plugin_definition['class'], 'Drupal\ckeditor_format_buttons\Plugin\CKEditorPlugin\FormatButtonsPlugin');
    $this->assertEquals($plugin_definition['provider'], 'ckeditor_format_buttons');
  }

}
