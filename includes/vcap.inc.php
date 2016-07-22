<?php
$vcap_services = json_decode($_ENV['VCAP_SERVICES'], true);
$vcap_redis_servers = array();
foreach($vcap_services as $service_provider => $service_list) {
	foreach ($service_list as $service) {
		if ( in_array('redis', $service['tags'], true) || strpos($service['name'], 'redis') !== false ) {
			$vcap_redis_servers[] = array(
				'name' => $service['name'],
				'host' => $service['credentials']['hostname'],
				'port' => $service['credentials']['port'],
				'auth' => $service['credentials']['password'],
				'filter' => '*',
				'scheme' => 'tcp',
				'path' => '',
				);
		}
	}
}
