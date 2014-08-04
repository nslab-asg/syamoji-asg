desc "This task is called by the Heroku scheduler add-on"
task :update_feed => :environment do
  require 'open-uri'
  open('http://heroku-feeder.herokuapp.com')
  puts "Accessing"

end
