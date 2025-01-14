require('dotenv').config()

var mysql = require('mysql2');
var migration = require('mysql-migrations');

var connection = mysql.createPool({
  connectionLimit : 10,
  host     : process.env.host,
  user     : process.env.user,
  password : process.env.password,
  database : 'campestr_01'
});

migration.init(connection, __dirname + '/migrations' , function () {
    console.log("finished running migrations. All ok AB.");
  });