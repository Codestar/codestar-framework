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
```
</div>
</div>
<div class="clear"></div>
</div>

Available dependency conditions: `==`  `!=` `>=` `>` `<=` `<` `any` `not-any`

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

---

### How to use validate ?

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">E-Mail</span>
<span class="csf-tab-title">Numeric</span>
<span class="csf-tab-title">E-Mail (usage in Customizer)</span>
<span class="csf-tab-title">Numeric (usage in Customizer)</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'       => 'opt-email',
  'type'     => 'text',
  'title'    => 'Email Text',
  'validate' => 'csf_validate_email',
),
```

```php
//
// Validate email function
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
  'title'    => 'Number Text',
  'validate' => 'csf_validate_numeric',
),
```

```php
//
// Validate numeric function
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
  'id'       => 'opt-email',
  'type'     => 'text',
  'title'    => 'Email Text',
  'validate' => 'csf_customize_validate_email',
),
```

```php
//
// Validate email value
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
  'title'    => 'Number Text',
  'validate' => 'csf_customize_validate_numeric',
),
```

```php
//
// Validate numeric value
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
</div>
<div class="clear"></div>
</div>

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
