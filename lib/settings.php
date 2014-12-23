<?php

$nazoma_settings = array(

    array(
        "group" => "nazoma-settings-group",
        "name" => "nazoma_site_header_title_coloured",
        "name-clean" => "Site heading title coloured",
        "type" => "text"
    ),
    array(
        "group" => "nazoma-settings-group",
        "name" => "nazoma_site_header_title",
        "name-clean" => "Site heading title uncoloured",
        "type" => "text"
    ),
    array(
        "group" => "nazoma-settings-group",
        "name" => "nazoma_site_header_tagline",
        "name-clean" => "Site heading tagline",
        "type" => "text"
    ),
    array(
        "group" => "nazoma-settings-group",
        "name" => "nazoma_site_header_image",
        "name-clean" => "Site heading image URL",
        "type" => "text"
    ),
    array(
        "group" => "nazoma-settings-group",
        "name" => "nazoma_analytics",
        "name-clean" => "Analytics code",
        "type" => "textarea"
    ),
    array(
        "group" => "nazoma-settings-group",
        "name" => "nazoma_head_meta",
        "name-clean" => "Extra meta to be injected into <pre><code>&lt;head&gt;</code></pre>",
        "type" => "textarea"
    )

);

function nazoma_create_menu() {

	add_menu_page('Site options', 'Site options', 'administrator', __FILE__, 'nazoma_settings_page' );
	add_action( 'admin_init', 'register_mysettings' );

}
add_action('admin_menu', 'nazoma_create_menu');

function register_mysettings() {

    global $nazoma_settings;

    foreach ( $nazoma_settings as $setting ) {
        register_setting( $setting['group'], $setting['name'] );
    }

}

function nazoma_settings_page() {

    global $nazoma_settings;
?>
<div class="wrap">
<h2><?php bloginfo("wptitle"); ?> settings</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'nazoma-settings-group' ); ?>
    <?php do_settings_sections( 'nazoma-settings-group' ); ?>
    <table class="form-table">

        <?php
            foreach( $nazoma_settings as $setting ) { ?>

            <tr valign="top">
            <th scope="row"><?php echo $setting['name-clean']; ?></th>
            <td>
                <?php 
                    $val = esc_attr( get_option($setting['name']) );
                    switch ( $setting['type'] ) {
                        case "text": ?>

                            <input type="text" name="<?php echo $setting['name']; ?>" value="<?php echo $val; ?>" />

                        <?php break; 
                        case "textarea": ?>

                            <textarea name="<?php echo $setting['name']; ?>" style="width:400px;height:180px;"><?php echo $val; ?></textarea>

                        <?php break;
                    }
                ?>
                
            </td>
            </tr>

        <?php } ?>
        
 
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>