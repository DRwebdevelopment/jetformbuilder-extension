# JetFormBuilder extension

A small WordPress plugin that adds (currently hardcoded) functionality to the [JetFormBuilder](https://jetformbuilder.com/) plugin from [Crocoblock](https://crocoblock.com/). It adds a certain form value to a meta key in the newly created post, using JetFormBuilder Insert/Update post action.

## Usage

In the file `/admin/class-jetformbuilder-extension-admin.php` there is a a function located at the bottom of the script called `post_meta_extension`. This is the functionality that is run after a form submit from JetFormBuilder. There are 3 values that need to be set properly in this file:

- `$form_id` needs to be set to the ID of the JetFormBuilder form that this action needs to apply to (prevents this code from running on form you do not want it to run on
- `$form_field` needs to be set to the form field name of the field whos value needs to be added to the post meta
- `$meta_key` needs to bet set to the meta key in which this form field value needs to be inserted
