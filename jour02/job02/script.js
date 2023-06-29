function showhide() {
    var article = document.getElementById("article");
    var bouton = document.getElementById("button");
    
    if (article.style.display === "none") {
        article.style.display = "block";
        bouton.textContent = "Masquer la citation";
    } else {
        article.style.display = "none";
        bouton.textContent = "Afficher la citation";
    }
}