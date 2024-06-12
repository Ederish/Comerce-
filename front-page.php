<?php
$urlPage = get_query_var('custom_param');

switch ($urlPage) {
    case 'brand':
        get_header();
        get_template_part("components\BrandPage");
        get_footer();
        break;
    case 'details':
        get_header();
        get_template_part("components\DetailPage");
        get_footer();
        break;
    case 'search':
        get_header();
        get_template_part("search");
        get_footer();
        break;
    default:
          get_header();
          get_template_part("components\Home");
          get_footer();
        break;
}