## Accordion

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Accordion w/ Default</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'            => 'opt-accordion-1',
  'type'          => 'accordion',
  'title'         => 'Accordion',
  'accordions'    => array(
    array(
      'title'     => 'Accordion 1',
      'icon'      => 'fa fa-heart',
      'fields'    => array(
        array(
          'id'    => 'opt-text-1',
          'type'  => 'text',
          'title' => 'Text',
        ),
      )
    ),
    array(
      'title'     => 'Accordion 2',
      'icon'      => 'fa fa-gear',
      'fields'    => array(
        array(
          'id'    => 'opt-color-1',
          'type'  => 'color',
          'title' => 'Color',
        ),
      )
    ),
  )
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'            => 'opt-accordion-2',
  'type'          => 'accordion',
  'title'         => 'Accordion',
  'accordions'    => array(
    array(
      'title'     => 'Accordion 1',
      'icon'      => 'fa fa-heart',
      'fields'    => array(
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
      'title'     => 'Accordion 2',
      'fields'    => array(
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
  ),
  'default'       => array(
    'opt-text-1'  => 'This is text 1 value',
    'opt-text-2'  => 'This is text 2 value',
    'opt-color-1' => '#555',
    'opt-color-2' => '#999',
  ),
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name             | Type         | Default    | Description |
|------------------|--------------|------------|-------------|
| `id`             | string       |            | A unique **ID**. This **ID** will be used to get the value.
| `type`           | string       | accordion  | Type of the field.
| `title`          | string       |            | Title of the field.
| `default`        | array        |            | Default value from database, if the option doesn't exist.
| `subtitle`       | string       |            | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`           | string       |            | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`           | string       |            | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`          | string       |            | Extra CSS classes (space separated) to append to the field.
| `before`         | string       |            | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`          | string       |            | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`     | array        |            | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`     | array        |            | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`       | string       |            | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`       | string       |            | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**       | ---          | ---        | ---
| `accordions`     | array        |            | An associative array containing fields for the fieldsets.

----------------------------------------------------------------------------------------------------------------------------------------------

## Background

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Advanced</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-background-1',
  'type'  => 'background',
  'title' => 'Background',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'                              => 'opt-background-2',
  'type'                            => 'background',
  'title'                           => 'Background',
  'background_gradient'             => true,
  'background_origin'               => true,
  'background_clip'                 => true,
  'background_blend_mode'           => true,
  'default'                         => array(
    'background-color'              => '#111',
    'background-gradient-color'     => '#555',
    'background-gradient-direction' => 'to bottom',
    'background-size'               => 'cover',
    'background-position'           => 'center center',
    'background-repeat'             => 'repeat',
  )
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name                         | Type          | Default     | Description |
|------------------------------|---------------|-------------|-------------|
| `id`                         | string        |             | A unique **ID**. This **ID** will be used to get the value.
| `type`                       | string        | background  | Type of the field.
| `title`                      | string        |             | Title of the field.
| `default`                    | array         |             | Default value to return if the option does not exist in the database
| `subtitle`                   | string        |             | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`                       | string        |             | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`                       | string        |             | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`                      | string        |             | Extra CSS classes (space separated) to append to the field.
| `before`                     | string        |             | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`                      | string        |             | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`                 | array         |             | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`                 | array         |             | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`                   | string        |             | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`                   | string        |             | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**                   | ---           | ---         | ---
| `background_color`           | bool          | true        | Flag to display *background color* of the field.
| `background_image`           | bool          | true        | Flag to display *background image* of the field.
| `background_position`        | bool          | true        | Flag to display *background position* of the field.
| `background_repeat`          | bool          | true        | Flag to display *background repeat* of the field.
| `background_attachment`      | bool          | true        | Flag to display *background attachment* of the field.
| `background_size`            | bool          | true        | Flag to display *background size* of the field.
| `background_origin`          | bool          | false       | Flag to display *background origin* of the field.
| `background_clip`            | bool          | false       | Flag to display *background clip* of the field.
| `background_blend_mode`      | bool          | false       | Flag to display *background blend mode* of the field.
| `background_gradient`        | bool          | false       | Flag to display *background gradient* of the field.
| `background_auto_attributes` | bool          | false       | Flag to display *background auto attributes* of the field.
| `background_image_preview`   | bool          | true        | Flag to display *background image preview* of the field.
| `output`                     | array\|string |             | CSS elements selector.
| `output_important`           | bool          | false       | Flag to add **!important** rule on output css..

<div class="pre-heading">Default Arguments</div>

| Name                            | Type       | Description |
|---------------------------------|------------|-------------|
| `background-color`              | string     | Hex string representing the default background color.. *for eg.* `#ffbc00`, `rgba(255,0,0,0.25)`
| `background-position`           | string     | String representing the default background position value. *for eg.* `left top` `left center` `left bottom`<br /> `center top` `center center` `center bottom`<br /> `right top` `right center` `right bottom`
| `background-repeat`             | string     | String representing the default background repeat value. *for eg.* `repeat` `repeat-x` `repeat-y` `no-repeat`
| `background-attachment`         | string     | String representing the default background attachment value. *for eg.* `scroll` `fixed`
| `background-size`               | string     | String representing the default background size value.. *for eg.* `cover` `contain`
| `background-origin`             | string     | String representing the default background origin value.. *for eg.* `padding-box` `border-box` `content-box`
| `background-clip`               | string     | String representing the default background clip value.. *for eg.* `padding-box` `border-box` `content-box`
| `background-blend-mode`         | string     | String representing the default background blend mode value.. *for eg.* `normal` `multiply` `screen` `overlay` `darken`<br/> `lighten` `color-dodge` `saturation` `color` `luminosity`
| `background-gradient-color`     | string     | String representing the default gradient color value.. *for eg.* `#ffbc00`, `rgba(255,0,0,0.25)`
| `background-gradient-direction` | string     | String representing the default gradient direction value.. *for eg.* `to bottom` `to right` `135deg` `-135deg`

----------------------------------------------------------------------------------------------------------------------------------------------

## Backup

<div class="pre-heading">Config Example</div>

```php
array(
  'type' => 'backup',
),
```

<div class="pre-heading">Arguments</div>

| Name        | Type    | Default  | Description |
|-------------|---------|----------|-------------|
| `type`      | string  | backup   | Type of the field.
| `title`     | string  |          | Title of the field.
| `subtitle`  | string  |          | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`      | string  |          | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`      | string  |          | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`     | string  |          | Extra CSS classes (space separated) to append to the field.
| `before`    | string  |          | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`     | string  |          | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>

----------------------------------------------------------------------------------------------------------------------------------------------

## Border

<div class="pre-heading">Config Examples</div>

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Border w/ Default</span>
<span class="csf-tab-title">Border w/ Join Borders</span>
<span class="csf-tab-title">Border w/ Spesific</span>
<span class="csf-tab-title">Border w/ Output</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'     => 'opt-border-1',
  'type'   => 'border',
  'title'  => 'Border',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-border-2',
  'type'    => 'border',
  'title'   => 'Border',
  'default' => array(
    'top'    => '4',
    'right'  => '8',
    'bottom' => '4',
    'left'   => '8',
    'style'  => 'dashed',
    'color'  => '#1e73be',
    'unit'          => 'px',
  ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'    => 'opt-border-3',
  'type'  => 'border',
  'title' => 'Border',
  'all'   => true,
),
```
</div>
<div class="csf-tab-content">

```php
// Without top and bottom borders
array(
  'id'     => 'opt-border-4',
  'type'   => 'border',
  'title'  => 'Border',
  'top'    => false,
  'bottom' => false,
),

// Without left and right borders
array(
  'id'    => 'opt-border-5',
  'type'  => 'border',
  'title' => 'Border',
  'left'  => false,
  'right' => false,
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'     => 'opt-border-6',
  'type'   => 'border',
  'title'  => 'Border',
  'output' => '.heading'
),

array(
  'id'     => 'opt-border-7',
  'type'   => 'border',
  'title'  => 'Border',
  'output' => array( '.header-area', '.footer-area' ),
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name                | Type           | Default      | Description |
|---------------------|----------------|--------------|-------------|
| `id`                | string         |              | A unique **ID**. This **ID** will be used to get the value.
| `type`              | string         | border       | Type of the field.
| `title`             | string         |              | Title of the field.
| `default`           | array          |              | Default value from database, if the option doesn't exist.
| `subtitle`          | string         |              | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`              | string         |              | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`              | string         |              | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`             | string         |              | Extra CSS classes (space separated) to append to the field.
| `before`            | string         |              | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`             | string         |              | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`        | array          |              | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`        | array          |              | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`          | string         |              | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`          | string         |              | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**          | ---            | ---          | ---
| `top_icon`          | string         | top-icon     | Display icon/text on the *top* of the field.
| `right_icon`        | string         | right-icon   | Display icon/text on the *right* of the field.
| `bottom_icon`       | string         | bottom-icon  | Display icon/text on the *bottom* of the field.
| `left_icon`         | string         | left-icon    | Display icon/text on the *left* of the field.
| `all_icon`          | string         | all-icon     | Display icon/text on the *all the corners* of the field.
| `top`               | bool           | true         | Flag to display *top* of the field.
| `right`             | bool           | true         | Flag to display *right* of the field.
| `bottom`            | bool           | true         | Flag to display *bottom* of the field.
| `left`              | bool           | true         | Flag to display *left* of the field.
| `color`             | bool           | true         | Flag to display *color* of the field.
| `style`             | bool           | true         | Flag to display *style* of the field.
| `all`               | bool           | false        | Flag to display *all corners* of the field.
| `unit`              | string         | px           | Unit to display on the border inputs, also sets output CSS property unit value.
| `output`            | array\|string  |              | CSS elements selector.
| `output_important`  | bool           | false        | Flag to add **!important** rule on output css.

<div class="pre-heading">Default Arguments</div>

| Name             | Type      | Description |
|------------------|-----------|-------------|
| `top`     | number    | Numeric representing the default top field value.
| `right`   | number    | Numeric representing the default right field value.
| `bottom`  | number    | Numeric representing the default bottom field value.
| `left`    | number    | Numeric representing the default left field value.
| `all`     | number    | Numeric representing the default all field value.
| `color`   | string    | String representing the default color value. *for eg.* `#ffbc00`, `rgba(255,0,0,0.25)`
| `style`   | string    | String representing the default style value. *for eg.* `solid` `dashed` `dotted` `double` `none`
| `unit`    | string    | String representing the default unit value.. *for eg.* `px` `em` `%`

----------------------------------------------------------------------------------------------------------------------------------------------

## Button Set

<div class="pre-heading">Config Examples</div>

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Multiple Options</span>
<span class="csf-tab-title">WP Query Options</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'         => 'opt-button-set-1',
  'type'       => 'button_set',
  'title'      => 'Button Set',
  'options'    => array(
    'enabled'  => 'Enabled',
    'disabled' => 'Disabled',
  ),
  'default'    => 'enabled'
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'       => 'opt-button-set-2',
  'type'     => 'button_set',
  'title'    => 'Button Set with multiple',
  'multiple' => true,
  'options'  => array(
    'aqua'   => 'Aqua',
    'cyan'   => 'Cyan',
    'golden' => 'Golden',
    'indigo' => 'Indigo',
    'lime'   => 'Lime',
    'navy'   => 'Navy',
    'purple' => 'Purple',
  ),
  'default'  => array( 'cyan', 'indigo', 'purple' )
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-button-set-3',
  'type'    => 'button_set',
  'title'   => 'Button Set with categories',
  'options' => 'categories',
),

array(
  'id'      => 'opt-button-set-4',
  'type'    => 'button_set',
  'title'   => 'Button Set with tags',
  'options' => 'tags',
),

// Available Options
'options' => 'pages',
'options' => 'posts',
'options' => 'categories',
'options' => 'tags',
'options' => 'menus',
'options' => 'users',
'options' => 'sidebars',
'options' => 'roles',
'options' => 'post_types',

// Or use your own custom callback function
'options' => 'prefix_get_something',

function prefix_get_something() {
  // return custom query array.
  return array(
    'opt-1' => 'Option 1',
    'opt-2' => 'Option 2',
    'opt-3' => 'Option 3',
  );
}
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name             | Type           | Default     | Description |
|------------------|----------------|-------------|-------------|
| `id`             | string         |             | A unique **ID**. This **ID** will be used to get the value.
| `type`           | string         | button_set  | Type of the field.
| `title`          | string         |             | Title of the field.
| `default`        | array\|string  |             | Default value from database, if the option doesn't exist.
| `subtitle`       | string         |             | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`           | string         |             | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`           | string         |             | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`          | string         |             | Extra CSS classes (space separated) to append to the field.
| `before`         | string         |             | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`          | string         |             | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`     | array          |             | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`     | array          |             | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`       | string         |             | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`       | string         |             | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**       | ---            | ---         | ---
| `multiple`       | bool           | false       | Flag to allows multiple options to choose.
| `empty_message`  | string         |             | Display to empty text if options empty.
| `options`        | array\|string  |             | An array of object containing key/value pairs representing the options or use a predefined options. *for eg.* `pages` `posts` `categories` `tags` `menus` `users` `sidebars` `roles` `post_types`
| `query_args`     | array          |             | An associative array of query arguments.

<div class="pre-heading">query_args Arguments</div>

| Name              | Type       | Default     | Description |
|-------------------|------------|-------------|-------------|
| `post_type`       | string     |             | Custom post type name. Uses by `posts`
| `taxonomy`        | string     |             | Custom taxonomy name. Uses by `categories` `tags`
| `posts_per_page`  | number     |             | Maximum number of post to show. Uses by `pages` `posts`
| `number`          | number     |             | Maximum number of post to show. Uses by `categories` `tags` `menus`
| `orderby`         | string     | post_title  | Sort retrieved posts by parameter. Uses by `pages` `posts` `categories` `tags` `menus`
| `order`           | string     | ASC         | Designates the ascending or descending order of the `orderby` parameter *ASC* or *DESC*. Uses by `pages` `posts` `categories` `tags` `menus`

Get more query arguments for ( *posts, pages:* [wp_query](https://developer.wordpress.org/reference/classes/wp_query/) ) and ( *categories, tags, menus:* [wp_term_query](https://developer.wordpress.org/reference/classes/wp_term_query/) )

----------------------------------------------------------------------------------------------------------------------------------------------

## Checkbox

<div class="pre-heading">Config Examples</div>

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Single Option</span>
<span class="csf-tab-title">Multiple Options</span>
<span class="csf-tab-title">WP Query Options</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'      => 'opt-checkbox-1',
  'type'    => 'checkbox',
  'title'   => 'Checkbox',
  'label'   => 'Yes, Please do it.',
  'default' => true // or false
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'         => 'opt-checkbox-2',
  'type'       => 'checkbox',
  'title'      => 'Checkboxes',
  'options'    => array(
    'option-1' => 'Option 1',
    'option-2' => 'Option 2',
    'option-3' => 'Option 3',
  ),
  'default'    => array( 'option-1', 'option-3' )
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'         => 'opt-checkbox-3',
  'type'       => 'checkbox',
  'title'      => 'Checkbox with Categories',
  'options'    => 'categories',
  'query_args' => array(
    'orderby'  => 'post_title',
    'order'    => 'ASC',
  ),
),

// Available Options
'options' => 'pages',
'options' => 'posts',
'options' => 'categories',
'options' => 'tags',
'options' => 'menus',
'options' => 'users',
'options' => 'sidebars',
'options' => 'roles',
'options' => 'post_types',

// Or use your own custom callback function
'options' => 'prefix_get_something',

function prefix_get_something() {
  // return custom query array.
  return array(
    'opt-1' => 'Option 1',
    'opt-2' => 'Option 2',
    'opt-3' => 'Option 3',
  );
}
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name             | Type           | Default     | Description |
|------------------|----------------|-------------|-------------|
| `id`             | string         |             | A unique **ID**. This **ID** will be used to get the value.
| `type`           | string         | checkbox    | Type of the field.
| `title`          | string         |             | Title of the field.
| `default`        | array\|string  |             | Default value from database, if the option doesn't exist.
| `subtitle`       | string         |             | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`           | string         |             | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`           | string         |             | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`          | string         |             | Extra CSS classes (space separated) to append to the field.
| `before`         | string         |             | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`          | string         |             | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`     | array          |             | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`     | array          |             | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`       | string         |             | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`       | string         |             | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**       | ---            | ---         | ---
| `empty_message`  | string         |             | Display to empty text if options empty.
| `label`          | string         |             | The text to display with the checkbox, when use to single checkbox.
| `options`        | array\|string  |             | An array of object containing key/value pairs representing the options or use a predefined options. *for eg.* `pages` `posts` `categories` `tags` `menus` `users` `sidebars` `roles` `post_types`
| `inline`         | bool           | false       | Flag to display the options horizontally.
| `query_args`     | array          |             | An associative array of query arguments.

<div class="pre-heading">query_args Arguments</div>

| Name              | Type       | Default     | Description |
|-------------------|------------|-------------|-------------|
| `post_type`       | string     |             | Custom post type name. Uses by `posts`
| `taxonomy`        | string     |             | Custom taxonomy name. Uses by `categories` `tags`
| `posts_per_page`  | number     |             | Maximum number of post to show. Uses by `pages` `posts`
| `number`          | number     |             | Maximum number of post to show. Uses by `categories` `tags` `menus`
| `orderby`         | string     | post_title  | Sort retrieved posts by parameter. Uses by `pages` `posts` `categories` `tags` `menus`
| `order`           | string     | ASC         | Designates the ascending or descending order of the `orderby` parameter *ASC* or *DESC*. Uses by `pages` `posts` `categories` `tags` `menus`

Get more query arguments for ( *posts, pages:* [wp_query](https://developer.wordpress.org/reference/classes/wp_query/) ) and ( *categories, tags, menus:* [wp_term_query](https://developer.wordpress.org/reference/classes/wp_term_query/) )

----------------------------------------------------------------------------------------------------------------------------------------------

## Code Editor

<div class="pre-heading">Config Examples</div>

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">HMTL Editor</span>
<span class="csf-tab-title">CSS Editor</span>
<span class="csf-tab-title">Javascript Editor</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-code-editor-1',
  'type'  => 'code_editor',
  'title' => 'Code Editor',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'       => 'opt-code-editor-2',
  'type'     => 'code_editor',
  'title'    => 'HTML Editor',
  'settings' => array(
    'theme'  => 'mdn-like',
    'mode'   => 'htmlmixed',
  ),
  'default'  => '<h1>Hello world</h1>',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'       => 'opt-code-editor-3',
  'type'     => 'code_editor',
  'title'    => 'CSS Editor',
  'settings' => array(
    'theme'  => 'mbo',
    'mode'   => 'css',
  ),
  'default'  => '.element{ color: #ffbc00; }',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'       => 'opt-code-editor-4',
  'type'     => 'code_editor',
  'title'    => 'Javascript Editor',
  'settings' => array(
    'theme'  => 'monokai',
    'mode'   => 'javascript',
  ),
  'default'  => 'console.log("Hello world");',
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Sanitize</div>
Due to WordPress core rule some html tags are sanitizing by default. ( iframe, script, ie. ) If needed it can be disabled like this:

```php
array(
  'id'       => 'opt-code-editor-5',
  'type'     => 'code_editor',
  'title'    => 'Code Editor without sanitize',
  'sanitize' => false,
),
```

<div class="pre-heading">Arguments</div>

| Name             | Type         | Default      | Description |
|------------------|--------------|--------------|-------------|
| `id`             | string       |              | A unique **ID**. This **ID** will be used to get the value.
| `type`           | string       | code_editor  | Type of the field.
| `title`          | string       |              | Title of the field.
| `default`        | string       |              | Default value from database, if the option doesn't exist.
| `subtitle`       | string       |              | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`           | string       |              | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`           | string       |              | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`          | string       |              | Extra CSS classes (space separated) to append to the field.
| `before`         | string       |              | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`          | string       |              | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`     | array        |              | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`     | array        |              | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`       | string       |              | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`       | string       |              | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**       | ---          | ---          | ---
| `settings`       | array        |              | An associative array containing arguments for the setting.

<div class="pre-heading">Settings Arguments</div>

| Name          | Type       | Default     | Description |
|---------------|------------|-------------|-------------|
| `mode`        | string     | htmlmixed   | Sets the language mode of the editor. for eg. `css` `javascript` `php`
| `theme`       | string     | default     | Sets the theme of the editor. for eg. `mbo` `monokai` `ambiance`
| `lineNumbers` | bool       | true        | Flag to display line numbers to the left of the editor.
| `tabSize`     | number     | 2           | The width of a tab space.

Get more informations for [codemirror arguments](https://codemirror.net/doc/manual.html#config)

----------------------------------------------------------------------------------------------------------------------------------------------

## Color

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Color w/ Default</span>
<span class="csf-tab-title">Color w/ Output</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-color-1',
  'type'  => 'color',
  'title' => 'Color',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-color-2',
  'type'    => 'color',
  'title'   => 'Color',
  'default' => '#ffbc00'
),
```
</div>
<div class="csf-tab-content">

```php
// Output for default color
array(
  'id'     => 'opt-color-3',
  'type'   => 'color',
  'title'  => 'Color',
  'output' => '.element-1'
),

// Output for background color
array(
  'id'          => 'opt-color-4',
  'type'        => 'color',
  'title'       => 'Color',
  'output'      => '.element-2'
  'output_mode' => 'background-color' // Supports css properties like ( border-color, color, background-color etc )
),

// Output for multiple element
array(
  'id'     => 'opt-color-5',
  'type'   => 'color',
  'title'  => 'Color',
  'output' => array( '.element-1', '.element-2', '.element-3' )
),

// Output for multiple element with different property
array(
  'id'     => 'opt-color-6',
  'type'   => 'color',
  'title'  => 'Color',
  'output' => array( 'background-color' => '.element-1', 'color' => '.element-2', 'border-color' => '.element-3' )
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name                | Type           | Default  | Description |
|---------------------|----------------|----------|-------------|
| `id`                | string         |          | A unique **ID**. This **ID** will be used to get the value.
| `type`              | string         | color    | Type of the field.
| `title`             | string         |          | Title of the field.
| `default`           | string         |          | Default value from database, if the option doesn't exist.
| `subtitle`          | string         |          | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`              | string         |          | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`              | string         |          | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`             | string         |          | Extra CSS classes (space separated) to append to the field.
| `before`            | string         |          | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`             | string         |          | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`        | array          |          | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`        | array          |          | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`          | string         |          | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`          | string         |          | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**          | ---            | ---      | ---
| `output`            | array\|string  |          | CSS elements selector.
| `output_mode`       | string         |          | Output CSS property of an element. for eg. `background-color` `color` `border-color`
| `output_important`  | bool           | false    | Flag to add **!important** rule on output css.

----------------------------------------------------------------------------------------------------------------------------------------------

## Color Group

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Color Group w/ Default</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'        => 'opt-color-group-1',
  'type'      => 'color_group',
  'title'     => 'Color Group',
  'options'   => array(
    'color-1' => 'Color 1',
    'color-2' => 'Color 2',
    'color-3' => 'Color 3',
  )
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'        => 'opt-color-group-2',
  'type'      => 'color_group',
  'title'     => 'Color Group',
  'options'   => array(
    'color-1' => 'Color 1',
    'color-2' => 'Color 2',
    'color-3' => 'Color 3',
  ),
  'default'   => array(
    'color-1' => '#ffce4b',
    'color-2' => '#ff595e',
    'color-3' => '#0052cc',
  )
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name               | Type     | Default      | Description |
|--------------------|----------|--------------|-------------|
| `id`               | string   |              | A unique **ID**. This **ID** will be used to get the value.
| `type`             | string   | color_group  | Type of the field.
| `title`            | string   |              | Title of the field.
| `default`          | array    |              | Default value from database, if the option doesn't exist.
| `subtitle`         | string   |              | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`             | string   |              | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`             | string   |              | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`            | string   |              | Extra CSS classes (space separated) to append to the field.
| `before`           | string   |              | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`            | string   |              | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`       | array    |              | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`       | array    |              | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`         | string   |              | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`         | string   |              | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**         | ---      | ---          | ---
| `options`          | array    |              | An array of object containing key/value(color) pairs representing the options.

----------------------------------------------------------------------------------------------------------------------------------------------

## Date

<div class="pre-heading">Config Examples</div>

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Advanced</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-date-1',
  'type'  => 'date',
  'title' => 'Date',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'       => 'opt-date-2',
  'type'     => 'date',
  'title'    => 'Date Advanced',
  'settings' => array(
    'dateFormat'      => 'mm/dd/yy'
    'changeMonth'     => true,
    'changeYear'      => true,
    'showWeek'        => true,
    'showButtonPanel' => true,
    'weekHeader'      => 'Week',
    'monthNamesShort' => array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ),
    'dayNamesMin'     => array( 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' ),
  )
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name             | Type     | Default  | Description |
|------------------|----------|----------|-------------|
| `id`             | string   |          | A unique **ID**. This **ID** will be used to get the value.
| `type`           | string   | date     | Type of the field.
| `title`          | string   |          | Title of the field.
| `default`        | string   |          | Default value from database, if the option doesn't exist.
| `subtitle`       | string   |          | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`           | string   |          | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`           | string   |          | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`          | string   |          | Extra CSS classes (space separated) to append to the field.
| `before`         | string   |          | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`          | string   |          | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`     | array    |          | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`     | array    |          | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`       | string   |          | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`       | string   |          | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**       | ---      | ---      | ---
| `settings`       | array    |          | An associative array containing arguments for the setting.

<div class="pre-heading">Settings Arguments</div>

| Name               | Type       | Default     | Description |
|--------------------|------------|-------------|-------------|
| `dateFormat`       | string     | mm/dd/yy    | Format for parsed and displayed dates.
| `changeMonth`      | bool       | false       | Flag to display month as dropdown instead of text.
| `changeYear`       | bool       | false       | Flag to display year as dropdown instead of text.
| `showWeek`         | bool       | false       | When true, a column is added to show the week of the year.
| `showButtonPanel`  | bool       | false       | Flag to display a button pane underneath the calendar.
| `weekHeader`       | string     | Wk          | Text to display for the week of the year column heading.
| `monthNamesShort`  | array      |             | List of abbreviated month names, as used in the month header on each datepicker and as requested via the dateFormat option.
| `dayNamesMin`      | array      |             | List of minimised day names, starting from Sunday, for use as column headers within the datepicker.

Get more informations for [jquery-ui-datepicker arguments](http://api.jqueryui.com/datepicker/#options)

----------------------------------------------------------------------------------------------------------------------------------------------

## Dimensions

<div class="pre-heading">Config Examples</div>

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Dimensions w/ Default</span>
<span class="csf-tab-title">Dimensions w/ Output</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'     => 'opt-dimensions-1',
  'type'   => 'dimensions',
  'title'  => 'Dimensions width and height',
),
```
</div>
<div class="csf-tab-content">

```php
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
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'     => 'opt-dimensions-3',
  'type'   => 'dimensions',
  'title'  => 'Dimensions',
  'output' => '.heading'
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name                | Type           | Default      | Description |
|---------------------|----------------|--------------|-------------|
| `id`                | string         |              | A unique **ID**. This **ID** will be used to get the value.
| `type`              | string         | dimensions   | Type of the field.
| `title`             | string         |              | Title of the field.
| `default`           | array          |              | Default value from database, if the option doesn't exist.
| `subtitle`          | string         |              | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`              | string         |              | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`              | string         |              | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`             | string         |              | Extra CSS classes (space separated) to append to the field.
| `before`            | string         |              | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`             | string         |              | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`        | array          |              | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`        | array          |              | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`          | string         |              | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`          | string         |              | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**          | ---            | ---          | ---
| `width_icon`        | string         | width-icon   | The icon/text to display on the *width* of the field.
| `height_icon`       | string         | height-icon  | The icon/text to display on the *height* of the field.
| `width`             | bool           | true         | Flag to display *width* of the field.
| `height`            | bool           | true         | Flag to display *height* of the field.
| `show_units`        | bool           | true         | Flag to display *unit selector* of the field.
| `units`             | array          |              | The CSS measurement units, *for eg.* `px` `em` `%` `cm` `pt`
| `output`            | array\|string  |              | CSS elements selector.
| `output_prefix`     | string         |              | The setting for add `max` / `min` to output CSS property of element. *for eg.* `max-width` `max-height`
| `output_important`  | bool           | false        | Flag to add **!important** rule on output css.

<div class="pre-heading">Default Arguments</div>

| Name      | Type      | Description |
|-----------|-----------|-------------|
| `width`   | number    | Numeric representing the default width value.
| `height`  | number    | Numeric representing the default height value.
| `unit`    | string    | String representing the default unit value. *for eg.* `px` `em` `%`

----------------------------------------------------------------------------------------------------------------------------------------------

## Fieldset

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Fieldset w/ Default</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'     => 'opt-fieldset-1',
  'type'   => 'fieldset',
  'title'  => 'Fieldset',
  'fields' => array(
    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),
    array(
      'id'    => 'opt-color',
      'type'  => 'color',
      'title' => 'Color',
    ),
    array(
      'id'    => 'opt-switcher',
      'type'  => 'switcher',
      'title' => 'Switcher',
    ),
  ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'        => 'opt-fieldset-2',
  'type'      => 'fieldset',
  'title'     => 'Fieldset',
  'fields'    => array(
    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),
    array(
      'id'    => 'opt-color',
      'type'  => 'color',
      'title' => 'Color',
    ),
    array(
      'id'    => 'opt-switcher',
      'type'  => 'switcher',
      'title' => 'Switcher',
    ),
  ),
  'default'        => array(
    'opt-text'     => 'Text default value',
    'opt-color'    => '#ffbc00',
    'opt-switcher' => true,
  ),
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name             | Type         | Default     | Description |
|------------------|--------------|-------------|-------------|
| `id`             | string       |             | A unique **ID**. This **ID** will be used to get the value.
| `type`           | string       | fieldset    | Type of the field.
| `title`          | string       |             | Title of the field.
| `default`        | array        |             | Default value from database, if the option doesn't exist.
| `subtitle`       | string       |             | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`           | string       |             | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`           | string       |             | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`          | string       |             | Extra CSS classes (space separated) to append to the field.
| `before`         | string       |             | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`          | string       |             | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`     | array        |             | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`     | array        |             | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`       | string       |             | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`       | string       |             | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**       | ---          | ---         | ---
| `fields`         | array        |             | An associative array containing fields for the fieldsets.

----------------------------------------------------------------------------------------------------------------------------------------------

## Gallery

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Gallery w/ Custom Title</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-gallery-1',
  'type'  => 'gallery',
  'title' => 'Gallery',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'          => 'opt-gallery-2',
  'type'        => 'gallery',
  'title'       => 'Gallery',
  'add_title'   => 'Add Images',
  'edit_title'  => 'Edit Images',
  'clear_title' => 'Remove Images',
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Usage</div>

```php
$gallery_opt = $option['opt-gallery-1']; // for eg. 15,50,70,125
$gallery_ids = explode( ',', $gallery_opt );

if ( ! empty( $gallery_ids ) ) {
  foreach ( $gallery_ids as $gallery_item_id ) {
    // echo wp_get_attachment_image( $gallery_item_id, 'full' );
    // echo wp_get_attachment_url( $gallery_item_id );
    // echo wp_get_attachment_image_src( $gallery_item_id, 'full' );
    // var_dump( wp_get_attachment_metadata( $gallery_item_id ) );
  }
}
```

<div class="pre-heading">Arguments</div>

| Name             | Type         | Default        | Description |
|------------------|--------------|----------------|-------------|
| `id`             | string       |                | A unique **ID**. This **ID** will be used to get the value.
| `type`           | string       | gallery        | Type of the field.
| `title`          | string       |                | Title of the field.
| `default`        | string       |                | Default value from database, if the option doesn't exist.
| `subtitle`       | string       |                | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`           | string       |                | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`           | string       |                | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`          | string       |                | Extra CSS classes (space separated) to append to the field.
| `before`         | string       |                | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`          | string       |                | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`     | array        |                | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`     | array        |                | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`       | string       |                | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`       | string       |                | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**       | ---          | ---            | ---
| `add_title`      | string       | Add Gallery    | Text to display on the *add* button.
| `edit_title`     | string       | Edit Gallery   | Text to display on the *edit* button.
| `clear_title`    | string       | Clear          | Text to display on the *clear* button.

----------------------------------------------------------------------------------------------------------------------------------------------

## Group

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Group w/ Default</span>
<span class="csf-tab-title">Group w/ Nested</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'        => 'opt-group-1',
  'type'      => 'group',
  'title'     => 'Group',
  'fields'    => array(
    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),
    array(
      'id'    => 'opt-color',
      'type'  => 'color',
      'title' => 'Color',
    ),
    array(
      'id'    => 'opt-switcher',
      'type'  => 'switcher',
      'title' => 'Switcher',
    ),
  ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'        => 'opt-group-2',
  'type'      => 'group',
  'title'     => 'Group',
  'fields'    => array(
    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),
    array(
      'id'    => 'opt-color',
      'type'  => 'color',
      'title' => 'Color',
    ),
    array(
      'id'    => 'opt-switcher',
      'type'  => 'switcher',
      'title' => 'Switcher',
    ),
  ),
  'default'   => array(
    array(
      'opt-text'     => 'This is text default 1',
      'opt-color'    => '#ffbc00',
      'opt-switcher' => true,
    ),
    array(
      'opt-text'     => 'This is text default 2',
      'opt-color'    => '#000',
      'opt-switcher' => false,
    ),
  ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'        => 'opt-group-3',
  'type'      => 'group',
  'title'     => 'Group',
  'fields'    => array(
    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),
    array(
      'id'        => 'opt-group-nested',
      'type'      => 'group',
      'title'     => 'Group',
      'fields'    => array(
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Text',
        ),
      ),
    ),
    array(
      'id'    => 'opt-textarea',
      'type'  => 'textarea',
      'title' => 'Textarea',
    ),
  ),
  'default'   => array(
    array(
      'opt-text'     => 'This is text 1',
      'opt-group-nested' => array(
        array(
          'opt-text' => 'Nested text 1',
        ),
        array(
          'opt-text' => 'Nested text 2',
        ),
      ),
      'opt-textarea' => 'This is textarea 1',
    ),
    array(
      'opt-text'     => 'This is text 2',
      'opt-textarea' => 'This is textarea 2',
    ),
  ),
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name                      | Type         | Default    | Description |
|---------------------------|--------------|------------|-------------|
| `id`                      | string       |            | A unique **ID**. This **ID** will be used to get the value.
| `type`                    | string       | group      | Type of the field.
| `title`                   | string       |            | Title of the field.
| `default`                 | array        |            | Default value from database, if the option doesn't exist.
| `subtitle`                | string       |            | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`                    | string       |            | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`                    | string       |            | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`                   | string       |            | Extra CSS classes (space separated) to append to the field.
| `before`                  | string       |            | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`                   | string       |            | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`              | array        |            | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`              | array        |            | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`                | string       |            | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`                | string       |            | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**                | ---          | ---        | ---
| `fields`                  | array        |            | An associative array containing fields for the fieldsets.
| `max`                     | number       | 0          | Maximum number of items the user can add.
| `min`                     | number       | 0          | Minimum number of items the user can add.
| `button_title`            | string       | Add New    | Text to display on the *add* button.
| `accordion_title_prefix`  | string       |            | The text to display before title.
| `accordion_title_number`  | bool         | false      | Number to display before title. *for eg.* `1- Title` `2- Title`
| `accordion_title_auto`    | bool         | true       | Listen first input text value for title.

----------------------------------------------------------------------------------------------------------------------------------------------

## Icon

<div class="pre-heading">Config Examples</div>

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Icon w/ Default</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-icon-1',
  'type'  => 'icon',
  'title' => 'Icon',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-icon-2',
  'type'    => 'icon',
  'title'   => 'Icon',
  'default' => 'fa fa-heart'
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Usage</div>

As you know, the Icon field works only in backend and you should to include the icon css file in front-end by yourself. For eg. take a look below enqueue styles example or use your own enqueue styles method.

```php
if( ! function_exists( 'your_prefix_enqueue_fa5' ) ) {
  function your_prefix_enqueue_fa5() {
    wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
    wp_enqueue_style( 'fa5-v4-shims', 'https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css', array(), '5.13.0', 'all' );
  }
  add_action( 'wp_enqueue_scripts', 'your_prefix_enqueue_fa5' );
}
```

The **v4-shim** is optional. It may necessary if you used old version and upgrading the framework.

<div class="pre-heading">Still want to use Font Awesome 4 ?</div>

If still you want to use **Font Awesome 4** only add this filter anywhere.

```php
add_filter( 'csf_fa4', '__return_true' );
```

<div class="pre-heading">Arguments</div>

| Name             | Type         | Default      | Description |
|------------------|--------------|--------------|-------------|
| `id`             | string       |              | A unique **ID**. This **ID** will be used to get the value.
| `type`           | string       | icon         | Type of the field.
| `title`          | string       |              | Title of the field.
| `default`        | string       |              | Default value from database, if the option doesn't exist.
| `subtitle`       | string       |              | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`           | string       |              | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`           | string       |              | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`          | string       |              | Extra CSS classes (space separated) to append to the field.
| `before`         | string       |              | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`          | string       |              | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`     | array        |              | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`     | array        |              | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`       | string       |              | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`       | string       |              | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**       | ---          | ---          | ---
| `button_title`   | string       | Add Icon     | Text to display on the *add* button.
| `remove_title`   | string       | Remove Icon  | Text to display on the *remove* button.

----------------------------------------------------------------------------------------------------------------------------------------------

## Image Select

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Multiple w/ Default</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'        => 'opt-image-select-1',
  'type'      => 'image_select',
  'title'     => 'Image Select',
  'options'   => array(
    'value-1' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
    'value-2' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
    'value-3' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
  ),
  'default'   => 'value-2'
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'        => 'opt-image-select-2',
  'type'      => 'image_select',
  'title'     => 'Image Select',
  'multiple'  => true,
  'options'   => array(
    'value-1' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
    'value-2' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
    'value-3' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
  ),
  'default'   => array( 'value-1', 'value-3' )
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name                | Type           | Default       | Description |
|---------------------|----------------|---------------|-------------|
| `id`                | string         |               | A unique **ID**. This **ID** will be used to get the value.
| `type`              | string         | image_select  | Type of the field.
| `title`             | string         |               | Title of the field.
| `default`           | array\|string  |               | Default value from database, if the option doesn't exist.
| `subtitle`          | string         |               | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`              | string         |               | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`              | string         |               | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`             | string         |               | Extra CSS classes (space separated) to append to the field.
| `before`            | string         |               | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`             | string         |               | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`        | array          |               | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`        | array          |               | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`          | string         |               | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`          | string         |               | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**          | ---            | ---           | ---
| `options`           | array          |               | An array of object containing key/value pairs representing the options.
| `multiple`          | bool           | false         | Flag to allows multiple options choose.
| `output`            | array\|string  |               | CSS elements selector.
| `output_important`  | bool           | false         | Flag to add **!important** rule on output css.

----------------------------------------------------------------------------------------------------------------------------------------------

## Link

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Link w/ Default</span>
<span class="csf-tab-title">Link w/ Custom Title</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-link-1',
  'type'  => 'link',
  'title' => 'Link',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'       => 'opt-link-2',
  'type'     => 'link',
  'title'    => 'Link',
  'default'  => array(
    'url'    => 'http://codestarframework.com/',
    'text'   => 'Codestar Framework',
    'target' => '_blank'
  ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'           => 'opt-link-3',
  'type'         => 'link',
  'title'        => 'Link',
  'add_title'    => 'Add Link',
  'edit_title'   => 'Edit Link',
  'remove_title' => 'Remove Link',
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name             | Type         | Default        | Description |
|------------------|--------------|----------------|-------------|
| `id`             | string       |                | A unique **ID**. This **ID** will be used to get the value.
| `type`           | string       | gallery        | Type of the field.
| `title`          | string       |                | Title of the field.
| `default`        | string       |                | Default value from database, if the option doesn't exist.
| `subtitle`       | string       |                | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`           | string       |                | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`           | string       |                | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`          | string       |                | Extra CSS classes (space separated) to append to the field.
| `before`         | string       |                | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`          | string       |                | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`     | array        |                | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`     | array        |                | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`       | string       |                | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`       | string       |                | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**       | ---          | ---            | ---
| `add_title`      | string       | Add Link       | Text to display on the *add* button.
| `edit_title`     | string       | Edit Link      | Text to display on the *edit* button.
| `remove_title`   | string       | Remove Link    | Text to display on the *remove* button.

<div class="pre-heading">Default Arguments</div>

| Name      | Type    | Description |
|-----------|---------|-------------|
| `url`     | string  | Specifies the URL of the page the link goes to.
| `text`    | string  | Specifies the text in the link.
| `target`  | string  | Specifies where to open the linked document.

----------------------------------------------------------------------------------------------------------------------------------------------

## Link Color

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Link Color w/ Default</span>
<span class="csf-tab-title">Link Color w/ All</span>
<span class="csf-tab-title">Link Color w/ Output</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-link-color-1',
  'type'  => 'link_color',
  'title' => 'Link Color',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-link-color-2',
  'type'    => 'link_color',
  'title'   => 'Link Color',
  'default' => array(
    'color' => '#1e73be',
    'hover' => '#259ded',
  ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'        => 'opt-link-color-3',
  'type'      => 'link_color',
  'title'     => 'Link Color',
  'color'     => true,
  'hover'     => true,
  'visited'   => true,
  'active'    => true,
  'focus'     => true,
  'default'   => array(
    'color'   => '#1e73be',
    'hover'   => '#259ded',
    'visited' => '#222',
    'active'  => '#333',
    'focus'   => '#111',
  ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-link-color-4',
  'type'    => 'link_color',
  'title'   => 'Link Color',
  'output'  => '.heading',
  'default' => array(
    'color' => '#1e73be',
    'hover' => '#259ded',
  ),
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name               | Type           | Default      | Description |
|--------------------|----------------|--------------|-------------|
| `id`               | string         |              | A unique **ID**. This **ID** will be used to get the value.
| `type`             | string         | link_color   | Type of the field.
| `title`            | string         |              | Title of the field.
| `default`          | array          |              | Default value from database, if the option doesn't exist.
| `subtitle`         | string         |              | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`             | string         |              | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`             | string         |              | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`            | string         |              | Extra CSS classes (space separated) to append to the field.
| `before`           | string         |              | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`            | string         |              | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`       | array          |              | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`       | array          |              | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`         | string         |              | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`         | string         |              | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**         | ---            | ---          | ---
| `color`            | bool           | true         | Flag to display *color* of the field. (normal, unvisited link)
| `hover`            | bool           | true         | Flag to display *hover* of the field. (link when the user mouses over it)
| `visited`          | bool           | false        | Flag to display *visited* of the field. (link the user has visited)
| `active`           | bool           | false        | Flag to display *active* of the field. (link the moment it is clicked)
| `focus`            | bool           | false        | Flag to display *focus* of the field. (link the focus)
| `output`           | array\|string  |              | CSS elements selector.
| `output_important` | bool           | false        | Flag to add **!important** rule on output css.

<div class="pre-heading">Default Arguments</div>

| Name      | Type    | Description |
|-----------|---------|-------------|
| `color`   | string  | String representing the default color value. *for eg.* `#1e73be`, `rgba(255,0,0,0.25)`
| `hover`   | string  | String representing the default hover color value. *for eg.* `#259ded`, `rgba(165,125,0,0.25)`
| `visited` | string  | String representing the default visited color value. *for eg.* `#2980b9`, `rgba(128,128,0,0.25)`
| `active`  | string  | String representing the default active color value. *for eg.* `#d35400`, `rgba(152,55,25,0.25)`
| `focus`   | string  | String representing the default focus color value. *for eg.* `#2c3e50`, `rgba(55,100,150,0.25)`

----------------------------------------------------------------------------------------------------------------------------------------------

## Map

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Map w/ Default</span>
<span class="csf-tab-title">Map w/ Assign Address Field</span>
<span class="csf-tab-title">Map w/ Advanced</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-map-1',
  'type'  => 'map',
  'title' => 'Map',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'          => 'opt-map-2',
  'type'        => 'map',
  'title'       => 'Map with Default',
  'default'     => array(
    'address'   => 'New York, United States of America',
    'latitude'  => '40.7127281',
    'longitude' => '-74.0060152',
    'zoom'      => '12',
  )
),
```
</div>
<div class="csf-tab-content">

```php
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
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'       => 'opt-map-4',
  'type'     => 'map',
  'title'    => 'Map',
  'height'   => '500px',
  'settings' => array(
    'scrollWheelZoom' => true,
  )
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name              | Type           | Default                | Description |
|-------------------|----------------|------------------------|-------------|
| `id`              | string         |                        | A unique **ID**. This **ID** will be used to get the value.
| `type`            | string         | media                  | Type of the field.
| `title`           | string         |                        | Title of the field.
| `default`         | array          |                        | Default value from database, if the option doesn't exist.
| `subtitle`        | string         |                        | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`            | string         |                        | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`            | string         |                        | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`           | string         |                        | Extra CSS classes (space separated) to append to the field.
| `before`          | string         |                        | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`           | string         |                        | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`      | array          |                        | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`      | array          |                        | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`        | string         |                        | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`        | string         |                        | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**        | ---            | ---                    | ---
| `placeholder`     | string         | Search your address... | The placeholder to be displayed when nothing is selected.
| `latitude_text`   | string         | Latitude               | The text to display on the latitude field top.
| `longitude_text`  | string         | Longitude              | The text to display on the longitude field top.
| `height`          | string         | 250px                  | Value to set the default map height.

<div class="pre-heading">Default Arguments</div>

| Name           | Type    | Description |
|----------------|---------|-------------|
| `address`      | string  | String representing the default address of map.
| `latitude`     | number  | Number representing latitude in degrees.
| `longitude`    | number  | Number representing longitude in degrees.
| `zoom`         | number  | Number representing map zoom level.

<div class="pre-heading">Settings Arguments</div>

| Name              | Type    | Default | Description |
|-------------------|---------|---------|-------------|
| `scrollWheelZoom` | bool    | false   | Whether the map can be zoomed by using the mouse wheel.

Get more informations for [settings arguments](https://leafletjs.com/reference-1.6.0.html)

----------------------------------------------------------------------------------------------------------------------------------------------

## Media

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Media without Preview</span>
<span class="csf-tab-title">Media only Image Formats</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-media-1',
  'type'  => 'media',
  'title' => 'Media',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-media-2',
  'type'    => 'media',
  'title'   => 'Media',
  'preview' => false,
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-media-3',
  'type'    => 'media',
  'title'   => 'Media',
  'library' => 'image',
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name              | Type           | Default           | Description |
|-------------------|----------------|-------------------|-------------|
| `id`              | string         |                   | A unique **ID**. This **ID** will be used to get the value.
| `type`            | string         | media             | Type of the field.
| `title`           | string         |                   | Title of the field.
| `default`         | array          |                   | Default value from database, if the option doesn't exist.
| `subtitle`        | string         |                   | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`            | string         |                   | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`            | string         |                   | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`           | string         |                   | Extra CSS classes (space separated) to append to the field.
| `before`          | string         |                   | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`           | string         |                   | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`      | array          |                   | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`      | array          |                   | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`        | string         |                   | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`        | string         |                   | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**        | ---            | ---               | ---
| `url`             | bool           | true              | Flag to display *url* of the field.
| `library`         | array\|string  | all               | Tell the modal to show specific formats. for eg. `image` or `video` or both etc.
| `placeholder`     | string         | No media selected | The placeholder to be displayed when nothing is selected.
| `button_title`    | string         | Upload            | Text to display on the *upload* button.
| `remove_title`    | string         | Remove            | Text to display on the *remove* button.
| `preview`         | bool           | true              | Flag to display *preview* of the field.
| `preview_size`    | string         | thumbnail         | The image size to use in preview. `thumbnail` or `full`
| `preview_width`   | number         | 120               | The max width of the *preview* image.
| `preview_height`  | number         | 90                | The max height of the *preview* image.

<div class="pre-heading">Default Arguments</div>

| Name           | Type    | Description |
|----------------|---------|-------------|
| `url`          | string  | String representing the default URL of the attachment.
| `id`           | number  | Numberic representing the default attachment ID.
| `width`        | number  | String representing the default image width value.
| `height`       | number  | String representing the default image height value.
| `thumbnail`    | string  | String representing the default image thumbnail.
| `alt`          | string  | String representing the default *alt* value.
| `title`        | string  | String representing the default *title* value.
| `description`  | string  | String representing the default *description* value.

----------------------------------------------------------------------------------------------------------------------------------------------

## Number

<div class="pre-heading">Config Examples</div>

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Number w/ Default</span>
<span class="csf-tab-title">Number w/ Output</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-number-1',
  'type'  => 'number',
  'title' => 'Number',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-number-2',
  'type'    => 'number',
  'title'   => 'Number',
  'default' => 50,
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'          => 'opt-number-4',
  'type'        => 'number',
  'title'       => 'Number',
  'unit'        => '%',
  'output'      => '.heading',
  'output_mode' => 'width',
  'default'     => 100,
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name                | Type           | Default | Description |
|---------------------|----------------|---------|-------------|
| `id`                | string         |         | A unique **ID**. This **ID** will be used to get the value.
| `type`              | string         | number  | Type of the field.
| `title`             | string         |         | Title of the field.
| `default`           | string         |         | Default value from database, if the option doesn't exist.
| `subtitle`          | string         |         | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`              | string         |         | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`              | string         |         | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`             | string         |         | Extra CSS classes (space separated) to append to the field.
| `before`            | string         |         | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`             | string         |         | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`        | array          |         | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`        | array          |         | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`          | string         |         | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`          | string         |         | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**          | ---            | ---     | ---
| `unit`              | string         | px      | The unit to display of the field, also sets output CSS property unit value.
| `output`            | array\|string  |         | CSS elements selector.
| `output_mode`       | string         | width   | Output CSS property of an element. for eg. `width` `height` `max-width` etc.
| `output_important`  | bool           | false   | Flag to add **!important** rule on output css.

----------------------------------------------------------------------------------------------------------------------------------------------

## Palette

<div class="pre-heading">Config Examples</div>

```php
array(
  'id'      => 'opt-palette-1',
  'type'    => 'palette',
  'title'   => 'Palette',
  'options' => array(
    'set1'  => array( '#f04e36', '#f36e27', '#f3d430', '#ed1683' ),
    'set2'  => array( '#f9ca06', '#b5b546', '#2f4d48', '#212b2f' ),
    'set3'  => array( '#4153ab', '#6e86c7', '#211f27', '#d69762' ),
    'set4'  => array( '#162526', '#508486', '#C8C6CE', '#B45F1A' ),
    'set5'  => array( '#bbd5ff', '#ccab5e', '#fff55f', '#197c5d' ),
  ),
  'default' => 'set3',
),
```

<div class="pre-heading">Arguments</div>

| Name          | Type     | Default   | Description |
|---------------|----------|-----------|-------------|
| `id`          | string   |           | A unique **ID**. This **ID** will be used to get the value.
| `type`        | string   | palette   | Type of the field.
| `title`       | string   |           | Title of the field.
| `default`     | string   |           | Default value from database, if the option doesn't exist.
| `subtitle`    | string   |           | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`        | string   |           | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`        | string   |           | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`       | string   |           | Extra CSS classes (space separated) to append to the field.
| `before`      | string   |           | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`       | string   |           | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`  | array    |           | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`  | array    |           | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`    | string   |           | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`    | string   |           | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**    | ---      | ---       | ---
| `options`     | array    |           | An array of object containing key/array(colors) pairs representing the options.

----------------------------------------------------------------------------------------------------------------------------------------------

## Radio

<div class="pre-heading">Config Example</div>

```php
array(
  'id'         => 'opt-radio',
  'type'       => 'radio',
  'title'      => 'Radio',
  'options'    => array(
    'option-1' => 'Option 1',
    'option-2' => 'Option 2',
    'option-3' => 'Option 3',
  ),
  'default'    => 'option-2'
```

<div class="pre-heading">Arguments</div>

| Name             | Type           | Default  | Description |
|------------------|----------------|----------|-------------|
| `id`             | string         |          | A unique **ID**. This **ID** will be used to get the value.
| `type`           | string         | radio    | Type of the field.
| `title`          | string         |          | Title of the field.
| `default`        | string         |          | Default value from database, if the option doesn't exist.
| `subtitle`       | string         |          | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`           | string         |          | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`           | string         |          | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`          | string         |          | Extra CSS classes (space separated) to append to the field.
| `before`         | string         |          | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`          | string         |          | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`     | array          |          | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`     | array          |          | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`       | string         |          | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`       | string         |          | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**       | ---            | ---      | ---
| `empty_message`  | string         |          | Display to empty text if options empty.
| `options`        | array\|string  |          | An array of object containing key/value pairs representing the options or use a predefined options. *for eg.* `pages` `posts` `categories` `tags` `menus` `users` `sidebars` `roles` `post_types`
| `inline`         | bool           | false    | Flag to display the options horizontally.
| `query_args`     | array          |          | An associative array of query arguments.

----------------------------------------------------------------------------------------------------------------------------------------------

## Repeater

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Repeater w/ Default</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
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
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'        => 'opt-repeater-2',
  'type'      => 'repeater',
  'title'     => 'Repeater',
  'fields'    => array(

    array(
      'id'    => 'opt-text-1',
      'type'  => 'text',
      'title' => 'Text',
    ),

    array(
      'id'    => 'opt-text-2',
      'type'  => 'text',
      'title' => 'Text',
    ),

  ),
  'default'   => array(
    array(
      'opt-text-1' => 'Text 1 default value',
      'opt-text-2' => 'Text 2 default value',
    ),
    array(
      'opt-text-1' => 'Text 1 default value',
      'opt-text-2' => 'Text 2 default value',
    )
  )
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name             | Type     | Default   | Description |
|------------------|----------|-----------|-------------|
| `id`             | string   |           | A unique **ID**. This **ID** will be used to get the value.
| `type`           | string   | repeater  | Type of the field.
| `title`          | string   |           | Title of the field.
| `default`        | array    |           | Default value from database, if the option doesn't exist.
| `subtitle`       | string   |           | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`           | string   |           | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`           | string   |           | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`          | string   |           | Extra CSS classes (space separated) to append to the field.
| `before`         | string   |           | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`          | string   |           | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`     | array    |           | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`     | array    |           | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`       | string   |           | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`       | string   |           | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**       | ---      | ---       | ---
| `fields`         | array    |           | An associative array containing fields for the fieldsets.
| `max`            | number   | 0         | Maximum number of items the user can add.
| `min`            | number   | 0         | Minimum number of items the user can add.
| `button_title`   | string   | plus-icon | Text to display on the *add* button.

----------------------------------------------------------------------------------------------------------------------------------------------

## Select

<div class="pre-heading">Config Examples</div>

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Select w/ Groups</span>
<span class="csf-tab-title">Select w/ Chosen</span>
<span class="csf-tab-title">Select w/ Chosen Multiple</span>
<span class="csf-tab-title">Select w/ Chosen AJAX Search</span>
<span class="csf-tab-title">Select w/ WP Query</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'          => 'opt-select-1',
  'type'        => 'select',
  'title'       => 'Select',
  'placeholder' => 'Select an option',
  'options'     => array(
    'option-1'  => 'Option 1',
    'option-2'  => 'Option 2',
    'option-3'  => 'Option 3',
  ),
  'default'     => 'option-2'
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'           => 'opt-select-2',
  'type'         => 'select',
  'title'        => 'Select',
  'placeholder'  => 'Select an option',
  'options'      => array(
    'Group 1'    => array(
      'option-1' => 'Option 1',
      'option-2' => 'Option 2',
      'option-3' => 'Option 3',
    ),
    'Group 2'    => array(
      'option-4' => 'Option 4',
      'option-5' => 'Option 5',
      'option-6' => 'Option 6',
    ),
  ),
  'default'      => array( 'option-2', 'option-5' )
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'          => 'opt-select-3',
  'type'        => 'select',
  'title'       => 'Select',
  'chosen'      => true,
  'placeholder' => 'Select an option',
  'options'     => array(
    'option-1'  => 'Option 1',
    'option-2'  => 'Option 2',
    'option-3'  => 'Option 3',
    'option-4'  => 'Option 4',
    'option-5'  => 'Option 5',
    'option-6'  => 'Option 6',
  ),
  'default'     => 'option-3'
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'          => 'opt-select-4',
  'type'        => 'select',
  'title'       => 'Select',
  'chosen'      => true,
  'multiple'    => true,
  'placeholder' => 'Select an option',
  'options'     => array(
    'option-1'  => 'Option 1',
    'option-2'  => 'Option 2',
    'option-3'  => 'Option 3',
    'option-4'  => 'Option 4',
    'option-5'  => 'Option 5',
    'option-6'  => 'Option 6',
  ),
  'default'     => 'option-3'
),
```
</div>
<div class="csf-tab-content">

```php
// Select with AJAX search Pages
array(
  'id'          => 'opt-select-5',
  'type'        => 'select',
  'title'       => 'Select with pages',
  'placeholder' => 'Select a page',
  'chosen'      => true,
  'ajax'        => true,
  'options'     => 'pages',
),

// Select with multiple and sortable AJAX search Posts
array(
  'id'          => 'opt-select-6',
  'type'        => 'select',
  'title'       => 'Select with posts',
  'placeholder' => 'Select posts',
  'chosen'      => true,
  'ajax'        => true,
  'multiple'    => true,
  'sortable'    => true,
  'options'     => 'posts',
),

// Select with multiple and sortable AJAX search Categories
array(
  'id'          => 'opt-select-7',
  'type'        => 'select',
  'title'       => 'Select with categories',
  'placeholder' => 'Select categories',
  'chosen'      => true,
  'ajax'        => true,
  'multiple'    => true,
  'sortable'    => true,
  'options'     => 'categories',
),

// Select with AJAX search CPT (custom post type) Posts
array(
  'id'          => 'opt-select-8',
  'type'        => 'select',
  'title'       => 'Select with CPT (custom post type) posts',
  'placeholder' => 'Select a post',
  'chosen'      => true,
  'ajax'        => true,
  'options'     => 'posts',
  'query_args'  => array(
    'post_type' => 'your_post_type_name'
  )
),

// Select with AJAX search CPT (custom post type) Categories
array(
  'id'          => 'opt-select-9',
  'type'        => 'select',
  'title'       => 'Select with CPT (custom post type) categories',
  'placeholder' => 'Select a category',
  'chosen'      => true,
  'ajax'        => true,
  'options'     => 'categories',
  'query_args'  => array(
    'taxonomy'  => 'your_taxonomy_name'
  )
),

// Available Options.
'options' => 'pages',
'options' => 'posts',
'options' => 'categories',
'options' => 'tags',
'options' => 'menus',
'options' => 'users',
'options' => 'sidebars',
'options' => 'roles',
'options' => 'post_types',
```
</div>
<div class="csf-tab-content">

```php
// Select with pages
array(
  'id'          => 'opt-select-10',
  'type'        => 'select',
  'title'       => 'Select with pages',
  'placeholder' => 'Select a page',
  'options'     => 'pages',
  'query_args'  => array(
    'posts_per_page' => -1 // for get all pages (also it's same for posts).
  )
),

// Select with posts
array(
  'id'          => 'opt-select-11',
  'type'        => 'select',
  'title'       => 'Select with posts',
  'placeholder' => 'Select a post',
  'options'     => 'posts',
),

// Select with categories
array(
  'id'          => 'opt-select-12',
  'type'        => 'select',
  'title'       => 'Select with categories',
  'placeholder' => 'Select a category',
  'options'     => 'categories',
),

// Select with CPT (custom post type) pages
array(
  'id'          => 'opt-select-13',
  'type'        => 'select',
  'title'       => 'Selec with CPT (custom post type) pages',
  'placeholder' => 'Select a page',
  'options'     => 'post_types',
  'query_args'  => array(
    'post_type' => 'your_post_type_name',
  ),
),

// Select with CPT (custom post type) categories
array(
  'id'          => 'opt-select-14',
  'type'        => 'select',
  'title'       => 'Selec with CPT (custom post type) category',
  'placeholder' => 'Select a category',
  'options'     => 'categories',
  'query_args'  => array(
    'taxonomy'  => 'your_taxonomy_name',
  ),
),

// Available Options
'options' => 'pages',
'options' => 'posts',
'options' => 'categories',
'options' => 'tags',
'options' => 'menus',
'options' => 'users',
'options' => 'sidebars',
'options' => 'roles',
'options' => 'post_types',

// Or use your own custom callback function
'options' => 'prefix_get_something',

function prefix_get_something() {
  // return custom query array.
  return array(
    'opt-1' => 'Option 1',
    'opt-2' => 'Option 2',
    'opt-3' => 'Option 3',
  );
}
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name             | Type           | Default  | Description |
|------------------|----------------|----------|-------------|
| `id`             | string         |          | A unique **ID**. This **ID** will be used to get the value.
| `type`           | string         | select   | Type of the field.
| `title`          | string         |          | Title of the field.
| `default`        | array\|string  |          | Default value from database, if the option doesn't exist.
| `subtitle`       | string         |          | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`           | string         |          | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`           | string         |          | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`          | string         |          | Extra CSS classes (space separated) to append to the field.
| `before`         | string         |          | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`          | string         |          | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`     | array          |          | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`     | array          |          | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`       | string         |          | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`       | string         |          | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**       | ---            | ---      | ---
| `empty_message`  | string         |          | Display to empty text if options empty.
| `placeholder`    | string         |          | The placeholder to be displayed when nothing is selected.
| `chosen`         | bool           | false    | Flag to enable [ChosenJS](https://harvesthq.github.io/chosen/) style select.
| `multiple`       | bool           | false    | Flag to allows multiple options choose.
| `sortable`       | bool           | false    | Flag to allows sortable options choose.
| `ajax`           | bool           | false    | Flag to allows ajax search options choose.
| `options`        | array\|string  |          | An array of object containing key/value pairs representing the options or use a predefined options. *for eg.* `pages` `posts` `categories` `tags` `menus` `users` `sidebars` `roles` `post_types`
| `query_args`     | array          |          | An associative array of query arguments. Using with `pages` `posts` `categories` `tags` `menus`
| `settings`       | array          |          | An associative array containing arguments for the chosen setting.

<div class="pre-heading">query_args Arguments</div>

| Name              | Type       | Default     | Description |
|-------------------|------------|-------------|-------------|
| `post_type`       | string     |             | Custom post type name. Uses by `posts`
| `taxonomy`        | string     |             | Custom taxonomy name. Uses by `categories` `tags`
| `posts_per_page`  | number     |             | Maximum number of post to show. Uses by `pages` `posts`
| `number`          | number     |             | Maximum number of post to show. Uses by `categories` `tags` `menus`
| `orderby`         | string     | post_title  | Sort retrieved posts by parameter. Uses by `pages` `posts` `categories` `tags` `menus`
| `order`           | string     | ASC         | Designates the ascending or descending order of the `orderby` parameter *ASC* or *DESC*. Uses by `pages` `posts` `categories` `tags` `menus`

Get more query arguments for ( *posts, pages:* [wp_query](https://developer.wordpress.org/reference/classes/wp_query/) ) and ( *categories, tags, menus:* [wp_term_query](https://developer.wordpress.org/reference/classes/wp_term_query/) )

<div class="pre-heading">Settings Arguments</div>

| Name              | Type       | Default                                | Description |
|-------------------|------------|----------------------------------------|-------------|
| `min_length`      | number     | 3                                      | Minimum search input length for trigger ajax search.
| `width`           | string     | auto                                   | Chosen style width. *for eg.* `50%` `100%` `250px` `auto`
| `typing_text`     | string     | *Please enter %s or more characters*   | Chosen ajax typing text
| `searching_text`  | string     | *Searching...*                         | Chosen ajax searching text
| `no_results_text` | string     | *No results match*                     | Chosen ajax no results text

----------------------------------------------------------------------------------------------------------------------------------------------

## Slider

<div class="pre-heading">Config Examples</div>

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Slider w/ Default</span>
<span class="csf-tab-title">Switcher w/ Max-Min</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-slider-1',
  'type'  => 'slider',
  'title' => 'Slider',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-slider-2',
  'type'    => 'slider',
  'title'   => 'Slider',
  'default' => 50,
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-slider-3',
  'type'    => 'slider',
  'title'   => 'Slider',
  'min'     => 0,
  'max'     => 100,
  'step'    => 1,
  'unit'    => 'px',
  'default' => 25,
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name                | Type           | Default  | Description |
|---------------------|----------------|----------|-------------|
| `id`                | string         |          | A unique **ID**. This **ID** will be used to get the value.
| `type`              | string         | slider   | Type of the field.
| `title`             | string         |          | Title of the field.
| `default`           | string         |          | Default value from database, if the option doesn't exist.
| `subtitle`          | string         |          | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`              | string         |          | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`              | string         |          | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`             | string         |          | Extra CSS classes (space separated) to append to the field.
| `before`            | string         |          | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`             | string         |          | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`        | array          |          | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`        | array          |          | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`          | string         |          | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`          | string         |          | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**          | ---            | ---      | ---
| `max`               | number         | 100      | Value to set the maximum slider value.
| `min`               | number         | 0        | Value to set the minimum slider value.
| `step`              | number         | 1        | Amount of increment value for each step.
| `unit`              | string         | px       | Unit to display of the field, also sets output CSS property unit value.
| `output`            | array\|string  |          | CSS elements selector.
| `output_mode`       | string         |          | Output CSS property of an element. for eg. `width` `height` `max-width` etc.
| `output_important`  | bool           | false    | Flag to add **!important** rule on output css.

----------------------------------------------------------------------------------------------------------------------------------------------

## Sortable

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Sortable w/ Default</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'        => 'opt-sportable-1',
  'type'      => 'sortable',
  'title'     => 'Sortable',
  'fields'    => array(

    array(
      'id'    => 'text-1',
      'type'  => 'text',
      'title' => 'Text 1'
    ),

    array(
      'id'    => 'text-2',
      'type'  => 'text',
      'title' => 'Text 2'
    ),

  ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'        => 'opt-sportable-2',
  'type'      => 'sortable',
  'title'     => 'Sortable',
  'fields'    => array(

    array(
      'id'    => 'opt-text-1',
      'type'  => 'text',
      'title' => 'Text 1'
    ),

    array(
      'id'    => 'opt-text-2',
      'type'  => 'text',
      'title' => 'Text 2'
    ),

    array(
      'id'    => 'opt-text-3',
      'type'  => 'text',
      'title' => 'Text 3'
    ),

  ),
  'default'      => array(
    'opt-text-1' => 'This is text 1 default',
    'opt-text-2' => 'This is text 2 default',
    'opt-text-3' => 'This is text 3 default',
  ),
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name             | Type         | Default   | Description |
|------------------|--------------|-----------|-------------|
| `id`             | string       |           | A unique **ID**. This **ID** will be used to get the value.
| `type`           | string       | sortable  | Type of the field.
| `title`          | string       |           | Title of the field.
| `default`        | array        |           | Default value from database, if the option doesn't exist.
| `subtitle`       | string       |           | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`           | string       |           | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`           | string       |           | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`          | string       |           | Extra CSS classes (space separated) to append to the field.
| `before`         | string       |           | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`          | string       |           | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`     | array        |           | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`     | array        |           | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`       | string       |           | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`       | string       |           | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**       | ---          | ---       | ---
| `fields`         | array        |           | An associative array containing fields for the fieldsets.

----------------------------------------------------------------------------------------------------------------------------------------------

## Sorter

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Sorter w/ Custom Title</span>
<span class="csf-tab-title">Sorter without "Disabled"</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'           => 'opt-sorter-1',
  'type'         => 'sorter',
  'title'        => 'Sorter',
  'default'      => array(
    'enabled'    => array(
      'option-1' => 'Option 1',
      'option-2' => 'Option 2',
      'option-3' => 'Option 3',
    ),
    'disabled'   => array(
      'option-4' => 'Option 4',
      'option-5' => 'Option 5',
    ),
  ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'             => 'opt-sorter-2',
  'type'           => 'sorter',
  'title'          => 'Sorter',
  'default'        => array(
    'enabled'      => array(
      'option-1'   => 'Option 1',
      'option-2'   => 'Option 2',
      'option-3'   => 'Option 3',
    ),
    'disabled'     => array(
      'option-4'   => 'Option 4',
      'option-5'   => 'Option 5',
    ),
  ),
  'enabled_title'  => 'Activated',
  'disabled_title' => 'Deativated',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'           => 'opt-sorter-3',
  'type'         => 'sorter',
  'title'        => 'Sorter',
  'disabled'     => false,
  'default'      => array(
    'enabled'    => array(
      'option-1' => 'Option 1',
      'option-2' => 'Option 2',
      'option-3' => 'Option 3',
    ),
  ),
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name             | Type         | Default   | Description |
|------------------|--------------|-----------|-------------|
| `id`             | string       |           | A unique **ID**. This **ID** will be used to get the value.
| `type`           | string       | sorter    | Type of the field.
| `title`          | string       |           | Title of the field.
| `default`        | array        |           | Default value from database, if the option doesn't exist.
| `subtitle`       | string       |           | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`           | string       |           | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`           | string       |           | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`          | string       |           | Extra CSS classes (space separated) to append to the field.
| `before`         | string       |           | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`          | string       |           | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`     | array        |           | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`     | array        |           | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`       | string       |           | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`       | string       |           | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**       | ---          | ---       | ---
| `disabled`       | bool         | true      | Flag to display *disabled items* of the field.
| `enabled_title`  | bool\|string | Enabled   | Text to display title of *Enabled* items. Set to *false* if want to hide title.
| `disabled_title` | bool\|string | Disabled  | Text to display title of *Disabled* items. Set to *false* if want to hide title.

----------------------------------------------------------------------------------------------------------------------------------------------

## Spacing

<div class="pre-heading">Config Examples</div>

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Spacing w/ Default</span>
<span class="csf-tab-title">Spacing w/ Spesific</span>
<span class="csf-tab-title">Spacing w/ Output</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-spacing-1',
  'type'  => 'spacing',
  'title' => 'Spacing',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'       => 'opt-spacing-2',
  'type'     => 'spacing',
  'title'    => 'Spacing',
  'default'  => array(
    'top'    => '50',
    'right'  => '100',
    'bottom' => '50',
    'left'   => '100',
    'unit'   => 'px',
  ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'    => 'opt-spacing-3',
  'type'  => 'spacing',
  'title' => 'Spacing',
  'left'  => false,
  'right' => false,
  'units' => array( 'px' ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'          => 'opt-spacing-4',
  'type'        => 'spacing',
  'title'       => 'Spacing',
  'output'      => '.heading',
  'output_mode' => 'padding', // or margin, relative
  'default'     => array(
    'top'       => '10',
    'right'     => '20',
    'bottom'    => '10',
    'left'      => '20',
    'unit'      => 'px',
  ),
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name                | Type           | Default      | Description |
|---------------------|----------------|--------------|-------------|
| `id`                | string         |              | A unique **ID**. This **ID** will be used to get the value.
| `type`              | string         | spacing      | Type of the field.
| `title`             | string         |              | Title of the field.
| `default`           | array          |              | Default value from database, if the option doesn't exist.
| `subtitle`          | string         |              | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`              | string         |              | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`              | string         |              | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`             | string         |              | Extra CSS classes (space separated) to append to the field.
| `before`            | string         |              | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`             | string         |              | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`        | array          |              | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`        | array          |              | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`          | string         |              | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`          | string         |              | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**          | ---            | ---          | ---
| `top_icon`          | string         | top-icon     | The icon/text to display on the border top field.
| `right_icon`        | string         | right-icon   | The icon/text to display on the border right field.
| `bottom_icon`       | string         | bottom-icon  | The icon/text to display on the border bottom field.
| `left_icon`         | string         | left-icon    | The icon/text to display on the border left field.
| `all_icon`          | string         | all-icon     | The icon/text to display on the border all corners field.
| `top`               | bool           | true         | Flag to display *top* of the field.
| `right`             | bool           | true         | Flag to display *right* of the field.
| `bottom`            | bool           | true         | Flag to display *bottom* of the field.
| `left`              | bool           | true         | Flag to display *left* of the field.
| `all`               | bool           | false        | Flag to display *all corners* of the field.
| `show_units`        | bool           | true         | Flag to display *unit selector* of the field.
| `units`             | array          |              | The CSS measurement units, *for eg.* `px` `em` `%` `cm` `pt`
| `output`            | array\|string  |              | CSS elements selector.
| `output_mode`       | string         | padding      | Output CSS property of an element. for eg. `relative` `padding` `margin`
| `output_important`  | bool           | false        | Flag to add **!important** rule on output css.

<div class="pre-heading">Default Arguments</div>

| Name          | Type      | Description |
|---------------|-----------|-------------|
| `top`         | number    | Numeric representing the default top field value..
| `left`        | number    | Numeric representing the default left field value..
| `bottom`      | number    | Numeric representing the default bottom field value..
| `right`       | number    | Numeric representing the default right field value..
| `all`         | number    | Numeric representing the default all field value..
| `unit`        | string    | String representing the default unit value. *for eg.* `px` `em` `%`

----------------------------------------------------------------------------------------------------------------------------------------------

## Spinner

<div class="pre-heading">Config Examples</div>

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Spinner w/ Default</span>
<span class="csf-tab-title">Spinner w/ Spesific</span>
<span class="csf-tab-title">Spinner w/ Output</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-spinner-1',
  'type'  => 'spinner',
  'title' => 'Spinner',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-spinner-2',
  'type'    => 'spinner',
  'title'   => 'Spinner',
  'default' => 50,
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-spinner-3',
  'type'    => 'spinner',
  'title'   => 'Spinner',
  'min'     => 0,
  'max'     => 100,
  'step'    => 10,
  'unit'    => 'px',
  'default' => 25,
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'          => 'opt-spinner-4',
  'type'        => 'spinner',
  'title'       => 'Spinner',
  'min'         => 0,
  'max'         => 1600,
  'step'        => 1,
  'unit'        => '%',
  'output'      => '.heading',
  'output_mode' => 'width',
  'default'     => 1000,
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name                | Type           | Default | Description |
|---------------------|----------------|---------|-------------|
| `id`                | string         |         | A unique **ID**. This **ID** will be used to get the value.
| `type`              | string         | spinner | Type of the field.
| `title`             | string         |         | Title of the field.
| `default`           | string         |         | Default value from database, if the option doesn't exist.
| `subtitle`          | string         |         | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`              | string         |         | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`              | string         |         | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`             | string         |         | Extra CSS classes (space separated) to append to the field.
| `before`            | string         |         | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`             | string         |         | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`        | array          |         | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`        | array          |         | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`          | string         |         | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`          | string         |         | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**          | ---            | ---     | ---
| `max`               | number         | 100     | Value to set the maximum spinner value.
| `min`               | number         | 0       | Value to set the minimum spinner value.
| `step`              | number         | 1       | Amount of increment value for each step.
| `unit`              | string         | px      | The unit to display of the field, also sets output CSS property unit value.
| `output`            | array\|string  |         | CSS elements selector.
| `output_mode`       | string         | width   | Output CSS property of an element. for eg. `width` `height` `max-width` etc.
| `output_important`  | bool           | false   | Flag to add **!important** rule on output css.

----------------------------------------------------------------------------------------------------------------------------------------------

## Switcher

<div class="pre-heading">Config Examples</div>

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Switcher w/ Label</span>
<span class="csf-tab-title">Switcher w/ Dependency</span>
<span class="csf-tab-title">Switcher w/ Custom Texts</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-switcher-1',
  'type'  => 'switcher',
  'title' => 'Switcher',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-switcher-2',
  'type'    => 'switcher',
  'title'   => 'Switcher',
  'label'   => 'Do you want activate it ?',
  'default' => true
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'         => 'opt-switcher-3' // field id
  'type'       => 'switcher',
  'title'      => 'Switcher',
  'default'    => true
),

// A text field with dependency conditions
array(
  'id'         => 'opt-text-1',
  'type'       => 'text',
  'title'      => 'Text',
  'dependency' => array( 'opt-switcher-3', '==', 'true' ) // check for true/false by field id
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'       => 'opt-switcher-4'
  'type'     => 'switcher',
  'title'    => 'Switcher with Yes/No',
  'text_on'  => 'Yes',
  'text_off' => 'No',
),

array(
  'id'         => 'opt-switcher-5'
  'type'       => 'switcher',
  'title'      => 'Switcher with Enabled/Disabled',
  'text_on'    => 'Enabled',
  'text_off'   => 'Disabled',
  'text_width' => 100
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name          | Type     | Default   | Description |
|---------------|----------|-----------|-------------|
| `id`          | string   |           | A unique **ID**. This **ID** will be used to get the value.
| `type`        | string   | switcher  | Type of the field.
| `title`       | string   |           | Title of the field.
| `default`     | string   |           | Default value from database, if the option doesn't exist.
| `subtitle`    | string   |           | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`        | string   |           | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`        | string   |           | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`       | string   |           | Extra CSS classes (space separated) to append to the field.
| `before`      | string   |           | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`       | string   |           | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`  | array    |           | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`  | array    |           | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`    | string   |           | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`    | string   |           | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**    | ---      | ---       | ---
| `text_on`     | string   | ON        | Text to display on the "ON" label.
| `text_off`    | string   | OFF       | Text to display on the "OFF" label.
| `text_width`  | number   | 60        | The width of the switcher.
| `label`       | string   |           | The text to display along with the switcher.

----------------------------------------------------------------------------------------------------------------------------------------------

## Tabbed

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Tabbed w/ Default</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'            => 'opt-tabbed-1',
  'type'          => 'tabbed',
  'title'         => 'Tabbed',
  'tabs'          => array(
    array(
      'title'     => 'Tab 1',
      'icon'      => 'fa fa-heart',
      'fields'    => array(
        array(
          'id'    => 'opt-text-1',
          'type'  => 'text',
          'title' => 'Text',
        ),
      )
    ),
    array(
      'title'     => 'Tab 2',
      'icon'      => 'fa fa-gear',
      'fields'    => array(
        array(
          'id'    => 'opt-color-1',
          'type'  => 'color',
          'title' => 'Color',
        ),
      )
    ),
  )
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'            => 'opt-tabbed-2',
  'type'          => 'tabbed',
  'title'         => 'Tabbed',
  'tabs'          => array(
    array(
      'title'     => 'Tab 1',
      'icon'      => 'fa fa-heart',
      'fields'    => array(
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
      'title'     => 'Tab 2',
      'icon'      => 'fa fa-star',
      'fields'    => array(
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
  ),
  'default'       => array(
    'opt-text-1'  => 'This is text 1 value',
    'opt-text-2'  => 'This is text 2 value',
    'opt-color-1' => '#555',
    'opt-color-2' => '#999',
  )
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name          | Type    | Default | Description |
|---------------|---------|---------|-------------|
| `id`          | string  |         | A unique **ID**. This **ID** will be used to get the value.
| `type`        | string  | tabbed  | Type of the field.
| `title`       | string  |         | Title of the field.
| `default`     | array   |         | Default value from database, if the option doesn't exist.
| `subtitle`    | string  |         | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`        | string  |         | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`        | string  |         | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`       | string  |         | Extra CSS classes (space separated) to append to the field.
| `before`      | string  |         | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`       | string  |         | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`  | array   |         | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`  | array   |         | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`    | string  |         | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`    | string  |         | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**    | ---     | ---     | ---
| `tabs`        | array   |         | An associative array containing fields for the fieldsets.

----------------------------------------------------------------------------------------------------------------------------------------------

## Text

<div class="pre-heading">Config Example</div>

```php
array(
  'id'      => 'opt-text',
  'type'    => 'text',
  'title'   => 'Text',
  'default' => 'Hello world.'
),
```

<div class="pre-heading">Usage</div>

```php
$my_options = get_option( 'my_framework' ); // prefix of framework
echo $my_options['opt-text']; // id of field
```

<div class="pre-heading">Arguments</div>

| Name           | Type    | Default | Description |
|----------------|---------|---------|-------------|
| `id`           | string  |         | A unique **ID**. This **ID** will be used to get the value.
| `type`         | string  | text    | Type of the field.
| `title`        | string  |         | Title of the field.
| `default`      | string  |         | Default value from database, if the option doesn't exist.
| `subtitle`     | string  |         | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`         | string  |         | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`         | string  |         | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`        | string  |         | Extra CSS classes (space separated) to append to the field.
| `before`       | string  |         | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`        | string  |         | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`   | array   |         | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`   | array   |         | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`     | string  |         | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`     | string  |         | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**     | ---     | ---     | ---
| `placeholder`  | string  |         | The placeholder to be displayed when nothing is typed.

----------------------------------------------------------------------------------------------------------------------------------------------

## Textarea

<div class="pre-heading">Config Example</div>

```php
array(
  'id'      => 'opt-textarea',
  'type'    => 'textarea',
  'title'   => 'Textarea',
  'default' => 'Lorem ipsum dollar.'
),
```

<div class="pre-heading">Usage</div>

```php
$my_options = get_option( 'my_framework' ); // prefix of framework
echo $my_options['opt-textarea']; // id of field
```

<div class="pre-heading">Arguments</div>

| Name           | Type           | Default   | Description |
|----------------|----------------|-----------|-------------|
| `id`           | string         |           | A unique **ID**. This **ID** will be used to get the value.
| `type`         | string         | textarea  | Type of the field.
| `title`        | string         |           | Title of the field.
| `default`      | string         |           | Default value from database, if the option doesn't exist.
| `subtitle`     | string         |           | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`         | string         |           | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`         | string         |           | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`        | string         |           | Extra CSS classes (space separated) to append to the field.
| `before`       | string         |           | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`        | string         |           | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`   | array          |           | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`   | array          |           | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`     | string         |           | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`     | string         |           | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**     | ---            | ---       | ---
| `placeholder`  | string         |           | The placeholder to be displayed when nothing is typed.
| `shortcoder`   | array\|string  |           | The call a shortcode trigger button by shortcode id(s).

----------------------------------------------------------------------------------------------------------------------------------------------

## Typography

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Typography w/ Default</span>
<span class="csf-tab-title">Typography w/ Output</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-typography-1',
  'type'  => 'typography',
  'title' => 'Typography',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-typography-2',
  'type'    => 'typography',
  'title'   => 'Typography',
  'default' => array(
    'color'       => '#ffbc00',
    'font-family' => 'Open Sans',
    'font-size'   => '16',
    'line-height' => '20',
    'unit'        => 'px',
    'type'        => 'google',
  ),
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'      => 'opt-typography-3',
  'type'    => 'typography',
  'title'   => 'Typography',
  'output'  => '.heading',
  'default' => array(
    'color'          => '#ffbc00',
    'font-family'    => 'Barlow',
    'font-size'      => '16',
    'line-height'    => '20',
    'letter-spacing' => '-1',
    'text-align'     => 'center',
    'text-transform' => 'uppercase',
    'subset'         => 'latin-ext',
    'type'           => 'google',
    'unit'           => 'px',
  ),
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name                 | Type           | Default    | Description |
|----------------------|----------------|------------|-------------|
| `id`                 | string         |            | A unique **ID**. This **ID** will be used to get the value.
| `type`               | string         | typography | Type of the field.
| `title`              | string         |            | Title of the field.
| `default`            | array          |            | Default value from database, if the option doesn't exist.
| `subtitle`           | string         |            | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`               | string         |            | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`               | string         |            | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`              | string         |            | Extra CSS classes (space separated) to append to the field.
| `before`             | string         |            | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`              | string         |            | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`         | array          |            | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`         | array          |            | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`           | string         |            | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`           | string         |            | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**           | ---            | ---        | ---
| `font_family`        | bool           | true       | Flag to display *font_family* of the field. (specifies the font)
| `font_weight`        | bool           | true       | Flag to display *font_weight* of the field. (sets the size of a font)
| `font_style`         | bool           | true       | Flag to display *font_style* of the field. (specifies the font style)
| `font_size`          | bool           | true       | Flag to display *font_size* of the field. (sets the size of a font)
| `line_height`        | bool           | true       | Flag to display *line_height* of the field. (specifies the height of a line)
| `letter_spacing`     | bool           | true       | Flag to display *letter_spacing* of the field. (increases or decreases the space between characters in a text)
| `text_align`         | bool           | true       | Flag to display *text_align* of the field. (specifies the horizontal alignment of text in an element)
| `text_transform`     | bool           | true       | Flag to display *text_transform* of the field. (controls the capitalization of text)
| `color`              | bool           | true       | Flag to display *color* of the field. (specifies the color of text)
| `subset`             | bool           | true       | Flag to display *subset* of the field. (specifies the languages of font)
| `chosen`             | bool           | true       | Flag to enable [ChosenJS](https://harvesthq.github.io/chosen/) style select.
| `preview`            | bool           | true       | Flag to display *preview font area* of the field. `true` `false` or set `always` for show preview always.
| `backup_font_family` | bool           | false      | Flag to display *backup_font_family* of the field. (specifies the generic font family backup)
| `font_variant`       | bool           | false      | Flag to display *font_variant* of the field. (specifies whether or not a text should be displayed in a small-caps font)
| `word_spacing`       | bool           | false      | Flag to display *word_spacing* of the field. (increases or decreases the white space between words.)
| `text_decoration`    | bool           | false      | Flag to display *text_decoration* of the field. (specifies the decoration added to text)
| `custom_style`       | bool           | false      | Flag to display *custom_style* of the field.
| `extra_styles`       | bool           | false      | Flag to display *extra_styles* of the field. (sets allows multiple choose the font styles)
| `exclude`            | string         |            | Define a comma-separated list of font family group to be excluded from the list. *for eg.* `google` `custom,safe`
| `unit`               | string         | px         | Unit to display on the *font size*, *line-height*, *letter-spacing* etc, also sets output CSS property unit value.
| `line_height_unit`   | string         | px         | Unit to display on the *line-height* for support `em` `rem`, also sets output CSS property unit value.
| `output`             | array\|string  |            | CSS elements selector.
| `output_important`   | bool           | false      | Flag to add **!important** rule on output css.

<div class="pre-heading">Default Arguments</div>

| Name                 | Type     | Description |
|----------------------|----------|-------------|
| `color`              | string   | String representing the default color value. *for eg.* `#1e73be`, `rgba(255,0,0,0.25)`
| `font-family`        | string   | String representing the default fontfamily value. *for eg.* `Open Sans` `Roboto` `Arial`
| `backup-font-family` | string   | String representing the default backup fontfamily value. *for eg.* `Arial, Helvetica, sans-serif`
| `font-weight`        | string   | String representing the default font weight value. *for eg.* `100` `200` `300` `normal` `500` `600` `700` `800` `900`
| `font-style`         | string   | String representing the default font style value. *for eg.* `normal` `italic`
| `font-size`          | number   | Numeric representing the default font size field value..
| `line-height`        | number   | Numeric representing the default line height value..
| `letter-spacing`     | number   | Numeric representing the default letter spacing value..
| `word-spacing`       | number   | Numeric representing the default word spacing value..
| `text-align`         | string   | String representing the default text align value. *for eg.* `left` `center` `right` `justify`
| `text-transform`     | string   | String representing the default text transform value. *for eg.* `none` `capitalize` `uppercase` `lowercase`
| `font-variant`       | string   | String representing the default font varaiant value. *for eg.* `normal` `small-caps` `all-small-caps`
| `text-decoration`    | string   | String representing the default text decoration value. *for eg.* `none` `underline` `underline dotted` `underline dashed`
| `custom-style`       | string   | String representing the default custom style value. *for eg.* `text-shadow: 1px 1px 1px red`
| `extra-styles`       | array    | Array representing the default extra styles value. *for eg.* `100` `100italic` `200` `200italic` `...` `900` `900italic`
| `type`               | string   | String representing the default font repository value. *for eg.* `google` `safe` `custom`
| `subset`             | string   | String representing the default font subset value. *for eg.* `latin` `latin-ext`
| `unit`               | string   | String representing the default font unit value. *for eg.* `px` `em` `rem` `%`

----------------------------------------------------------------------------------------------------------------------------------------------

## Upload

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">Upload only Images</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
 array(
  'id'    => 'opt-upload-1',
  'type'  => 'upload',
  'title' => 'Upload',
),
```
</div>
<div class="csf-tab-content">

```php
 array(
  'id'           => 'opt-upload-2',
  'type'         => 'upload',
  'title'        => 'Upload',
  'library'      => 'image',
  'placeholder'  => 'http://',
  'button_title' => 'Add Image',
  'remove_title' => 'Remove Image',
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Arguments</div>

| Name              | Type           | Default    | Description |
|-------------------|----------------|------------|-------------|
| `id`              | string         |            | A unique **ID**. This **ID** will be used to get the value.
| `type`            | string         | upload     | Type of the field.
| `title`           | string         |            | Title of the field.
| `default`         | string         |            | Default value from database, if the option doesn't exist.
| `subtitle`        | string         |            | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`            | string         |            | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`            | string         |            | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`           | string         |            | Extra CSS classes (space separated) to append to the field.
| `before`          | string         |            | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`           | string         |            | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`      | array          |            | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`      | array          |            | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`        | string         |            | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`        | string         |            | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**        | ---            | ---        | ---
| `library`         | array\|string  | all        | Tell the modal to show specific formats. for eg. `image` or `video` or both etc.
| `placeholder`     | string         |            | Placeholder to be displayed when nothing is selected.
| `button_title`    | string         | Upload     | Text to display on the *upload* button.
| `remove_title`    | string         | Remove     | Text to display on the *remove* button.
| `preview`         | bool           | true       | Flag to display *preview* of the field.
| `preview_width`   | number         | 120        | The max width of the *preview* image.
| `preview_height`  | number         | 90         | The max height of the *preview* image.

---

## WP Editor

<div class="pre-heading">Config Examples</div>
<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Simple</span>
<span class="csf-tab-title">WP Editor w/ Custom Settings</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
array(
  'id'    => 'opt-wp-editor-1',
  'type'  => 'wp_editor',
  'title' => 'WP Editor',
),
```
</div>
<div class="csf-tab-content">

```php
array(
  'id'            => 'opt-wp-editor-2',
  'type'          => 'wp_editor',
  'title'         => 'WP Editor with Custom Settings',
  'tinymce'       => true,
  'quicktags'     => true,
  'media_buttons' => true,
  'height'        => '100px',
),
```
</div>
</div>
<div class="clear"></div>
</div>

<div class="pre-heading">Sanitize</div>
Due to WordPress core rule some html tags are sanitizing by default. ( iframe, script, ie. ) If needed it can be disabled like this:

```php
array(
  'id'       => 'opt-wp-editor-3',
  'type'     => 'wp_editor',
  'title'    => 'WP Editor without sanitize',
  'sanitize' => false,
),
```

<div class="pre-heading">Arguments</div>

| Name             | Type    | Default    | Description |
|------------------|---------|------------|-------------|
| `id`             | string  |            | A unique **ID**. This **ID** will be used to get the value.
| `type`           | string  | wp_editor  | Type of the field.
| `title`          | string  |            | Title of the field.
| `default`        | string  |            | Default value from database, if the option doesn't exist.
| `subtitle`       | string  |            | Subtitle to display below the title. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `desc`           | string  |            | Description to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `help`           | string  |            | Text to display on right-corner (as hover/popup) the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `class`          | string  |            | Extra CSS classes (space separated) to append to the field.
| `before`         | string  |            | Content to display before the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `after`          | string  |            | Content to display after the field. <a href="#/faq?id=how-to-use-common-arguments-" class="csf-more-link">?</a>
| `dependency`     | array   |            | Define field visibility depending on other field value. <a href="#/faq?id=how-to-use-dependencies-" class="csf-more-link">?</a>
| `attributes`     | array   |            | Extra HTML attributes to append to the field. <a href="#/faq?id=how-to-use-attributes-" class="csf-more-link">?</a>
| `sanitize`       | string  |            | Callback function for sanitizing value. <a href="#/faq?id=how-to-use-sanitize-" class="csf-more-link">?</a>
| `validate`       | string  |            | Callback function for validating value. <a href="#/faq?id=how-to-use-validate-" class="csf-more-link">?</a>
| **Extras**       | ---     | ---        | ---
| `tinymce`        | bool    | true       | Flag to load Load TinyMCE.
| `quicktags`      | bool    | true       | Flag to load Quicktags.
| `media_buttons`  | bool    | true       | Flag to display media insert/upload buttons.
| `height`         | string  | 250px      | The height of the editor area.

---

## Others

<div class="csf-tabs">
<div class="csf-tab-buttons">
<span class="csf-tab-title csf-tab-active">Heading</span>
<span class="csf-tab-title">Subheading</span>
<span class="csf-tab-title">Submessage</span>
<span class="csf-tab-title">Notice</span>
<span class="csf-tab-title">Content</span>
<span class="csf-tab-title">Callback</span>
</div>
<div class="csf-tab-contents">
<div class="csf-tab-content csf-tab-active">

```php
// A Heading
array(
  'type'    => 'heading',
  'content' => 'This is a heading field',
),
```

<div class="pre-heading">Arguments</div>

| Name       | Type    | Default  | Description |
|------------|---------|----------|-------------|
| `type`     | string  | content  | Type of the field.
| `content`  | string  |          | The content of the field.

</div>
<div class="csf-tab-content">

```php
// A Subheading
array(
  'type'    => 'subheading',
  'content' => 'This is subheading field',
),
```

<div class="pre-heading">Arguments</div>

| Name       | Type    | Default     | Description |
|------------|---------|-------------|-------------|
| `type`     | string  | subheading  | Type of the field.
| `content`  | string  |             | The content of the field.

</div>
<div class="csf-tab-content">

```php
// A Submessage
array(
  'type'    => 'submessage',
  'style'   => 'success',
  'content' => 'This is a submessage field. And using style "success"',
),
```

<div class="pre-heading">Arguments</div>

| Name       | Type    | Default     | Description |
|------------|---------|-------------|-------------|
| `type`     | string  | submessage  | Type of the field.
| `style`    | string  | normal      | The style of the field. *for eg.* `normal` `success` `info` `warning` `danger`
| `content`  | string  |             | The content of the field.

</div>
<div class="csf-tab-content">

```php
// A Notice
array(
  'type'    => 'notice',
  'style'   => 'success',
  'content' => 'This is a notice field. And using style "success"',
),
```

<div class="pre-heading">Arguments</div>

| Name       | Type    | Default | Description |
|------------|---------|---------|-------------|
| `type`     | string  | notice  | Type of the field.
| `style`    | string  | normal  | The style of the field. *for eg.* `normal` `success` `info` `warning` `danger`
| `content`  | string  |         | The content of the field.

</div>
<div class="csf-tab-content">

```php
// A Content Field Example
array(
  'type'    => 'content',
  'content' => 'This is a content field. You can write some html here.',
),
```
<div class="pre-heading">Arguments</div>

| Name       | Type    | Default  | Description |
|------------|---------|----------|-------------|
| `type`     | string  | content  | Type of the field.
| `content`  | string  |          | The content of the field.

</div>
<div class="csf-tab-content">

```php
// A Callback function
function my_callback_function() {
  echo "<h1>Hello world</h1>";
}

// A Callback Field Example
array(
  'type'     => 'callback',
  'function' => 'my_callback_function',
),
```

<div class="pre-heading">Arguments</div>

| Name       | Type          | Default  | Description |
|------------|---------------|----------|-------------|
| `type`     | string        | callback | Type of the field.
| `function` | string        |          | The callable function name.
| `args`     | array\|string |          | The function arguments.

</div>
</div>
<div class="clear"></div>
</div>
