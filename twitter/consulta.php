<?php

require_once 'src/configuration.php';
require_once 'src/twitter.class.php';

// ENTER HERE YOUR CREDENTIALS (see readme.txt)
$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

  //Array
//(
//    [code] => 200
//    [protected] => 0
//    [tweet_id] => 433469700228411392
//    [created_at] => Wed Feb 12 05:16:44 +0000 2014
//    [tweet_text] => Love both these people. Go see @KevinHart4real's movies. Thanks guys.  http://t.co/5tkATy6Urg
//)

$results = $twitter->search($user);
// or use hashmap: $results = $twitter->search(array('q' => '#nette', 'geocode' => '50.088224,15.975611,20km'));

?>

