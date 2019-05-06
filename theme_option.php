<?php
function _theme_options_init() {

	// If we have no options in the database, let's add them now.
	if ( false === _get_theme_options() )
		add_option( '_theme_options', _get_default_theme_options() );

	register_setting(
		'_options',       // Options group, see settings_fields() call in theme_options_render_page()
		'_theme_options' // Database option, see _get_theme_options()
	);
	$to_array = array( 'title','description','api_key','password','card_type','title1','description1','api_key1','password1',
'title2','description2','api_key2','password2','title3','description3','api_key3','password3');
	foreach( $to_array as  $t_array ){
		register_setting( '_options', $t_array );
	}
}

add_action( 'admin_init', '_theme_options_init' );

function _theme_options_add_page() {
	$theme_page = add_menu_page(
		__( 'Theme Options', '' ),   // Name of page
		__( 'Theme Options', '' ),   // Label in menu
		'edit_theme_options',                    // Capability required
		'theme_options',                         // Menu slug, used to uniquely identify the page
		'_theme_options_render_page' // Function that renders the options page
	);

	if ( ! $theme_page )
		return;
}

add_action( 'admin_menu', '_theme_options_add_page' );

function _default_schemes() {
	$default_scheme_options = array(
		'Default_theme' => array(
				'title' => '',
				'description' => '',
				'api_key' => '',
				'password' => '',
				'card_type' => '',
				'title1' => '',
				'description1' => '',
				'api_key1' => '',
				'password1' => '',
				'title2' => '',
				'description2' => '',
				'api_key2' => '',
				'password2' => '',
				'title3' => '',
				'description3' => '',
				'api_key3' => '',
				'password3' => ''
		),
	);

	return apply_filters( '_default_schemes', $default_scheme_options );
}

function _get_default_theme_options() {
	$default_theme_options = array(
		'default_scheme' => 'Default_theme',
		'title' => _get_default_title( 'Default_theme' ),
		'description' => _get_default_description( 'Default_theme' ),
		'api_key' => _get_default_api_key( 'Default_theme' ),
		'password' =>_get_default_password( 'Default_theme' ),
		'card_type' =>_get_default_card_type( 'Default_theme' ),
		'title1' => _get_default_title1( 'Default_theme' ),
		'description1' => _get_default_description1( 'Default_theme' ),
		'api_key1' => _get_default_api_key1( 'Default_theme' ),
		'password1' =>_get_default_password1( 'Default_theme' ),

		'title2' => _get_default_title2( 'Default_theme' ),
		'description2' => _get_default_description2( 'Default_theme' ),
		'api_key2' => _get_default_api_key2( 'Default_theme' ),
		'password2' =>_get_default_password2( 'Default_theme' ),

		'title3' => _get_default_title3( 'Default_theme' ),
		'description3' => _get_default_description3( 'Default_theme' ),
		'api_key3' => _get_default_api_key3( 'Default_theme' ),
		'password3' =>_get_default_password3( 'Default_theme' ),

	);
	return apply_filters( '_default_theme_options', $default_theme_options );
}

function _get_default_title( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['title'];
}

function _get_default_description( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['description'];
}

function _get_default_api_key( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['api_key'];
}

function _get_default_password( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['password'];
}

function _get_default_card_type( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['card_type'];
}


function _get_default_title1( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['title1'];
}

function _get_default_description1( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['description1'];
}

function _get_default_api_key1( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['api_key1'];
}

function _get_default_password1( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['password1'];
}

function _get_default_title2( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['title2'];
}

function _get_default_description2( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['description2'];
}

function _get_default_api_key2( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['api_key2'];
}

function _get_default_password2( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['password2'];
}

function _get_default_title3( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['title3'];
}

function _get_default_description3( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['description3'];
}

function _get_default_api_key3( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['api_key3'];
}

function _get_default_password3( $default_scheme = null ){
	if ( null === $default_scheme ) {
		$options = _get_theme_options();
		$default_scheme = $options['default_scheme'];
	}
	$default_schemes = _default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;
	return $default_schemes[ $default_scheme ]['password3'];
}


/**********/
function _get_theme_options() {
	return get_option( '_theme_options', _get_default_theme_options() );
}

function _theme_options_render_page() {
	?>
	<div class="wrap">
		<?php screen_icon(); ?>
		<h2><?php printf( __( '%s Options', '' ), wp_get_theme() ); ?></h2>
		<?php settings_errors(); ?>
		<hr>
			<form method="post" enctype="multipart/form-data" action="options.php">
			<?php

				settings_fields( '_options' );
				$options = _get_theme_options();
				$default_options = _get_default_theme_options();
				do_settings_sections('title');
				do_settings_sections('description');
				do_settings_sections('api_key');
				do_settings_sections('password');
				do_settings_sections('card_type');

				do_settings_sections('title1');
				do_settings_sections('description1');
				do_settings_sections('api_key1');
				do_settings_sections('password1');

				do_settings_sections('title2');
				do_settings_sections('description2');
				do_settings_sections('api_key2');
				do_settings_sections('password2');

				do_settings_sections('title3');
				do_settings_sections('description3');
				do_settings_sections('api_key3');
				do_settings_sections('password3');
			?>

			<h2 class="title">Location 1 Options</h2>
			<table class="form-table">
				<tr>
					<th scope="row"><label for="site_logo_text2">Title</label></th>
					<td>
						<input type="text" class="regular-text" name="title" value="<?php echo get_option('title'); ?> " />
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="description">Description</label></th>
					<td>
						<textarea name="description" rows="3" cols="30"><?php echo get_option('description'); ?></textarea>
						<!-- <input type="text" class="regular-text" name="description" value="<?php //echo get_option('description'); ?>" /> -->
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="description">eWAY Customer API Key</label></th>
					<td>
						<input type="text" class="regular-text" name="api_key" value="<?php echo get_option('api_key'); ?> " />
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="description">eWAY Customer Password</label></th>
					<td>
						<input type="text" class="regular-text" name="password" value="<?php echo get_option('password'); ?> " />
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="description">eWAY Customer Password</label></th>
					<td>
						<?php $card_type = get_option('card_type');
						print_r($card_type);
						echo 'VISA  - '.$card_type['visa'].'<BR />';
						?>
						<input type="checkbox" name="card_type['visa']" value="1" <?php checked( $card_type['visa'],1 ); ?> />Visa <br />
						<input type="checkbox" name="card_type['master_card']" value="1" <?php checked( 1 == $card_type['master_card'] ); ?> />Master Card <br />
						<input type="checkbox" name="card_type['discover']" value="1" <?php checked( 1 == $card_type['discover'] ); ?> />Discover <br />
						<input type="checkbox" name="card_type['amex']" value="1" <?php checked( 1 == $card_type['amex'] ); ?> />AmEx<br />
						<input type="checkbox" name="card_type['diners']" value="1" /<?php checked( 1 == $card_type['diners'] ); ?> />Diners <br />
						<input type="checkbox" name="card_type['maestro']" value="1" <?php checked( 1 == $card_type['maestro'] ); ?> />Maestro <br />
						<input type="checkbox" name="card_type['laser']" value="1" <?php checked( 1 == $card_type['laser'] ); ?> />Laser<br />
						<input type="checkbox" name="card_type['Unionpay']" value="1" <?php checked( 1 == $card_type['Unionpay'] ); ?> />UnionPay
					</td>
				</tr>
			</table>

			<h2 class="title">Location 2 Options</h2>
			<table class="form-table">
				<tr>
					<th scope="row"><label for="title1">Title</label></th>
					<td>
						<input type="text" class="regular-text" name="title1" value="<?php echo get_option('title1'); ?> " />
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="description1">Description</label></th>
					<td>
						<textarea name="description1" rows="3" cols="30"><?php echo get_option('description1'); ?></textarea>
						<!-- <input type="text" class="regular-text" name="description" value="<?php //echo get_option('description'); ?>" /> -->
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="api_key1">eWAY Customer API Key</label></th>
					<td>
						<input type="text" class="regular-text" name="api_key1" value="<?php echo get_option('api_key1'); ?> " />
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="password1">eWAY Customer Password</label></th>
					<td>
						<input type="text" class="regular-text" name="password1" value="<?php echo get_option('password1'); ?> " />
					</td>
				</tr>
			</table>

			<h2 class="title">Location 3 Options</h2>
			<table class="form-table">
				<tr>
					<th scope="row"><label for="title2">Title</label></th>
					<td>
						<input type="text" class="regular-text" name="title2" value="<?php echo get_option('title2'); ?> " />
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="description2">Description</label></th>
					<td>
						<textarea name="description2" rows="3" cols="30"><?php echo get_option('description2'); ?></textarea>
						<!-- <input type="text" class="regular-text" name="description" value="<?php //echo get_option('description'); ?>" /> -->
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="api_key2">eWAY Customer API Key</label></th>
					<td>
						<input type="text" class="regular-text" name="api_key2" value="<?php echo get_option('api_key2'); ?> " />
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="password2">eWAY Customer Password</label></th>
					<td>
						<input type="text" class="regular-text" name="password2" value="<?php echo get_option('password2'); ?> " />
					</td>
				</tr>
			</table>

			<h2 class="title">Location 4 Options</h2>
			<table class="form-table">
				<tr>
					<th scope="row"><label for="title3>Title</label></th>
					<td>
						<input type="text" class="regular-text" name="title3" value="<?php echo get_option('title3'); ?> " />
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="description3">Description</label></th>
					<td>
						<textarea name="description3" rows="3" cols="30"><?php echo get_option('description3'); ?></textarea>
						<!-- <input type="text" class="regular-text" name="description" value="<?php //echo get_option('description'); ?>" /> -->
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="api_key3">eWAY Customer API Key</label></th>
					<td>
						<input type="text" class="regular-text" name="api_key3" value="<?php echo get_option('api_key3'); ?> " />
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="password3">eWAY Customer Password</label></th>
					<td>
						<input type="text" class="regular-text" name="password3" value="<?php echo get_option('password3'); ?> " />
					</td>
				</tr>
			</table>



			<?php submit_button(); ?>
			</form>
	</div>
	<?php
}
