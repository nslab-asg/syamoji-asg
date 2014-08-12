<?php
				// db connection
				$mongo = new MongoClient(getenv('MONGOHQ_URL'));
				// select collection
				$doc = $mongo->app28134254->feedCollection;

                // find
$feed = $doc->find(array('deleteFlag' => false));


				// log
				print_r($feed);
?>