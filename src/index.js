const form = document.querySelector("form#application-form");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  // eslint-disable-next-line no-console
  console.log("form submit event", event);
});
