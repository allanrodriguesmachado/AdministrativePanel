const Request = (function ($) {
    'use strict';
    let fnSuccess,
        fnError;

    function onSuccess(response) {
        if (response.success && typeof fnSuccess === "function") {
            fnSuccess(response);
        } else {
            if (response.statusCode === '401') {
                if (response.message) {
                  alert(response.message);
                } else {
                    alert("Sua Sessão expirou. Favor relogar");
                }
            } else {
                alert(response.message);
            }
        }
    }

    function onError(request, status, error) {
        if (error === "timeout") {
            alert("A página não respondeu no tempo esperado. Favor tentar novamente!");
        } else {
            alert(request);
            if (typeof fnError === "function") {
                fnError(request, status, error);
            }
        }
    }

    return {
        ajax: function (route, data, success, datatype, error, method = 'POST') {
            fnSuccess = success;
            fnError = error;
            return $.ajax({
                url: route,
                data: data,
                type: method,
                cache: false,
                success: onSuccess,
                datatype: 'json',
                error: onError,
                timeout: 60000,
                statusCode: {
                    404: function () {
                        alert("A página informada não foi encontrada!");
                    },
                    500: function () {
                        alert("Houve um erro interno. Favor tentar novamente!");
                    }
                }
            });
        },
    };
})(jQuery);
