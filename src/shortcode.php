<?php
/**
 * Example Infobox shortcode.
 *
 * @package     KnowTheCode\PHPOutputBuffer
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://KnowTheCode.io
 * @license     GNU-2.0+
 */
namespace KnowTheCode\PHPOutputBuffer;

namespace KnowTheCode\PHPOutputBuffer;

add_shortcode( 'infobox', __NAMESPACE__ . '\process_infobox_shortcode' );
/**
 * Process the infobox shortcode and return the HTML.
 *
 * @since 1.0.0
 *
 * @param string|array $attributes User-defined attributes
 * @param string $content Content to be displayed within the container.
 *
 * @return string
 */
function process_infobox_shortcode( $attributes, $content ) {
	if ( ! $content ) {
		return '';
	}

	$attributes = shortcode_atts(
		array(
			'type' => '',
		),
		$attributes,
		'sandbox'
	);

	$classes = array('infobox');
	if ($attributes['type'] ) {
		$classes[] = $attributes['type'];
	}

	$html  = '<div class="' . join(' ', $classes) . '" style="background-color: #ccc; margin: 40px 0;">';
	$html .= '<div class="wrap" style="padding: 40px;">' . $content . '</div></div>';

	return $html;
}
