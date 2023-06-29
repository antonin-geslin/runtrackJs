function konamiCode(callback) {
    var konamiKeys = [
      "ArrowUp", "ArrowUp",
      "ArrowDown", "ArrowDown",
      "ArrowLeft", "ArrowRight",
      "ArrowLeft", "ArrowRight",
      "KeyB", "KeyQ"
    ];
  
    var currentKeys = [];
  
    document.addEventListener("keydown", function(event) {
        console.log(event.code);
        currentKeys.push(event.code);
  
      if (currentKeys.length > konamiKeys.length) {
        currentKeys.shift();
      }
  
      if (currentKeys.toString() === konamiKeys.toString()) {
        callback();
      }
    });
  }

document.addEventListener("DOMContentLoaded", function() {
    konamiCode(function() {
        var body = document.getElementById("body");
        body.classList.add("konami");
    });
});
