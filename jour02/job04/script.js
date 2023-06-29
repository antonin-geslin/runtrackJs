var textarea = document.getElementById("keylogger");

document.addEventListener("keydown", function(event) {
    var key = event.key;
    
    if (/[a-z]/i.test(key)) {
        if (document.activeElement === textarea) {
            textarea.value += key;
        } else {
            textarea.value += key;
        }
    }
});