<?php 

    function uploader($img) {

        $productimgurl = "";
        $error = $img['error'];

        // if($error == 4) {
        //     echo "ahi error";
        //     return false;
        // }else {

        //     $name = $img['name'];
        //     $type = $img['type'];
        //     $route = $img['tmp_name'];
        //     $size = $img['size'];
        //     print_r($name);
        //     print_r($type);
        //     print_r($route);
        //     print_r($size);
            // $dimension = getimagesize($route);
            // $width = $dimension[0];
            // $height = $dimension[1];
            // $folder = "../../assets/img/";

            // echo "$type";
        

    // }



            $name = $img['name'];
            $type = $img['type'];
            $route = $img['tmp_name'];
            $size = $img['size'];
            // print_r($name);
            // print_r($type);
            // print_r($route);
            // print_r($size);
            // $dimension = getimagesize($route);
            // $width = $dimension[0];
            // $height = $dimension[1];
            $folder = "../../assets/img/";

            // echo "$type";
            if($name == '') {
                // echo"Nombre:$name";
                // echo "No ahi archivo";
                return false;
            }


        if( $type != 'image/jpg' && 
        $type != 'image/JPG' && 
        $type != 'image/jpeg' && 
        $type != 'image/png' && 
        $type != 'image/svg' && 
        $type != 'image/SVG' &&
        $type !== 'image/svg+xml' && 
        $type !== 'image/SVG+XML' && 
        $type != 'image/gif' ){
            echo "El archivo no es valido";
            return false;

        }else if($size > 3 * 1024 * 1024) {
            
            echo "Error el archvo es muy grande 3MB";
            return false;
        }else {
            $src = $folder.$name;
            move_uploaded_file($route,$src);
            // $productimgurl = "https://mobiltel.es/assets/img/".$name;
            $productimgurl = "http://localhost/mobitel/assets/img/".$name;
            // echo $productimgurl;
            // $productimgurl = "http://mobiteltest.atspace.co.uk/aplication/assets/img/".$name;
        }

        // echo $productimgurl;

        return $productimgurl;
}

?>