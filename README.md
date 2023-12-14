# Demo ACF Plugin

__Fork it, or download the [latest release](https://github.com/colorful-tones/Demo-ACF-Plugin/releases), and make it your own!__

Need a quick start plugin to kick-start your next WordPress and [ACF PRO](https://advancedcustomfields.com) project? Look no further.

## Description

This plugin is intended to provide a starting point for you to incorporate into your everyday WordPress and ACF PRO work.

It is highly recommended you search and replace all strings with your own.

1. Search for: `demo_acf` and replace with your own `my_client`
2. Search for `DEMO_ACF` and replate with your own `MY_CLIENT`
3. Be sure to update the plugin header at the top of `demo-acf-plugin.php` to your desired plugin name.

### ACF Blocks

This demo plugin contains a few example ACF Blocks, which you can modify and use if you like. You can [read more on each block](blocks/README.md).

## Installation

__Required__ You must have [ACF PRO](https://https://www.advancedcustomfields.com/pro/) installed and activated in order to use the Demo ACF Plugin.

### Manual

1. Upload the Demo ACF Plugin folder to the plugins directory (typically `wp-content/plugins`) in your WordPress installation.
2. Activate the Demo ACF Plugin.
3. That's it.

## Changelog

### 0.1.5 – 2023-12-14

- Wrap "Site Settings" Options page in `function_exists()` check to fail gracefully if ACF PRO is not installed.

### 0.1.4 – 2023-10-20

- Fixed Fatal Error for misnamed function call in `includes/acf-restrict-access.php` 🤦‍♂️

### 0.1.3 – 2023-09-25

- Restrict access to block locking based on email domain with `demo_acf_show_admin()` check.
- Improve usage of `get_block_wrapper_attributes()` for Phone block based on [Liam's Tweet thread](https://x.com/lgladdy/status/170011422420935dd).
- Add `background` and `text` color supports to Phone block.

### 0.1.2 – 2023-08-29

Added example of restricting access to ACF admin screens based on role && email domain, example: `yourAgency.com`. So builders can limit admin screens for their clients. See: `includes/acf-restrict-access.php`

### 0.1.1 – 2023-08-15

Initial release, which includes:

- ACF feature-type JSON loading and saving locations: `acf-json/field-groups`, `acf-json/options-pages`, `acf-json/post-types`, `acf-json/taxonomies`
- Example ACF Blocks: Phone Number
- ACF Block helpers:
  - Add `demo_acf_blocks` options table entry for all blocks detected in `/blocks`
  - Use `demo_acf_blocks` options to register blocks
  - Register custom block category with [`block_categories_all`](https://developer.wordpress.org/reference/hooks/block_categories_all/)
  - Example of `acf/blocks/no_fields_assigned_message` if ACF Block has no fields
- Example Options Page for "Site Settings"
