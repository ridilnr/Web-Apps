<?php

	//traversing through all the result
    require_once "../../dbconect/User.php";
    require_once "../../dbconect/Place.php";
    require_once "../../dbconect/Comment.php";
    require_once "../../dbconect/Image.php";

    $products = array();
    $plc = Place::findAll();

	foreach ($plc as $pl){
        $user = User::findThis($pl->userid);
        $image = Image::find($pl->placeid);
		$temp = array();
		$temp['id'] = "".$pl->placeid;
		$temp['title'] = "".$user->fname;
		$temp['shortdesc'] = "".$pl->description;
		//$temp['rating'] = $rating;
		//$temp['price'] = $price;
        if(!empty($image))
		    $temp['image'] = "http://travelguide.univertek.com/".$image[0]->path;
        else
            $temp['image'] = "http://travelguide.univertek.com/img/not-found.png";
		array_push($products, $temp);
	}
	
	//displaying the result in json format 
	echo json_encode($products);
	
	