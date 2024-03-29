/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Tech 1
 * Version : 1.0
 * Date    : 26.02.2020
 * description: script dessinant le graphique
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

function CSVToArray(strData, strDelimiter) {
  // Check to see if the delimiter is defined. If not,
  // then default to comma.
  strDelimiter = strDelimiter || ",";

  // Create a regular expression to parse the CSV values.
  var objPattern = new RegExp(
    // Delimiters.
    "(\\" +
      strDelimiter +
      "|\\r?\\n|\\r|^)" +
      // Quoted fields.
      '(?:"([^"]*(?:""[^"]*)*)"|' +
      // Standard fields.
      '([^"\\' +
      strDelimiter +
      "\\r\\n]*))",
    "gi"
  );

  // Create an array to hold our data. Give the array
  // a default empty first row.
  var arrData = [[]];

  // Create an array to hold our individual pattern
  // matching groups.
  var arrMatches = null;

  // Keep looping over the regular expression matches
  // until we can no longer find a match.
  while ((arrMatches = objPattern.exec(strData))) {
    // Get the delimiter that was found.
    var strMatchedDelimiter = arrMatches[1];

    // Check to see if the given delimiter has a length
    // (is not the start of string) and if it matches
    // field delimiter. If id does not, then we know
    // that this delimiter is a row delimiter.
    if (strMatchedDelimiter.length && strMatchedDelimiter !== strDelimiter) {
      // Since we have reached a new row of data,
      // add an empty row to our data array.
      arrData.push([]);
    }

    var strMatchedValue;

    // Now that we have our delimiter out of the way,
    // let's check to see which kind of value we
    // captured (quoted or unquoted).
    if (arrMatches[2]) {
      // We found a quoted value. When we capture
      // this value, unescape any double quotes.
      strMatchedValue = arrMatches[2].replace(new RegExp('""', "g"), '"');
    } else {
      // We found a non-quoted value.
      strMatchedValue = arrMatches[3];
    }

    // Now that we have our value string, let's add
    // it to the data array.
    arrData[arrData.length - 1].push(strMatchedValue);
  }

  // Return the parsed data.
  return arrData;
}
//charge le ficher depuis le bon dossier
function loadFile(filePath) {
  var result = null;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", filePath, false);
  xmlhttp.send();
  if (xmlhttp.status == 200) {
    result = xmlhttp.responseText;
  }
  return result;
}

data = loadFile("file/done/" + folder + "/value.csv");
//verification si des donnees sont presente
if (data != null) {
  // Add data
  var chart = CSVToArray(data, ";");

  var counter = 1;
  var data1 = ["data"];
  var data2 = ["min"];
  var data3 = ["moy"];
  var data4 = ["max"];
  var temp_value;
  for (let index = 0; index < chart.length - 1; index++) {
    data1[counter] = parseFloat(chart[index][0].split(",").join("."));

    data2[counter] = parseFloat(chart[index][1].split(",").join("."));

    data3[counter] = parseFloat(chart[index][2].split(",").join("."));

    data4[counter] = parseFloat(chart[index][3].split(",").join("."));
    counter++;
  }

  // Create axes
  var chart2 = c3.generate({
    bindto: "#chart",
    data: {
      columns: [data2, data3, data4]
    }
  });
}
