function jourtravaille(date) {
    var annee = date.getFullYear();
    var mois = date.getMonth();
    var jour = date.getDate();
  
    var joursFeries = [
      new Date(annee, 0, 1),    
      new Date(annee, 3, 13),   
      new Date(annee, 4, 1),    
      new Date(annee, 4, 8),    
      new Date(annee, 4, 21),   
      new Date(annee, 5, 1),    
      new Date(annee, 6, 14),   
      new Date(annee, 7, 15),   
      new Date(annee, 10, 1),   
      new Date(annee, 10, 11),  
      new Date(annee, 11, 25)    
    ];
  
    if (estJourFerie(date, joursFeries)) {
      console.log("Le " + formatageDate(date) + " est un jour férié.");
    } else if (estWeekend(date)) {
      console.log("Non, le " + formatageDate(date) + " est un week-end.");
    } else {
      console.log("Oui, le " + formatageDate(date) + " est un jour travaillé.");
    }
  }
  
  function estJourFerie(date, joursFeries) {
    for (var i = 0; i < joursFeries.length; i++) {
      if (joursFeries[i].getDate() === date.getDate() && joursFeries[i].getMonth() === date.getMonth()) {
        return true;
      }
    }
    return false;
  }
  
  function estWeekend(date) {
    var jour = date.getDay();
    return jour === 0 || jour === 6;
  }
  
  function formatageDate(date) {
    var jour = date.getDate();
    var mois = date.getMonth() + 1;
    var annee = date.getFullYear();
  
    return jour + "/" + mois + "/" + annee;
  }



var date1 = new Date(2020, 0, 1);  
var date2 = new Date(2020, 11, 25);
var date3 = new Date(2020, 3, 26)

jourtravaille(date1);  
jourtravaille(date2);
jourtravaille(date3);