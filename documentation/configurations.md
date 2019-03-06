## Admin Option Framework

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Options w/ Tabs</span>
<span class="csf-tab-title">Options w/ Administrator Submenu</span>
<span class="csf-tab-title">Options w/ Fully Arguments</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_framework';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'My Framework',
    'menu_slug'  => 'my-framework',
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 1',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'opt-text',
        'type'  => 'text',
        'title' => 'Simple Text',
      ),

    )
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

}
```
</div>
<div class="csf-tab-content">

```php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_framework';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'My Framework',
    'menu_slug'  => 'my-framework',
  ) );

  //
  // Create a top-tab
  CSF::createSection( $prefix, array(
    'id'    => 'primary_tab', // Set a unique slug-like ID
    'title' => 'Primary Tab',
  ) );

  //
  // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'primary_tab', // The slug id of the parent section
    'title'  => 'Sub Tab 1',
    'fields' => array(

      // A text field
      array(
        'id'    => 'opt-text',
        'type'  => 'text',
        'title' => 'Simple Text',
      ),

    )
  ) );

  //
  // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'primary_tab',
    'title'  => 'Sub Tab 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

  //
  // Create a top-tab
  CSF::createSection( $prefix, array(
    'id'    => 'secondry_tab', // Set a unique slug-like ID
    'title' => 'Secondry Tab',
  ) );


  //
  // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'secondry_tab', // The slug id of the parent section
    'title'  => 'Sub Tab 1',
    'fields' => array(

      // A switcher field
      array(
        'id'    => 'opt-switcher',
        'type'  => 'switcher',
        'title' => 'Simple Switcher',
      ),

    )
  ) );

}
```
</div>
<div class="csf-tab-content">

```php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_framework';

  /**
   *
   * @menu_parent argument examples.
   *
   * For Dashboard: 'index.php'
   * For Posts: 'edit.php'
   * For Media: 'upload.php'
   * For Pages: 'edit.php?post_type=page'
   * For Comments: 'edit-comments.php'
   * For Custom Post Types: 'edit.php?post_type=your_post_type'
   * For Appearance: 'themes.php'
   * For Plugins: 'plugins.php'
   * For Users: 'users.php'
   * For Tools: 'tools.php'
   * For Settings: 'options-general.php'
   *
   */
  CSF::createOptions( $prefix, array(
    'menu_title'  => 'My Framework',
    'menu_slug'   => 'my-framework',
    'menu_type'   => 'submenu',
    'menu_parent' => 'themes.php',
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 1',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'opt-text',
        'type'  => 'text',
        'title' => 'Simple Text',
      ),

    )
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

}
```
</div>
<div class="csf-tab-content">

```php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_framework';

  //
  // Create options
  CSF::createOptions( $prefix, array(

    // framework title
    'framework_title' => 'Codestar Framework <small>by Codestar</small>',
    'framework_class' => '',

    // menu settings
    'menu_title'      => '',
    'menu_slug'       => '',
    'menu_type'       => 'menu',
    'menu_capability' => 'manage_options',
    'menu_icon'       => null,
    'menu_position'   => null,
    'menu_hidden'     => false,
    'menu_parent'     => '',

    // menu extras
    'show_bar_menu'      => true,
    'show_sub_menu'      => true,
    'show_network_menu'  => true,
    'show_in_customizer' => false,

    'show_search'        => true,
    'show_reset_all'     => true,
    'show_reset_section' => true,
    'show_footer'        => true,
    'show_all_options'   => true,
    'sticky_header'      => true,
    'save_defaults'      => true,
    'ajax_save'          => true,

    // admin bar menu settings
    'admin_bar_menu_icon'     => '',
    'admin_bar_menu_priority' => 80,

    // footer
    'footer_text'   => '',
    'footer_after'  => '',
    'footer_credit' => '',

    // database model
    'database'       => '', // options, transient, theme_mod, network
    'transient_time' => 0,

    // contextual help
    'contextual_help'         => array(),
    'contextual_help_sidebar' => '',

    // typography options
    'enqueue_webfont' => true,
    'async_webfont'   => false,

    // others
    'output_css' => true,

    // theme
    'theme' => 'dark',

    // external default values
    'defaults' => array(),

  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 1',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'opt-text',
        'type'  => 'text',
        'title' => 'Simple Text',
      ),

    )
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

}
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Get an option value</div>

```php
// Get options
$options = get_option( 'my_framework' ); // unique id of the framework

echo $options['opt-text']; // id of the field
echo $options['opt-textarea']; // id of the field
```

<div class="pre-heading">Get an option value (advanced)</div>

```php
// A Custom function for get an option
if ( ! function_exists( 'prefix_get_option' ) ) {
  function prefix_get_option( $option = '', $default = null ) {
    $options = get_option( 'my_framework' ); // Attention: Set your unique id of the framework
    return ( isset( $options[$option] ) ) ? $options[$option] : $default;
  }
}

echo prefix_get_option( 'opt-text' );
echo prefix_get_option( 'opt-text', 'default value' );
```

<div class="pre-heading">Arguments</div>

| Name                       | Type      | Default        | Description |
|----------------------------|-----------|----------------|-------------|
| `framework_title`          | string    |                | Text to display in the framework header.
| `framework_class`          | string    |                | Extra CSS classes (space separated) to append to the main framework wrapper.
| `menu_title`               | string    |                | On-screen name text for the menu.
| `menu_slug`                | string    |                | Slug name to refer to this menu by (should be unique for this menu).
| `menu_type`                | string    | menu           | Menu type. *for eg.* `menu` `submenu`
| `menu_parent`              | string    |                | Slug name for the parent menu (or the file name of a standard WordPress admin page). *for eg.* `themes.php` `plugins.php` `options-general.php` `tools.php` Note: *menu_type* must be *submenu*
| `menu_capability`          | string    | manage_options | Capability required for this menu to be displayed to the user.
| `menu_icon`                | string    |                | URL to the icon to be used for this menu. *for eg. "dashicons-chart-pie"*
| `menu_position`            | number    |                | Position in the menu.
| `menu_hidden`              | bool      | false          | Flag to display menu in the admin panel.
| `show_bar_menu`            | bool      | true           | Flag to display menu in the admin bar.
| `show_sub_menu`            | bool      | true           | Flag to display sub menus in the admin bar.
| `show_network_menu`        | bool      | true           | Flag to diplay menu in the network bar.
| `show_in_customizer`       | bool      | false          | Flag to display option panel in customizer.
| `show_search`              | bool      | true           | Flag to display *search* of the framework.
| `show_reset_all`           | bool      | true           | Flag to display *reset button* of the framework.
| `show_reset_section`       | bool      | true           | Flag to display *reset section button* of the framework.
| `show_all_options`         | bool      | true           | Flag to display *show all options* of the framework.
| `sticky_header`            | bool      | true           | Flag to display *sticky header* feature of the framework.
| `save_defaults`            | bool      | true           | Flag to save to default values of the framework.
| `ajax_save`                | bool      | true           | Flag to enable *ajax save* feature of the framework.
| `admin_bar_menu_icon`      | string    |                | Icon to display before menu title.
| `admin_bar_menu_priority`  | number    | 80             | Position in the bar menu.
| `footer_text`              | string    |                | Text to display in the footer of the framework.
| `footer_after`             | string    |                | Content to display after of the framework footer.
| `footer_credit`            | string    |                | Text to display in footer of the framework.
| `database`                 | string    | option         | Database save *data* type. *for eg.* `option` `theme_mod` `transient` `network`
| `transient_time`           | number    | 0              | The time until expiration in seconds from now, or 0 for never expires. If used *database* as *transient*.
| `contextual_help`          | array     |                | Contextual helps of the framework.
| `contextual_help_sidebar`  | string    |                | Contextual sidebar help of the framework.
| `enqueue_webfont`          | bool      | true           | Flag to load web fonts of the framework.
| `async_webfont`            | bool      | false          | Flag to load google fonts with *async* method of the framework.
| `output_css`               | bool      | true           | Flag to load output css of the framework.
| `theme`                    | string    | dark           | The theme of the framework. *for eg.* `dark` - `light`
| `defaults`                 | array     |                | Sets all default values from a external array. (optional)

<div class="pre-heading">Section Arguments</div>

| Name      | Type    | Description |
|-----------|---------|-------------|
| `id`      | string  | A unique slug ID.
| `parent`  | string  | Slug id for the parent section.
| `title`   | string  | Title of the section.
| `icon`    | string  | Icon of the section.
| `fields`  | array   | Associative array containing fields for the field sets.

---

## Customize Option Framework

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Options w/ Tabs</span>
<span class="csf-tab-title">Options w/ Fully Arguments</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

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

      //
      // A text field
      array(
        'id'    => 'opt-text',
        'type'  => 'text',
        'title' => 'Simple Text',
      ),

    )
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

}
```
</div>
<div class="csf-tab-content">

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
  // Create a top-tab
  CSF::createSection( $prefix, array(
    'id'    => 'primary_tab', // Set a unique slug-like ID
    'title' => 'Primary Tab',
  ) );

  //
  // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'primary_tab', // The slug id of the parent section
    'title'  => 'Sub Tab 1',
    'fields' => array(

      // A text field
      array(
        'id'    => 'opt-text',
        'type'  => 'text',
        'title' => 'Simple Text',
      ),

    )
  ) );

  //
  // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'primary_tab',
    'title'  => 'Sub Tab 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

  //
  // Create a top-tab
  CSF::createSection( $prefix, array(
    'id'    => 'secondry_tab', // Set a unique slug-like ID
    'title' => 'Secondry Tab',
  ) );


  //
  // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'secondry_tab', // The slug id of the parent section
    'title'  => 'Sub Tab 1',
    'fields' => array(

      // A switcher field
      array(
        'id'    => 'opt-switcher',
        'type'  => 'switcher',
        'title' => 'Simple Switcher',
      ),

    )
  ) );

}
```
</div>
<div class="csf-tab-content">

```php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_framework';

  //
  // Create customize options
  CSF::createCustomizeOptions( $prefix, array(
    'database'        => 'option',
    'transport'       => 'refresh',
    'capability'      => 'manage_options',
    'save_defaults'   => true,
    'enqueue_webfont' => true,
    'async_webfont'   => false,
    'output_css'      => true,
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 1',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'opt-text',
        'type'  => 'text',
        'title' => 'Simple Text',
      ),

    )
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

}
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Get an option value</div>

```php
// Get options
$options = get_option( 'my_framework' ); // unique id of the framework

echo $options['opt-text']; // id of the field
echo $options['opt-textarea']; // id of the field
```

<div class="pre-heading">Get an option value (advanced)</div>

```php
// A Custom function for get an option
if ( ! function_exists( 'prefix_get_option' ) ) {
  function prefix_get_option( $option = '', $default = null ) {
    $options = get_option( 'my_framework' ); // Attention: Set your unique id of the framework
    return ( isset( $options[$option] ) ) ? $options[$option] : $default;
  }
}

echo prefix_get_option( 'opt-text' );
echo prefix_get_option( 'opt-text', 'default value' );
```

<div class="pre-heading">Arguments</div>

| Name               | Type     | Default        | Description |
|--------------------|----------|----------------|-------------|
| `database`         | string   | option         | Data type for database. *for eg.* `option` `theme_mod`
| `transport`        | string   | refresh        | This can be either 'refresh' (default) or 'postMessage'. Only set this to 'postMessage' if you are writing custom Javascript to control the Theme Customizer's live preview.
| `capability`       | string   | manage_options | Capability required for this menu to be displayed to the user.
| `save_defaults`    | bool     | true           | Flag to save to default values of the framework.
| `enqueue_webfont`  | bool     | true           | Flag to load web fonts of the framework.
| `async_webfont`    | bool     | false          | Flag to load google fonts with *async* method of the framework.
| `output_css`       | bool     | true           | Flag to load output css of the framework.
| `defaults`         | array    |                | Sets all default values from a external array. (optional)
---

## Metabox Option Framework

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Metabox w/ Side</span>
<span class="csf-tab-title">Metabox w/ Fully Arguments</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_post_options';

  //
  // Create a metabox
  CSF::createMetabox( $prefix, array(
    'title'     => 'My Post Options',
    'post_type' => 'post',
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 1',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'opt-text',
        'type'  => 'text',
        'title' => 'Simple Text',
      ),

    )
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

}
```
</div>
<div class="csf-tab-content">

```php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_post_options';

  //
  // Create a metabox
  CSF::createMetabox( $prefix, array(
    'title'     => 'My Post Options',
    'post_type' => 'post',
    'context'   => 'side', // The context within the screen where the boxes should display. `normal`, `side`, `advanced`
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 1',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'opt-text',
        'type'  => 'text',
        'title' => 'Simple Text',
      ),

    )
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

}
```
</div>
<div class="csf-tab-content">

```php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_post_options';

  //
  // Create a metabox
  CSF::createMetabox( $prefix, array(
    'title'              => '',
    'post_type'          => 'post',
    'data_type'          => 'serialize',
    'context'            => 'advanced',
    'priority'           => 'default',
    'exclude_post_types' => array(),
    'page_templates'     => '',
    'post_formats'       => '',
    'show_restore'       => false,
    'enqueue_webfont'    => true,
    'async_webfont'      => false,
    'output_css'         => true,
    'theme'              => 'dark',
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 1',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'opt-text',
        'type'  => 'text',
        'title' => 'Simple Text',
      ),

    )
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

}
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name                 | Type          | Default    | Description |
|----------------------|---------------|------------|-------------|
| `title`              | string        |            | Title of the meta box.
| `post_type`          | array\|string | post       | Provide any number of post_types for a given metabox to appear.
| `data_type`          | string        | serialize  | Database save option type. *for eg* `serialize` or `unserialize`
| `context`            | string        | advanced   | The context within the screen where the boxes should display. *for eg* `normal`, `side`, `advanced`
| `priority`           | string        | default    | The priority within the context where the boxes should show. *for eg* `high`, `low`, `default`
| `exclude_post_types` | array         |            | Array of post types to exclude. *for eg* `post`, `page`, `products`
| `page_templates`     | array\|string |            | Bind visibility of a metabox to any number of page templates. The value will be equal to the filename of the custom page template. <a href="#/faq?id=how-to-add-page-templates-metabox-" class="csf-more-link">?</a>
| `post_formats`       | array\|string |            | Bind the visibility of a metabox to a given post format. <a href="https://codex.wordpress.org/Post_Formats#Supported_FormatsList"> List of post formats.</a> <a href="#/faq?id=how-to-add-post-formats-metabox-" class="csf-more-link">?</a>
| `show_restore`       | bool          | false      | Flag to display *restore button* of the metabox.
| `enqueue_webfont`    | bool          | true       | Flag to load web fonts of the framework.
| `async_webfont`      | bool          | false      | Flag to load google fonts with *async* method of the framework.
| `output_css`         | bool          | true       | Flag to load output css of the framework.
| `theme`              | string        | dark       | The theme of the framework. *for eg.* `dark` - `light`
| `defaults`           | array         |            | Sets all default values from a external array. (optional)

<div class="pre-heading">Get an option value ( <span class="csf-tolowercase">data_type => serialize</span> )</div>

```php
//
// data_type => serialize is default
// You should use my_post_options as this is the id for your key declared into config
//
$meta = get_post_meta( get_the_ID(), 'my_post_options', true );

echo $meta['opt-text'];
echo $meta['opt-textarea'];
```
<div class="pre-heading">Get an option value ( <span class="csf-tolowercase">data_type => unserialize</span> )</div>

```php
//
// data_type => unserialize is optional
// You should to use option id directly declared into field config
//
echo get_post_meta( get_the_ID(), 'opt-text', true );
echo get_post_meta( get_the_ID(), 'opt-textarea', true );
```

---

## Taxonomy Option Framework

<div class="pre-heading">Config Example</div>

```php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_taxonomy_options';

  //
  // Create taxonomy options
  CSF::createTaxonomyOptions( $prefix, array(
    'taxonomy'  => 'category',
    'data_type' => 'serialize', // The type of the database save options. `serialize` or `unserialize`
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'fields' => array(

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

    )
  ) );

}
```

<div class="pre-heading">Get an option value ( <span class="csf-tolowercase">data_type => serialize</span> )</div>

```php
//
// You should use my_taxonomy_options as this is the id for your key declared into config
$term = get_category_by_slug( 'uncategorized' );
$meta = get_term_meta( $term->term_id, 'my_taxonomy_options', true );

echo $meta['opt-text']; // id of the field
echo $meta['opt-textarea']; // id of the field
```
<div class="pre-heading">Get an option value ( <span class="csf-tolowercase">data_type => unserialize</span> )</div>

```php
//
// Get options
$term = get_category_by_slug( 'uncategorized' );
echo get_term_meta( $term->term_id, 'opt-text', true ); // id of the field
echo get_term_meta( $term->term_id, 'opt-textarea', true ); // id of the field
```

<div class="pre-heading">Arguments</div>

| Name         | Type          | Default    | Description |
|--------------|---------------|------------|-------------|
| `taxonomy`   | array/string  |            | Provide any number of taxonomy slugs for a given “term” box to appear.
| `data_type`  | string        | serialize  | Database save option type. *for eg* `serialize` or `unserialize`
| `defaults`   | array         |            | Sets all default values from a external array. (optional)
---

## Shortcode Generate Framework

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Shortcoder w/ Contents</span>
<span class="csf-tab-title">Shortcoder w/ Group</span>
<span class="csf-tab-title">Shortcoder w/ Repeater</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_shortcodes';

  //
  // Create a shortcoder
  CSF::createShortcoder( $prefix, array(
    'button_title' => 'Add Shortcode',
  ) );

  //
  // A basic shortcode
  CSF::createSection( $prefix, array(
    'title'     => 'Shortcode Basic 1',
    'view'      => 'normal', // View model of the shortcode. `normal` `contents` `group` `repeater`
    'shortcode' => 'my_shortcode', // Set a unique slug-like name of shortcode.
    'fields'    => array(

      array(
        'id'    => 'title',
        'type'  => 'text',
        'title' => 'Title',
      ),

      array(
        'id'    => 'color',
        'type'  => 'color',
        'title' => 'Color',
      ),

    )

  ) );

  //
  // Another basic shortcode
  CSF::createSection( $prefix, array(
    'title'     => 'Shortcode Basic 2',
    'view'      => 'normal', // View model of the shortcode. `normal` `contents` `group` `repeater`
    'shortcode' => 'my_shortcode', // Set a unique slug-like name of shortcode.
    'fields'    => array(

      array(
        'id'    => 'title',
        'type'  => 'text',
        'title' => 'Titlte',
      ),

      array(
        'id'    => 'switcher',
        'type'  => 'switcher',
        'title' => 'Switcher',
      ),

      array(
        'id'    => 'content',
        'type'  => 'textarea',
        'title' => 'Content',
      ),

    )

  ) );

}
```
</div>
<div class="csf-tab-content">

```php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_shortcodes';

  //
  // Create a shortcoder
  CSF::createShortcoder( $prefix, array(
    'button_title' => 'Add Shortcode',
  ) );

  //
  // A basic shortcode
  CSF::createSection( $prefix, array(
    'title'     => 'Shortcode Contents 1',
    'view'      => 'contents',
    'shortcode' => 'my_shortcode',
    'fields'    => array(

      array(
        'id'    => 'content_1',
        'type'  => 'textarea',
        'title' => 'Content',
      ),

      array(
        'id'    => 'content_2',
        'type'  => 'textarea',
        'title' => 'Content',
      ),

    )

  ) );

  //
  // Another basic shortcode
  CSF::createSection( $prefix, array(
    'title'     => 'Shortcode Contents 2',
    'view'      => 'contents',
    'shortcode' => 'my_shortcode',
    'fields'    => array(

      array(
        'id'    => 'content_1',
        'type'  => 'textarea',
        'title' => 'Content 1',
      ),

      array(
        'id'    => 'content_2',
        'type'  => 'textarea',
        'title' => 'Content 2',
      ),

      array(
        'id'    => 'content_3',
        'type'  => 'textarea',
        'title' => 'Content 3',
      ),

    )

  ) );

}
```
</div>
<div class="csf-tab-content">

```php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_shortcodes';

  //
  // Create a shortcoder
  CSF::createShortcoder( $prefix, array(
    'button_title' => 'Add Shortcode',
  ) );

  //
  // A basic shortcode
  CSF::createSection( $prefix, array(
    'title'     => 'Shortcode Group 1',
    'view'      => 'group',
    'shortcode' => 'tabs',
    'fields'    => array(

      array(
        'id'    => 'title',
        'type'  => 'text',
        'title' => 'Title',
      ),

      array(
        'id'    => 'switcher',
        'type'  => 'switcher',
        'title' => 'Switcher',
      ),

    ),
    'group_shortcode' => 'tab',
    'group_fields'    => array(

      array(
        'id'     => 'title',
        'type'   => 'text',
        'title'  => 'Title',
      ),

      array(
        'id'     => 'content',
        'type'   => 'textarea',
        'title'  => 'Content',
      ),

    )

  ) );

  //
  // A basic shortcode
  CSF::createSection( $prefix, array(
    'title'           => 'Shortcode Group 2',
    'view'            => 'group',
    'shortcode'       => 'accordions',
    'group_shortcode' => 'accordion',
    'group_fields'    => array(

      array(
        'id'    => 'title',
        'type'  => 'text',
        'title' => 'Title',
      ),

      array(
        'id'    => 'content',
        'type'  => 'textarea',
        'title' => 'Content',
      ),

    )

  ) );

}
```
</div>
<div class="csf-tab-content">

```php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_shortcodes';

  //
  // Create a shortcoder
  CSF::createShortcoder( $prefix, array(
    'button_title' => 'Add Shortcode',
  ) );

  //
  // A basic shortcode
  CSF::createSection( $prefix, array(
    'title'     => 'Shortcode Repeater 1',
    'view'      => 'repeater',
    'shortcode' => 'my_shortcode',
    'fields'    => array(

      array(
        'id'    => 'title',
        'type'  => 'text',
        'title' => 'Title',
      ),

      array(
        'id'    => 'switcher',
        'type'  => 'switcher',
        'title' => 'Switcher',
      ),

      array(
        'id'     => 'content',
        'type'   => 'textarea',
        'title'  => 'Content',
      ),

    )

  ) );

  //
  // A basic shortcode
  CSF::createSection( $prefix, array(
    'title'     => 'Shortcode Repeater 2',
    'view'      => 'repeater',
    'shortcode' => 'my_shortcode',
    'fields'    => array(

      array(
        'id'    => 'title',
        'type'  => 'text',
        'title' => 'Title',
      ),

    )

  ) );

}
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Usage: Textarea</div>

```php
array(
  'id'        => 'opt-textarea',
  'type'      => 'textarea',
  'title'     => 'Textarea with Shortcode',
  'shortcode' => 'my_shortcodes', // id of shortcoder id
),
```

<div class="pre-heading">Arguments</div>

| Name              | Type    | Default            | Description |
|-------------------|---------|--------------------|-------------|
| `button_title`    | string  | Add Shortcode      | Text to display on the shortcode trigger button.
| `select_title`    | string  | Select a shortcode | Placeholder to be displayed when nothing is selected.
| `insert_title`    | string  | Insert Shortcode   | Text to display on the insert button.
| `show_in_editor`  | bool    | true               | Flag to display media insert/upload buttons.
| `defaults`        | array   |                    | Sets all default values from a external array. (optional)

<div class="pre-heading">EXtra Section Arguments for Shortcoder</div>

| Name               | Type    | Description |
|--------------------|---------|-------------|
| `view`             | string  | View model of the shortcode. `normal` `contents` `group` `repeater`
| `shortcode_name`   | string  | Set a unique slug-like name of shortcode.
| `group_shortcode`  | string  | Set a unique slug-like name of group shortcode.
| `group_fields`     | array   | An associative array containing fields for the fieldsets.

---

## Widget Option Framework

<div class="pre-heading">Config Examples</div>

```php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Create a widget 1
  //
  CSF::createWidget( 'csf_widget_example_1', array(
    'title'       => 'Codestar Widget Example 1',
    'classname'   => 'csf-widget-classname',
    'description' => 'A description for widget example 1',
    'fields'      => array(

      array(
        'id'      => 'title',
        'type'    => 'text',
        'title'   => 'Title',
      ),

      array(
        'id'      => 'opt-text',
        'type'    => 'text',
        'title'   => 'Text',
        'default' => 'Default text value',
      ),

      array(
        'id'      => 'opt-switcher',
        'type'    => 'switcher',
        'title'   => 'Switcher',
      ),

      array(
        'id'      => 'opt-textarea',
        'type'    => 'textarea',
        'title'   => 'Textarea',
        'help'    => 'The help text of the field.',
      ),

    )
  ) );

  //
  // Front-end display of widget example 1
  // Attention: This function named considering above widget base id.
  //
  if( ! function_exists( 'csf_widget_example_1' ) ) {
    function csf_widget_example_1( $args, $instance ) {

      echo $args['before_widget'];

      if ( ! empty( $instance['title'] ) ) {
        echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
      }

      // var_dump( $args ); // Widget arguments
      // var_dump( $instance ); // Saved values from database
      echo $instance['title'];
      echo $instance['opt-text'];
      echo $instance['opt-switcher'];
      echo $instance['opt-textarea'];

      echo $args['after_widget'];

    }
  }

}
```

<div class="pre-heading">Arguments</div>

| Name          | Type    | Default  | Description |
|---------------|---------|----------|-------------|
| `title`       | string  |          | Title of widget in the backend.
| `description` | string  |          | Description of widget in the backend.
| `classname`   | string  |          | CSS classes (space separated) to append to the front-end widget area.
| `width`       | number  | 250      | Width of the fully expanded control form (but try hard to use the default width).
| `defaults`    | array   |          | Sets all default values from a external array. (optional)
