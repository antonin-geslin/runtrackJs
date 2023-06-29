window.addEventListener('scroll', function() {
    var html = document.documentElement;
    var footer = document.querySelector("footer");
    var height = html.scrollHeight - html.clientHeight;
    var color = Math.round((html.scrollTop / height) * 255);
    var colorDef = 19;
    var colorDef2 = 255;
    footer.style.backgroundColor = "rgb("+colorDef+","+colorDef2+","+color+")";
  });
