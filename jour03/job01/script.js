document.addEventListener("DOMContentLoaded", function() {
$('#button').on("click", function () {
    if ($('#citation').text().trim() === '') {
        $('#citation').text("La vie a beaucoup plus d’imagination que nous");
    } else {
        $('#citation').text('');
    }
});
});
