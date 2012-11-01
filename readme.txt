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

= 1.7.3 =
* Added field validation
* Bugfix: get_post_type caching causing Gravity Form save error (props producerism)
* Added Hungarian translation (props J�zsef Szij�rt�)

= 1.7.2 =
* Added Media button to WYSIWYG fields
* Bugfix: [fatal error when a post update causes a rules mismatch](https://github.com/logikal16/custom-field-suite/issues/55) (props Gator92)
* Tools page UI improvements

= 1.7.1 =
* Placement rules clarification text
* Allow editing of fields without labels
* Added new "Row Label" Loop option
* Bugfix: nested loop fields (props Hylkep)
* Updated timepicker JS

= 1.7.0 =
* Improved: field management UI
* Improved: select field returns associative array (value, label)
* Improved: rename postmeta keys when fields are renamed
* Improved: delete values when a field is deleted
* Bugfix: clear cache on $cfs->save (props dataworx)
* File field compatibility fixes for WP 3.5
* Added new logo (https://github.com/somerandomdude/Iconic)

[See the full changelog](https://uproot.us/custom-field-suite/changelog/)