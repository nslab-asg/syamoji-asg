<?php
				// db connection
				$mongo = new MongoClient(getenv('MONGOHQ_URL'));
				// select collection
				$doc = $mongo->app28134254->feedCollection;

				// query string
				$a = array('name' => 'tkj');
				// insert
				$doc->insert($a);

				// find
				$feed = $doc->findOne(array('name' => 'tkj'));

				// log
				print_r($feed);
?>