=== Custom Field Suite ===
Contributors: logikal16
Donate link: https://uproot.us/contributors/
Tags: custom fields, fields, postmeta, cck, wysiwyg, relationship, upload
Requires at least: 3.2
Tested up to: 3.5
Stable tag: trunk
License: GPL2

Visually add custom fields to your WordPress edit pages.

== Description ==

Custom Field Suite (CFS) lets you create groups of custom fields, and assign edit screens for each field group to appear on. Then, simply add `$cfs->get('your_field')` into your templates to display custom field values throughout your site.

= Why use Custom Field Suite? =
* CFS is super easy to use.
* CFS is stable. We test all changes before releasing a new version.
* CFS is fast and uses minimal server resources.
* CFS has [full documentation](https://uproot.us/custom-field-suite/documentation/) and [support forums](https://uproot.us/forums/).
* CFS works well with [Gravity Forms](https://uproot.us/how-to-save-gravity-forms-data-into-custom-field-suite/) by saving Gravity Forms entries as post items.
* CFS supports [adding your own field types](http://uproot.us/custom-field-suite/docs/custom-field-type/).
* [CFS is on GitHub!](https://github.com/logikal16/custom-field-suite/)

**CFS is a fork of Advanced Custom Fields.** The main goals of this plugin are stability, performance, and avoiding feature bloat.

= Features =
* Field types include [text](https://uproot.us/docs/text/), [textarea](https://uproot.us/docs/textarea/), [wysiwyg](https://uproot.us/docs/wysiwyg/), [date](https://uproot.us/docs/date/), [color](https://uproot.us/docs/color/), [select](https://uproot.us/docs/select/), [file upload](https://uproot.us/docs/file-upload/), [user](https://uproot.us/docs/user/), [relationship](https://uproot.us/docs/relationship/), and [loop](https://uproot.us/docs/loop/)
* Field validation
* Drag-and-drop field management
* Loop fields support unlimited nesting
* Placement Rules let you choose where each field group appears

= Documentation and Support =
* http://uproot.us/
* http://uproot.us/custom-field-suite/documentation/
* https://uproot.us/forums/

== Installation ==

1. Download and activate the plugin.
2. Browse to the `Field Groups` menu to configure.

== Screenshots ==
1. A custom field group with field nesting (loop field)
2. Clicking on a field name expands the box to show options
3. Placement Rules determine where field groups appear
4. The Tools area for migrating field groups

== Changelog ==

= 1.7.8 =
* Field management - autofill and paste support (props @Gator92)
* Cleaned up PHP notices for get() with missing fields (props @jchristopher)
* Updated Hungarian translation (props [hutch.hu](http://hutch.hu/))

= 1.7.7 =
* Compatibility fix for WooFramework
* Bugfix: dragging wysiwyg fields within a loop field

= 1.7.6 =
* Autocomplete for "Posts" placement rule
* Allow for programmatic import/export (props unkhz)
* Removed deprecated parameter from `get_reverse_related`
* Disabled "Synchronize" feature, pending rewrite

= 1.7.5 =
* Updated German translations (props Sacha Brosi)
* Added hook: cfs_custom_validation
* Hovering over a relationship item will display its post type
* Updated select2 script (placement rules area)
* Refactored ajax handling

= 1.7.4 =
* Improved upgrade script
* Added German translation (props Sascha Brosi)
* Bugfix: javascript issues for fields within sub-loop fields (props @sc0ttkclark)
* Added tooltips to field management page

[See the full changelog](https://uproot.us/custom-field-suite/changelog/)