<?php
$vcap_services = json_decode($_ENV['VCAP_SERVICES'], true);
$vcap_redis_servers = array();
foreach($vcap_services as $service_provider => $service_list) {
	foreach ($service_list as $service) {
		if ( in_array('redis', $service['tags'], true) || strpos($service['name'], 'redis') !== false ) {
			if( isset($service['credentials']['hostname']) ) $host = $service['credentials']['hostname'];
			else if( isset($service['credentials']['host']) ) $host = $service['credentials']['host'];
			else continue;
			
			if( !isset($service['credentials']['port']) ) continue;
			if( !isset($service['credentials']['password']) ) continue;
			
			$vcap_redis_servers[] = array(
				'name' => $service['name'],
				'host' => $host,
				'port' => $service['credentials']['port'],
				'auth' => $service['credentials']['password'],
			);
		}
	}
}
