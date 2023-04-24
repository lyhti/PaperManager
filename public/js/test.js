var test = './record_25-8kv_tables';
var fs = require('fs');

fs.readdir(test, (err, filelist) => {
    if(err){
        console.log(err);
    }else{
        console.log(filelist);
    }
})