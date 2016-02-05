/**
 *
 */
var fs = require('fs');

console.log("Trying fs.accessSync('.html-minifier.conf', fs.R_OK);");
fs.accessSync('.html-minifier.conf', fs.R_OK);
