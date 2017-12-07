
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
	'use strict';

	window.addEventListener('load', function() {
		var form = document.getElementById('needs-validation');
		form.addEventListener('submit', function(event) {
			if (form.checkValidity() === false) {
				event.preventDefault();
				event.stopPropagation();
			}
			form.classList.add('was-validated');
		}, false);
	}, false);
})();


    $(document).ready(function () {
        $('.addel').addel({
            events: {
                added: function (event) {
                    console.log('Added ' + event.added.length);
                }
            }
        }).on('addel:delete', function (event) {
            if (!window.confirm('Conferma di voler eliminare la selezione ' + '"' + event.target.find(':input').val() + '"?')) {
                console.log('Deletion prevented!');
                event.preventDefault();
            }
        });
    });
