function amziausTikrinimas (age){
  if(isNaN(age)){
    document.write("Prasau iveskite skaiciu");
  }
  if(age < 18){
    document.write("Jus negalite pateikti i svetaine");
  }
  else if (age >= 18){
    document.write("Sveiki prisijunge prie svetaines");
  }
}
