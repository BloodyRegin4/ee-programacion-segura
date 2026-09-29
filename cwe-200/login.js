let form = document.querySelector('form');
let email = document.querySelector('#email');
let msg = document.querySelector('.text-danger');
let submit = document.querySelector('#submit');

form.addEventListener('submit', (e) => {
    e.preventDefault();
    msg.classList.add('d-none');

    if (!email.value.endsWith('@uv.mx')) {
        msg.textContent = 'No es un correo válido institucional.';
        msg.classList.remove('d-none');
        return;
    }

    [email, submit].forEach(elemento =>
        elemento.setAttribute('disabled', '')
    );

    fetch('https://correocode.azurewebsites.net/correo', {
        method: 'POST',
        body: JSON.stringify({ correo: email.value }),
        headers: {
            'Content-type': 'application/json; charset=UTF-8'
        }
    })
    .then(respuesta => {
        if (!respuesta.ok) {
            throw new Error('Respuesta HTTP ' + respuesta.status);
        }
        document.location = 'codigo.php';
    })
    .catch(error => {
        msg.textContent = 'No se pudo solicitar el correo: ' + error.message;
        msg.classList.remove('d-none');
    })
    .finally(() => {
        [email, submit].forEach(elemento =>
            elemento.removeAttribute('disabled')
        );
    });
});
