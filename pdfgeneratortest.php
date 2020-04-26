
  <?php
  require 'vendor/autoload.php';
use GuzzleHttp\Client;


  $key = 'ad54aaff89ffdfeff178bb8a8f359b29fcb20edb56250b9f584aa2cb0162ed4a';
  $secret = 'c00c18db6be22a6ffb5386f8503eecf98165a68410539e4693a08d7d995f5f47';
  $workspace = 'demo.example@actualreports.com';
  $resource = 'templates/19375/output';
  $documentData = json_encode([
    "id" => 304355781,
    "name" => "#1014A",
    "number" => 15,
    "note" => "Customer Notes",
    "shipping_address" => [
      "name" => "John Smith",
      "address" => "St Patrick Road 4",
      "city" => "London",
      "country" => "United Kingdom",
      "zip" => "UK12991"
    ]
  ]);

  $data = [
    'key' => $key,
    'resource' => $resource,
    'workspace' => $workspace
  ];
  ksort($data);

  $signature = hash_hmac('sha256', implode('', $data), $secret);

  $client = new \GuzzleHttp\Client([
      'base_uri' => 'https://us1.pdfgeneratorapi.com/api/v3/'
  ]);

  /**
   * Authentication params sent in headers
   */
  $response = $client->request('POST', $resource, [
    'body' => $documentData,
    'query' => [
      'format' => 'pdf',
      'output' => 'url'
    ],
    'headers' => [
      'X-Auth-Key' => $key,
      'X-Auth-Workspace' => $workspace,
      'X-Auth-Signature' => $signature,
      'Accept' => 'application/json',
      'Content-Type' => 'application/json; charset=utf-8',
    ]
  ]);

  /**
   * Authentication params sent in query string
   */
  $response = $client->request('POST', $resource, [
    'body' => $documentData,
    'query' => [
      'key' => $key,
      'workspace' => $workspace,
      'signature' => $signature,
      'format' => 'pdf',
      'output' => 'url'
    ]
  ]);

  $contents = $response->getBody()->getContents();
  echo $contents;

  echo "thisnonsense";
 ?>
