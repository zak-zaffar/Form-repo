const form = document.querySelector('form#application-form');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    console.log('form submit event', event);
});