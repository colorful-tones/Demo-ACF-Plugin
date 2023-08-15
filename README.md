# Demo ACF Plugin

__Fork it, or download the [latest release](releases), and make it your own!__

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
