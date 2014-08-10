<?php
				$mongo = new MongoClient(getenv('MONGOHQ_URL'));
				$doc = $mongo->app28134254->feedCollection;
				$feed = $doc->findOne(array('name' => 'tkj'));
				print_r($feed);
?>