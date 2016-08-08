<?php
function wpb_mce_buttons_2($buttons) {

    array_unshift($buttons, 'styleselect');
    return $buttons;

}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');



// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
		// Each array child is a format with it's own settings
		
		// array(
        //     'title' => 'Text Deco',
        //     	'items' => array(
		// 				array(  
		// 				'title' => 'Underline',
		// 				'block' => 'h3',  
		// 				'classes' => 'txt--deco-line',				
		// 				),						
        // 			 	array(  
		// 					'title' => 'Text Compact',  
		// 					'block' => 'h3',  
		// 					'classes' => 'txt--compact',							
		// 				), 
        //         	)
        // ),
		array(
            'title' => 'Text Size',
                'items' => array(
                	    array(  
							'title' => 'Text Small',  
							'block' => 'h3',  
							'classes' => 'txt--sm',	
							
						),
        			 	array(  
							'title' => 'Text Large',  
							'block' => 'h3',  
							'classes' => 'txt--xl',								
						),
						array(  
							'title' => 'Text Extra Large',  
							'block' => 'h3',  
							'classes' => 'txt--xxl',			
						),
						array(  
							'title' => 'Text Huge',  
							'block' => 'h3',  
							'classes' => 'txt--huge',			
						),
						array(  
							'title' => 'Text h1',  
							'block' => 'h3',  
							'classes' => 'alpha',	
							
						),
        			 	array(  
							'title' => 'Text h2',  
							'block' => 'h3',  
							'classes' => 'beta',								
						),
						array(  
							'title' => 'Text h3',  
							'block' => 'h3',  
							'classes' => 'gamma',			
						),
						array(  
							'title' => 'Text h4',  
							'block' => 'h3',  
							'classes' => 'delta',	
							
						),
        			 	array(  
							'title' => 'Text h5',  
							'block' => 'h3',  
							'classes' => 'epsilon',								
						),
						array(  
							'title' => 'Text h6',  
							'block' => 'h3',  
							'classes' => 'zeta',			
						),
                	)
        ),
        array(
            'title' => 'Text Align',
                'items' => array(
        			 	array(  
							'title' => 'Center',  
							'block' => 'h3',  
							'classes' => 'txt--center',	
							
						),
						array(  
							'title' => 'Right',  
							'block' => 'h3',  
							'classes' => 'txt--right',			
						),
						array(  
							'title' => 'Left',  
							'block' => 'h3',  
							'classes' => 'txt--left',			
						),
                	)
        ),		
		array(
            'title' => 'Colors',
                'items' => array(
                array(
                    'title' => 'Color Primary',
                    'inline' => 'span',                   
                    'classes' => 'txt--color-primary'
                ),
                array(
                    'title' => 'Color Secondary',
                    'inline' => 'span',                
                    'classes' => 'txt--color-secondary'
                ),
                array(
                    'title'=> 'Color Tertiary',
                    'inline' => 'span',                 
                    'classes'  => 'txt--color-tertiary'
                ),
                array(
                    'title'=> 'Color White',
                    'inline' => 'span',                 
                    'classes'  => 'txt--color-invert'
                ),
            )
        ),
        array(
            'title' => 'Margins',
                'items' => array(
        			 	array(  
							'title' => 'Margin Bottom none',  
							'block' => 'h3',  
							'classes' => 'mb0',	
							
						),
						array(  
							'title' => 'Margin Bottom double',  
							'block' => 'h3',  
							'classes' => 'mb+',			
						),
						array(  
							'title' => 'Margin Bottom triple',  
							'block' => 'h3',  
							'classes' => 'mb++',			
						),
                	)
        ),


	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 