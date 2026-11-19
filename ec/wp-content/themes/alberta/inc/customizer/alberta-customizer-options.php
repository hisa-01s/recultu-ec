<?php
/**
 * Customizer section options.
 *
 * @package alberta
 *
 */

function alberta_customizer_theme_settings( $wp_customize ){
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
		
		$wp_customize->add_setting(
			'arilewp_footer_copright_text',
			array(
				'sanitize_callback' =>  'alberta_sanitize_text',
				'default' => __('Copyright &copy; 2025 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Alberta theme by <a target="_blank" href="//themearile.com/">ThemeArile</a>', 'alberta'),
				'transport'         => $selective_refresh,
			)	
		);
		$wp_customize->add_control('arilewp_footer_copright_text', array(
				'label' => esc_html__('Footer Copyright','alberta'),
				'section' => 'arilewp_footer_copyright',
				'priority'        => 10,
				'type'    =>  'textarea'
		));

}
add_action( 'customize_register', 'alberta_customizer_theme_settings' );

function alberta_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
}