<?php
if (!defined('ABSPATH')) exit;

// admin menu
add_action('admin_menu', function() {
    add_menu_page('SV Settings', '🚀 SV Settings', 'manage_options', 'sv-settings', 'sv_render_settings', '', 3);
});

// save settings
add_action('admin_init', function() {
    if (!isset($_POST['sv_save']) || !current_user_can('manage_options')) return;
    check_admin_referer('sv_nonce');

    $fields = array('sv_cta_label', 'sv_hero_pill', 'sv_hero_line1', 'sv_hero_line2', 'sv_hero_desc', 'sv_hero_btn1', 'sv_hero_btn2');
    foreach ($fields as $f) {
        if (isset($_POST[$f])) {
            update_option($f, sanitize_text_field($_POST[$f]));
        }
    }

    $sections = array('clients', 'services', 'stats', 'testimonials', 'case_studies', 'process', 'comparison');
    foreach ($sections as $s) {
        update_option('sv_show_' . $s, isset($_POST['sv_show_' . $s]) ? '1' : '0');
    }

    wp_redirect(add_query_arg('saved', '1', wp_get_referer()));
    exit;
});

function sv_render_settings() {
    ?>
    <div style="max-width:700px;margin:2rem auto;font-family:sans-serif;">
        <h1 style="font-size:1.5rem;margin-bottom:1.5rem;">🚀 SV Homepage Settings</h1>

        <?php if (isset($_GET['saved'])) { ?>
            <div style="background:#d1fae5;border:1px solid #6ee7b7;padding:.75rem 1rem;border-radius:8px;margin-bottom:1.5rem;">✅ Saved!</div>
        <?php } ?>

        <form method="post">
            <?php wp_nonce_field('sv_nonce'); ?>
            <input type="hidden" name="sv_save" value="1">

            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:1.5rem;margin-bottom:1.5rem;">
                <h2 style="font-size:1rem;margin-bottom:1rem;color:#111;">Header</h2>
                <label style="display:block;font-size:.875rem;font-weight:600;margin-bottom:.25rem;">CTA Button Label</label>
                <input type="text" name="sv_cta_label" value="<?php echo esc_attr(get_option('sv_cta_label', 'Get a Proposal')); ?>" style="width:100%;padding:.5rem .75rem;border:1px solid #e5e7eb;border-radius:8px;font-size:.9375rem;">
            </div>

            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:1.5rem;margin-bottom:1.5rem;">
                <h2 style="font-size:1rem;margin-bottom:1rem;color:#111;">Hero Section</h2>
                <?php
                $fields = array(
                    'sv_hero_pill'  => array('Top Pill Text', 'Accepting New Agency Partners for Q1'),
                    'sv_hero_line1' => array('Title Line 1 (white)', 'SEO that scales'),
                    'sv_hero_line2' => array('Title Line 2 (blue gradient)', 'on autopilot.'),
                    'sv_hero_btn1'  => array('Button 1 Label', 'Start Your Growth Engine'),
                    'sv_hero_btn2'  => array('Button 2 Label', 'View Our Process'),
                );
                foreach ($fields as $key => $info) {
                    echo '<div style="margin-bottom:.875rem;">';
                    echo '<label style="display:block;font-size:.875rem;font-weight:600;margin-bottom:.25rem;">' . $info[0] . '</label>';
                    echo '<input type="text" name="' . $key . '" value="' . esc_attr(get_option($key, $info[1])) . '" style="width:100%;padding:.5rem .75rem;border:1px solid #e5e7eb;border-radius:8px;font-size:.9375rem;">';
                    echo '</div>';
                }
                ?>
                <label style="display:block;font-size:.875rem;font-weight:600;margin-bottom:.25rem;">Description</label>
                <textarea name="sv_hero_desc" rows="3" style="width:100%;padding:.5rem .75rem;border:1px solid #e5e7eb;border-radius:8px;font-size:.9375rem;resize:vertical;"><?php echo esc_textarea(get_option('sv_hero_desc', 'We help agencies and brands grow faster with scalable SEO, high-quality link building, and fully managed content strategies — delivered with transparency, speed, and proven results.')); ?></textarea>
            </div>

            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:1.5rem;margin-bottom:1.5rem;">
                <h2 style="font-size:1rem;margin-bottom:1rem;color:#111;">Show / Hide Sections</h2>
                <?php
                $sections = array(
                    'clients'      => 'Client Logos',
                    'services'     => 'Services Grid',
                    'stats'        => 'Stats Bar',
                    'testimonials' => 'Testimonials',
                    'case_studies' => 'Case Studies',
                    'process'      => 'Process Steps',
                    'comparison'   => 'Comparison Table',
                );
                foreach ($sections as $key => $label) {
                    $checked = get_option('sv_show_' . $key, '1') === '1';
                    echo '<div style="display:flex;align-items:center;gap:.75rem;padding:.625rem 0;border-bottom:1px solid #f3f4f6;">';
                    echo '<input type="checkbox" name="sv_show_' . $key . '" id="sv_' . $key . '" value="1"' . ($checked ? ' checked' : '') . ' style="width:16px;height:16px;">';
                    echo '<label for="sv_' . $key . '" style="font-size:.9375rem;font-weight:500;">' . $label . '</label>';
                    echo '</div>';
                }
                ?>
            </div>

            <button type="submit" style="background:#f15a2b;color:#fff;border:none;padding:.75rem 2rem;border-radius:999px;font-size:.9375rem;font-weight:700;cursor:pointer;">💾 Save Changes</button>
        </form>
    </div>
    <?php
}
