/**
 * Perch UI
 * 
 * Dependencies: jQuery, jQuery UI, ColorPicker
 * @author Habibur Rahman Razib (themeperch@gmail.com)
 */
;(function($) {  

  PERCH_UI = {
    processing: false,
    init: function() {      
      this.init_select_wrapper();
      this.bind_select_wrapper();    
    },
    init_select_wrapper: function(scope) {
      scope = scope || document;
      $('.perch-ui-select', scope).each(function () {
        if ( ! $(this).parent().hasClass('select-wrapper') ) {
          $(this).wrap('<div class="select-wrapper" />');
          $(this).parent('.select-wrapper').prepend('<span>' + $(this).find('option:selected').text() + '</span>');
          $(this).parent('.select-wrapper').closest('.vc_col-sm-3').find('.vc_description').addClass($(this).find('option:selected').val());
        }
      });
    },
    bind_select_wrapper: function() {
      $(document).on('change', '.perch-ui-select', function () {
        $(this).prev('span').replaceWith('<span>' + $(this).find('option:selected').text() + '</span>');
        $(this).parent('.select-wrapper').closest('.vc_col-sm-3').find('.vc_description').addClass($(this).find('option:selected').val());
      });
    },
    bind_colorpicker: function(field_id) {
      $('#'+field_id).wpColorPicker({
        change: function() {
          PERCH_UI.parse_condition();
        }, 
        clear: function() {
          PERCH_UI.parse_condition();
        }
      });
    },
    bind_date_picker: function(field_id, date_format) {
      $('#'+field_id).datepicker({
        showOtherMonths: true,
        showButtonPanel: true,
        currentText: _perch.date_current,
        closeText: _perch.date_close,
        dateFormat: date_format
      });
    },
    bind_date_time_picker: function(field_id, date_format) {
      $('#'+field_id).datetimepicker({
        showOtherMonths: true,
        closeText: _perch.date_close,
        dateFormat: date_format
      });
    },
    fix_upload_parent: function() {
      $('.perch-ui-upload-input').not('.perch-upload-attachment-id').on('focus blur', function(){
        $(this).parent('.perch-ui-upload-parent').toggleClass('focus');
        PERCH_UI.init_upload_fix(this);
      });
    },
    remove_image: function(e) {
      $(e).parent().parent().find('.perch-ui-upload-input').attr('value','');
      $(e).parent('.perch-ui-media-wrap').remove();
    },
    fix_textarea: function() {
      $('.wp-editor-area').focus( function(){
        $(this).parent('div').css({borderColor:'#bbb'});
      }).blur( function(){
        $(this).parent('div').css({borderColor:'#ccc'});
      });
    },
    scroll_to_top: function() {
      setTimeout( function() {
        $(this).scrollTop(0);
      }, 50 );
    }
  };
  jQuery(document).ready( function($) {   
    PERCH_UI.init();
    $('.perch-typography-setting .perch-typography-field').live('change', function(){
        var $parent = $(this).closest('.perch-typography-setting');
        var $typography_value = '';
        $parent.find('.perch-typography-field').each(function(){
            if( 'undefined' !== $(this).data('name') ){
                var $name = $(this).data('name');
                var $value = $(this).val();
                if( '' != $value ){
                  $typography_value = $typography_value + $name + ':' + $value + '|';
                }
            }
        })
        $parent.find('.perch_vc_typography_field').val($typography_value);
        
    });
  });
})(jQuery);
