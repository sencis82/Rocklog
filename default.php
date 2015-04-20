<?php
/**
* @package Helix3 Framework
* @author JoomShaper http://www.joomshaper.com
* @copyright Copyright (c) 2010 - 2015 JoomShaper
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('_JEXEC') or die;
?>

    <script src="lib/zoomcharts.js"></script>
    
<h1><?php echo $this->item->greeting.(($this->item->category and $this->item->params->get('show_category'))
                                      ? (' ('.$this->item->category.')') : ''); ?>
</h1>

                <div id="demo"></div>



<script>
        var t = new TimeChart({
            container: document.getElementById("demo"),
            height: 350,
            data: [
              { 
              timestampInSeconds: true,
              id:"outside",
              preloaded: { 
                "dataLimitFrom":1428437849,
                "unit":"m",
                "data": 
<?php
try {

$config = array();
$config['username'] = 'user@mail.com';
$config['password'] = 'password';
$config['restLink'] = 'https://api.clusterpoint.com/ID/DB';
$config['cookie_jar'] = tempnam('/tmp', 'cookie');
$config['format'] = 'json';

// GET status
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// Optional - use cookies
curl_setopt($ch, CURLOPT_COOKIEFILE, $config['cookie_jar']);
curl_setopt($ch, CURLOPT_COOKIEJAR, $config['cookie_jar']);

// If use cookie autentification need for first time
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, $config['username'] . ':' . $config['password']);
curl_setopt($ch, CURLOPT_URL, $config['restLink'] . '.' . $config['format']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$result = curl_exec($ch);  
  
// retrieve multiple
$document = 
'{"query":"outside"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// Optional - use cookies
curl_setopt($ch, CURLOPT_COOKIEFILE, $config['cookie_jar']);
curl_setopt($ch, CURLOPT_COOKIEJAR, $config['cookie_jar']);

// If use cookie autentification need for first time
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, $config['username'] . ':' . $config['password']);
curl_setopt($ch, CURLOPT_URL, $config['restLink'] . '/_search/*/2000/0.' . $config['format']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $document);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$result = curl_exec($ch);
  
  //echo $result;

$json = $result;
$json = json_decode($json, true);
echo '[';
$coma = '';
foreach ($json['documents'] as $key => $values){
    echo $coma;
    $coma = ',';
    echo '["';
    echo $values['id'];
    echo '", "';
    echo $values['value'];
    echo '"]';
}
echo ']';

  
} catch (Exception $e) {
  echo $e->getMessage();
  // var_dump($e->errors());
}

 ?>
                }
},
                { 
              timestampInSeconds: true,
              id:"hotstream",
              preloaded: { 
                "dataLimitFrom":1428437849,
                "unit":"m",
                "data": 
<?php
try {

$config = array();
$config['username'] = 'user@mail.com';
$config['password'] = 'password';
$config['restLink'] = 'https://api.clusterpoint.com/ID/DB';
$config['cookie_jar'] = tempnam('/tmp', 'cookie');
$config['format'] = 'json';


// GET status
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// Optional - use cookies
curl_setopt($ch, CURLOPT_COOKIEFILE, $config['cookie_jar']);
curl_setopt($ch, CURLOPT_COOKIEJAR, $config['cookie_jar']);

// If use cookie autentification need for first time
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, $config['username'] . ':' . $config['password']);
curl_setopt($ch, CURLOPT_URL, $config['restLink'] . '.' . $config['format']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$result = curl_exec($ch);  
  
// retrieve multiple
$document = 
'{"query":"hotstream"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// Optional - use cookies
curl_setopt($ch, CURLOPT_COOKIEFILE, $config['cookie_jar']);
curl_setopt($ch, CURLOPT_COOKIEJAR, $config['cookie_jar']);

// If use cookie autentification need for first time
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, $config['username'] . ':' . $config['password']);
curl_setopt($ch, CURLOPT_URL, $config['restLink'] . '/_search/*/2000/0.' . $config['format']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $document);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$result = curl_exec($ch);
  
  //echo $result;

$json = $result;
$json = json_decode($json, true);
echo '[';
$coma = '';
foreach ($json['documents'] as $key => $values){
    echo $coma;
    $coma = ',';
    echo '["';
    echo $values['id'];
    echo '", "';
    echo $values['value'];
    echo '"]';
}
echo ']';

  
} catch (Exception $e) {
  echo $e->getMessage();
  // var_dump($e->errors());
}

 ?>
                }
},
              
                { 
              timestampInSeconds: true,
              id:"coldstream",
              preloaded: { 
                "dataLimitFrom":1428437849,
                "unit":"m",
                "data": 
<?php
try {

$config = array();
$config['username'] = 'user@mail.com';
$config['password'] = 'password';
$config['restLink'] = 'https://api.clusterpoint.com/ID/DB';
$config['cookie_jar'] = tempnam('/tmp', 'cookie');
$config['format'] = 'json';


// GET status
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// Optional - use cookies
curl_setopt($ch, CURLOPT_COOKIEFILE, $config['cookie_jar']);
curl_setopt($ch, CURLOPT_COOKIEJAR, $config['cookie_jar']);

// If use cookie autentification need for first time
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, $config['username'] . ':' . $config['password']);
curl_setopt($ch, CURLOPT_URL, $config['restLink'] . '.' . $config['format']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$result = curl_exec($ch);  
  
// retrieve multiple
$document = 
'{"query":"coldstream"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// Optional - use cookies
curl_setopt($ch, CURLOPT_COOKIEFILE, $config['cookie_jar']);
curl_setopt($ch, CURLOPT_COOKIEJAR, $config['cookie_jar']);

// If use cookie autentification need for first time
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, $config['username'] . ':' . $config['password']);
curl_setopt($ch, CURLOPT_URL, $config['restLink'] . '/_search/*/2000/0.' . $config['format']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $document);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$result = curl_exec($ch);
  
  //echo $result;

$json = $result;
$json = json_decode($json, true);
echo '[';
$coma = '';
foreach ($json['documents'] as $key => $values){
    echo $coma;
    $coma = ',';
    echo '["';
    echo $values['id'];
    echo '", "';
    echo $values['value'];
    echo '"]';
}
echo ']';

  
} catch (Exception $e) {
  echo $e->getMessage();
  // var_dump($e->errors());
}

 ?>
                }
},
                { 
              timestampInSeconds: true,
              id:"inside",
              preloaded: { 
                "dataLimitFrom":1428437849,
                "unit":"m",
                "data": 
<?php
try {

$config = array();
$config['username'] = 'user@mail.com';
$config['password'] = 'password';
$config['restLink'] = 'https://api.clusterpoint.com/ID/DB';
$config['cookie_jar'] = tempnam('/tmp', 'cookie');
$config['format'] = 'json';


// GET status
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// Optional - use cookies
curl_setopt($ch, CURLOPT_COOKIEFILE, $config['cookie_jar']);
curl_setopt($ch, CURLOPT_COOKIEJAR, $config['cookie_jar']);

// If use cookie autentification need for first time
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, $config['username'] . ':' . $config['password']);
curl_setopt($ch, CURLOPT_URL, $config['restLink'] . '.' . $config['format']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$result = curl_exec($ch);  
  
// retrieve multiple
$document = 
'{"query":"inside"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// Optional - use cookies
curl_setopt($ch, CURLOPT_COOKIEFILE, $config['cookie_jar']);
curl_setopt($ch, CURLOPT_COOKIEJAR, $config['cookie_jar']);

// If use cookie autentification need for first time
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, $config['username'] . ':' . $config['password']);
curl_setopt($ch, CURLOPT_URL, $config['restLink'] . '/_search/*/2000/0.' . $config['format']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $document);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$result = curl_exec($ch);
  
  //echo $result;

$json = $result;
$json = json_decode($json, true);
echo '[';
$coma = '';
foreach ($json['documents'] as $key => $values){
    echo $coma;
    $coma = ',';
    echo '["';
    echo $values['id'];
    echo '", "';
    echo $values['value'];
    echo '"]';
}
echo ']';

  
} catch (Exception $e) {
  echo $e->getMessage();
  // var_dump($e->errors());
}

 ?>
                }
},
                { 
              timestampInSeconds: true,
              id:"misc",
              preloaded: { 
                "dataLimitFrom":1428437849,
                "unit":"m",
                "data": 
<?php
try {

$config = array();
$config['username'] = 'user@mail.com';
$config['password'] = 'password';
$config['restLink'] = 'https://api.clusterpoint.com/ID/DB';
$config['cookie_jar'] = tempnam('/tmp', 'cookie');
$config['format'] = 'json';


// GET status
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// Optional - use cookies
curl_setopt($ch, CURLOPT_COOKIEFILE, $config['cookie_jar']);
curl_setopt($ch, CURLOPT_COOKIEJAR, $config['cookie_jar']);

// If use cookie autentification need for first time
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, $config['username'] . ':' . $config['password']);
curl_setopt($ch, CURLOPT_URL, $config['restLink'] . '.' . $config['format']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$result = curl_exec($ch);  
  
// retrieve multiple
$document = 
'{"query":"misc"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// Optional - use cookies
curl_setopt($ch, CURLOPT_COOKIEFILE, $config['cookie_jar']);
curl_setopt($ch, CURLOPT_COOKIEJAR, $config['cookie_jar']);

// If use cookie autentification need for first time
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, $config['username'] . ':' . $config['password']);
curl_setopt($ch, CURLOPT_URL, $config['restLink'] . '/_search/*/2000/0.' . $config['format']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $document);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$result = curl_exec($ch);
  
  //echo $result;

$json = $result;
$json = json_decode($json, true);
echo '[';
$coma = '';
foreach ($json['documents'] as $key => $values){
    echo $coma;
    $coma = ',';
    echo '["';
    echo $values['id'];
    echo '", "';
    try {
      if (strlen(trim($values['value']))<8) {
      //if (trim($values['value']) == "Hello Pi") {
        echo trim($values['value']);
      } else {
        echo rand(110, 140);
      }
    } catch (Exception $e) {
      echo rand(80, 90);
    }
    echo '"]';
}
echo ']';

  
} catch (Exception $e) {
  echo $e->getMessage();
  // var_dump($e->errors());
}

 ?>
                }
}
                ],
                valueAxis:{
            "temp":{
                side:"right"
            }
        },
        series:[
          {
            name:"inside",
                valueAxis:"temp",
                type:"line",
                data:{index:1,aggregation:"avg",source: "inside"},
                style:{lineColor:"orange",smoothing:true}
          },
            {
              name:"outside",
                type:"line",
                valueAxis:"temp",
                data:{ index:1, source: "outside", aggregation:"avg"},
                style:{lineColor:"green",smoothing:true}
            },
          {
            name:"hotstream",
                valueAxis:"temp",
                type:"line",
                data:{index:1,aggregation:"avg",source: "hotstream"},
                style:{lineColor:"red",smoothing:true}
          },
          {
            name:"coldstream",
                valueAxis:"temp",
                type:"line",
                data:{index:1,aggregation:"avg",source: "coldstream"},
                style:{lineColor:"blue",smoothing:true}
          },
          {
            name:"korsten",
                valueAxis:"temp",
                type:"line",
                data:{index:1,aggregation:"avg",source: "misc"},
                style:{lineColor:"black",smoothing:true}
          }
        ]    

        });
    </script>
