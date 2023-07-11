$(document).ready(function() {
    $('.registrationForm').on("submit",function(event) {
        event.preventDefault();
        var prenom = $('#prenom').val();
        var nom = $('#nom').val();
        var login = $('#login').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var password2 = $('#password2').val();
        
        $.ajax({
            type: 'POST',
            url: 'formRegister.php',
            data: {
                prenom: prenom,
                nom: nom,
                login: login,
                email: email,
                password: password,
                password2: password2
            },
            success: function(data) {
                if(data == 'success') {
                    window.location.href = 'connexion.php';
                } else {
                     $('#error').html(data);
                }
            }
        });
    });
});




$(document).ready(function() {
    $('.connexionForm').on("submit",function(event) {
        event.preventDefault();
        var login = $('#login').val();
        var password = $('#password').val();   
        console.log(login);  
        $.ajax({
            type: 'POST',
            url: 'formConnexion.php',
            data: {
                login: login,
                password: password
            },
            success: function(data) {
                if(data == 'success') {
                    $('#signout').show();
                    window.location.href = 'index.php';
                } else {
                   $('#error').html(data);
                }
            }
        });
    });
});



$(document).ready(function() {
        $.ajax({
            url: 'session.json',
            dataType: 'json',
            cache: false, 
            success: function(data) {
                console.log(data);
                $('#session').text('Bonjour '+data+' ! ');
            }
        });
});


function signout() {
    $('#signout').hide();
    $('#session').text('');
    $.ajax({
        url: 'empty_json.php',
        type: 'POST',
        success: function(data){
            if(data == 'success') {
                window.location.href = 'index.php';
            }    
        }

    });
}