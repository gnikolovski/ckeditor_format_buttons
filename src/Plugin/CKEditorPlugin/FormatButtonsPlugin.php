<?php

namespace Drupal\ckeditor_format_buttons\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "format_buttons" plugin.
 *
 * @CKEditorPlugin(
 *   id = "format_buttons",
 *   label = @Translation("Format Buttons")
 * )
 */
class FormatButtonsPlugin extends CKEditorPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return [
      'h1' => [
        'label' => $this->t('Heading 1'),
        'image' => base_path() . 'libraries/format_buttons/icons/h1.png',
      ],
      'h2' => [
        'label' => $this->t('Heading 2'),
        'image' => base_path() . 'libraries/format_buttons/icons/h2.png',
      ],
      'h3' => [
        'label' => $this->t('Heading 3'),
        'image' => base_path() . 'libraries/format_buttons/icons/h3.png',
      ],
      'h4' => [
        'label' => $this->t('Heading 4'),
        'image' => base_path() . 'libraries/format_buttons/icons/h4.png',
      ],
      'h5' => [
        'label' => $this->t('Heading 5'),
        'image' => base_path() . 'libraries/format_buttons/icons/h5.png',
      ],
      'h6' => [
        'label' => $this->t('Heading 6'),
        'image' => base_path() . 'libraries/format_buttons/icons/h6.png',
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return 'libraries/format_buttons/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

}
