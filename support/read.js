function showFile() {
    const fs = require('fs');
    fs.readFile('geojson.json', 'utf8', (err, data) => {
        if (err) {
            console.error(err);
            return;
        }
        console.log(data);

    });
}
showFile();