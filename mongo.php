<?php
				$mongo = new MongoClient(getenv('MONGOHQ_URL'));
				$doc = $mongo->database->feedCollection;
				$feed = $doc->findOne(array('name' => 'tkj'));
				print_r($feed);
?>