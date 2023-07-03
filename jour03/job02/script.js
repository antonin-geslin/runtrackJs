document.addEventListener("DOMContentLoaded", function() {

    function initializeDraggable() {
        $(".container img").draggable({
          revert: 'invalid',
          containment: 'document',
          helper: 'clone'
        });
    }
    $(document).ready(function() {
        var counter = 0;
        var row = 0;
        $('#button').on("click", function () {
            var container = $('.container');
            var img = container.children();
            
        
            img.sort(function() {
                return Math.random() - 0.5;
            });
        
        
            container.empty();
    
            img.each(function() {
                container.append($(this));
            });
            initializeDraggable(); 
        });
    
        initializeDraggable();
    
        $(".container_response div").droppable({
            accept: ".container img",
            drop: function(event, ui) {
                var droppedImage = ui.draggable;
                var targetDiv = $(this);
                var imageId = droppedImage.attr("class").split(' ')[0];
                var divId = targetDiv.attr("id");
                console.log(imageId);
                console.log(divId);
                if (imageId === divId) {
                    counter ++;
                } else {
    
                }
                droppedImage.appendTo(targetDiv);
                row ++;
    
                console.log(row);
                console.log(counter); 
                if (counter == row && row == 6) {  
                    $(".win_lose").text('Vous avez gagné');
                    $(".win_lose").addClass("green-text");
                } else if (counter != row && row != 0) {
                    $(".win_lose").text('Vous avez perdu');
                    $(".win_lose").addClass("red-text");
                }
            }
        });
    });
});