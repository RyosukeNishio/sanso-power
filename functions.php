<?php add_theme_support('post-thumbnails'); ?>

<?php
add_filter( 'wpsbc_calendar_output_month_selector_date_format' , 'wpsbc_custom_date_format', 10, 1);
function wpsbc_custom_date_format( $date ){
  return implode( "年 " , array_reverse( explode( " " , $date ) ) );
}
?>