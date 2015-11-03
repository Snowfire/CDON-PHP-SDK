<?php

namespace Snowfire\Cdon;

class Request
{
	protected static $baseEndpoint = 'https://admin.marketplace.cdon.com/api/';

	public static function endpoint($endpoint)
	{
		$mappings = array(
			'import' => 'importfile',
		);

		if (array_key_exists($endpoint, $mappings)) {
			$endpoint = $mappings[$endpoint];
		}

		return static::$baseEndpoint.$endpoint;
	}
}