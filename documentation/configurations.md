## Admin Options Framework

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

<div class="pre-heading">Usage</div>

```php
//
// Get options
$options = get_option( 'my_framework' ); // unique id of the framework

echo $options['opt-text']; // id of the field
echo $options['opt-textarea']; // id of the field
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
| `menu_hidden`              | bool      | false          | Whether to show this menu in the admin panel.
| `show_bar_menu`            | bool      | true           | Whether to show this menu in the admin bar.
| `show_sub_menu`            | bool      | true           | Whether to show this sub menus in the admin bar.
| `show_network_menu`        | bool      | true           | Whether to show this menu in the network menu.
| `show_in_customizer`       | bool      | false          | Whether to include this options of the customizer panel.
| `show_search`              | bool      | true           | Whether to show *search* of the framework.
| `show_reset_all`           | bool      | true           | Whether to show *reset button* of the framework.
| `show_reset_section`       | bool      | true           | Whether to show *reset section button* of the framework.
| `show_all_options`         | bool      | true           | Whether to show *show all options* of the framework.
| `sticky_header`            | bool      | true           | Whether to enable *sticky header* feature of the framework.
| `save_defaults`            | bool      | true           | Whether to save to default values of the framework.
| `ajax_save`                | bool      | true           | Whether to enable *ajax save* feature of the framework.
| `admin_bar_menu_icon`      | string    |                | Icon to display before menu title.
| `admin_bar_menu_priority`  | number    | 80             | Position in the bar menu.
| `footer_text`              | string    |                | Text to display in the footer of the framework.
| `footer_after`             | string    |                | The content to display after of the framework footer.
| `footer_credit`            | string    |                | The text to display in footer of the framework.
| `database`                 | string    | option         | The database save data type. *for eg.* `option` `theme_mod` `transient` `network`
| `transient_time`           | number    | 0              | The time until expiration in seconds from now, or 0 for never expires. If used *database* as *transient*.
| `contextual_help`          | array     |                | The contextual helps of the framework
| `contextual_help_sidebar`  | string    |                | The contextual sidebar help of the framework
| `enqueue_webfont`          | bool      | true           | Whether to load web fonts of the framework.
| `async_webfont`            | bool      | false          | Whether to load google fonts with *async* method of the framework.
| `output_css`               | bool      | true           | Whether to load output css of the framework.

<div class="pre-heading">Section Arguments</div>

| Name      | Type    | Description |
|-----------|---------|-------------|
| `id`      | string  | A unique slug-like ID.
| `parent`  | string  | The slug id for the parent section
| `title`   | string  | The title of the section.
| `icon`    | string  | The icon of the section.
| `fields`  | array   | An associative array containing fields for the fieldsets.

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

<div class="pre-heading">Usage</div>

```php
//
// Get options
$options = get_option( 'my_framework' ); // unique id of the framework

echo $options['opt-text']; // id of the field
echo $options['opt-textarea']; // id of the field
```

<div class="pre-heading">Arguments</div>

| Name               | Type     | Default        | Description |
|--------------------|----------|----------------|-------------|
| `database`         | string   | option         | The database save data type. *for eg.* `option` `theme_mod`
| `transport`        | string   | refresh        | This can be either 'refresh' (default) or 'postMessage'. Only set this to 'postMessage' if you are writing custom Javascript to control the Theme Customizer's live preview.
| `capability`       | string   | manage_options | The capability required for this menu to be displayed to the user.
| `save_defaults`    | bool     | true           | Whether to save to default values of the framework.
| `enqueue_webfont`  | bool     | true           | Whether to load web fonts of the framework.
| `async_webfont`    | bool     | false          | Whether to load google fonts with *async* method of the framework.
| `output_css`       | bool     | true           | Whether to load output css of the framework.

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
    'data_type' => 'serialize', // The type of the database save options. `serialize` or `unserialize`
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
    'data_type' => 'serialize', // The type of the database save options. `serialize` or `unserialize`
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
    'title'              => 'My Post Options',
    'post_type'          => 'post',
    'data_type'          => 'serialize',
    'context'            => 'normal',
    'priority'           => 'default',
    'exclude_post_types' => array(),
    'page_templates'     => '',
    'post_formats'       => '',
    'show_restore'       => false,
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

<div class="pre-heading">Usage in data type => serialize</div>

```php
//
// You should use my_post_options as this is the id for your key declared into config
$meta = get_post_meta( get_the_ID(), 'my_post_options', true );

echo $meta['opt-text']; // id of the field
echo $meta['opt-textarea']; // id of the field
```
<div class="pre-heading">Usage in data type => unserialize</div>

```php
//
// Get options
echo get_post_meta( get_the_ID(), 'opt-text', true ); // id of the field
echo get_post_meta( get_the_ID(), 'opt-textarea', true ); // id of the field
```

<div class="pre-heading">Arguments</div>

| Name                 | Type          | Default    | Description |
|----------------------|---------------|------------|-------------|
| `title`              | string        |            | Title of the meta box.
| `post_type`          | array\|string | post       | The box display to specific post types. *for eg* `post`, `page`, `products` or both.
| `data_type`          | string        | serialize  | The type of the database save options. *for eg* `serialize` or `unserialize`
| `context`            | string        | normal     | The context within the screen where the boxes should display. *for eg* `normal`, `side`, `advanced`
| `priority`           | string        | default    | The priority within the context where the boxes should show. *for eg* `normal`, `hight`, `low`
| `exclude_post_types` | array         |            | The array of post types to exclude. *for eg* `post`, `page`, `products`
| `page_templates`     | array\|string |            | The box display to specific page templates. *for eg* `default`, `sidebar-page.php`, `about-page.php`.
| `post_formats`       | array\|string |            | The box display to specific post types. *for eg* `post`, `page`, `portfolio` or both.
| `show_restore`       | bool          | false      | Whether to show *restore button* of the metabox.
| `enqueue_webfont`    | bool          | true       | Whether to load web fonts of the framework.
| `async_webfont`      | bool          | false      | Whether to load google fonts with *async* method of the framework.
| `output_css`         | bool          | true       | Whether to load output css of the framework.

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
  ) );;

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

<div class="pre-heading">Usage in data type => serialize</div>

```php
//
// You should use my_taxonomy_options as this is the id for your key declared into config
$term = get_category_by_slug( 'uncategorized' );
$meta = get_term_meta( $term->term_id, 'my_taxonomy_options', true );

echo $meta['opt-text']; // id of the field
echo $meta['opt-textarea']; // id of the field
```
<div class="pre-heading">Usage in data type => unserialize</div>

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
| `taxonomy`   | array/string  |            | The box display to specific taxonomy. *for eg* `category`, `products` or both.
| `data_type`  | string        | serialize  | The type of the database save options. *for eg* `serialize` or `unserialize`

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

<div class="pre-heading">Usage in Textarea</div>

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
| `button_title`    | string  | Add Shortcode      | The text to display on the shortcode trigger button.
| `select_title`    | string  | Select a shortcode | The placeholder to be displayed when nothing is selected.
| `insert_title`    | string  | Insert Shortcode   | The text to display on the insert button.
| `show_in_editor`  | bool    | true               | Whether to display media insert/upload buttons.

<div class="pre-heading">EXtra Section Arguments for Shortcoder</div>

| Name               | Type    | Description |
|--------------------|---------|-------------|
| `view`             | string  | View model of the shortcode. `normal` `contents` `group` `repeater`
| `shortcode_name`   | string  | Set a unique slug-like name of shortcode.
| `group_shortcode`  | string  | Set a unique slug-like name of group shortcode.
| `group_fields`     | array   | An associative array containing fields for the fieldsets.
