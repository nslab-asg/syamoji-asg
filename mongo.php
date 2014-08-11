<?php
				// first, run below command
				// heroku config:set MONGOHQ_URL=...

				// db connection
				$mongo = new MongoClient(getenv('MONGOHQ_URL'));
				// select collection
				$doc = $mongo->app28134254->feedCollection;

				// query string
				$a = array('name' => 'search name');
				// insert
				$doc->insert($a);

				// find
				$feed = $doc->findOne(array('name' => 'search name'));

				// log
				print_r($feed);
?>