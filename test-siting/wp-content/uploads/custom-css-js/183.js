<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
  
  var image_position = jQuery('.wp-image-143.p-media__img:not(.wp-block-column .wp-image-143.p-media__img)');//適用したい画像のセレクタ名
  if (image_position.length) {
    image_position.parent().removeClass('p-media--only');
    image_position.parent().addClass('p-media--only-center');
  }
  
  var image_position = jQuery(".wp-block-group__inner-container:has('.wp-block-image').wp-block-group__inner-container:not(.wp-block-group__inner-container p)");
  if (image_position.length) {
    image_position.addClass('u-mt312vw u-mt72vw-md u-mt8vw-sm');
    image_position.children().removeClass('u-mt312vw u-mt72vw-md u-mt8vw-sm u-mt0');
    image_position.children().addClass('u-mt0vw');
  }
});</script>
<!-- end Simple Custom CSS and JS -->
