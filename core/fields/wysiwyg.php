<?php

class cfs_Wysiwyg extends cfs_Field
{

    function __construct($parent)
    {
        $this->name = 'wysiwyg';
        $this->label = __('Wysiwyg Editor', 'cfs');
        $this->parent = $parent;
    }

    function html($field)
    {
    ?>
        <textarea name="<?php echo $field->input_name; ?>" class="<?php echo $field->input_class; ?>" rows="4"><?php echo $field->value; ?></textarea>
    <?php
    }

    function input_head()
    {
    ?>
        <script type="text/javascript">
        (function($) {
            var wysiwyg_count = 0;

            $(function() {
                $('.cfs_add_field').bind('go', function() {
                    $('.cfs_wysiwyg:not(.ready)').init_wysiwyg();
                });
                $('.cfs_wysiwyg').init_wysiwyg();
            });

            $.fn.init_wysiwyg = function() {
                this.each(function() {
                    $(this).addClass('ready');

                    // generate css id
                    wysiwyg_count = wysiwyg_count + 1;
                    var input_id = 'cfs_wysiwyg_' + wysiwyg_count;
                    $(this).find('.wysiwyg').attr('id', input_id);

                    // create wysiwyg
                    tinyMCE.settings.theme_advanced_buttons2 += ',code';
                    tinyMCE.execCommand('mceAddControl', false, input_id);
                });
            };
        })(jQuery);
        </script>
    <?php
    }

    function format_value_for_input($value)
    {
        return wp_richedit_pre($value[0]);
    }

    function format_value_for_api($value)
    {
        return apply_filters('the_content', $value[0]);
    }
}
