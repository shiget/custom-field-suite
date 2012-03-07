<input type="hidden" name="cfs[save]" value="<?php echo wp_create_nonce('cfs_save_fields'); ?>" />

<div class="fields">

<?php
global $post;

$results = $this->api->get_input_fields($post->ID, 0);

foreach ($results as $field)
{
    $this->field_html($field);
}
?>

</div>

<div class="field_clone hidden">

<?php
// Build clone HTML
$field = (object) array(
    'id' => '',
    'name' => 'new_field',
    'label' => 'New Field',
    'type' => 'text',
    'instructions' => '',
    'weight' => 'clone',
);

$this->field_html($field);
?>

</div>

<div class="table_footer">
    <input type="button" class="button-primary cfs_add_field" value="<?php _e('Add New Field', 'cfs'); ?>" />
</div>
