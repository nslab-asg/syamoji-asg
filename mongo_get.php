<?php
				// db connection
				$mongo = new MongoClient(getenv('MONGOHQ_URL'));
				// select collection
				$doc = $mongo->app28134254->feedCollection;

                // find
$feed = $doc->find(array('deleteFlag' => false))->sort(array('_id' => -1));

foreach ($feed as $id => $obj) {


				// log
				print_r($obj);
}
?>