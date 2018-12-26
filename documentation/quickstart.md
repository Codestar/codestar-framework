# Quick Start

1. Download the installable WordPress plugin zip.
2. Upload and activate plugin from `WordPress` &rarr; `Plugins` &rarr; `Add New`
3. Open your current theme **functions.php** file and paste this code.

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

#### How to get option value ?

```php
//
// Get options
$options = get_option( 'my_framework' ); // unique id of the framework

echo $options['opt-text']; // id of the field
echo $options['opt-textarea']; // id of the field
```

---

#### How to activate demo config

You can see all of our fields via predefined demo config. Click `Activate` button from **WordPress Admin Panel --> Tools -> Codestar Framework** tab.
