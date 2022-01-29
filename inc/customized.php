<?php



function mysite_extra_area_customized($wp_customize){
   //adding section in wordpress customizer   
    $wp_customize->add_section('copyright_extras_section', array(
        'title'          => 'Copyright Text Section'
    ));

    //adding setting for copyright text
    $wp_customize->add_setting('text_setting', array(
        'default'        => 'Default Text For copyright Section',
    ));

    $wp_customize->add_control('text_setting', array(
        'label'   => 'Copyright text',
        'section' => 'copyright_extras_section',
        'type'    => 'text',
    ));


	//adding setting for copyright text
    $wp_customize->add_setting('text_tara', array(
        'default'        => 'Example paragraph textarea ',
    ));

    $wp_customize->add_control('text_tara', array(
        'label'   => 'text',
        'section' => 'copyright_extras_section',
        'type'    => 'textarea',
    ));
	
	
	//adding setting for copyright text
    $wp_customize->add_setting('display', array(
        'default'        => 'no'
    ));

    $wp_customize->add_control('display', array(
        'label'   => 'display this section',
        'section' => 'copyright_extras_section',
        'type'    => 'select',
		'choices'=>array('No'=>'no','Yes'=>'Yes')
    ));
	
	
	
	
	//adding setting for copyright text
    $wp_customize->add_setting('text_link');

    $wp_customize->add_control('text_link', array(
        'label'   => 'link',
        'section' => 'copyright_extras_section',
        'type'    => 'dropdown-pages'
    ));
	
	//adding setting for copyright text
    $wp_customize->add_setting('image');

    $wp_customize->add_control (new wp_customize_cropped_image_control($wp_customize,'image', array(
        'label'   => 'image',
        'section' => 'copyright_extras_section'
		
       
    )));
	
	
	//secound section area 
	
	
	 //adding setting for copyright text
    $wp_customize->add_setting('text_section', array(
        'default'        => 'Default Text For copyright Section',
    ));

    $wp_customize->add_control('text_section', array(
        'label'   => 'secound text area',
        'section' => 'copyright_extras_section',
        'type'    => 'text',
    ));


	//adding setting for copyright text
    $wp_customize->add_setting('text_area', array(
        'default'        => 'Example paragraph textarea ',
    ));

    $wp_customize->add_control('text_area', array(
        'label'   => 'text',
        'section' => 'copyright_extras_section',
        'type'    => 'textarea',
    ));
	
	//adding setting for copyright text
    $wp_customize->add_setting('gallery');

    $wp_customize->add_control (new wp_customize_cropped_image_control($wp_customize,'gallery', array(
        'label'   => 'gallery',
        'section' => 'copyright_extras_section'
		
       
    )));
	
	
	//section area three
	
		 //adding setting for copyright text
    $wp_customize->add_setting('text_section_three', array(
        'default'        => 'please add text Here now......',
    ));

    $wp_customize->add_control('text_section_three', array(
        'label'   => 'three text area',
        'section' => 'copyright_extras_section',
        'type'    => 'text',
    ));


	//adding setting for copyright text
    $wp_customize->add_setting('text_area_three', array(
        'default'        => 'Example paragraph textarea ',
    ));

    $wp_customize->add_control('text_area_three', array(
        'label'   => 'text',
        'section' => 'copyright_extras_section',
        'type'    => 'textarea',
    ));
	
	//adding setting for copyright text
    $wp_customize->add_setting('images');

    $wp_customize->add_control (new wp_customize_cropped_image_control($wp_customize,'images', array(
        'label'   => 'images',
        'section' => 'copyright_extras_section'
		
       
    )));
	
	//header bruredcume
	
	
	 //adding setting for copyright text
    $wp_customize->add_setting('text_header_section', array(
        'default'        => 'Default Text For copyright Section',
    ));

    $wp_customize->add_control('text_header_section', array(
        'label'   => 'header area',
        'section' => 'copyright_extras_section',
        'type'    => 'text',
    ));


	//adding setting for copyright text
    $wp_customize->add_setting('text_header_area', array(
        'default'        => 'Example paragraph textarea ',
    ));

    $wp_customize->add_control('text_header_area', array(
        'label'   => 'text',
        'section' => 'copyright_extras_section',
        'type'    => 'textarea',
    ));
	
	
}
add_action('customize_register','mysite_extra_area_customized');