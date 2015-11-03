 <?php

namespace Snowfire\Cdon;

use Guzzle\Http\Client;

class Product
{
	public static function import($productXml)
	{
		$client = new Client();
		$response = $client->post(Request::endpoint('import'), null, array('file' => $productXml))
		                   ->send();
	}

	public static function update($productId, $productXml)
	{
		$request = new Client();
		$response = $client->put(Request::endpoint('update'), null, array('file' => $productXml))
		                   ->send();
	}
}