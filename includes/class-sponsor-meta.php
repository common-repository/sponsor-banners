<?php
/**
 * 
 * @link       http://marcobrughi.com
 * @since      1.0.0
 *
 * @package    Sponsor Banners
 * @subpackage Sponsor/includes
*/

/**
 * Get the bootstrap!
 */
if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {
  require_once  __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once  __DIR__ . '/CMB2/init.php';
}

add_action( 'cmb2_init', 'sponsor_metabox' );
function sponsor_metabox() {

	$prefix = '_sponsor_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'sponsor_metabox',
		'title'        => __( 'Dati Sponsor', 'sponsorbanners' ),
		'object_types' => array( 'sponsor' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

//	$cmb->add_field( array(
//		'name' => __( 'Dati banner', 'sponsorbanners' ),
//		'id' => $prefix . 'dati_banner',
//		'type' => 'textarea_code',
//	) );

	$cmb->add_field( array(
		'name' => __( 'Graphic Banner / Immagine', 'sponsorbanners' ),
		'id' => $prefix . 'graphic_banner',
		'type' => 'file',
		'desc' => __( '<a href="http://diginetwork.biz" target="_blank">CLICCA QUI</a> per un aiuto sui formati banners ', 'sponsorbanners' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Web Link', 'sponsorbanners' ),
		'id' => $prefix . 'web_link',
		'type' => 'text_url',
	) );
	
	$cmb->add_field( array(
		'name' => __( 'Larghezza', 'sponsorbanners' ),
		'id' => $prefix . 'banner_width',
		'type' => 'text',
		'desc' => __( 'Inserisci larghezza del banner in pixel', 'sponsorbanners' ),
		'attributes' => array(
			'type' => 'number',
			'number' => '\d*',
		),
	) );
	
	$cmb->add_field( array(
		'name' => __( 'Altezza', 'sponsorbanners' ),
		'id' => $prefix . 'banner_height',
		'type' => 'text',
		'desc' => __( 'Inserisci altezza del banner in pixel', 'sponsorbanners' ),
		'attributes' => array(
			'type' => 'number',
			'number' => '\d*',
		),
	) );
	/**
		$cmb->add_field( array(
		'name' => __( 'Grazie per aver scaricato Banner Sponsor', 'sponsorbanners' ),
		'desc' => __( 'Per usare i banner di codice acquistare la <a href="">versione PRO</a>', 'sponsorbanners' ),
		'id'   => $prefix . 'banner_txt_pro',
		'type' => 'title',
	) );
	*/
	


}
