<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_prefix_my_options';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'CSF Demo',
  'menu_slug'  => 'csf-demo',
) );

//
// Create a section
//
CSF::createSection( $prefix, array(
  'title'  => 'Overview',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

    //
    // A text field
    //
    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

    array(
      'id'    => 'opt-textarea',
      'type'  => 'textarea',
      'title' => 'Textarea',
      'help'  => 'The help text of the field.',
    ),

    array(
      'id'    => 'opt-upload',
      'type'  => 'upload',
      'title' => 'Upload',
    ),

    array(
      'id'    => 'opt-switcher',
      'type'  => 'switcher',
      'title' => 'Switcher',
      'label' => 'The label text of the switcher.',
    ),

    array(
      'id'      => 'opt-color',
      'type'    => 'color',
      'title'   => 'Color',
      'default' => '#3498db',
    ),

    array(
      'id'    => 'opt-checkbox',
      'type'  => 'checkbox',
      'title' => 'Checkbox',
      'label' => 'The label text of the checkbox.',
    ),

    array(
      'id'      => 'opt-radio',
      'type'    => 'radio',
      'title'   => 'Radio',
      'options' => array(
        'yes'   => 'Yes, Please.',
        'no'    => 'No, Thank you.',
      ),
      'default' => 'yes',
    ),

    array(
      'id'          => 'opt-select',
      'type'        => 'select',
      'title'       => 'Select',
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
      ),
    ),

    array(
      'id'      => 'opt-image-select',
      'type'    => 'image_select',
      'title'   => 'Image Select',
      'options' => array(
        'opt-1' => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'opt-2' => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'opt-3' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'opt-4' => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'opt-5' => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'default' => 'opt-1',
    ),

    array(
      'id'    => 'opt-background',
      'type'  => 'background',
      'title' => 'Background',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'success',
      'content' => 'A <strong>notice</strong> field with <strong>success</strong> style.',
    ),

    array(
      'id'    => 'opt-icon',
      'type'  => 'icon',
      'title' => 'Icon',
    ),

    array(
      'id'    => 'opt-alt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

    array(
      'id'         => 'opt-alt-textarea',
      'type'       => 'textarea',
      'title'      => 'Textarea',
      'subtitle'   => 'A textarea with shortcoder.',
      'shortcoder' => 'csf_demo_shortcodes',
    ),

  )
) );

//
// Basic Fields
//
CSF::createSection( $prefix, array(
  'id'    => 'basic_fields',
  'title' => 'Basic Fields',
  'icon'  => 'fas fa-plus-circle',
) );

//
// Field: text
//
CSF::createSection( $prefix, array(
  'parent'      => 'basic_fields',
  'title'       => 'Text',
  'icon'        => 'far fa-square',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=text" target="_blank">Field: text</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-text-1',
      'type'  => 'text',
      'title' => 'Text',
    ),

    array(
      'id'      => 'opt-text-2',
      'type'    => 'text',
      'title'   => 'Text with default',
      'default' => 'This is default value bla bla bla',
    ),

    array(
      'id'       => 'opt-text-3',
      'type'     => 'text',
      'title'    => 'Text field ingenuity',
      'subtitle' => 'The field of subtitle text.',
      'help'     => 'The field of help text.',
      'before'   => '<p>The field of before text.</p>',
      'after'    => '<p>The field of after text.</p>',
    ),

    array(
      'id'          => 'opt-text-4',
      'type'        => 'text',
      'title'       => 'Text with placeholder',
      'placeholder' => 'Typed something...'
    ),

    array(
      'id'         => 'opt-text-5',
      'type'       => 'text',
      'title'      => 'Text readonly',
      'attributes' => array(
        'readonly' => 'readonly'
      ),
      'default'    => 'readonly text field, can not be changed'
    ),

    array(
      'id'          => 'opt-text-6',
      'type'        => 'text',
      'title'       => 'Text with maxlength (5)',
      'attributes'  => array(
        'maxlength' => '5'
      ),
      'default'     => 'abc',
    ),

    array(
      'id'         => 'opt-text-7',
      'type'       => 'text',
      'title'      => 'Text usign custom styles',
      'attributes' => array(
        'style'    => 'width: 100%; height: 40px; border-color: #93C054;'
      ),
    ),

    array(
      'id'    => 'opt-text-8',
      'type'  => 'text',
      'after' => '<p>It shows full width if there is no field of title.</p>',
    ),

  )
) );

//
// Field: textarea
//
CSF::createSection( $prefix, array(
  'parent'      => 'basic_fields',
  'title'       => 'Textarea',
  'icon'        => 'far fa-square',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=textarea" target="_blank">Field: textrea</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-textarea-1',
      'type'  => 'textarea',
      'title' => 'Textarea',
    ),

    array(
      'id'      => 'opt-textarea-2',
      'type'    => 'textarea',
      'title'   => 'Textarea wtih default',
      'default' => 'This is default value bla bla bla',
    ),

    array(
      'id'          => 'opt-textarea-3',
      'type'        => 'textarea',
      'title'       => 'Text with placeholder',
      'placeholder' => 'Typed something...'
    ),

    array(
      'id'         => 'opt-textarea-4',
      'type'       => 'textarea',
      'title'      => 'Textarea with shortcoder',
      'shortcoder' => 'csf_demo_shortcodes',
    ),

    array(
      'id'       => 'opt-textarea-5',
      'type'     => 'textarea',
      'title'    => 'Textarea field ingenuity',
      'subtitle' => 'The field of subtitle text.',
      'help'     => 'The field of help text.',
      'before'   => '<p>The field of before text.</p>',
      'after'    => '<p>The field of after text.</p>',
    ),

    array(
      'id'    => 'opt-textarea-6',
      'type'  => 'textarea',
      'after' => '<p>It shows full width if there is no field of title.</p>',
    ),

  )
) );

//
// Field: select
//
CSF::createSection( $prefix, array(
  'parent'      => 'basic_fields',
  'title'       => 'Select',
  'icon'        => 'fas fa-list',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=select" target="_blank">Field: select</a>',
  'fields'      => array(

    array(
      'id'          => 'opt-select-1',
      'type'        => 'select',
      'title'       => 'Select',
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
      ),
    ),

    array(
      'id'          => 'opt-select-2',
      'type'        => 'select',
      'title'       => 'Select with default',
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
      ),
      'default'     => 'opt-2'
    ),

    array(
      'id'          => 'opt-select-3',
      'type'        => 'select',
      'title'       => 'Select with group related options',
      'placeholder' => 'Select an option',
      'options'     => array(
        'Group 1'   => array(
          'opt-1'   => 'Option 1',
          'opt-2'   => 'Option 2',
          'opt-3'   => 'Option 3',
        ),
        'Group 2'   => array(
          'opt-4'   => 'Option 4',
          'opt-5'   => 'Option 5',
          'opt-6'   => 'Option 6',
        ),
        'Group 3'   => array(
          'opt-7'   => 'Option 7',
          'opt-8'   => 'Option 8',
          'opt-9'   => 'Option 9',
        ),
      ),
    ),

    array(
      'id'         => 'opt-select-4',
      'type'       => 'select',
      'title'      => 'Select with multiple choice',
      'multiple'   => true,
      'attributes' => array(
        'style'    => 'min-width: 200px;'
      ),
      'options'    => array(
        'opt-1'    => 'Option 1',
        'opt-2'    => 'Option 2',
        'opt-3'    => 'Option 3',
        'opt-4'    => 'Option 4',
        'opt-5'    => 'Option 5',
        'opt-6'    => 'Option 6',
      ),
      'default'    => array( 'opt-2', 'opt-3' ),
    ),

    array(
      'type'    => 'notice',
      'style'   => 'info',
      'content' => 'Select with <strong>chosen</strong> style.',
    ),

    array(
      'id'          => 'opt-select-5',
      'type'        => 'select',
      'title'       => 'Select with Chosen',
      'chosen'      => true,
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
        'opt-4'     => 'Option 4',
        'opt-5'     => 'Option 5',
        'opt-6'     => 'Option 6',
      ),
    ),

    array(
      'id'          => 'opt-select-6',
      'type'        => 'select',
      'title'       => 'Select with multiple Chosen',
      'chosen'      => true,
      'multiple'    => true,
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
        'opt-4'     => 'Option 4',
        'opt-5'     => 'Option 5',
        'opt-6'     => 'Option 6',
      ),
    ),

    array(
      'id'          => 'opt-select-7',
      'type'        => 'select',
      'title'       => 'Select with multiple Chosen and Sortable',
      'chosen'      => true,
      'multiple'    => true,
      'sortable'    => true,
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
        'opt-4'     => 'Option 4',
        'opt-5'     => 'Option 5',
        'opt-6'     => 'Option 6',
      ),
      'default'     => array( 'opt-1', 'opt-2', 'opt-3' )
    ),

    array(
      'id'          => 'opt-select-8',
      'type'        => 'select',
      'title'       => 'Select with multiple AJAX search Pages',
      'chosen'      => true,
      'multiple'    => true,
      'sortable'    => true,
      'ajax'        => true,
      'options'     => 'pages',
      'placeholder' => 'Select pages',
    ),

    array(
      'id'          => 'opt-select-9',
      'type'        => 'select',
      'title'       => 'Select with multiple AJAX search Posts',
      'chosen'      => true,
      'multiple'    => true,
      'sortable'    => true,
      'ajax'        => true,
      'options'     => 'posts',
      'placeholder' => 'Select posts',
    ),

    array(
      'id'          => 'opt-select-10',
      'type'        => 'select',
      'title'       => 'Select with AJAX search Category',
      'chosen'      => true,
      'ajax'        => true,
      'options'     => 'category',
      'placeholder' => 'Select a category',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'info',
      'content' => 'Select with <strong>predefined wp query</strong> options.',
    ),

    array(
      'id'          => 'opt-select-11',
      'type'        => 'select',
      'title'       => 'Select with pages',
      'placeholder' => 'Select a page',
      'options'     => 'pages',
    ),

    array(
      'id'          => 'opt-select-12',
      'type'        => 'select',
      'title'       => 'Select with posts',
      'placeholder' => 'Select a post',
      'options'     => 'posts',
    ),

    array(
      'id'          => 'opt-select-13',
      'type'        => 'select',
      'title'       => 'Select with categories',
      'placeholder' => 'Select a category',
      'options'     => 'categories',
    ),

    array(
      'id'          => 'opt-select-14',
      'type'        => 'select',
      'title'       => 'Select with menus',
      'placeholder' => 'Select a menu',
      'options'     => 'menus',
    ),

    array(
      'id'          => 'opt-select-15',
      'type'        => 'select',
      'title'       => 'Select with locations',
      'placeholder' => 'Select a location',
      'options'     => 'locations',
    ),

    array(
      'id'          => 'opt-select-16',
      'type'        => 'select',
      'title'       => 'Select with sidebars',
      'placeholder' => 'Select a sidebar',
      'options'     => 'sidebars',
    ),

    array(
      'id'          => 'opt-select-17',
      'type'        => 'select',
      'title'       => 'Select with wp roles',
      'placeholder' => 'Select a role',
      'options'     => 'roles',
    ),

    array(
      'id'          => 'opt-select-18',
      'type'        => 'select',
      'title'       => 'Select with users',
      'placeholder' => 'Select a user',
      'options'     => 'users',
    ),

    array(
      'id'          => 'opt-select-19',
      'type'        => 'select',
      'title'       => 'Select with post type',
      'placeholder' => 'Select a post type',
      'options'     => 'post_types',
    ),

    array(
      'id'          => 'opt-select-20',
      'type'        => 'select',
      'title'       => 'Select with CPT (custom post type) posts',
      'placeholder' => 'Select a post',
      'options'     => 'posts',
      'query_args'  => array(
        'post_type' => 'your_post_type_name',
      ),
    ),

    array(
      'id'          => 'opt-select-21',
      'type'        => 'select',
      'title'       => 'Select with CPT (custom post type) categories',
      'placeholder' => 'Select a category',
      'options'     => 'categories',
      'query_args'  => array(
        'taxonomy'  => 'your_taxonomy_name',
      ),
    ),

  )
) );

//
// Field: checkbox
//
CSF::createSection( $prefix, array(
  'parent'      => 'basic_fields',
  'title'       => 'Checkbox',
  'icon'        => 'fas fa-check-square',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=checkbox" target="_blank">Field: checkbox</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-checkbox-1',
      'type'  => 'checkbox',
      'title' => 'Checkbox',
      'label' => 'The label text of the checkbox.',
    ),

    array(
      'id'      => 'opt-checkbox-2',
      'type'    => 'checkbox',
      'title'   => 'Checkbox with default',
      'label'   => 'The label text of the checkbox.',
      'default' => true,
    ),

    array(
      'id'      => 'opt-checkbox-3',
      'type'    => 'checkbox',
      'title'   => 'Checkbox with multiple choice',
      'options' => array(
        'opt-1' => 'Option 1',
        'opt-2' => 'Option 2',
        'opt-3' => 'Option 3',
      ),
    ),

    array(
      'id'      => 'opt-checkbox-4',
      'type'    => 'checkbox',
      'title'   => 'Checkbox inline with multiple choice',
      'inline'  => true,
      'options' => array(
        'opt-1' => 'Option 1',
        'opt-2' => 'Option 2',
        'opt-3' => 'Option 3',
      ),
    ),

    array(
      'id'      => 'opt-checkbox-5',
      'type'    => 'checkbox',
      'title'   => 'Checkbox multiple choice with default',
      'options' => array(
        'opt-1' => 'Option 1',
        'opt-2' => 'Option 2',
        'opt-3' => 'Option 3',
      ),
      'default' => array( 'opt-1', 'opt-2' )
    ),

    array(
      'id'        => 'opt-checkbox-6',
      'type'      => 'checkbox',
      'title'     => 'Checkbox with group related options',
      'options'   => array(
        'Group 1' => array(
          'opt-1' => 'Option 1',
          'opt-2' => 'Option 2',
          'opt-3' => 'Option 3',
        ),
        'Group 2' => array(
          'opt-4' => 'Option 4',
          'opt-5' => 'Option 5',
          'opt-6' => 'Option 6',
        ),
      ),
    ),

    array(
      'id'       => 'opt-checkbox-7',
      'type'     => 'checkbox',
      'title'    => 'Checkbox testing on many items',
      'options'  => array(
        'opt-1'  => 'Option 1',
        'opt-2'  => 'Option 2',
        'opt-3'  => 'Option 3',
        'opt-4'  => 'Option 4',
        'opt-5'  => 'Option 5',
        'opt-6'  => 'Option 6',
        'opt-7'  => 'Option 7',
        'opt-8'  => 'Option 8',
        'opt-9'  => 'Option 9',
        'opt-10' => 'Option 10',
        'opt-11' => 'Option 11',
        'opt-12' => 'Option 12',
        'opt-13' => 'Option 13',
        'opt-14' => 'Option 14',
        'opt-15' => 'Option 15',
      ),
      'desc'     => 'Vertical scroll showing automatically after add many items',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'info',
      'content' => 'Checkbox with <strong>predefined wp query</strong> options similar like <strong>select</strong> field. (see select field for all options models.)',
    ),

    array(
      'id'      => 'opt-checkbox-8',
      'type'    => 'checkbox',
      'title'   => 'Checkbox with categories',
      'options' => 'categories',
    ),

  )
) );

//
// Field: radio
//
CSF::createSection( $prefix, array(
  'parent'      => 'basic_fields',
  'title'       => 'Radio',
  'icon'        => 'fas fa-dot-circle',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=radio" target="_blank">Field: radio</a>',
  'fields'      => array(

    array(
      'id'      => 'opt-radio-1',
      'type'    => 'radio',
      'title'   => 'Radio',
      'options' => array(
        'opt-1' => 'Option 1',
        'opt-2' => 'Option 2',
        'opt-3' => 'Option 3',
      ),
    ),

    array(
      'id'      => 'opt-radio-2',
      'type'    => 'radio',
      'title'   => 'Radio with default',
      'options' => array(
        'opt-1' => 'Option 1',
        'opt-2' => 'Option 2',
        'opt-3' => 'Option 3',
      ),
      'default' => 'opt-2',
    ),

    array(
      'id'      => 'opt-radio-3',
      'type'    => 'radio',
      'title'   => 'Radio with inline style',
      'inline'  => true,
      'options' => array(
        'opt-1' => 'Option 1',
        'opt-2' => 'Option 2',
        'opt-3' => 'Option 3',
      ),
    ),

    array(
      'id'        => 'opt-radio-4',
      'type'      => 'radio',
      'title'     => 'Radio with group related options',
      'options'   => array(
        'Group 1' => array(
          'opt-1' => 'Option 1',
          'opt-2' => 'Option 2',
          'opt-3' => 'Option 3',
        ),
        'Group 2' => array(
          'opt-4' => 'Option 4',
          'opt-5' => 'Option 5',
          'opt-6' => 'Option 6',
        ),
      ),
    ),

    array(
      'id'       => 'opt-radio-5',
      'type'     => 'radio',
      'title'    => 'Radio testing on many items',
      'options'  => array(
        'opt-1'  => 'Option 1',
        'opt-2'  => 'Option 2',
        'opt-3'  => 'Option 3',
        'opt-4'  => 'Option 4',
        'opt-5'  => 'Option 5',
        'opt-6'  => 'Option 6',
        'opt-7'  => 'Option 7',
        'opt-8'  => 'Option 8',
        'opt-9'  => 'Option 9',
        'opt-10' => 'Option 10',
        'opt-11' => 'Option 11',
        'opt-12' => 'Option 12',
        'opt-13' => 'Option 13',
        'opt-14' => 'Option 14',
        'opt-15' => 'Option 15',
      ),
      'desc'     => 'Vertical scroll showing automatically after add many items'
    ),

    array(
      'type'    => 'notice',
      'style'   => 'info',
      'content' => 'Radio with <strong>predefined wp query</strong> options similar like <strong>select</strong> field. (see select field for all options models.)',
    ),

    array(
      'id'      => 'opt-radio-6',
      'type'    => 'radio',
      'title'   => 'Radio with categories',
      'options' => 'categories',
    ),

  )
) );

//
// Repeater Fields
//
CSF::createSection( $prefix, array(
  'id'    => 'repeater_fields',
  'title' => 'Repeater Fields',
  'icon'  => 'far fa-clone',
) );

//
// Field: repeater
//
CSF::createSection( $prefix, array(
  'parent'      => 'repeater_fields',
  'title'       => 'Repeater',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=repeater" target="_blank">Field: repeater</a>',
  'fields'      => array(

    array(
      'id'     => 'opt-repeater-1',
      'type'   => 'repeater',
      'title'  => 'Repeater',
      'fields' => array(
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Text'
        ),
      ),
    ),

    array(
      'id'     => 'opt-repeater-2',
      'type'   => 'repeater',
      'title'  => 'Repeater with default',
      'fields' => array(
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Text',
        ),
      ),
      'default' => array(
        array(
          'opt-text' => 'Text default 1',
        ),
        array(
          'opt-text' => 'Text default 2',
        ),
      ),
    ),

    array(
      'id'     => 'opt-repeater-3',
      'type'   => 'repeater',
      'title'  => 'Repeater with multiple fields',
      'fields' => array(
        array(
          'id'    => 'opt-switcher',
          'type'  => 'switcher',
          'title' => 'Switcher',
        ),
        array(
          'id'    => 'opt-color',
          'type'  => 'color',
          'title' => 'Color',
        ),
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Text',
        ),
      ),
      'default' => array(
        array(
          'opt-switcher' => false,
          'opt-color'    => '#3498db',
          'opt-text'     => 'Text default 1',
        ),
      ),
    ),

    array(
      'id'           => 'opt-repeater-4',
      'type'         => 'repeater',
      'title'        => 'Repeater with limited (min - max items)',
      'subtitle'     => 'The maximum/minimum number of items the user can add. (In this example min:1, max:3)',
      'button_title' => 'Add Text',
      'min'          => 1,
      'max'          => 3,
      'fields'       => array(
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Text',
        ),
      ),
      'default' => array(
        array(
          'opt-text' => 'Text default 1',
        ),
        array(
          'opt-text' => 'Text default 2',
        ),
      ),
    ),

    array(
      'id'       => 'opt-repeater-6',
      'type'     => 'repeater',
      'title'    => 'Repeater nested repeater',
      'subtitle' => 'Can be added unlimited nested repeater',
      'fields'   => array(
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Text',
        ),
        array(
          'id'     => 'opt-repeater-6-nested-1',
          'type'   => 'repeater',
          'title'  => 'Repeater',
          'fields' => array(
            array(
              'id'    => 'opt-text',
              'type'  => 'text',
              'title' => 'Text'
            ),
          ),
        ),
      ),
      'default' => array(
        array(
          'opt-text' => 'Text default 1',
          'opt-repeater-6-nested-1' => array(
            array(
              'opt-text' => 'Text default 1',
            ),
            array(
              'opt-text' => 'Text default 2',
            ),
          ),
        ),
      ),
    ),

  )
) );

//
// Field: group
//
CSF::createSection( $prefix, array(
  'parent'      => 'repeater_fields',
  'title'       => 'Group',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=group" target="_blank">Field: group</a>',
  'fields'      => array(

    array(
      'id'     => 'opt-group-1',
      'type'   => 'group',
      'title'  => 'Group',
      'fields' => array(
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Text',
        ),
        array(
          'id'    => 'opt-switcher',
          'type'  => 'switcher',
          'title' => 'Switcher',
        ),
        array(
          'id'    => 'opt-textarea',
          'type'  => 'textarea',
          'title' => 'Textarea',
        ),
      )
    ),

    array(
      'id'     => 'opt-group-2',
      'type'   => 'group',
      'title'  => 'Group with default',
      'fields' => array(
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Text',
        ),
        array(
          'id'    => 'opt-switcher',
          'type'  => 'switcher',
          'title' => 'Switcher',
        ),
        array(
          'id'    => 'opt-textarea',
          'type'  => 'textarea',
          'title' => 'Textarea',
        ),
      ),
      'default' => array(
        array(
          'opt-text'     => 'Some text 1',
          'opt-switcher' => true,
          'opt-textarea' => 'Some textarea content 1',
        ),
        array(
          'opt-text'     => 'Some text 2',
          'opt-switcher' => false,
          'opt-textarea' => 'Some textarea content 2',
        ),
      )
    ),

    array(
      'id'       => 'opt-group-3',
      'type'     => 'group',
      'title'    => 'Group with limited (min - max items)',
      'subtitle' => 'The maximum/minimum number of items the user can add. (In this example min:1, max:3)',
      'min'      => 1,
      'max'      => 3,
      'fields'   => array(
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Text',
        ),
        array(
          'id'    => 'opt-textarea',
          'type'  => 'textarea',
          'title' => 'Textarea',
        ),
      ),
      'default' => array(
        array(
          'opt-text'     => 'Limited text 1',
          'opt-textarea' => 'Limited textarea content 1',
        ),
        array(
          'opt-text'     => 'Limited text 2',
          'opt-textarea' => 'Limited textarea content 2',
        ),
      )
    ),

    array(
      'id'       => 'opt-group-4',
      'type'     => 'group',
      'title'    => 'Group with WP Editor',
      'subtitle' => 'WP Editor integrated for Ajax Call.',
      'fields'   => array(
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Text',
        ),
        array(
          'id'    => 'opt-editor',
          'type'  => 'wp_editor',
          'title' => 'WP Editor',
        ),
      ),
      'default' => array(
        array(
          'opt-text'   => 'WP Editor 1',
          'opt-editor' => 'Editor content 1',
        ),
        array(
          'opt-text'   => 'WP Editor 2',
          'opt-editor' => 'Editor content 2',
        ),
      )
    ),

    array(
      'id'       => 'opt-group-5',
      'type'     => 'group',
      'title'    => 'Group nested',
      'subtitle' => 'Can be added unlimited nested groups',
      'fields'   => array(
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Text',
        ),
        array(
          'id'     => 'opt-group-5-sublevel-1',
          'type'   => 'group',
          'title'  => 'Group Nested',
          'fields' => array(
            array(
              'id'    => 'opt-text',
              'type'  => 'text',
              'title' => 'Text',
            ),
            array(
              'id'     => 'opt-group-5-sublevel-2',
              'type'   => 'group',
              'title'  => 'Group Nested',
              'fields' => array(
                array(
                  'id'    => 'opt-text',
                  'type'  => 'text',
                  'title' => 'Text',
                ),
                array(
                  'id'    => 'opt-switcher',
                  'type'  => 'switcher',
                  'title' => 'Switcher',
                ),
                array(
                  'id'    => 'opt-textarea',
                  'type'  => 'textarea',
                  'title' => 'Textarea',
                ),
              )
            ),
            array(
              'id'    => 'opt-switcher',
              'type'  => 'switcher',
              'title' => 'Switcher',
            ),
            array(
              'id'    => 'opt-textarea',
              'type'  => 'textarea',
              'title' => 'Textarea',
            ),
          )
        ),
        array(
          'id'    => 'opt-switcher',
          'type'  => 'switcher',
          'title' => 'Switcher',
        ),
        array(
          'id'    => 'opt-textarea',
          'type'  => 'textarea',
          'title' => 'Textarea',
        ),
      ),
      'default' => array(

        // top level defaults
        array(
          'opt-text' => 'Top Level 1',

          // sub level 1 defaults
          'opt-group-5-sublevel-1' => array(
            array(
              'opt-text' => 'Sub Level 1',

              // sub level 2 defaults
              'opt-group-5-sublevel-2' => array(
                array(
                  'opt-text' => 'Sub Sub Level 1',
                ),
                array(
                  'opt-text' => 'Sub Sub Level 2',
                )
              ),
            ),
            array(
              'opt-text' => 'Sub Level 2',
            )
          ),
        ),

        // top level defaults
        array(
          'opt-text' => 'Top Level 2',
        ),
      )
    ),

    array(
      'id'     => 'opt-group-6',
      'type'   => 'group',
      'title'  => 'Group with Repeater Field',
      'fields' => array(
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Text',
        ),
        array(
          'id'     => 'opt-group-6-repeater',
          'type'   => 'repeater',
          'title'  => 'Repeater',
          'fields' => array(
            array(
              'id'    => 'opt-text',
              'type'  => 'text',
              'title' => 'Text'
            ),
          ),
        ),
        array(
          'id'    => 'opt-switcher',
          'type'  => 'switcher',
          'title' => 'Switcher',
        ),
        array(
          'id'    => 'opt-textarea',
          'type'  => 'textarea',
          'title' => 'Textarea',
        ),
      ),
      'default' => array(
        array(
          'opt-text' => 'Some text 1',
          'opt-group-6-repeater' => array(
            array(
              'opt-text' => 'Some text 1',
            ),
              array(
              'opt-text' => 'Some text 2',
            ),
          )
        ),
      )
    ),

    array(
      'id'     => 'opt-group-7',
      'type'   => 'group',
      'title'  => 'Group with static prefix of title',
      'subtitle'  => 'accordion_title_prefix => "Static Prefix:"',
      'accordion_title_prefix' => 'Static Prefix:',
      'fields' => array(
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Text',
        ),
        array(
          'id'    => 'opt-switcher',
          'type'  => 'switcher',
          'title' => 'Switcher',
        ),
        array(
          'id'    => 'opt-textarea',
          'type'  => 'textarea',
          'title' => 'Textarea',
        ),
      ),
      'default' => array(
        array(
          'opt-text'     => 'Some text 1',
          'opt-switcher' => true,
          'opt-textarea' => 'Some textarea content 1',
        ),
        array(
          'opt-text'     => 'Some text 2',
          'opt-switcher' => false,
          'opt-textarea' => 'Some textarea content 2',
        ),
      )
    ),

    array(
      'id'     => 'opt-group-8',
      'type'   => 'group',
      'title'  => 'Group with title numbers',
      'subtitle'  => 'accordion_title_number => true',
      'accordion_title_number' => true,
      'fields' => array(
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Text',
        ),
        array(
          'id'    => 'opt-switcher',
          'type'  => 'switcher',
          'title' => 'Switcher',
        ),
        array(
          'id'    => 'opt-textarea',
          'type'  => 'textarea',
          'title' => 'Textarea',
        ),
      ),
      'default' => array(
        array(
          'opt-text'     => 'Some text 1',
          'opt-switcher' => true,
          'opt-textarea' => 'Some textarea content 1',
        ),
        array(
          'opt-text'     => 'Some text 2',
          'opt-switcher' => false,
          'opt-textarea' => 'Some textarea content 2',
        ),
      )
    ),

  )
) );

//
// Combine Fields
//
CSF::createSection( $prefix, array(
  'id'    => 'combine_fields',
  'title' => 'Combine Fields',
  'icon'  => 'fas fa-bars',
) );

//
// Field: accordion
//
CSF::createSection( $prefix, array(
  'parent'      => 'combine_fields',
  'title'       => 'Accordion',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=accordion" target="_blank">Field: accordion</a>',
  'fields'      => array(

    array(
      'id'         => 'opt-accordion-1',
      'type'       => 'accordion',
      'title'      => 'Accordion',
      'accordions' => array(

        array(
          'title'  => 'Accordion 1',
          'fields' => array(
            array(
              'id'    => 'opt-text-1',
              'type'  => 'text',
              'title' => 'Text',
            ),
            array(
              'id'    => 'opt-switcher-1',
              'type'  => 'switcher',
              'title' => 'Switcher',
            ),
            array(
              'id'    => 'opt-textarea-1',
              'type'  => 'textarea',
              'title' => 'Textarea',
            ),
          )
        ),

        array(
          'title'  => 'Accordion 2',
          'fields' => array(
            array(
              'id'    => 'opt-text-2',
              'type'  => 'text',
              'title' => 'Text',
            ),
            array(
              'id'    => 'opt-color-1',
              'type'  => 'color',
              'title' => 'Color',
            ),
          )
        ),

      )
    ),

    array(
      'id'         => 'opt-accordion-2',
      'type'       => 'accordion',
      'title'      => 'Accordion with default',
      'accordions' => array(

        array(
          'title'  => 'Fields 1',
          'fields' => array(
            array(
              'id'    => 'opt-text-1',
              'type'  => 'text',
              'title' => 'Text 1',
            ),
            array(
              'id'    => 'opt-text-2',
              'type'  => 'text',
              'title' => 'Text 2',
            ),
          )
        ),

        array(
          'title'  => 'Fields 2',
          'fields' => array(
            array(
              'id'    => 'opt-color-1',
              'type'  => 'color',
              'title' => 'Color 1',
            ),
            array(
              'id'    => 'opt-color-2',
              'type'  => 'color',
              'title' => 'Color 2',
            ),
          )
        ),

        array(
          'title'  => 'Fields 3',
          'fields' => array(
            array(
              'id'    => 'opt-textarea-1',
              'type'  => 'textarea',
              'title' => 'Textarea 3',
            ),
            array(
              'id'    => 'opt-textarea-2',
              'type'  => 'textarea',
              'title' => 'Textarea 4',
            ),
          )
        ),

      ),
      'default' => array(
        'opt-text-1'     => 'This is text 1 default value',
        'opt-text-2'     => 'This is text 2 default value',
        'opt-color-1'    => '#1e73be',
        'opt-color-2'    => '#ffbc00',
        'opt-textarea-1' => 'This is textarea 1 default value',
        'opt-textarea-2' => 'This is textarea 2 default value',
      )
    ),

    array(
      'id'         => 'accordion_3',
      'type'       => 'accordion',
      'title'      => 'Accordion with custom icons',
      'accordions' => array(

        array(
          'title'  => 'Other 1',
          'icon'   => 'fas fa-check',
          'fields' => array(
            array(
              'id'    => 'opt-text-1',
              'type'  => 'text',
              'title' => 'Text 1',
            ),
          )
        ),

        array(
          'title'  => 'Other 2',
          'icon'   => 'fas fa-star',
          'fields' => array(
            array(
              'id'    => 'opt-text-2',
              'type'  => 'text',
              'title' => 'Text 2',
            ),
          )
        ),

      )
    ),

  )
) );

//
// Field: tabbed
//
CSF::createSection( $prefix, array(
  'parent'      => 'combine_fields',
  'title'       => 'Tabbed',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=tabbed" target="_blank">Field: tabbed</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-tabbed-1',
      'type'  => 'tabbed',
      'title' => 'Tabbed',
      'tabs'  => array(

        array(
          'title'  => 'Tab 1',
          'fields' => array(
            array(
              'id'    => 'opt-text-1',
              'type'  => 'text',
              'title' => 'Text 1',
            ),
            array(
              'id'    => 'opt-textarea-1',
              'type'  => 'textarea',
              'title' => 'Textarea 1',
            ),
          ),
        ),

        array(
          'title'  => 'Tab 2',
          'fields' => array(
            array(
              'id'    => 'opt-text-2',
              'type'  => 'text',
              'title' => 'Text 2',
            ),
            array(
              'id'    => 'opt-textarea-2',
              'type'  => 'textarea',
              'title' => 'Textarea 2',
            ),
          ),
        ),

      ),
    ),

    array(
      'id'    => 'opt-tabbed-2',
      'type'  => 'tabbed',
      'title' => 'Tabbed with default and icons',
      'tabs'  => array(
        array(
          'title'  => 'Fields 1',
          'icon'   => 'fas fa-check',
          'fields' => array(
            array(
              'id'    => 'opt-text-1',
              'type'  => 'text',
              'title' => 'Text 1',
            ),
            array(
              'id'    => 'opt-text-2',
              'type'  => 'text',
              'title' => 'Text 2',
            ),
          ),
        ),
        array(
          'title'  => 'Fields 2',
          'icon'   => 'fas fa-star',
          'fields' => array(
            array(
              'id'      => 'opt-color-1',
              'type'    => 'color',
              'title'   => 'Color 1',
            ),
            array(
              'id'      => 'opt-color-2',
              'type'    => 'color',
              'title'   => 'Color 2',
            ),
          ),
        ),
        array(
          'title'  => 'Fields 3',
          'icon'   => 'fas fa-cog',
          'fields' => array(
            array(
              'id'    => 'opt-textarea-1',
              'type'  => 'textarea',
              'title' => 'Textarea 1',
            ),
            array(
              'id'    => 'opt-textarea-2',
              'type'  => 'textarea',
              'title' => 'Textarea 2',
            ),
          ),
        ),
      ),
      'default' => array(
        'opt-text-1'     => 'This is text 1 default value',
        'opt-text-2'     => 'This is text 2 default value',
        'opt-color-1'    => '#1e73be',
        'opt-color-2'    => '#ffbc00',
        'opt-textarea-1' => 'This is textarea 1 default value',
        'opt-textarea-2' => 'This is textarea 2 default value',
      )
    ),

  )
) );

//
// Field: fieldset
//
CSF::createSection( $prefix, array(
  'parent' => 'combine_fields',
  'title'  => 'Fieldset',
  'fields' => array(

    array(
      'id'     => 'opt-fieldset-1',
      'type'   => 'fieldset',
      'title'  => 'Fieldset',
      'fields' => array(
        array(
          'id'    => 'opt-color',
          'type'  => 'color',
          'title' => 'Color',
        ),
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Text',
        ),
        array(
          'id'    => 'opt-textarea',
          'type'  => 'textarea',
          'title' => 'Textarea',
        ),
      ),
    ),

    array(
      'id'     => 'opt-fieldset-2',
      'type'   => 'fieldset',
      'title'  => 'Fieldset with default',
      'fields' => array(
        array(
          'type'    => 'subheading',
          'content' => 'Title of the fieldset',
        ),
        array(
          'id'      => 'opt-color',
          'type'    => 'color',
          'title'   => 'Color',
        ),
        array(
          'id'      => 'opt-text',
          'type'    => 'text',
          'title'   => 'Text',
        ),
        array(
          'id'      => 'opt-textarea',
          'type'    => 'textarea',
          'title'   => 'Textarea',
        ),
      ),
      'default' => array(
        'opt-color'    => '#1e73be',
        'opt-text'     => 'This is text default value',
        'opt-textarea' => 'This is textarea default value',
      )
    ),

  )
) );

//
// Media and Upload Fields
//
CSF::createSection( $prefix, array(
  'id'    => 'media_fields',
  'title' => 'Media and Upload Fields',
  'icon'  => 'fas fa-upload',
) );

//
// Field: media
//
CSF::createSection( $prefix, array(
  'parent'      => 'media_fields',
  'title'       => 'Media',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=media" target="_blank">Field: media</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-media-1',
      'type'  => 'media',
      'title' => 'Media',
    ),

    array(
      'id'      => 'opt-media-2',
      'type'    => 'media',
      'title'   => 'Media without preview',
      'preview' => false,
    ),

    array(
      'id'    => 'opt-media-3',
      'type'  => 'media',
      'title' => 'Media without url',
      'url'   => false,
    ),

    array(
      'id'      => 'opt-media-4',
      'type'    => 'media',
      'title'   => 'Media with only image type',
      'library' => 'image',
    ),

    array(
      'id'      => 'opt-media-5',
      'type'    => 'media',
      'title'   => 'Media with only video type',
      'library' => 'video',
    ),

    array(
      'id'      => 'opt-media-6',
      'type'    => 'media',
      'title'   => 'Media with only audio type',
      'library' => 'audio',
    ),

  )
) );

//
// Field: upload
//
CSF::createSection( $prefix, array(
  'parent'      => 'media_fields',
  'title'       => 'Upload',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=upload" target="_blank">Field: upload</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-upload-1',
      'type'  => 'upload',
      'title' => 'Upload',
    ),

    array(
      'id'          => 'opt-upload-2',
      'type'        => 'upload',
      'title'       => 'Upload with placeholder',
      'placeholder' => 'http://'
    ),

    array(
      'id'           => 'opt-upload-3',
      'type'         => 'upload',
      'title'        => 'Upload with only image type',
      'library'      => 'image',
      'button_title' => 'Upload Image',
    ),

    array(
      'id'           => 'opt-upload-4',
      'type'         => 'upload',
      'title'        => 'Upload with only video type',
      'library'      => 'video',
      'button_title' => 'Upload Video',
    ),

    array(
      'id'           => 'opt-upload-5',
      'type'         => 'upload',
      'title'        => 'Upload with only audio type',
      'library'      => 'audio',
      'button_title' => 'Upload Audio',
    ),

  )
) );

//
// Field: gallery
//
CSF::createSection( $prefix, array(
  'parent'      => 'media_fields',
  'title'       => 'Gallery',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=gallery" target="_blank">Field: gallery</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-gallery-1',
      'type'  => 'gallery',
      'title' => 'Gallery',
    ),

    array(
      'id'          => 'opt-gallery-2',
      'type'        => 'gallery',
      'title'       => 'Gallery with custom button names',
      'add_title'   => 'Add Image(s)',
      'edit_title'  => 'Edit Images',
      'clear_title' => 'Remove Images',
    ),

  )
) );

//
// Editor Fields
//
CSF::createSection( $prefix, array(
  'id'    => 'editor_fields',
  'title' => 'Editor Fields',
  'icon'  => 'fas fa-code',
) );

//
// Field: code_editor
//
CSF::createSection( $prefix, array(
  'parent'      => 'editor_fields',
  'title'       => 'Code Editor',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=code-editor" target="_blank">Field: code_editor</a>',
  'fields'      => array(

    array(
      'id'       => 'opt-code-editor-1',
      'type'     => 'code_editor',
      'title'    => 'Code Editor',
      'subtitle' => '<strong>Default Editor</strong> Using: theme: default and mode: htmlmixed',
    ),

    array(
      'id'       => 'code_editor_2',
      'type'     => 'code_editor',
      'title'    => 'Code Editor',
      'subtitle' => '<strong>HTML Editor</strong> Using: theme: shadowfox and mode: htmlmixed',
      'settings' => array(
        'theme'  => 'shadowfox',
        'mode'   => 'htmlmixed',
      ),
      'default'  =>'<div class="wrapper">
  <h1>Hello world</h1>
  <p>Lorem <strong>ipsum</strong> dollar.</p>
</div>',
    ),

    array(
      'id'       => 'opt-code-editor-2',
      'type'     => 'code_editor',
      'title'    => 'Code Editor',
      'subtitle' => '<strong>JS Editor</strong> Using: theme: dracula and mode: javascript',
      'settings' => array(
        'theme'  => 'dracula',
        'mode'   => 'javascript',
      ),
      'default' =>';(function( $, window, document, undefined ) {
  "use strict";

  $(document).ready( function() {

    // do stuff

  });

})( jQuery, window, document );',
    ),

    array(
      'id'       => 'opt-code-editor-3',
      'type'     => 'code_editor',
      'desc'     => '<strong>CSS Editor</strong> It shows full width if there is no field of title and using: theme: mbo and mode: css',
      'settings' => array(
        'theme'  => 'mbo',
        'mode'   => 'css',
      ),
      'default' =>'.wrapper {
  font-family: "Open Sans";
  font-size: 13px;
  width: 250px;
  height: 100px;
  color: #fff;
  background-color: #555;
}',
    ),

  )
) );

//
// Field: wp_editor
//
CSF::createSection( $prefix, array(
  'parent'      => 'editor_fields',
  'title'       => 'WP Editor',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=wp-editor" target="_blank">Field: wp_editor</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-wp-editor-1',
      'type'  => 'wp_editor',
      'title' => 'WP Editor',
    ),

    array(
      'id'            => 'opt-wp-editor-2',
      'type'          => 'wp_editor',
      'title'         => 'WP Editor with Custom Height and No Media Buttons',
      'subtitle'      => 'Settings:<br />height => 100px,<br />media_buttons => false',
      'height'        => '100px',
      'media_buttons' => false,
    ),

    array(
      'id'            => 'opt-wp-editor-3',
      'type'          => 'wp_editor',
      'title'         => 'WP Editor without QuickTags and Media Buttons',
      'subtitle'      => 'Settings:<br />height => 100px,<br />media_buttons => false,<br />quicktags => false',
      'height'        => '100px',
      'media_buttons' => false,
      'quicktags'     => false,
    ),

    array(
      'id'            => 'opt-wp-editor-4',
      'type'          => 'wp_editor',
      'title'         => 'WP Editor without Tinymce and Media Buttons',
      'subtitle'      => 'Settings:<br />height => 100px,<br />media_buttons => false,<br />tinymce => false',
      'height'        => '100px',
      'media_buttons' => false,
      'tinymce'       => false,
    ),

  )
) );

//
// Color Fields
//
CSF::createSection( $prefix, array(
  'id'    => 'color_fields',
  'title' => 'Color Fields',
  'icon'  => 'fas fa-tint',
) );

//
// Field: color
//
CSF::createSection( $prefix, array(
  'parent'      => 'color_fields',
  'title'       => 'Color',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=color" target="_blank">Field: color</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-color-1',
      'type'  => 'color',
      'title' => 'Color',
    ),

    array(
      'id'      => 'opt-color-2',
      'type'    => 'color',
      'title'   => 'Color with default (hex)',
      'default' => '#3498db',
    ),

    array(
      'id'      => 'opt-color-3',
      'type'    => 'color',
      'title'   => 'Color with default (rgba)',
      'default' => 'rgba(255,255,0,0.25)',
    ),

    array(
      'id'      => 'opt-color-4',
      'type'    => 'color',
      'title'   => 'Color with default (transparent)',
      'default' => 'transparent',
    ),

  )
) );

//
// Field: link_color
//
CSF::createSection( $prefix, array(
  'parent'      => 'color_fields',
  'title'       => 'Link Color',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=link-color" target="_blank">Field: link_color</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-link-color-1',
      'type'  => 'link_color',
      'title' => 'Link Color',
    ),

    array(
      'id'      => 'opt-link-color-2',
      'type'    => 'link_color',
      'title'   => 'Link Color with default',
      'default' => array(
        'color' => '#1e73be',
        'hover' => '#259ded',
      ),
    ),

    array(
      'id'      => 'opt-link-color-3',
      'type'    => 'link_color',
      'title'   => 'Link Color with more color options',
      'color'   => true,
      'hover'   => true,
      'visited' => true,
      'active'  => true,
      'focus'   => true,
    ),

  )
) );

//
// Field: color_group
//
CSF::createSection( $prefix, array(
  'parent'      => 'color_fields',
  'title'       => 'Color Group',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=color-group" target="_blank">Field: color_group</a>',
  'fields'      => array(

    array(
      'id'        => 'opt-color-group-1',
      'type'      => 'color_group',
      'title'     => 'Color Group',
      'options'   => array(
        'color-1' => 'Color 1',
        'color-2' => 'Color 2',
      )
    ),

    array(
      'id'        => 'opt-color-group-2',
      'type'      => 'color_group',
      'title'     => 'Color Group',
      'options'   => array(
        'color-1' => 'Color 1',
        'color-2' => 'Color 2',
        'color-3' => 'Color 3',
      )
    ),

    array(
      'id'        => 'opt-color-group-3',
      'type'      => 'color_group',
      'title'     => 'Color Group with default',
      'subtitle'  => 'Can be add unlimited color options.',
      'options'   => array(
        'color-1' => 'Color 1',
        'color-2' => 'Color 2',
        'color-3' => 'Color 3',
        'color-4' => 'Color 4',
        'color-5' => 'Color 5',
      ),
      'default'   => array(
        'color-1' => '#000100',
        'color-2' => '#002642',
        'color-3' => '#ffce4b',
        'color-4' => '#ff595e',
        'color-5' => '#0052cc',
      )
    ),

  )
) );

//
// Field: palette
//
CSF::createSection( $prefix, array(
  'parent'      => 'color_fields',
  'title'       => 'Color Palette',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=palette" target="_blank">Field: palette</a>',
  'fields'      => array(

    array(
      'id'       => 'opt-palette-1',
      'type'     => 'palette',
      'title'    => 'Palette',
      'subtitle' => 'Three set colors',
      'options'  => array(
        'set-1'  => array( '#f36e27', '#f3d430', '#ed1683' ),
        'set-2'  => array( '#4153ab', '#6e86c7', '#211f27' ),
        'set-3'  => array( '#162526', '#508486', '#C8C6CE' ),
        'set-4'  => array( '#ccab5e', '#fff55f', '#197c5d' ),
      ),
      'default'  => 'set-1',
    ),

    array(
      'id'       => 'opt-palette-1',
      'type'     => 'palette',
      'title'    => 'Palette',
      'subtitle' => 'Four set colors',
      'options'  => array(
        'set-1'  => array( '#f04e36', '#f36e27', '#f3d430', '#ed1683' ),
        'set-2'  => array( '#f9ca06', '#b5b546', '#2f4d48', '#212b2f' ),
        'set-3'  => array( '#4153ab', '#6e86c7', '#211f27', '#d69762' ),
        'set-4'  => array( '#162526', '#508486', '#C8C6CE', '#B45F1A' ),
        'set-5'  => array( '#bbd5ff', '#ccab5e', '#fff55f', '#197c5d' ),
      ),
      'default'  => 'set-3',
    ),

    array(
      'id'       => 'opt-palette-2',
      'type'     => 'palette',
      'title'    => 'Palette',
      'subtitle' => 'Five set colors',
      'options'  => array(
        'set-1'  => array( '#bbd5ff', '#ccab5e', '#fff55f', '#197c5d', '#bce2c4' ),
        'set-2'  => array( '#6d3264', '#edf7f6', '#fde8e9', '#006675', '#e49ab0' ),
        'set-3'  => array( '#000100', '#002642', '#ffce4b', '#ff595e', '#0052cc' ),
      ),
      'default'  => 'set-1',
    ),

  )
) );

//
// Design Fields
//
CSF::createSection( $prefix, array(
  'id'    => 'design_fields',
  'title' => 'Design Fields',
  'icon'  => 'fas fa-adjust',
) );

//
// Field: background
//
CSF::createSection( $prefix, array(
  'parent'      => 'design_fields',
  'title'       => 'Background',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=background" target="_blank">Field: background</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-background-1',
      'type'  => 'background',
      'title' => 'Background',
    ),

    array(
      'id'      => 'opt-background-2',
      'type'    => 'background',
      'title'   => 'Background with default',
      'default' => array(
        'background-color'      => '#e80000',
        'background-position'   => 'center center',
        'background-repeat'     => 'repeat-x',
        'background-attachment' => 'fixed',
        'background-size'       => 'cover',
      )
    ),

    array(
      'id'                    => 'opt-background-3',
      'type'                  => 'background',
      'title'                 => 'Background with all features',
      'background_color'      => true,
      'background_image'      => true,
      'background-position'   => true,
      'background_repeat'     => true,
      'background_attachment' => true,
      'background_size'       => true,
      'background_origin'     => true,
      'background_clip'       => true,
      'background_blend_mode' => true,
      'background_gradient'   => true,
      'default'               => array(
        'background-color'              => '#009e44',
        'background-gradient-color'     => '#81d742',
        'background-gradient-direction' => '135deg',
        'background-position'           => 'center center',
        'background-repeat'             => 'repeat-x',
        'background-attachment'         => 'fixed',
        'background-size'               => 'cover',
        'background-origin'             => 'border-box',
        'background-clip'               => 'padding-box',
        'background-blend-mode'         => 'normal',
      )
    ),

  )
) );

//
// Field: typography
//
CSF::createSection( $prefix, array(
  'parent'      => 'design_fields',
  'title'       => 'Typography',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=typography" target="_blank">Field: typography</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-typography-1',
      'type'  => 'typography',
      'title' => 'Typography',
    ),

    array(
      'id'               => 'opt-typography-2',
      'type'             => 'typography',
      'title'            => 'Typography with default',
      'default'          => array(
        'font-family'    => 'Barlow',
        'font-weight'    => '600',
        'subset'         => 'latin-ext',
        'type'           => 'google',
        'text-align'     => 'center',
        'text-transform' => 'capitalize',
        'text-transform' => 'capitalize',
        'font-size'      => '18',
        'line-height'    => '20',
        'letter-spacing' => '-1',
        'color'          => '#009e44',
      ),
    ),

    array(
      'id'             => 'opt-typography-3',
      'type'           => 'typography',
      'title'          => 'Typography with few features',
      'text_align'     => false,
      'text_transform' => false,
      'font_size'      => false,
      'line_height'    => false,
      'letter_spacing' => false,
      'color'          => false,
      'default'        => array(
        'font-family'  => 'Lato',
        'font-weight'  => '900',
        'subset'       => 'latin',
        'type'         => 'google',
      ),
    ),


    array(
      'id'                 => 'opt-typography-4',
      'type'               => 'typography',
      'title'              => 'Typography with all features',
      'font_family'        => true,
      'font_weight'        => true,
      'font_style'         => true,
      'font_size'          => true,
      'line_height'        => true,
      'letter_spacing'     => true,
      'text_align'         => true,
      'text-transform'     => true,
      'color'              => true,
      'subset'             => true,
      'backup_font_family' => true,
      'font_variant'       => true,
      'word_spacing'       => true,
      'text_decoration'    => true,
      'default'            => array(
        'font-family'      => 'Old Standard TT',
        'type'             => 'google',
      ),
    ),

  )
) );

//
// Field: dimensions
//
CSF::createSection( $prefix, array(
  'parent'      => 'design_fields',
  'title'       => 'Dimensions',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=dimensions" target="_blank">Field: dimensions</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-dimensions-1',
      'type'  => 'dimensions',
      'title' => 'Dimensions',
    ),

    array(
      'id'       => 'opt-dimensions-2',
      'type'     => 'dimensions',
      'title'    => 'Dimensions with default',
      'default'  => array(
        'width'  => '100',
        'height' => '250',
        'unit'   => 'px',
      ),
    ),

    array(
      'id'          => 'opt-dimensions-3',
      'type'        => 'dimensions',
      'title'       => 'Dimensions with custom text and units',
      'width_icon'  => 'width',
      'height_icon' => 'height',
      'units'       => array( 'px', '%', 'em', 'rem', 'pt' ),
      'default'     => array(
        'width'     => '100',
        'height'    => '50',
        'unit'      => '%',
      ),
    ),

    array(
      'id'    => 'opt-dimensions-4',
      'type'  => 'dimensions',
      'title' => 'Dimensions with single unit',
      'units' => array( 'px' ),
    ),

    array(
      'id'    => 'opt-dimensions-5',
      'type'  => 'dimensions',
      'title' => 'Dimensions without unit selector',
      'unit'  => false,
    ),

    array(
      'id'     => 'opt-dimensions-6',
      'type'   => 'dimensions',
      'title'  => 'Dimensions with only width',
      'height' => false,
    ),

    array(
      'id'     => 'opt-dimensions-7',
      'type'   => 'dimensions',
      'title'  => 'Dimensions with only width and single unit',
      'height' => false,
      'units'  => array( 'px' ),
    ),

  )
) );

//
// Field: spacing
//
CSF::createSection( $prefix, array(
  'parent'      => 'design_fields',
  'title'       => 'Spacing',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=spacing" target="_blank">Field: spacing</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-spacing-1',
      'type'  => 'spacing',
      'title' => 'Spacing',
    ),

    array(
      'id'       => 'opt-spacing-2',
      'type'     => 'spacing',
      'title'    => 'Spacing with default',
      'default'  => array(
        'top'    => '50',
        'right'  => '100',
        'bottom' => '50',
        'left'   => '100',
        'unit'   => 'px',
      ),
    ),

    array(
      'id'       => 'opt-spacing-2',
      'type'     => 'spacing',
      'title'    => 'Spacing without unit selector',
      'units'    => array( 'px' ),
      'default'  => array(
        'top'    => '50',
        'right'  => '100',
        'bottom' => '50',
        'left'   => '100',
        'unit'   => 'px',
      ),
    ),

    array(
      'id'     => 'opt-spacing-3',
      'type'   => 'spacing',
      'title'  => 'Spacing with only left and right',
      'top'    => false,
      'bottom' => false,
    ),

    array(
      'id'    => 'opt-spacing-4',
      'type'  => 'spacing',
      'title' => 'Spacing with only top and bottom',
      'left'  => false,
      'right' => false,
    ),

    array(
      'id'    => 'opt-spacing-5',
      'type'  => 'spacing',
      'title' => 'Spacing with all directions',
      'all'   => true,
    ),

  )
) );

//
// Field: border
//
CSF::createSection( $prefix, array(
  'parent'      => 'design_fields',
  'title'       => 'Border',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=border" target="_blank">Field: border</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-border-1',
      'type'  => 'border',
      'title' => 'Border',
    ),

    array(
      'id'       => 'opt-border-2',
      'type'     => 'border',
      'title'    => 'Border with default',
      'default'  => array(
        'top'    => '4',
        'right'  => '8',
        'bottom' => '4',
        'left'   => '8',
        'style'  => 'dashed',
        'color'  => '#1e73be',
      )
    ),

    array(
      'id'     => 'opt-border-3',
      'type'   => 'border',
      'title'  => 'Border with only left and right',
      'top'    => false,
      'bottom' => false,
    ),

    array(
      'id'    => 'opt-border-4',
      'type'  => 'border',
      'title' => 'Border with only top and bottom',
      'left'  => false,
      'right' => false,
    ),

    array(
      'id'    => 'opt-border-5',
      'type'  => 'border',
      'title' => 'Border with all directions',
      'all'   => true,
    ),

  )
) );

//
// Field: spinner
//
CSF::createSection( $prefix, array(
  'parent'      => 'design_fields',
  'title'       => 'Spinner',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=spinner" target="_blank">Field: spinner</a>',
  'fields'      => array(

    array(
      'id'       => 'opt-spinner-1',
      'type'     => 'spinner',
      'title'    => 'Spinner',
      'subtitle' => 'max:100 | min:0 | step:1',
      'max'      => 100,
      'min'      => 0,
      'step'     => 1,
      'default'  => 25,
    ),

    array(
      'id'       => 'opt-spinner-2',
      'type'     => 'spinner',
      'title'    => 'Spinner',
      'subtitle' => 'max:200 | min:100 | step:10',
      'max'      => 200,
      'min'      => 100,
      'step'     => 10,
      'default'  => 100,
    ),

    array(
      'id'       => 'opt-spinner-3',
      'type'     => 'spinner',
      'title'    => 'Spinner',
      'subtitle' => 'max:1 | min:0 | step:0.1 | unit:px',
      'max'      => 1,
      'min'      => 0,
      'step'     => 0.1,
      'unit'     => 'px',
      'default'  => 0.5,
    ),

  )
) );

//
// Field: number
//
CSF::createSection( $prefix, array(
  'parent'      => 'design_fields',
  'title'       => 'Number',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=number" target="_blank">Field: number</a>',
  'fields'      => array(

    array(
      'id'      => 'opt-number-1',
      'type'    => 'number',
      'title'   => 'Number',
    ),
    array(
      'id'      => 'opt-number-2',
      'type'    => 'number',
      'title'   => 'Number with unit',
      'unit'    => 'px',
    ),
    array(
      'id'      => 'opt-number-3',
      'type'    => 'number',
      'title'   => 'Number with default',
      'unit'    => 'width',
      'default' => 100,
    ),

  )
) );

//
// Additional Fields
//
CSF::createSection( $prefix, array(
  'id'    => 'additional_fields',
  'title' => 'Additional Fields',
  'icon'  => 'fas fa-asterisk',
) );

//
// Field: slider
//
CSF::createSection( $prefix, array(
  'parent'      => 'additional_fields',
  'title'       => 'Slider',
  'icon'        => 'fas fa-sliders-h',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=slider" target="_blank">Field: slider</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-slider-1',
      'type'  => 'slider',
      'title' => 'Slider',
    ),

    array(
      'id'      => 'opt-slider-2',
      'type'    => 'slider',
      'title'   => 'Slider with default',
      'default' => 50,
    ),

    array(
      'id'      => 'opt-slider-3',
      'type'    => 'slider',
      'title'   => 'Slider with unit text',
      'unit'    => '%',
      'default' => 75,
    ),

    array(
      'id'       => 'opt-slider-4',
      'type'     => 'slider',
      'title'    => 'Slider with min/max allowed value',
      'subtitle' => 'Min: 1 | Max: 10 | Step: 0.1 | Default: 5.5',
      'unit'     => 'px',
      'min'      => 1,
      'max'      => 10,
      'step'     => 0.1,
      'default'  => 5.5,
    ),

  )
) );

//
// Field: sorter
//
CSF::createSection( $prefix, array(
  'parent'      => 'additional_fields',
  'title'       => 'Sorter',
  'icon'        => 'fas fa-sort-numeric-down',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=sorter" target="_blank">Field: sorter</a>',
  'fields'      => array(

    array(
      'id'         => 'opt-sorter-1',
      'type'       => 'sorter',
      'title'      => 'Sorter',
      'default'    => array(
        'enabled'  => array(
          'opt-1'  => 'Option 1',
          'opt-2'  => 'Option 2',
          'opt-3'  => 'Option 3',
        ),
        'disabled' => array(
          'opt-4'  => 'Option 4',
          'opt-5'  => 'Option 5',
        ),
      ),
    ),

    array(
      'id'             => 'opt-sorter-2',
      'type'           => 'sorter',
      'title'          => 'Sorter with custom title',
      'enabled_title'  => 'Activated',
      'disabled_title' => 'Deactivated',
      'default'        => array(
        'enabled'      => array(
          'opt-1'      => 'Option 1',
          'opt-2'      => 'Option 2',
          'opt-3'      => 'Option 3',
        ),
        'disabled'     => array(
          'opt-4'      => 'Option 4',
          'opt-5'      => 'Option 5',
        ),
      ),
    ),

    array(
      'id'            => 'opt-sorter-3',
      'type'          => 'sorter',
      'title'         => 'Sorter with use only enabled section and without title',
      'enabled_title' => false,
      'disabled'      => false,
      'default'       => array(
        'enabled'     => array(
          'opt-1'     => 'Option 1',
          'opt-2'     => 'Option 2',
          'opt-3'     => 'Option 3',
        ),
      ),
    ),

  )
) );

//
// Field: sortable
//
CSF::createSection( $prefix, array(
  'parent'      => 'additional_fields',
  'title'       => 'Sortable',
  'icon'        => 'fas fa-arrows-alt',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=sortable" target="_blank">Field: sortable</a>',
  'fields'      => array(

    array(
      'id'           => 'opt-sortable-1',
      'type'         => 'sortable',
      'title'        => 'Sortable',
      'fields'       => array(
        array(
          'id'       => 'opt-text-1',
          'type'     => 'text',
          'title'    => 'Text 1'
        ),
        array(
          'id'       => 'opt-text-2',
          'type'     => 'text',
          'title'    => 'Text 2'
        ),
        array(
          'id'       => 'opt-text-3',
          'type'     => 'text',
          'title'    => 'Text 3'
        ),
      ),
    ),

    array(
      'id'           => 'opt-sortable-2',
      'type'         => 'sortable',
      'title'        => 'Sortable with default',
      'fields'       => array(
        array(
          'id'       => 'opt-text-1',
          'type'     => 'text',
          'title'    => 'Text 1'
        ),
        array(
          'id'       => 'opt-text-2',
          'type'     => 'text',
          'title'    => 'Text 2'
        ),
        array(
          'id'       => 'opt-text-3',
          'type'     => 'text',
          'title'    => 'Text 3'
        ),
      ),
      'default'      => array(
        'opt-text-1' => 'This is text 1 default',
        'opt-text-2' => 'This is text 2 default',
        'opt-text-3' => 'This is text 3 default',
      )
    ),

  )
) );

//
// Field: switcher
//
CSF::createSection( $prefix, array(
  'parent'      => 'additional_fields',
  'title'       => 'Switcher',
  'icon'        => 'fas fa-toggle-on',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=switcher" target="_blank">Field: switcher</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-switcher-1',
      'type'  => 'switcher',
      'title' => 'Switcher',
    ),

    array(
      'id'      => 'opt-switcher-2',
      'type'    => 'switcher',
      'title'   => 'Switcher with default',
      'default' => true,
    ),

    array(
      'id'    => 'opt-switcher-3',
      'type'  => 'switcher',
      'title' => 'Switcher with label',
      'label' => 'The label text of the switcher.',
    ),

    array(
      'id'       => 'opt-switcher-4',
      'type'     => 'switcher',
      'title'    => 'Switcher with Yes/No',
      'text_on'  => 'Yes',
      'text_off' => 'No',
    ),

    array(
      'id'         => 'opt-switcher-4',
      'type'       => 'switcher',
      'title'      => 'Switcher with custom text Enabled/Disabled',
      'text_on'    => 'Enabled',
      'text_off'   => 'Disabled',
      'text_width' => '100',
    ),

  )
) );

//
// Field: icons
//
CSF::createSection( $prefix, array(
  'parent'      => 'additional_fields',
  'title'       => 'Icons',
  'icon'        => 'fas fa-star',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=icon" target="_blank">Field: icon</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-icon-1',
      'type'  => 'icon',
      'title' => 'Icon',
    ),

    array(
      'id'      => 'opt-icon-2',
      'type'    => 'icon',
      'title'   => 'Icon with default',
      'default' => 'fas fa-check',
    ),

  )
) );

//
// Field: map
//
CSF::createSection( $prefix, array(
  'parent'      => 'additional_fields',
  'title'       => 'Map',
  'icon'        => 'fas fa-map-marker',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=map" target="_blank">Field: map</a>',
  'fields'      => array(

    array(
      'id'            => 'opt-map-1',
      'type'          => 'map',
      'title'         => 'Map',
    ),

    array(
      'id'            => 'opt-map-2',
      'type'          => 'map',
      'title'         => 'Map with Default',
      'default'       => array(
        'address'     => 'New York, United States of America',
        'latitude'    => '40.7127281',
        'longitude'   => '-74.0060152',
        'zoom'        => '12',
      )
    ),

    array(
      'type'          => 'submessage',
      'style'         => 'info',
      'content'       => 'Using custom <strong>address_field</strong> field in below example.',
    ),

    array(
      'id'            => 'my-address-text',
      'type'          => 'text',
      'title'         => 'Address',
    ),

    array(
      'id'            => 'opt-map-3',
      'type'          => 'map',
      'title'         => 'Map',
      'desc'          => 'Using custom <strong>address_field</strong> field',
      'address_field' => 'my-address-text',
    ),

  )
) );

//
// Field: link
//
CSF::createSection( $prefix, array(
  'parent'      => 'additional_fields',
  'title'       => 'Link',
  'icon'        => 'fas fa-link',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=link" target="_blank">Field: link</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-link-1',
      'type'  => 'link',
      'title' => 'Link',
    ),

    array(
      'id'       => 'opt-link-2',
      'type'     => 'link',
      'title'    => 'Link with default',
      'default'  => array(
        'url'    => 'http://codestarframework.com/',
        'text'   => 'Codestar Framework',
        'target' => '_blank'
      ),
    ),

  )
) );

//
// Field: date
//
CSF::createSection( $prefix, array(
  'parent'      => 'additional_fields',
  'title'       => 'Date',
  'icon'        => 'fas fa-calendar',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=date" target="_blank">Field: date</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-date-1',
      'type'  => 'date',
      'title' => 'Date',
    ),

    array(
      'id'       => 'opt-date-2',
      'type'     => 'date',
      'title'    => 'Date with custom settings',
      'settings' => array(
        'dateFormat'      => 'mm/dd/yy',
        'changeMonth'     => true,
        'changeYear'      => true,
        'showWeek'        => true,
        'showButtonPanel' => true,
        'weekHeader'      => 'Week',
        'monthNamesShort' => array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ),
        'dayNamesMin'     => array( 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' ),
      )
    ),

    array(
      'id'      => 'opt-date-3',
      'type'    => 'date',
      'title'   => 'Date with From &amp; To',
      'from_to' => true,
    ),

    array(
      'id'        => 'opt-date-4',
      'type'      => 'date',
      'title'     => 'Date with custom texts Begin &amp; End',
      'from_to'   => true,
      'text_from' => 'Begin',
      'text_to'   => 'End',
    ),

  )
) );

//
// Field: image_select
//
CSF::createSection( $prefix, array(
  'parent'      => 'additional_fields',
  'title'       => 'Image Select',
  'icon'        => 'fas fa-th',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=image-select" target="_blank">Field: image_select</a>',
  'fields'      => array(

    array(
      'id'      => 'opt-image-select-1',
      'type'    => 'image_select',
      'title'   => 'Image Select',
      'options' => array(
        'opt-1' => 'http://codestarframework.com/assets/images/placeholder/150x125-2ecc71.gif',
        'opt-2' => 'http://codestarframework.com/assets/images/placeholder/150x125-e74c3c.gif',
        'opt-3' => 'http://codestarframework.com/assets/images/placeholder/150x125-ffbc00.gif',
        'opt-4' => 'http://codestarframework.com/assets/images/placeholder/150x125-3498db.gif',
      ),
    ),

    array(
      'id'      => 'opt-image-select-2',
      'type'    => 'image_select',
      'title'   => 'Image Select with default',
      'options' => array(
        'opt-1' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
        'opt-2' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
        'opt-3' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
        'opt-4' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
        'opt-5' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
        'opt-6' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
        'opt-7' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
      ),
      'default' => 'opt-4'
    ),

    array(
      'id'       => 'opt-image-select-3',
      'type'     => 'image_select',
      'title'    => 'Image Select with multiple choice',
      'multiple' => true,
      'options'  => array(
        'opt-1'  => 'http://codestarframework.com/assets/images/placeholder/80x80-e74c3c.gif',
        'opt-2'  => 'http://codestarframework.com/assets/images/placeholder/80x80-ffbc00.gif',
        'opt-3'  => 'http://codestarframework.com/assets/images/placeholder/80x80-3498db.gif',
        'opt-4'  => 'http://codestarframework.com/assets/images/placeholder/80x80-2ecc71.gif',
      ),
    ),

    array(
      'id'       => 'opt-image-select-4',
      'type'     => 'image_select',
      'title'    => 'Image Select with multiple choice and default',
      'multiple' => true,
      'options'  => array(
        'opt-1'  => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
        'opt-2'  => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
        'opt-3'  => 'http://codestarframework.com/assets/images/placeholder/80x80-e74c3c.gif',
        'opt-4'  => 'http://codestarframework.com/assets/images/placeholder/80x80-ffbc00.gif',
        'opt-5'  => 'http://codestarframework.com/assets/images/placeholder/80x80-3498db.gif',
        'opt-6'  => 'http://codestarframework.com/assets/images/placeholder/80x80-2ecc71.gif',
        'opt-7'  => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
        'opt-8'  => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
      ),
      'default'  => array( 'opt-3', 'opt-4', 'opt-5', 'opt-6' )
    ),

    array(
      'id'      => 'opt-image-select-5',
      'type'    => 'image_select',
      'title'   => 'Image Select inline style',
      'inline'  => true,
      'options' => array(
        'opt-1' => 'http://codestarframework.com/assets/images/placeholder/80x80-e74c3c.gif',
        'opt-2' => 'http://codestarframework.com/assets/images/placeholder/80x80-ffbc00.gif',
        'opt-3' => 'http://codestarframework.com/assets/images/placeholder/80x80-3498db.gif',
        'opt-4' => 'http://codestarframework.com/assets/images/placeholder/80x80-2ecc71.gif',
      ),
      'default' => 'opt-1'
    ),

  )
) );

//
// Field: button_set
//
CSF::createSection( $prefix, array(
  'parent'      => 'additional_fields',
  'title'       => 'Button Set',
  'icon'        => 'fas fa-ellipsis-h',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=button-set" target="_blank">Field: button_set</a>',
  'fields'      => array(

    array(
      'id'         => 'opt-button-set-1',
      'type'       => 'button_set',
      'title'      => 'Button Set',
      'options'    => array(
        'enabled'  => 'Enabled',
        'disabled' => 'Disabled',
      ),
    ),

    array(
      'id'         => 'opt-button-set-2',
      'type'       => 'button_set',
      'title'      => 'Button Set with default',
      'options'    => array(
        'enabled'  => 'Enabled',
        ''         => 'Default',
        'disabled' => 'Disabled',
      ),
    ),

    array(
      'id'           => 'opt-button-set-3',
      'type'         => 'button_set',
      'title'        => 'Button Set',
      'options'      => array(
        'activate'   => 'Activate',
        'deactivate' => 'Deactivate',
      ),
      'default'      => 'activate',
    ),

    array(
      'id'      => 'opt-button-set-4',
      'type'    => 'button_set',
      'title'   => 'Button Set',
      'options' => array(
        'on'    => 'ON',
        'off'   => 'OFF',
      ),
      'default' => 'on',
    ),

    array(
      'id'       => 'opt-button-set-5',
      'type'     => 'button_set',
      'title'    => 'Button Set with multiple choice',
      'multiple' => true,
      'options'  => array(
        'opt-1'  => 'Option 1',
        'opt-2'  => 'Option 2',
        'opt-3'  => 'Option 3',
        'opt-4'  => 'Option 4',
        'opt-5'  => 'Option 5',
      ),
    ),

    array(
      'id'       => 'opt-button-set-6',
      'type'     => 'button_set',
      'title'    => 'Button Set with multiple choice and default',
      'multiple' => true,
      'options'  => array(
        'opt-1'  => 'Option 1',
        'opt-2'  => 'Option 2',
        'opt-3'  => 'Option 3',
        'opt-4'  => 'Option 4',
        'opt-5'  => 'Option 5',
      ),
      'default'  => array( 'opt-2', 'opt-4' )
    ),

    array(
      'id'      => 'opt-button-set-7',
      'type'    => 'button_set',
      'title'   => 'Button Set with categories',
      'options' => 'categories',
    ),

    array(
      'id'      => 'opt-button-set-8',
      'type'    => 'button_set',
      'title'   => 'Button Set with tags',
      'options' => 'tags',
    ),

  )
) );

//
// Dependencies
//
CSF::createSection( $prefix, array(
  'title'       => 'Dependencies',
  'icon'        => 'fas fa-code-branch',
  'description' => 'Visit documentation for more details: <a href="http://codestarframework.com/documentation/#/faq?id=how-to-use-dependency" target="_blank">How to use dependencies</a>',
  'fields'      => array(

    array(
      'type'    => 'subheading',
      'content' => 'Basic Dependencies',
    ),

    //
    // Dependency example 1
    array(
      'id'         => 'opt-depend-switcher',
      'type'       => 'switcher',
      'title'      => 'If switched to (ON)',
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Switched to (ON).',
      'dependency' => array( 'opt-depend-switcher', '==', 'true' ),
    ),

    //
    // Dependency example 2
    array(
      'id'         => 'opt-depend-text',
      'type'       => 'text',
      'title'      => 'If typed something to field',
    ),

    array(
      'type'        => 'notice',
      'style'       => 'success',
      'content'     => 'Success: You typed something.',
      'dependency'  => array( 'opt-depend-text', '!=', '' ),
    ),

    //
    // Dependency example 3
    array(
      'id'          => 'opt-depend-select',
      'type'        => 'select',
      'title'       => 'If selected to (Blue) or (Black)',
      'placeholder' => 'Select a color',
      'options'     => array(
        'blue'      => 'Blue',
        'yellow'    => 'Yellow',
        'green'     => 'Green',
        'black'     => 'Black',
        'white'     => 'White',
      ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Selected to (Blue) or (Black).',
      'dependency' => array( 'opt-depend-select', 'any', 'blue,black' ),
    ),

    //
    // Dependency example 4
    array(
      'id'      => 'opt-depend-radio',
      'type'    => 'radio',
      'title'   => 'If selected to (Yes, Please)',
      'inline'  => true,
      'options' => array(
        'no'    => 'No, Thanks',
        'yes'   => 'Yes, Please',
        'any'   => 'I am not sure!',
      ),
      'default' => 'no'
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Selected to (Yes, Please).',
      'dependency' => array( 'opt-depend-radio', '==', 'yes' ),
    ),

    //
    // Dependency example 5
    array(
      'id'       => 'opt-depend-checkbox',
      'type'     => 'checkbox',
      'title'    => 'If selected to (Green) or (Black)',
      'inline'   => true,
      'options'  => array(
        'blue'   => 'Blue',
        'yellow' => 'Yellow',
        'green'  => 'Green',
        'black'  => 'Black',
        'white'  => 'White',
      ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Selected to (Green).',
      'dependency' => array( 'opt-depend-checkbox', 'any', 'green,black' ),
    ),

    //
    // Dependency example 6
    array(
      'id'       => 'opt-depend-image-select',
      'type'     => 'image_select',
      'title'    => 'If selected to (Blue) box',
      'options'  => array(
        'green'  => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'    => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'   => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'   => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'default'  => 'green',
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Selected to (Blue) box.',
      'dependency' => array( 'opt-depend-image-select', '==', 'blue' ),
    ),

    //
    // Dependency example 6
    array(
      'id'       => 'opt-depend-image-select-any',
      'type'     => 'image_select',
      'title'    => 'If selected to (Red) or (Blue) box',
      'options'  => array(
        'green'  => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'    => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'   => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'   => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'default'  => 'green',
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Selected to (Red) or (Blue) box.',
      'dependency' => array( 'opt-depend-image-select-any', 'any', 'red,blue' ),
    ),

    array(
      'type'    => 'subheading',
      'content' => 'Visible Dependencies',
    ),

    //
    // Dependency example 7
    array(
      'id'          => 'opt-depend-visible-switcher',
      'type'        => 'switcher',
      'title'       => 'Switched to (ON)',
      'label'       => 'Below fields are visibling instead of hiding. Switched to (ON) for use them.',
    ),

    array(
      'id'          => 'opt-depend-visible-text',
      'type'        => 'text',
      'title'       => 'Visible Text',
      'dependency'  => array( 'opt-depend-visible-switcher', '==', 'true', '', 'visible' ),
    ),

    array(
      'id'          => 'opt-depend-visible-select',
      'type'        => 'select',
      'title'       => 'Visible Select',
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
      ),
      'dependency'  => array( 'opt-depend-visible-switcher', '==', 'true', '', 'visible' ),
    ),

    //
    // Dependency example 8
    array(
      'type'    => 'subheading',
      'content' => 'Nested Dependencies',
    ),

    array(
      'id'    => 'opt-depend-switcher-1',
      'type'  => 'switcher',
      'title' => 'If switched to (ON) --->',
    ),

    array(
      'id'          => 'opt-depend-select-1',
      'type'        => 'select',
      'title'       => '---> and selected to (Blue)',
      'placeholder' => 'Select a color',
      'options'     => array(
        'blue'      => 'Blue',
        'yellow'    => 'Yellow',
        'green'     => 'Green',
        'black'     => 'Black',
        'white'     => 'White',
      ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Switched to (ON) and selected to (Blue).',
      'dependency' => array( 'opt-depend-switcher-1|opt-depend-select-1', '==|==', 'true|blue' ),
    ),

    //
    // Dependency example 9
    array(
      'type'    => 'subheading',
      'content' => 'Another Nested Dependencies',
    ),

    array(
      'id'          => 'opt-nested-select-1',
      'type'        => 'select',
      'title'       => 'If selected to (Black) or (White) --->',
      'placeholder' => 'Select a color',
      'options'     => array(
        'blue'      => 'Blue',
        'yellow'    => 'Yellow',
        'green'     => 'Green',
        'black'     => 'Black',
        'white'     => 'White',
      ),
    ),

    array(
      'id'          => 'opt-nested-select-2',
      'type'        => 'select',
      'title'       => '---> and selected to (Large) --->',
      'placeholder' => 'Select a size',
      'options'     => array(
        'small'     => 'Small',
        'middle'    => 'Middle',
        'large'     => 'Large',
        'xlage'     => 'XLarge',
        'xxlage'    => 'XXLarge',
      ),
      'dependency'  => array( 'opt-nested-select-1', 'any', 'black,white' ),
    ),

    array(
      'id'          => 'opt-nested-select-3',
      'type'        => 'select',
      'title'       => '---> and selected to (Hello)',
      'placeholder' => 'Select a word',
      'options'     => array(
        'hello'     => 'Hello',
        'world'     => 'World',
      ),
      'dependency'  => array( 'opt-nested-select-1|opt-nested-select-2', 'any|==', 'black,white|large' ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Congratulations, You are here now!',
      'dependency' => array( 'opt-nested-select-1|opt-nested-select-2|opt-nested-select-3', 'any|==|==', 'black,white|large|hello' ),
    ),

  )
) );

//
// Validate
//
CSF::createSection( $prefix, array(
  'title'       => 'Validate',
  'icon'        => 'fas fa-check-circle',
  'description' => 'Visit documentation for more details: <a href="http://codestarframework.com/documentation/#/faq?id=how-to-use-validate" target="_blank">How to use validate</a>',
  'fields'      => array(

    array(
      'id'       => 'opt-validate-1',
      'type'     => 'text',
      'title'    => 'Email validate',
      'subtitle' => 'This text field only allows validated email address.',
      'default'  => 'info@domain.com',
      'validate' => 'csf_validate_email',
    ),

    array(
      'id'       => 'opt-validate-2',
      'type'     => 'text',
      'title'    => 'Numeric validate',
      'subtitle' => 'This text field only allows numbers',
      'default'  => '123456',
      'validate' => 'csf_validate_numeric',
    ),

    array(
      'id'       => 'opt-validate-3',
      'type'     => 'text',
      'title'    => 'Required validate',
      'subtitle' => 'This text field is required, cannot be pass empty.',
      'default'  => 'Lorem ipsum value',
      'validate' => 'csf_validate_required',
    ),

    array(
      'id'       => 'opt-validate-4',
      'type'     => 'text',
      'title'    => 'URL validate',
      'subtitle' => 'This text field only allows validated url address.',
      'default'  => 'http://codestarframework.com',
      'validate' => 'csf_validate_url',
    ),

  )
) );

//
// Sanitize
//
CSF::createSection( $prefix, array(
  'title'       => 'Sanitize',
  'icon'        => 'fas fa-redo',
  'description' => 'Visit documentation for more details: <a href="http://codestarframework.com/documentation/#/faq?id=how-to-use-sanitize" target="_blank">How to use sanitize</a>',
  'fields'      => array(

    array(
      'id'       => 'opt-sanitize-1',
      'type'     => 'text',
      'title'    => 'Sanitize (a) to (b)',
      'subtitle' => 'Replacing letter (a) to letter (b). for eg. apple to bpple',
      'sanitize' => 'csf_sanitize_replace_a_to_b'
    ),

    array(
      'id'       => 'opt-sanitize-2',
      'type'     => 'text',
      'title'    => 'Sanitize Title',
      'subtitle' => 'Converting (space) to (-) and (uppercase) letters to (lowercase) letters. for eg. Hello World to hello-world',
      'sanitize' => 'csf_sanitize_title'
    ),

  )
) );

//
// Field: backup
//
CSF::createSection( $prefix, array(
  'title'       => 'Backup',
  'icon'        => 'fas fa-shield-alt',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=backup" target="_blank">Field: backup</a>',
  'fields'      => array(

    array(
      'type' => 'backup',
    ),

  )
) );

//
// Others
//
CSF::createSection( $prefix, array(
  'title'       => 'Others',
  'icon'        => 'fas fa-bolt',
  'description' => 'Visit documentation for more details: <a href="http://codestarframework.com/documentation/#/fields?id=others" target="_blank">Others</a>',
  'fields'      => array(

    array(
      'type'    => 'heading',
      'content' => 'This is a heading field',
    ),

    array(
      'type'    => 'subheading',
      'content' => 'This is a subheading field',
    ),

    array(
      'type'    => 'content',
      'content' => 'This is a content field',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'success',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>success</strong>',
    ),

    array(
      'type'    => 'content',
      'content' => 'This is a content field',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'info',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>info</strong>',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'warning',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>warning</strong>',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'danger',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>danger</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'success',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>success</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'info',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>info</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'warning',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>warning</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'danger',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>danger</strong>',
    ),

    array(
      'type'    => 'content',
      'content' => 'This is a <strong>content</strong> field. You can write some contents here.',
    ),

  )
) );
