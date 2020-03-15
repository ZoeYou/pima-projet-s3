// Fichier à exécuter à l'aide de NODE js pour générer une liste de films sous format .JSON

var n=200; // Number of films.
var generatedId;
var serie=400; // The sequence of films to generate, you have to modify the name of the JSON file accordingly
increment = 628
function incrementId(){
	increment ++;
	var generatedId = increment.toString();
	while (generatedId.length < 7){
		generatedId = "0" + generatedId;
	}
	console.log(generatedId);
	return generatedId;
}

var filmListJson = {};
//var filmListJson = [];
var fs = require('fs');
const https = require('https');

(function loop(i, maxNb) {
    if (i >= maxNb) {
		var json = JSON.stringify(filmListJson);
		fs.writeFile('C:/Users/Clément/Downloads/Ecole/Ingénieur/PIMA/films401-600.json', json, 'utf8', function (err) {
			if (err)
				return console.log("Erreur d'écriture." + err.message);
		});
        return;
    }
	generatedId = incrementId();
    var url = "https://omdbapi.com/?apikey=bdf8212f&i=tt"+generatedId;

	https.get(url, (resp) => {
		resp.setEncoding('utf8');
		let rawData = '';
		/* A chunk of response have been received. If the response is too large, it will be cut in multiple
		   chunks so it's important to add all of these chunks in rawData before parsing.	
		*/
		resp.on('data', (chunk) => {rawData += chunk;});
		
		resp.on('end', () => {
			const data = JSON.parse(rawData);
			
			if (data.Response=="True" && data.Type =="movie" && data.Actors!="N/A" && !data.Genre.includes("Adult")){
				//console.log(data.Title + " iteration : " + i);
				var filmNb = "Film"+(i+1+serie);
				filmListJson[filmNb] = {};
				filmListJson[filmNb]["id"]=data.imdbID;
				filmListJson[filmNb]["title"]=data.Title;
				filmListJson[filmNb]["year"]=data.Year;
				filmListJson[filmNb]["actors"]=data.Actors;
				filmListJson[filmNb]["rating"]=data.imdbRating;
				//filmListJson.push({Film : {Id:data.imdbID,Title:data.Title,Actors:data.Actors}});
				console.log(filmListJson[filmNb]);
				i = i + 1;
			}
			loop(i,maxNb)
		});
	}).on("error", (err) => {
		console.log("Erreur d'exécution de la requête." + err.message)
	});
})(0, n);