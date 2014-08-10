<?php
				$mongo = new MongoClient(getenv('MONGOHQ_URL'));
				$doc = $mongo->app28134254->feedCollection;

				$collection = $mongo->selectCollection('feedCollection');
				$a = array('name' => 'tkj');
				$collection->insert($a);

				$feed = $doc->findOne(array('name' => 'tkj'));
				print_r($feed);
?>