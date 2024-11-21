// facebookAuth.js

document.addEventListener('DOMContentLoaded', function() {
    window.fbAsyncInit = function() {
        FB.init({
            appId: '579116511453046', // Reemplaza con tu App ID de Facebook
            cookie: true,
            xfbml: true,
            version: 'v15.0'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }

    function statusChangeCallback(response) {
        if (response.status === 'connected') {
            handleFacebookUser(response);
        } else {
            console.log('No está autenticado.');
        }
    }

    function handleFacebookUser(response) {
        FB.api('/me', { fields: 'name,email,picture,gender,location,birthday' }, function(userInfo) {
            console.log('Bienvenido, ' + userInfo.name + '.');
            console.log('Email: ' + userInfo.email);
            console.log('Picture: ' + userInfo.picture.data.url);
            console.log('Gender: ' + userInfo.gender);
            console.log('Location: ' + userInfo.location.name);
            console.log('Birthday: ' + userInfo.birthday);

            // Enviar datos al backend usando AJAX
            fetch('/facebook-login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(userInfo)
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    window.location.href = '/dashboard'; // Redirige a la página deseada
                } else {
                    console.error('Error en la autenticación:', data.message);
                }
            })
            .catch(error => console.error('Error:', error));
        });
    }

    // Exponer las funciones necesarias globalmente
    window.checkLoginState = checkLoginState;
});

