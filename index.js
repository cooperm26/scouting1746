var mysql = require('mysql');
var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "root",
  database: "ottoscouting"
});
con.connect(function(err){
  if(err) throw err;
  console.log("connected!");
  var sql = "insert into matchdata(scout_id,team_id) VALUES ('0','1746')";
  con.query(sql,function(err, result){
    if (err) throw err;
    console.log("1 record inserted");
  });
});
