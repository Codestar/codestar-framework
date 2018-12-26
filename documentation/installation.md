# Installation

### Using as Plugin (Recommended)

1. Download the installable WordPress plugin zip.
2. Upload and active plugin from `WordPress` &rarr; `Plugins` &rarr; `Add New`
3. After activation, next step is to configure your settings. You can do it from here [configurations](configurations)

---

### Using inside Theme

1. Download the installable WordPress plugin zip.
2. Extract plugin zip inside theme folder under your theme directory. *for eg.* `/wp-content/themes/theme-name/inc/codestar-framework` or **anywhere**.
3. Paste the below code inside your theme `functions.php` file.

```php
/**
 *
 * .
 * ├── wp-content
 * |   ├── themes
 * |   |   ├── theme-name
 * |   |   |   ├── style.css
 * |   |   |   ├── screenshot.png
 * |   |   |   ├── functions.php <--------- Open via Text Editor
 * |   |   |   ├── ..
 * |   |   |   ├── ...
 *
 */

/**
 *
 * Codestar Framework
 * A Simple and Lightweight WordPress Option Framework for Themes and Plugins
 *
 */
require_once get_theme_file_path() .'/inc/codestar-framework/codestar-framework.php';
```

4. Done

