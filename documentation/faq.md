# F.A.Q.

### How to use dependencies ?

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple (Switcher)</span>
<span class="csf-tab-title">Simple (Text)</span>
<span class="csf-tab-title">Simple (Select)</span>
<span class="csf-tab-title">Multiple Fields Condition</span>
<span class="csf-tab-title">Any Condition</span>
<span class="csf-tab-title">Number Condition</span>
<span class="csf-tab-title">Nested Dependencies</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-switcher',
  'type'  => 'switcher',
  'title' => 'Switcher',
),

//
// Rule: The show to the text field if opt-switcher equal "true"
array(
  'id'         => 'opt-text',
  'type'       => 'text',
  'title'      => 'Text',
  'dependency' => array( 'opt-switcher', '==', 'true' ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'    => 'opt-input',
  'type'  => 'text',
  'title' => 'Input Text',
),

//
// Rule: The show to the text field if opt-input not empty
array(
  'id'         => 'opt-text',
  'type'       => 'text',
  'title'      => 'Text',
  'dependency' => array( 'opt-input', '!=', '' ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'          => 'opt-select',
  'type'        => 'select',
  'title'       => 'Select',
  'placeholder' => 'Select a option',
  'options'     => array(
    'opt-1'     => 'Option 1',
    'opt-2'     => 'Option 2',
    'opt-3'     => 'Option 3',
  ),
),

//
// Rule: The show to the text field if opt-select equal "Option 2 (opt-2)"
array(
  'id'         => 'opt-text',
  'type'       => 'text',
  'title'      => 'Text',
  'dependency' => array( 'opt-select', '==', 'opt-2' ),
),
```
</div>
<div class="csf-tab-content">

```php

array(
  'id'    => 'opt-switcher',
  'type'  => 'switcher',
  'title' => 'Switcher',
),

array(
  'id'          => 'opt-select',
  'type'        => 'select',
  'title'       => 'Select',
  'placeholder' => 'Select a option',
  'options'     => array(
    'opt-1'     => 'Option 1',
    'opt-2'     => 'Option 2',
    'opt-3'     => 'Option 3',
  ),
),

//
// Rule: The show to the text field if opt-switcher equal "true" and opt-select equal "Option 2 (opt-2)"
array(
  'id'         => 'opt-text',
  'type'       => 'text',
  'title'      => 'Text',
  'dependency' => array( 'opt-switcher|opt-select', '==|==', 'true|opt-2' ),
),

// another usage for more human readable way
array(
  'id'         => 'opt-text',
  'type'       => 'text',
  'title'      => 'Text',
  'dependency' => array(
    array( 'opt-switcher', '==', 'true' ),
    array( 'opt-select',   '==', 'opt-2' ),
  ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'          => 'opt-select',
  'type'        => 'select',
  'title'       => 'Select',
  'placeholder' => 'Select a option',
  'options'     => array(
    'opt-1'     => 'Option 1',
    'opt-2'     => 'Option 2',
    'opt-3'     => 'Option 3',
  ),
),

//
// Rule: The show to the text field if opt-select equal "Option 2 (opt-2)" or "Option 3 (opt-3)"
array(
  'id'         => 'opt-text',
  'type'       => 'text',
  'title'      => 'Text',
  'dependency' => array( 'opt-select', 'any', 'opt-2,opt-3' ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'    => 'opt-spinner',
  'type'  => 'spinner',
  'title' => 'Spinner',
),

//
// Rule: The show to the text field if opt-select equal "Option 2 (opt-2)" or "Option 3 (opt-3)"
array(
  'id'         => 'opt-text',
  'type'       => 'text',
  'title'      => 'Text',
  'dependency' => array( 'opt-spinner', '>=', '100' ),
),
```
</div>
<div class="csf-tab-content">

```php
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

// another usage for more human readable way
array(
  'type'       => 'notice',
  'style'      => 'success',
  'content'    => 'Success: Switched to (ON) and selected to (Blue).',
  'dependency' => array(
    array( 'opt-depend-switcher-1', '==', 'true' ),
    array( 'opt-depend-select-1',   '==', 'blue' ),
  ),
),
```
</div>
</div>
<div class="clear"></div>
</div>

Available dependency conditions: `==`  `!=` `>=` `>` `<=` `<` `any` `not-any`

**Note**: Default dependency system controls only parent section elements for avoid conflict. But For eg. If you need to control for among separate sections or between two metaboxes fields only set **4th** param as "**all**" or "**true**". See below:

```php
// A Switcher Field located at Metabox A.
array(
  'id'    => 'opt-switcher',
  'type'  => 'Switcher',
  'title' => 'Switcher',
),

// A Text Field located at Metabox B.
array(
  'id'         => 'opt-text',
  'type'       => 'text',
  'title'      => 'Text',
  'dependency' => array( 'opt-switcher', '==', 'true', 'all' ), // Set 4th param as "all" or "true".
),
```

**Note**: You can set visible dependency instead of hiding. See below:


```php
array(
  'id'    => 'opt-switcher',
  'type'  => 'switcher',
  'title' => 'Switcher',
),

array(
  'id'         => 'opt-text',
  'type'       => 'text',
  'title'      => 'Text',
  'dependency' => array( 'opt-switcher', '==', 'true', '', 'visible' ), // Set 5th param as "visible" or "true".
),
```

---

### How to use output css ?

**Note:** Only these fields has output css feature. ( and this feature only can be used *admin*, *customize* and *metabox* option frameworks. )

`background` `border` `color` `dimensions` `link_color` `number` `slider` `spacing` `spinner` `typography`

**Note:** Also can be used output css feature only inside these combine fields. ( *group* and *repeater* does not support. )

`accordion` `fieldset` `tabbed`

<div class="pre-heading">Examples</div>

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Color</span>
<span class="csf-tab-title">Background</span>
<span class="csf-tab-title">Border</span>
<span class="csf-tab-title">Dimensions</span>
<span class="csf-tab-title">Number</span>
<span class="csf-tab-title">Slider</span>
<span class="csf-tab-title">Spinner</span>
<span class="csf-tab-title">Spacing</span>
<span class="csf-tab-title">Typography</span>
<span class="csf-tab-title">Link Color</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'     => 'opt-color-output-1',
  'type'   => 'color',
  'title'  => 'Basic Color',
  'output' => '.class-name-1',
),

array(
  'id'     => 'opt-color-output-2',
  'type'   => 'color',
  'title'  => 'Multiple Selector Color',
  'output' => 'body, .class-name-1, .class-name-2 .nested, #id-name',
),

array(
  'id'          => 'opt-color-output-3',
  'type'        => 'color',
  'title'       => 'Specific Property Color',
  'output'      => '.class-name-1',
  'output_mode' => 'background-color', // default is "color"
),

array(
  'id'          => 'opt-color-output-4',
  'type'        => 'color',
  'title'       => 'Specific Property Color',
  'output'      => '.class-name-1',
  'output_mode' => 'border-color',
),

array(
  'id'               => 'opt-color-output-5',
  'type'             => 'color',
  'title'            => 'Important Property Color',
  'output'           => '.class-name-1',
  'output_mode'      => 'background-color',
  'output_important' => true, // It adds "!important" to css property and all "output" has this parameter.
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'     => 'opt-background-output-1',
  'type'   => 'background',
  'title'  => 'Background',
  'output' => '.class-name-1',
),

array(
  'id'     => 'opt-background-output-2',
  'type'   => 'background',
  'title'  => 'Background',
  'output' => '.class-name-1, .classname-2',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'     => 'opt-border-output-1',
  'type'   => 'border',
  'title'  => 'Border',
  'output' => '.class-name-1',
),

array(
  'id'     => 'opt-border-output-2',
  'type'   => 'border',
  'title'  => 'Border',
  'output' => '.class-name-1, .class-name-2',
  'unit'   => 'em', // default is "px"
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'     => 'opt-dimensions-output-1',
  'type'   => 'dimensions',
  'title'  => 'Dimensions',
  'output' => '.class-name-1',
  // default properties are "width" and "height" size as "px"
),

array(
  'id'            => 'opt-dimensions-output-2',
  'type'          => 'dimensions',
  'title'         => 'Dimensions',
  'output'        => '.class-name-1',
  'output_prefix' => 'max', // It makes max-width, max-height
  'unit'          => 'em', // default is "px"
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'     => 'opt-number-output-1',
  'type'   => 'number',
  'title'  => 'Number',
  'output' => '.class-name-1',
  // default property is "width" and size is "px"
),

array(
  'id'          => 'opt-number-output-2',
  'type'        => 'number',
  'title'       => 'Number',
  'output'      => '.class-name-1',
  'output_mode' => 'height', // default mode is "width"
  'unit'        => '%', // default is "px"
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'     => 'opt-slider-output-1',
  'type'   => 'slider',
  'title'  => 'Slider',
  'output' => '.class-name-1',
  // default property is "width" and size is "px"
),

array(
  'id'          => 'opt-slider-output-2',
  'type'        => 'slider',
  'title'       => 'Slider',
  'output'      => '.class-name-1',
  'output_mode' => 'height', // default mode is "width"
  'unit'        => '%', // default is "px"
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'     => 'opt-spinner-output-1',
  'type'   => 'spinner',
  'title'  => 'Spinner',
  'output' => '.class-name-1',
  // default property is "width" and size is "px"
),

array(
  'id'          => 'opt-spinner-output-2',
  'type'        => 'spinner',
  'title'       => 'Spinner',
  'output'      => '.class-name-1',
  'output_mode' => 'height', // default mode is "width"
  'unit'        => '%', // default is "px"
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'     => 'opt-spacing-output-1',
  'type'   => 'spacing',
  'title'  => 'Spacing',
  'output' => '.class-name-1',
  // default property is "padding" and size is "px"
),

array(
  'id'          => 'opt-spacing-output-2',
  'type'        => 'spacing',
  'title'       => 'Spacing',
  'output'      => '.class-name-1',
  'output_mode' => 'margin', // default mode is "padding"
  'unit'        => 'em', // default is "px"
),

array(
  'id'          => 'opt-spacing-output-2',
  'type'        => 'spacing',
  'title'       => 'Spacing',
  'output'      => '.class-name-1',
  'output_mode' => 'none', // It removes property for only needed ( left, right, top, bottom ). for eg. it makes from "padding-left" to "left"
  'unit'        => 'em', // default is "px"
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'     => 'opt-typography-output-1',
  'type'   => 'typography',
  'title'  => 'Typography',
  'output' => '.class-name-1',
),

array(
  'id'     => 'opt-typography-output-2',
  'type'   => 'typography',
  'title'  => 'Typography',
  'output' => '.class-name-1, .classname-2',
),

// This field loads automatically google web fonts in the front-page.
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'     => 'opt-link-color-output-1',
  'type'   => 'link_color',
  'title'  => 'Link Color',
  'output' => '.class-name-1',
),

array(
  'id'     => 'opt-link-color-output-2',
  'type'   => 'link_color',
  'title'  => 'Link Color',
  'output' => '.class-name-1, .classname-2',
),
```
</div>
</div>
<div class="clear"></div>
</div>

---

### How to use attributes ?

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Advanced</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'          => 'opt-password',
  'type'        => 'text',
  'title'       => 'Password',
  'attributes'  => array(
    'type'      => 'password',
    'maxlength' => 7,
  ),
),

array(
  'id'         => 'opt-attributes',
  'type'       => 'text',
  'title'      => 'Ready-Only Text',
  'default'    => 'A ready only field',
  'attributes' => array(
    'readonly' => 'readonly',
  ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'            => 'opt-textarea',
  'type'          => 'textarea',
  'title'         => 'Textarea',
  'attributes'    => array(
    'rows'        => 25,
    'placeholder' => '// Do Stuff',
    'style'       => 'border: 1px solid #0073aa; color: #0073aa;',
  ),
),

```
</div>
</div>
<div class="clear"></div>
</div>

---

### How to use sanitize ?

```php
array(
  'id'       => 'opt-text',
  'type'     => 'text',
  'title'    => 'Text',
  'sanitize' => 'csf_sanitize_replace_a_to_b', // This sanitize meaning, replace letter a to letter b.
),
```

```php
//
// Replace letter a to letter b function
if( ! function_exists( 'csf_sanitize_replace_a_to_b' ) ) {
  function csf_sanitize_replace_a_to_b( $value ) {
    return str_replace( 'a', 'b', $value );
  }
}
```

**Note:** Due to WordPress core rule some html tags are sanitizing by default. ( iframe, script, ie. ) If needed it can be disabled like this:

```php
array(
  'id'       => 'opt-text',
  'type'     => 'text',
  'title'    => 'Text',
  'sanitize' => false,
),

array(
  'id'       => 'opt-textarea',
  'type'     => 'textarea',
  'title'    => 'Textarea',
  'sanitize' => false,
),

array(
  'id'       => 'opt-code-editor',
  'type'     => 'code_editor',
  'title'    => 'Code Editor',
  'sanitize' => false,
),

array(
  'id'       => 'opt-wp-editor',
  'type'     => 'wp_editor',
  'title'    => 'WP Editor',
  'sanitize' => false,
),

// and more...
```

---

### How to use validate ?

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">E-Mail</span>
<span class="csf-tab-title">Numeric</span>
<span class="csf-tab-title">URL</span>
<span class="csf-tab-title">E-Mail (usage in Customizer)</span>
<span class="csf-tab-title">Numeric (usage in Customizer)</span>
<span class="csf-tab-title">URL (usage in Customizer)</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'       => 'opt-email',
  'type'     => 'text',
  'title'    => 'Email validate',
  'validate' => 'csf_validate_email',
),
```

```php
//
// Validate email function (This function has been defined, this is only for FYI)
if( ! function_exists( 'csf_validate_email' ) ) {
  function csf_validate_email( $value ) {
    if ( ! sanitize_email( $value ) ) {
      return esc_html__( 'Please write a valid email address!', 'csf' );
    }
  }
}
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'       => 'opt-numeric',
  'type'     => 'text',
  'title'    => 'Number validate',
  'validate' => 'csf_validate_numeric',
),
```

```php
//
// Validate numeric function (This function has been defined, this is only for FYI)
if( ! function_exists( 'csf_validate_numeric' ) ) {
  function csf_validate_numeric( $value ) {
    if ( ! is_numeric( $value ) ) {
      return esc_html__( 'Please write a numeric data!', 'csf' );
    }
  }
}
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'       => 'opt-url',
  'type'     => 'text',
  'title'    => 'URL validate',
  'validate' => 'csf_validate_url',
),
```

```php
//
// Validate numeric function (This function has been defined, this is only for FYI)
if( ! function_exists( 'csf_validate_url' ) ) {
  function csf_validate_url( $value ) {
    if( ! filter_var( $value, FILTER_VALIDATE_URL ) ) {
      return esc_html__( 'Please write a numeric data!', 'csf' );
    }
  }
}
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'       => 'opt-email',
  'type'     => 'text',
  'title'    => 'Email validate',
  'validate' => 'csf_customize_validate_email',
),
```

```php
//
// Validate email value (This function has been defined, this is only for FYI)
if( ! function_exists( 'csf_customize_validate_email' ) ) {
  function csf_customize_validate_email( $validity, $value, $wp_customize ) {
    if ( ! sanitize_email( $value ) ) {
      $validity->add( 'required', esc_html__( 'Please write a valid email address!', 'csf' ) );
    }
    return $validity;
  }
}
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'       => 'opt-numeric',
  'type'     => 'text',
  'title'    => 'Number validate',
  'validate' => 'csf_customize_validate_numeric',
),
```

```php
//
// Validate numeric value (This function has been defined, this is only for FYI)
if( ! function_exists( 'csf_customize_validate_numeric' ) ) {
  function csf_customize_validate_numeric( $validity, $value, $wp_customize ) {
    if ( ! is_numeric( $value ) ) {
      $validity->add( 'required', esc_html__( 'Please write a numeric data!', 'csf' ) );
    }
    return $validity;
  }
}
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'       => 'opt-url',
  'type'     => 'text',
  'title'    => 'URL validate',
  'validate' => 'csf_customize_validate_url',
),
```

```php
//
// Validate numeric value (This function has been defined, this is only for FYI)
if( ! function_exists( 'csf_customize_validate_url' ) ) {
  function csf_customize_validate_url( $validity, $value, $wp_customize ) {
    if( ! filter_var( $value, FILTER_VALIDATE_URL ) ) {
      $validity->add( 'required', esc_html__( 'Please write a valid url!', 'csf' ) );
    }
    return $validity;
  }
}
```
</div>
</div>
<div class="clear"></div>
</div>

---

### How to use common arguments ?

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Subtitle</span>
<span class="csf-tab-title">Desc</span>
<span class="csf-tab-title">Help</span>
<span class="csf-tab-title">Before</span>
<span class="csf-tab-title">After</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'       => 'opt-text',
  'type'     => 'text',
  'title'    => 'Text',
  'subtitle' => 'Lorem <strong>ipsum</strong> dollar.',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'    => 'opt-text',
  'type'  => 'text',
  'title' => 'Text',
  'desc'  => 'Lorem <strong>ipsum</strong> dollar.',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'    => 'opt-text',
  'type'  => 'text',
  'title' => 'Text',
  'help'  => 'Lorem <strong>ipsum</strong> dollar.',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'     => 'opt-text',
  'type'   => 'text',
  'title'  => 'Text',
  'before' => '$ ', // may need for money text.
),
```

```php
array(
  'id'     => 'opt-text',
  'type'   => 'text',
  'title'  => 'Text',
  'before' => '<strong>$</strong> ', // may need for money text.
),
```

```php
array(
  'id'     => 'opt-text',
  'type'   => 'text',
  'title'  => 'Text',
  'before' => '<p class="csf-text-muted">Lorem ipsum dollar.</p>',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'    => 'opt-text',
  'type'  => 'text',
  'title' => 'Text',
  'after' => ' px',
),
```

```php
array(
  'id'    => 'opt-text',
  'type'  => 'text',
  'title' => 'Text',
  'after' => ' <em>up to</em>',
),
```

```php
array(
  'id'    => 'opt-text',
  'type'  => 'text',
  'title' => 'Text',
  'after' => '<p class="csf-text-muted">Lorem ipsum dollar.</p>',
),
```
</div>
</div>
<div class="clear"></div>
</div>

---

### How to add a new field ?

1. Create your field class php file.

```php
/**
 *
 * Field: password
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! class_exists( 'CSF_Field_password' ) ) {
  class CSF_Field_password extends CSF_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      echo $this->field_before();

      echo '<input type="password" name="'. $this->field_name() .'" value="'. $this->value .'"'. $this->field_attributes() .' />';

      echo $this->field_after();

    }

  }
}
```

2. Include this created file.

3. Use the new field in the config.

```php
array(
  'id'    => 'opt-password',
  'type'  => 'password',
  'title' => 'Password',
),
```

---

### How to enqueue your custom css/js ?

```php
if( ! function_exists( 'csf_add_my_custom_css' ) ) {
  function csf_add_my_custom_css() {

    // Style
    wp_enqueue_style( ... $arguments );

    // Script
    wp_enqueue_script( ... $arguments );

  }
  add_action('csf/enqueue', 'csf_add_my_custom_css' );
}
```

---

### How to use Customizer JS

1. Create a transport type field in customizer framework.

```php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_framework';

  //
  // Create customize options
  CSF::createCustomizeOptions( $prefix );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 1',
    'fields' => array(

      array(
        'id'        => 'opt-color',
        'type'      => 'color',
        'title'     => 'Color',
        'transport' => 'postMessage', // default is refresh
      ),

    )
  ) );

}
```

2. Create your js code **my-customizer.js**

```php
( function( $ ) {

  wp.customize( 'my_framework[opt-color]', function( value ) {

    value.bind( function( new_value ) {
      $( 'body' ).css({'background-color': new_value});
    });

  });

})(jQuery);
```

3. Enqueue your **my-customizer.js** script.

```php
if( ! function_exists('csf_customize_preview_init') ) {
  function csf_customize_preview_init() {
    wp_enqueue_script( 'my-customizer', get_theme_file_uri().'/js/my-customizer.js', array( 'jquery', 'customize-preview' ), null, true );
  }
  add_action( 'customize_preview_init', 'csf_customize_preview_init' );
}
```

---

### How to use Font Awesome 5 ?

We have updated Font Awesome 5 icon package for **Icon Field** ( *but still you can use version 4* )

If still you want to use **Font Awesome 4** only add this filter.

```php
add_filter( 'csf_fa4', '__return_true' );
```

or upgrade *Font Awesome Free 5* with a front-end enqueue style. You know that already.

```php
if( ! function_exists( 'your_prefix_enqueue_fa5' ) ) {
  function your_prefix_enqueue_fa5() {
    wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
    wp_enqueue_style( 'fa5-v4-shims', 'https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css', array(), '5.13.0', 'all' );
  }
  add_action( 'wp_enqueue_scripts', 'your_prefix_enqueue_fa5' );
}
```

Click to here for more https://fontawesome.com/how-to-use/on-the-web/setup/upgrading-from-version-4

---

### How to add custom icons ?

1. Use **csf_field_icon_add_icons** filter for add custom icons.

```php
if( ! function_exists( 'my_custom_icons' ) ) {

function my_custom_icons( $icons ) {

    //
    // Use this for reset current icons
    // $icons = array();

    //
    // Adding new icons
    $icons[]  = array(
      'title' => 'My Custom Icons',
      'icons' => array(
        'my-icon my-icon-heart',
        'my-icon my-icon-star',
        'my-icon my-icon-gear',
      )
    );

    //
    // Move custom icons to top of the list.
    $icons = array_reverse( $icons );

    return $icons;

  }
  add_filter( 'csf_field_icon_add_icons', 'my_custom_icons' );
}
```

---

### How to add custom font family ?

1. Use **csf_field_typography_customwebfonts** filter for add custom font family.

```php
if( ! function_exists( 'my_custom_font_family' ) ) {

function my_custom_font_family( $fonts ) {

    //
    // Adding new icons
    $fonts['Ubuntu'] = array( 'normal' );
    $fonts['Gotham'] = array( '100', 'normal', 'italic', '700' );
    $fonts['MyFont'] = array( '300', 'normal', 'italic', '700', '700italic' );

    return $fonts;

  }
  add_filter( 'csf_field_typography_customwebfonts', 'my_custom_font_family' );
}
```

---

### How to add custom color palette ?

1. Use **csf_color_palette** filter for add custom color palette.

```php
if( ! function_exists( 'my_custom_color_palette' ) ) {
  function my_custom_color_palette( $colors ) {
    return array( '#d81cb3', '#c119a1', '#ab168e', '#94137b', '#7d1068', '#670d55', '#500a43', '#400835' );
  }
  add_filter( 'csf_color_palette', 'my_custom_color_palette' );
}
```

---

### How to add post formats metabox ?

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Default (Standard) Post Format</span>
<span class="csf-tab-title">Multiple Post Formats</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
//
// A unique slug-like ID
$prefix_page_opts = '_prefix_post_options';

CSF::createMetabox( $prefix_page_opts, array(
  'title'        => 'Aside Post Format Options',
  'post_type'    => 'post',
  'post_formats' => 'aside', // Spesific post format
) );

CSF::createSection( $prefix_page_opts, array(
  'title'  => 'Overview',
  'icon'   => 'fa fa-rocket',
  'fields' => array(

    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

  )
);
```
</div>
<div class="csf-tab-content">

```php
//
// A unique slug-like ID
$prefix_page_opts = '_prefix_post_options';

CSF::createMetabox( $prefix_page_opts, array(
  'title'        => 'Default (Standard) Post Format Options',
  'post_type'    => 'post',
  'post_formats' => 'default', // Default post format,
) );

CSF::createSection( $prefix_page_opts, array(
  'title'  => 'Overview',
  'icon'   => 'fa fa-rocket',
  'fields' => array(

    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

  )
);
```
</div>
<div class="csf-tab-content">

```php
//
// A unique slug-like ID
$prefix_page_opts = '_prefix_post_options';

CSF::createMetabox( $prefix_page_opts, array(
  'title'        => 'Aside Image and Video Format Options',
  'post_type'    => 'post',
  'post_formats' => array( 'image', 'video' ), // Spesific post formats
) );

CSF::createSection( $prefix_page_opts, array(
  'title'  => 'Overview',
  'icon'   => 'fa fa-rocket',
  'fields' => array(

    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

  )
);
```
</div>
</div>
<div class="clear"></div>
</div>

---

### How to add page templates metabox ?

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Default Template</span>
<span class="csf-tab-title">Multiple Page Templates</span>
<span class="csf-tab-title">Subfolder Page Templates</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
//
// A unique slug-like ID
$prefix_page_opts = '_prefix_page_options';

CSF::createMetabox( $prefix_page_opts, array(
  'title'          => 'About Page Options',
  'post_type'      => 'page',
  'page_templates' => 'about.php', // Spesific page template
) );

CSF::createSection( $prefix_page_opts, array(
  'title'  => 'Overview',
  'icon'   => 'fa fa-rocket',
  'fields' => array(

    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

  )
);
```
</div>
<div class="csf-tab-content">

```php
//
// A unique slug-like ID
$prefix_page_opts = '_prefix_page_options';

CSF::createMetabox( $prefix_page_opts, array(
  'title'          => 'Default Page Options',
  'post_type'      => 'page',
  'page_templates' => 'default', // Default template
) );

CSF::createSection( $prefix_page_opts, array(
  'title'  => 'Overview',
  'icon'   => 'fa fa-rocket',
  'fields' => array(

    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

  )
);
```
</div>
<div class="csf-tab-content">

```php
//
// A unique slug-like ID
$prefix_page_opts = '_prefix_page_options';

CSF::createMetabox( $prefix_page_opts, array(
  'title'          => 'About and Contact Pages Options',
  'post_type'      => 'page',
  'page_templates' => array( 'about.php', 'contact.php' ), // Spesific page templates
) );

CSF::createSection( $prefix_page_opts, array(
  'title'  => 'Overview',
  'icon'   => 'fa fa-rocket',
  'fields' => array(

    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

  )
);
```
</div>
<div class="csf-tab-content">

```php
//
// A unique slug-like ID
$prefix_page_opts = '_prefix_page_options';

CSF::createMetabox( $prefix_page_opts, array(
  'title'          => 'About and Contact Pages Options',
  'post_type'      => 'page',
  'page_templates' => array( 'layouts/about.php', 'page-templates/contact.php', 'anywhere/template.php' ), // Spesific page templates
) );

CSF::createSection( $prefix_page_opts, array(
  'title'  => 'Overview',
  'icon'   => 'fa fa-rocket',
  'fields' => array(

    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

  )
);
```
</div>
</div>
<div class="clear"></div>
</div>

---

### How to create underscore framework ?

We have a simple plugin for create your underscores based framework.

<img src="/assets/images/underscore.png" />

You can download from <a href="/assets/plugins/csf-underscore.zip" target="_blank">csf-underscore.zip</a>

Let's suppose you typed "**powerx**" prefix and generated it. Your new configurations must be set up like this:

```php
// Installation
require_once get_theme_file_path() .'/inc/powerx-framework/powerx-framework.php';

// Configuration
if( class_exists( 'POWERX' ) ) {

  POWERX::createOptions( ... );
  POWERX::createMetabox( ... );
  POWERX::createCustomizeOptions( ... );
  POWERX::createNavMenuOptions( ... );
  POWERX::createTaxonomyOptions( ... );
  POWERX::createProfileOptions( ... );
  POWERX::createWidget( ... );
  POWERX::createCommentMetabox( ... );
  POWERX::createShortcoder( ... );
  // and
  POWERX::createSection( ... );

}

// Also "actions" and "filters".
powerx_init
powerx_loaded
powerx_{$prefix}_saved
powerx_{$prefix}_save_after

// All "csf/CSF" prefix has become "powerx/POWERX".
```

**Note:** The underscore mode avantage is prevent possible 5% conflicts with other codestar frameworks.

---

### How to translate or localization ?

Localization is ready for 20+ languages. The language files has located in **/languages** folder:

- If you want to **edit** existing translate or **add** something. Open any **.po** file with text-editor or <a href="https://poedit.net/" target="_blank">po-editor</a>. ( for eg Spanish/Español: **languages/es_ES.po** )

- If you want to translate a **new** language. Create the prefixed file inside **/languages** folder.( for eg Spanish/Mexico: **es_MX.po**, Afrikaans: **af.po** )

Finally, Do not forget to send us the edited file via *routewp[at]gmail[dot]com*. We'll compile and add to next updates.

Thanks for contribute.

---

### How to override files ?

You can modify framework files without touch main files. Only create a `csf-override` folder inside theme root. for eg:

```
.
├── wp-content
|   ├── themes
|   |   ├── theme-name
|   |   |   ├── csf-override <--- create
|   |   |   |   ├── fields
|   |   |   |   |   ├── text
|   |   |   |   |   |   ├── text.php <--- and edit any file.
|   |   |   |   |   |   |
|   |   |   |   |   |   |
```

Attention: Be sure for do not change or remove javascript id/classnames on elements.

---
