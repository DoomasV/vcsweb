var objektas1 = {"id":1,"item":"Atsuktuvas","date":"2018","color":"geltona","price": "5"};
var objektas2 = {"id":2,"item":"Raktas","date":"2018","color":"pilka","price": "2"};
var objektuMasyvas = [objektas1,objektas2];
var oLength = objektuMasyvas.length;
function objektai() {
  for (var i = 0; i < oLength; i++) {
    objektuSavybes(objektuMasyvas[i]);
  }
}

function objektuSavybes(objektas) {
  console.log("#" + objektas.id);
  console.log("Preke " + objektas.item);
  console.log("Pagaminimo data " + objektas.date);
  console.log("Spalva " + objektas.color);
  console.log("Kaina " + objektas.price);
}
