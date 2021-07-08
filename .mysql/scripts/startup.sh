#!/bin/bash
echo 'hello'
mysql --host=localhost -uuser -ppass code-test < /var/www/database.sql
mysql --host=localhost -uuser -ppass <<< "use code-test; update wp_options set option_value ='http://localhost:8000' where option_name = 'home';"
mysql --host=localhost -uuser -ppass <<< "use code-test; update wp_options set option_value ='http://localhost:8000' where option_name = 'siteurl';"

