<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    
    function image_thumb($gambar="",$level){

        if($gambar!=""){
            $thumimage=explode(".",$gambar);
            if($level==1)
                return $thumimage[0]."_768.".$thumimage[1];
            elseif($level==2)
                return $thumimage[0]."_768_300.".$thumimage[1];
            elseif($level==3)
                return $thumimage[0]."_150.".$thumimage[1];

        }else{
            return $gambar;
        }

}   
    
    function crop_image($source,$ext,$width_p,$height_p,$thumb){
                    // Create a blank image and add some text

            
            if($ext==".jpg" || $ext==".jpeg" || $ext==".jpe" || $ext==".JPG")
            $image = imagecreatefromjpeg($source);
            elseif($ext==".png")
            $image = imagecreatefrompng($source);
            else
            $image= imagecreatefromgif($source);


            $filename = $thumb;

            $thumb_width = $width_p;
            $thumb_height = $height_p;

            $width = imagesx($image);
            $height = imagesy($image);

            $original_aspect = $width / $height;
            $thumb_aspect = $thumb_width / $thumb_height;

            if ( $original_aspect >= $thumb_aspect )
            {
               // If image is wider than thumbnail (in aspect ratio sense)
               $new_height = $thumb_height;
               $new_width = $width / ($height / $thumb_height);
            }
            else
            {
               // If the thumbnail is wider than the image
               $new_width = $thumb_width;
               $new_height = $height / ($width / $thumb_width);
            }

            $thumb = imagecreatetruecolor( $thumb_width, $thumb_height );

            // Resize and crop
            imagecopyresampled($thumb,
                               $image,
                               0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
                               0 - ($new_height - $thumb_height) / 2, // Center the image vertically
                               0, 0,
                               $new_width, $new_height,
                               $width, $height);
            

            if($ext==".jpg" || $ext==".jpeg" || $ext==".jpe" || $ext==".JPG"){
            return imagejpeg($thumb, $filename, 80);
            }elseif($ext==".png"){
            return imagepng($thumb, $filename, 9);
            }else{
            return imagegif($thumb, $filename);
            }
    }
    
    function resize_image($file, $width, $height,$thumb_marker)

    {

        $ci =& get_instance();

        

        $config['image_library'] = 'gd2';

        $config['source_image'] =$file;

        $config['maintain_ratio'] = FALSE;

        $config['file_permissions'] = 0777;

        $config['quality'] = "90%";

        $config['width']  = $width;

        $config['height'] = $height;  

        $config["thumb_marker"] = $thumb_marker;

        $config["create_thumb"] = true;



        $ci->image_lib->initialize($config);

        $ci->image_lib->resize();   

        $ci->image_lib->clear();

        

        $ci->session->set_flashdata('resize_error', $ci->image_lib->display_errors());  

    }
    

    ?>