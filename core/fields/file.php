<?php

class cfs_File
{
    public $name;
    public $label;
    public $parent;

    function __construct($parent)
    {
        $this->name = 'file';
        $this->label = __('File Upload', 'cfs');
        $this->parent = $parent;

        // alter the media_send_to_editor response
        add_filter('media_send_to_editor', array($this, 'media_send_to_editor'), 10, 3);
    }

    function html($field)
    {
        $file_url = ctype_digit($field->value) ? wp_get_attachment_url($field->value) : $field->value;
    ?>
        <input type="button" class="file button" value="<?php _e('Add File', 'cfs'); ?>" />
        <div class="file_url"><?php echo $file_url; ?></div>
        <input type="hidden" name="<?php echo $field->input_name; ?>" class="<?php echo $field->input_class; ?>" value="<?php echo $field->value; ?>" />
    <?php
    }

    function options_html($key, $field)
    {

    }

    function media_send_to_editor($html, $id, $attachment)
    {
        $media = array(
            'id' => $id,
            'url' => $attachment['url'],
        );

        // return "html" param
        return json_encode($media);
    }

    function input_head($field = null)
    {
    ?>
        <script type="text/javascript">
        jQuery(function() {
            jQuery(".cfs_input .file.button").click(function() {
                jQuery(".cfs_input input.file.button").removeClass("active");
                jQuery(this).addClass("active");
                tb_show('', 'media-upload.php?type=file&TB_iframe=true');
                return false;
            });

            window.send_to_editor = function(html) {
                var file = jQuery.parseJSON(html);
                jQuery(".cfs_input .file.button.active").closest(".field").find(".file_url").html(file.url);
                jQuery(".cfs_input .file.button.active").closest(".field").find(".file:last").val(file.id);
                tb_remove();
            }
        });
        </script>
    <?php
    }

    function format_value_for_api($value)
    {
        if (ctype_digit($value[0]))
        {
            return wp_get_attachment_url($value[0]);
        }
        return $value[0];
    }
}
