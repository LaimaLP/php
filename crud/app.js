const amountPlaceholder = document.querySelector('#amount');
const rangeInput = document.querySelector('[type="range"]');

if (rangeInput) {
  amountPlaceholder.innerText = rangeInput.value; //rodo pirmaji uzsikrovima
  rangeInput.addEventListener('input', e => { // fiksuoja pokyti ir ideda i value
    amountPlaceholder.innerText = e.target.value;
  });
}

const msg = document.querySelector('[data-removable]');

if (msg) {
  setTimeout(_ => {
    msg.remove();
  }, parseInt(msg.dataset.removeAfter) * 1000);
}