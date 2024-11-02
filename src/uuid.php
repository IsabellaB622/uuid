<?php

namespace IsabellaB622;

class uuid {
	public static function generate_v4(){
		$uuid = "";

		$uuid = $uuid . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15));

		$uuid = $uuid . "-" . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15));

		$uuid = $uuid . "-" . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15));

		$ran = rand(0, 3);
		if($ran == 0){
			$ab89 = "a";
		}else if($ran == 1){
			$ab89 = "b";
		}else if($ran == 2){
			$ab89 = "8";
		}else {
			$ab89 = "9";
		}

		$uuid = $uuid . "-" . $ab89 . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15));

		$uuid = $uuid . "-" . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15));
		return $uuid;
	}
}
