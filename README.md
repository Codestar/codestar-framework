[![Codestar Framework](http://s3.codestarthemes.com/codecanyon/23079100/github-banner.png)](http://codestarframework.com/)

# Codestar Framework
A Simple and Lightweight WordPress Option Framework for Themes and Plugins. Built in Object Oriented Programming paradigm with high number of custom fields and tons of options. Allows you to bring custom admin, metabox, taxonomy and customize settings to all of your pages, posts and categories. It's highly modern and advanced framework.

## Contents
- [Demo](#demo)
- [Installation](#installation)
- [Quick Start](#quick-start)
- [Documentation](#documentation)
- [Free vs Premium](#free-vs-premium)
- [Whats news?](#whats-news-)
- [Support](#support)
- [Release Notes](#release-notes)
- [Migrate v1.x to v2.x](#migrate)
- [License](#license)

## Demo
For usage and examples, have a look at :rocket: [online demo](http://codestarthemes.com/plugins/codestar-framework/wp-login.php?login=demo)

## Installation

1. Download the installable WordPress plugin zip.
2. Upload and active plugin from `WordPress` &rarr; `Plugins` &rarr; `Add New`
3. After activation, next step is to configure your settings. You can do it from here :gear: [configurations](http://codestarframework.com/documentation/#/configurations)

## Quick Start

Open your current theme **functions.php** file and paste this code.

```php
// Check core class for avoid errors
if( class_exists( 'CSF' ) ) {

  // Set a unique slug-like ID
  $prefix = 'my_framework';

  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'My Framework',
    'menu_slug'  => 'my-framework',
  ) );

  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 1',
    'fields' => array(

      // A text field
      array(
        'id'    => 'opt-text',
        'type'  => 'text',
        'title' => 'Simple Text',
      ),

    )
  ) );

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
How to get option value ?
```php
$options = get_option( 'my_framework' ); // unique id of the framework

echo $options['opt-text']; // id of the field
echo $options['opt-textarea']; // id of the field


//or  you can use this function
// make function for get theme option value
if( class_exists( 'CSF' ) ) {

  function get_csf_option($csf_id = NULL, $csf_id_two = NULL){

    $csf_theme_options = get_option('my_framework'); // unique id of the framework

    if(!empty($csf_id_two)) {
      $csf_option_value = $csf_theme_options[$csf_id][$csf_id_two];
    }else {
      $csf_option_value = $csf_theme_options[$option_id];
    }
    return $csf_option_value;
  }
}

//display value
echo get_csf_option('your-field-id');

// double array value like

echo get_csf_option('field-id', 'url');
```

## Documentation
Read the documentation for details :closed_book: [documentation](http://codestarframework.com/documentation/)

## Free vs Premium

| Features                     | Free Version       | Premium Version
|:-----------------------------|:------------------:|:-----------------:
| Admin Option Framework       | :heavy_check_mark: | :heavy_check_mark:
| Customize Option Framework   | :x:                | :heavy_check_mark:
| Metabox Option Framework     | :x:                | :heavy_check_mark:
| Taxonomy Option Framework    | :x:                | :heavy_check_mark:
| Shortcode Generate Framework | :x:                | :heavy_check_mark:
| Widget Option Framework      | :x:                | :heavy_check_mark:
| All Option Fields            | :x:                | :heavy_check_mark:
| Developer Packages           | :x:                | :heavy_check_mark:
| Unminfy Library              | :x:                | :heavy_check_mark:
| New Requests                 | :x:                | :heavy_check_mark:
| Autoremove Advertisements    | :x:                | :heavy_check_mark:
| Life-time access/updates     | :x:                | :heavy_check_mark:
|                              |                    | :star2: <a href="http://codestarframework.com/">Upgrade Premium Version</a>

## Whats news ?

#### General
- Added: Multiple instances support
- Added: New option fields
- Added: Filters/Actions for change to configs
- Added: Output css featue
- Added: Auto enqueue/load for google web fonts
- Added: Widget option framework
- Added: Group and Repeater fields nested usage
- Improved: Config array
- Improved: Javascripts
- Improved: PHP Functions/Classes
- Improved: Load time performance

#### Admin Option Framework
- Added: Framework header title change parameter
- Added: Detailed typography field
- Added: Ajax save options
- Added: Contextual helps option
- Added: Admin bar menu option
- Added: Search options feature
- Added: WPMU Network menu option
- Added: Sticky header
- Added: Save defaults
- Added: Database save data types ( for eg: `option`, `theme_mod`, `transient`, `network` )

#### Metabox Option Framework
- Added: Multiple post type support
- Added: Database save data types ( for eg: `serialize`, `unserialize` )
- Added: Exclude post types option
- Added: Metabox display to specific page templates. ( for eg `default`, `sidebar-page.php`, `about-page.php` )
- Added: Metabox display to specific post formats. ( for eg `standard`, `aside`, `gallery`, `video` )
- Added: Restore metabox option button

#### Customize Option Framework
- Added: Multiple post type support
- Added: Database save data types ( for eg: `option`, `theme_mod` )
- Added: Save defaults

#### Taxonomy Option Framework
- Added: Multiple taxonomy type support
- Added: Database save data types ( for eg: `serialize`, `unserialize` )

#### Shortcode Generate Framework
- Added: Gutenberg support as simply

## Available Option Fields

| Accordion   | Color       | Icon         | Select   | Tabbed
|:------------|:------------|:-------------|:---------|:---
| Background  | Color Group | Image Select | Slider   | Text
| Backup      | Date        | Link Color   | Sortable | Textarea
| Border      | Dimensions  | Media        | Sorter   | Typography
| Button Set  | Fieldset    | Palette      | Spacing  | Upload
| Checkbox    | Gallery     | Radio        | Spinner  | WP Editor
| Code Editor | Group       | Repeater     | Switcher | Others

## Support

We are provide [support forum](http://support.codestarthemes.com/) for premium version users. You can join to support forum for submit any question after purchasing. Free version users support is limited on [github](https://github.com/Codestar/codestar-framework/issues).

## Release Notes
Check out the [release notes](http://codestarframework.com/documentation/#/relnotes)

## Migrate
Check out the [migrate v1.x to v2.x](http://codestarframework.com/documentation/#/faq?id=how-to-migrate-v1x-to-v2x-)

## License
Codestar Framework have two different version. Free version has limited features and offers only admin option panel feature. Premium version offers all extensions and more of settings for the best experience and advanced features. You can bundle the framework ( both free and premium ) in the premium theme/plugin and sell them on your own website or in marketplaces like ThemeForest. This framework is licensed 100% GPL.
