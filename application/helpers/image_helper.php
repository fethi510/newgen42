<?php



function image_thumb( $name,$image_path, $height, $width ) {

    // Get the CodeIgniter super object

    $CI =& get_instance();



    // Path to image thumbnail

    $image_thumb = dirname( $image_path ) . '/' .$name.'_'. $height . '_' . $width . '.jpg';



    if ( !file_exists( $image_thumb ) ) {

        // LOAD LIBRARY

        $CI->load->library( 'image_lib' );


        // CONFIGURE IMAGE LIBRARY

        $config['image_library']    = 'gd2';

        $config['source_image']     = $image_path;

        $config['new_image']        = $image_thumb;

        $config['maintain_ratio']   = TRUE;

        $config['height']           = $height;

        $config['width']            = $width;

        $CI->image_lib->initialize( $config );

        $CI->image_lib->resize();

        $CI->image_lib->clear();

    }


    /*style="width: '.$width.'px; height:'.$height.'px;"*/
    return '<img src="' . site_url()  . $image_thumb . '"  />';

}



/* End of file image_helper.php */

/* Location: ./application/helpers/image_helper.php */