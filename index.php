<?php get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>
<?php if (sv_show('clients'))      get_template_part('template-parts/clients'); ?>
<?php if (sv_show('services'))     get_template_part('template-parts/services'); ?>
<?php if (sv_show('stats'))        get_template_part('template-parts/stats'); ?>
<?php if (sv_show('testimonials')) get_template_part('template-parts/testimonials'); ?>
<?php if (sv_show('case_studies')) get_template_part('template-parts/case-studies'); ?>
<?php if (sv_show('process'))      get_template_part('template-parts/process'); ?>
<?php if (sv_show('comparison'))   get_template_part('template-parts/comparison'); ?>

<?php get_footer(); ?>
