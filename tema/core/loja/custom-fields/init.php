<?php


include __DIR__ . "/cmb2/init.php";

add_action( 'cmb2_admin_init', 'yourprefix_register_demo_metabox' );
function yourprefix_register_demo_metabox()
{


    $cmb_demo = new_cmb2_box( array(
		'id'            => 'yourprefix_demo_metabox',
		'title'         => esc_html__( 'Imagem', 'cmb2' ),
		'object_types'  => array( 'term' ), // or Post type
        'taxonomies'       => array( 'marcas', 'departamentos', 'catalogos' ),
		
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Imagem', 'cmb2' ),
		'desc' => esc_html__( 'Adicione uma imagem', 'cmb2' ),
		'id'   => 'image',
		'type' => 'file',
        'options' => array(
            'url' => false, 
            'add_upload_file_text' => 'Adicionar imagem' 
        ),
	) );

    $cmb_demo = new_cmb2_box( array(
		'id'            => 'yourprefix_demo_metabox_file',
		'title'         => esc_html__( 'File', 'cmb2' ),
		'object_types'  => array( 'term' ), // or Post type
        'taxonomies'       => array( 'catalogos' ),
		
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Arquivo para download', 'cmb2' ),
		'desc' => esc_html__( 'Adicione uma arquivo', 'cmb2' ),
		'id'   => 'file',
		'type' => 'file',
        'options' => array(
            'url' => true, 
            'add_upload_file_text' => 'Adicionar arquivo' 
        ),
	) );

}


function metabox_for_produtos() {
    $prefix = '_metabox_for_produtos_';

    $cmb_demo = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => __( 'Detalhes do produto', 'cmb2' ),
        'object_types'  => array( 'produtos' ), // Post type
    ) );

    $cmb_demo->add_field( array(
        'name'       => __( 'Código do produto', 'cmb2' ),
        'desc'       => __( 'field description (obrigatório)', 'cmb2' ),
        'id'         => $prefix . 'codigo',
        'type'       => 'text',
		'attributes' => array(
			'required'    => 'required',
			'type' => 'number',
			'pattern' => '\d*',
		),
		'sanitization_cb' => 'absint',
			'escape_cb'       => 'absint',
    ) );


}
add_action( 'cmb2_admin_init', 'metabox_for_produtos' );


function metabox_for_feedbacks() {
    $prefix = '_metabox_for_feedbacks_';

    $cmb_demo = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => __( 'Informações', 'cmb2' ),
        'object_types'  => array( 'feedbacks' ), // Post type
    ) );

    $cmb_demo->add_field( array(
        'name'       => __( 'Info 1', 'cmb2' ),
        'desc'       => __( 'Info 1', 'cmb2' ),
        'id'         => $prefix . 'local_1',
        'type'       => 'text',
		'attributes' => array(
			'required'    => 'required',
		)
    ) );

    $cmb_demo->add_field( array(
        'name'       => __( 'Info 2', 'cmb2' ),
        'desc'       => __( 'Info 2', 'cmb2' ),
        'id'         => $prefix . 'local_2',
        'type'       => 'text',
		'attributes' => array(
			'required'    => 'required',
		)
    ) );


}
add_action( 'cmb2_admin_init', 'metabox_for_feedbacks' );