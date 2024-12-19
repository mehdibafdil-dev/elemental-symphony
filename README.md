# Elemental Symphony
![Version](https://img.shields.io/badge/version-1.0.0-blue.svg)

**Elemental Symphony** is a powerful child theme designed for Elementor, built with advanced Object-Oriented Programming (OOP) principles. This theme provides a structured and modular approach to developing custom shortcodes and styles, enhancing the flexibility and maintainability of your WordPress site.

## Features

- **Object-Oriented Design:** Organized code structure using OOP practices for better maintainability.
- **Custom Shortcodes:** Easily add and manage custom shortcodes for dynamic content.
- **Responsive Design:** Built with responsiveness in mind, ensuring a seamless experience across devices.
- **Dynamic Styles:** Enqueue styles and scripts dynamically, allowing for easy customization.
- **Helper Functions:** Utilize utility functions for common tasks throughout the theme.

## Project Architecture

The **Elemental Symphony** theme is organized into a structured directory layout that enhances maintainability and scalability. Here’s a breakdown of the project architecture:

```
elemental-symphony/
│
├── assets/                      # Contains all CSS and JavaScript files
│   ├── css/                     # Stylesheets
│   │   ├── main.css             # Main stylesheet for general styles
│   │   └── shortcode-styles.css  # Styles specific to shortcodes
│   ├── js/                      # JavaScript files
│   │   ├── main.js              # Main JavaScript file for general functionality
│   │   └── shortcode-scripts.js  # JavaScript file for shortcode interactions
│
├── inc/                         # Includes all core classes and functionalities
│   ├── class-elemental-symphony.php  # Main class for theme initialization and management
│   ├── class-shortcodes.php     # Class defining custom shortcodes
│   ├── class-helpers.php        # Utility functions for common tasks
│   └── class-assets.php         # Class managing the enqueueing of styles and scripts
│
├── template-parts/             # Contains template parts for rendering shortcodes
│   └── shortcodes/              # Folder for shortcode-specific templates
│       ├── example.php          # Template for example shortcode
│       └── another-example.php   # Template for another example shortcode
│
├── elemental-symphony.php       # Main file that initializes the theme
├── style.css                    # Theme metadata and basic styles
└── README.md                    # Documentation for the theme
```

### Directory and File Descriptions

- **`assets/`**: This directory holds all the CSS and JavaScript files used by the theme.
  - **`css/`**: Contains stylesheets for the theme.
    - **`main.css`**: The primary stylesheet for global styles and layout.
    - **`shortcode-styles.css`**: Styles specifically for the custom shortcodes.
  - **`js/`**: Contains JavaScript files that handle interactivity.
    - **`main.js`**: General JavaScript functionality for the theme.
    - **`shortcode-scripts.js`**: Scripts that enhance the functionality of the shortcodes.

- **`inc/`**: This folder includes all core classes that encapsulate the theme's functionalities.
  - **`class-elemental-symphony.php`**: The main class that initializes the theme, registers shortcodes, and enqueues assets.
  - **`class-shortcodes.php`**: Defines custom shortcodes and their rendering logic.
  - **`class-helpers.php`**: Contains utility functions used throughout the theme for common tasks.
  - **`class-assets.php`**: Manages the loading of styles and scripts to ensure dependencies are handled correctly.

- **`template-parts/`**: This directory contains reusable template parts for rendering shortcodes.
  - **`shortcodes/`**: Contains separate PHP files for different shortcode templates.
    - **`example.php`**: Template for rendering the example shortcode.
    - **`another-example.php`**: Template for rendering another example shortcode.

- **`elemental-symphony.php`**: The main theme file that includes necessary setups, such as including classes and starting the theme functionality.

- **`style.css`**: Contains theme metadata (like name, author, version) and any basic styles needed for the theme.


## Installation

1. **Download the Theme:**
   - Download the `Elemental Symphony` theme from the repository or your local system.

2. **Upload to WordPress:**
   - Upload the `elemental-symphony` folder to the `/wp-content/themes/` directory of your WordPress installation.

3. **Activate the Theme:**
   - Go to the **Appearance** > **Themes** menu in the WordPress admin dashboard.
   - Find **Elemental Symphony** and click the **Activate** button.

4. **Install Required Plugins:**
   - Ensure that the Elementor plugin is installed and activated. This theme requires Elementor to function properly.

## Usage

### Adding Shortcodes

Elemental Symphony provides several shortcodes that you can use in your posts and pages. Here are a couple of examples:

1. **Example Shortcode:**
```php
[example_shortcode color="red"]Your content here[/example_shortcode]
```
Description: Renders a styled box with your content. You can customize the text color using the color attribute.

Another Example Shortcode:

```php
[another_example]Your content here[/another_example]
```
Description: Renders a different styled box with your content.

### Customizing Styles

You can customize the styles by editing the CSS files located in the `assets/css/` directory:

- **`main.css`** - For general styles.
- **`shortcode-styles.css`** - For styles specifically related to shortcodes.

### Adding New Shortcodes

To add new shortcodes, follow these steps:

1. Open the `inc/class-shortcodes.php` file.
2. Create a new method in the `Shortcodes` class for your shortcode logic.
3. Register the shortcode using `add_shortcode()` within the `initialize_shortcodes` method.

### Using Helper Functions

You can utilize helper functions located in `inc/class-helpers.php` throughout your theme. For example, to get the current year, use:

```php
$current_year = Helpers::get_current_year();
```

## Support

For any issues or questions regarding the **Elemental Symphony** theme, please check the [WordPress Support Forums](https://wordpress.org/support/forum/themes-and-templates/) or contact your theme developer directly.

## License

Elemental Symphony is licensed under the MIT License. Feel free to modify and distribute as per your needs, but please retain the original credits.

## Contributing

Contributions to the Elemental Symphony theme are welcome! Please fork the repository and submit a pull request for any improvements or new features.

## Acknowledgments

Thanks to the WordPress community and the Elementor team for their fantastic tools that make web development a breeze!

## Contributing

Contributions, issues, and feature requests are welcome! Feel free to check the [issues page](https://github.com/mehdibafdil-dev/elemental-symphony/issues).

## Show your support

Give a ⭐️ if this project helped you!



