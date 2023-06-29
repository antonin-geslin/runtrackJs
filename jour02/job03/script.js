var counter = 0;
document.getElementById("button").addEventListener("click", function addone() {
    counter ++;
    var p = document.getElementById("compteur");
    p.textContent = counter;
});
