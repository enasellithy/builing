<?php

function getSetting($settingname = 'sitename'){
	 return \App\Setting::where('setting',$settingname)->get()[0]->value;
}

function checkImageIsexist($imageName,$pathImage = '/public/image/slider/',$url = 'images/slider/'){
	if($imageName != ''){
		$path = base_path().''.$imageName;
		if(file_exists($path)){
			return Request::root().'/images/'.$imageName;
		}
	}
}

function uploadImage($request, $path = '/public/images/',$width = '500' , $height = '362'){
	$dim = getimagesize($request);
	if($dim[0] > $width || $dim[1] > $height){
		return false;
	}
	$filename = $request->getClientOriginalName();
	$request->move(base_path().$path,$filename);
	return $filename;
}

function bu_type(){
	$array = [
		'شقه',
		'فيلا',
		'شاليه'
	];
	return $array;
}

function bu_rent(){
	$array = [
		'ايجار',
		'تمليك'
	];
	return $array;
}

function bu_status(){
	$array = [
		'غير مفعل',
		'مفعل'
	];
	return $array;
}

function roomnumber(){
	$array = [];
	for($i = 2; $i <= 40; $i++){
		$array[$i] = $i;
	}
	return $array;
}

function bu_place(){
	$array = [
		'aswan' 		=> 'aswan',
		'asyut' 		=> 'asyut',
		'abou-al-reish' => 'abou-al-reish',
		'edfu' 			=> 'edfu',
		'basiliah' 		=> 'basiliah',
		'rdesiah'		=> 'rdesiah',
		'sebaeiah'		=> 'sebaeiah',
		'daraw'			=> 'daraw',
		'sahara'		=> 'sahara',
		'kalabsha'		=> 'kalabsha',
		'kom-ombo'		=> 'kom-ombo',
		'aswan-city'	=> 'aswan-city',
		'nasr-al-noba'	=> 'nasr-al-noba',
		'luxor'			=> 'luxor',
		'armant'		=> 'armant',
		'isna'			=> 'isna',
		'zinnia'		=> 'zinnia',
		'qurna'			=> 'qurna',
		'luxor-city'	=> 'luxor-city',
		'alexandria'	=> 'alexandria',
		'abu-qir'		=> 'abu-qir',
		'azarita'		=> 'azarita',
		'gomrok'		=> 'gomrok',
		'al-hadrah'		=> 'al-hadrah',
		'dekheila'		=> 'dekheila',
		'seyouf'		=> 'seyouf',
		'salehia'		=> 'salehia',
		'dhahria'		=> 'dhahria',
		'amreya'		=> 'amreya',
		'asafra'		=> 'asafra',
		'attarin'		=> 'attarin',
		'awayed'		=> 'awayed',
		'kabbary'		=> 'kabbary',
		'labban'		=> 'labban',
		'maamoura'		=> 'maamoura',
		'el-max'		=> 'el-max',
		'montazah'		=> 'montazah',
		'mandara'		=> 'mandara',
		'manshiyya'		=> 'manshiyya',
		'nakheel'		=> 'nakheel',
		'nozha'			=> 'nozha',
		'wardian'		=> 'wardian',
		'bacchus'		=> 'bacchus',
		'bahray-anfoshy'=> 'bahray-anfoshy',
		'borg-al-arab'	=> 'borg-al-arab',
		'bolkly'		=> 'bolkly',
		'glim'			=> 'glim',
		'gianaclis'		=> 'gianaclis',
		'zezenia'		=> 'zezenia',
		'saba-pasha'	=> 'saba-pasha',
		'stanley'		=> 'stanley',
		'smoha'			=> 'smoha',
		'sidi-beshr'	=> 'sidi-beshr',
		'sporting'		=> 'sporting',
		'sidi-gaber'	=> 'sidi-gaber',
		'shatby'		=> 'shatby',
		'schutz'		=> 'schutz',
		'tosson'		=> 'tosson',
		'agami'			=> 'agami',
		'fleming'		=> 'fleming',
		'victoria'		=> 'victoria',
		'camp-caesar'	=> 'camp-caesar',
		'karmous'		=> 'karmous',
		'kafr-abdo'		=> 'kafr-abdo',
		'cleopatra'		=> 'cleopatra',
		'koum-al-dikka'	=> 'koum-al-dikka',
		'laurent'		=> 'laurent',
		'moharam-bik'	=> 'moharam-bik',
		'raml-station'	=> 'raml-station',
		'miami'			=> 'miami',
		'mina-al-basal'	=> 'mina-al-basal',
		'cairo'			=> 'cairo',
		'basateen'		=> 'basateen',
		'tebeen'		=> 'tebeen',
		'First-Settlement' => 'First-Settlement',
		'fifth-settlement' => 'fifth-settlement',
		'gamaleya'		=> 'gamaleya',
		'helmeya'		=> 'helmeya',
		'helmeya-al-gadeda'	=> 'helmeya-al-gadeda',
		'khalifa'		=> 'khalifa',
		'darrasa'		=> 'darrasa',
		'darb-al-ahmar'	=> 'darb-al-ahmar',
		'roda'			=> 'roda',
		'zawya-al-hamra' => 'zawya-al-hamra',
		'zamalek'		=> 'zamalek',
		'zaytoun'		=> 'zaytoun',
		'sahel'			=> 'sahel',
		'sayeda-zeinab'	=> 'sayeda-zeinab',
		'sharabeya'		=> 'sharabeya',
		'10th-ramadan-city'	=> '10th-ramadan-city',
		'abasiya'		=> 'abasiya',
		'obour-city'	=> 'obour-city',
		'ataba'			=> 'ataba',
		'new-cairo'		=> 'new-cairo',
		'katameya'		=> 'katameya',
		'marg'			=> 'marg',
		'matareya'		=> 'matareya',
		'maadi'			=> 'maadi',
	];
	return $array;
}

function searchNameField(){
	return [
		'bu_place'	=> 'place',
		'bu_price_to' => 'price',
		'bu_price_from' => 'price',
		'bu_rooms' => 'Rooms',
		'bu_type' => 'Type',
		'bu_rent' => 'Rent',
		'bu_square' => 'Square'
	];
}