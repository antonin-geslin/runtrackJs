function sommenombrespremiers(nombre1, nombre2) {
    if (estNombrePremier(nombre1) && estNombrePremier(nombre2)) {
      return nombre1 + nombre2;
    } else {
      return false;
    }
  }
  
  function estNombrePremier(nombre) {
    if (nombre <= 1) {
      return false;
    }
  
    for (var i = 2; i <= Math.sqrt(nombre); i++) {
      if (nombre % i === 0) {
        return false;
      }
    }
  
    return true;
  }


console.log(sommenombrespremiers(2, 3));  // 5 (2 et 3 sont premiers, leur somme est 5)
console.log(sommenombrespremiers(5, 7));  // 12 (5 et 7 sont premiers, leur somme est 12)
console.log(sommenombrespremiers(4, 6));  // false (4 n'est pas premier)
console.log(sommenombrespremiers(9, 10)); // false (9 n'est pas premier)