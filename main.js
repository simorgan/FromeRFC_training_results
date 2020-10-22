const selected = document.querySelector('.selected');

const optionsContainer = document.querySelector('.options-container');

const optionsList = document.querySelectorAll('.option');

selected.addEventListener('click', () => {
  optionsContainer.classList.toggle('active');
});

optionsList.forEach((o) => {
  o.addEventListener('click', () => {
    selected.innerHTML = o.querySelector('label').innerHTML;
    optionsContainer.classList.remove('active');
  });
});

const results1 = document.getElementById('results-1');

const challenge1 = document.getElementById('challenge-1');


challenge1.addEventListener('click', () => {
  results1.classList.add('table-active');
  results2.classList.remove('table-active');
  results3.classList.remove('table-active');
  results4.classList.remove('table-active');
  results5.classList.remove('table-active');
  results6.classList.remove('table-active');
});

const results2 = document.getElementById('results-2');
const challenge2 = document.getElementById('challenge-2');

challenge2.addEventListener('click', () => {
  results2.classList.add('table-active');
  results1.classList.remove('table-active');
  results3.classList.remove('table-active');
  results4.classList.remove('table-active');
  results5.classList.remove('table-active');
  results6.classList.remove('table-active');
});

const results3 = document.getElementById('results-3');
const challenge3 = document.getElementById('challenge-3');

challenge3.addEventListener('click', () => {
  results3.classList.add('table-active');
  results1.classList.remove('table-active');
  results2.classList.remove('table-active');
  results4.classList.remove('table-active');
  results5.classList.remove('table-active');
  results6.classList.remove('table-active');
});

const results4 = document.getElementById('results-4');
const challenge4 = document.getElementById('challenge-4');

challenge4.addEventListener('click', () => {
  results4.classList.add('table-active');
  results1.classList.remove('table-active');
  results2.classList.remove('table-active');
  results3.classList.remove('table-active');
  results5.classList.remove('table-active');
  results6.classList.remove('table-active');
});

const results5 = document.getElementById('results-5');
const challenge5 = document.getElementById('challenge-5');

challenge5.addEventListener('click', () => {
  results5.classList.add('table-active');
  results1.classList.remove('table-active');
  results2.classList.remove('table-active');
  results3.classList.remove('table-active');
  results4.classList.remove('table-active');
  results6.classList.remove('table-active');
});

const results6 = document.getElementById('results-6');
const challenge6 = document.getElementById('challenge-6');

challenge6.addEventListener('click', () => {
  results6.classList.add('table-active');
  results1.classList.remove('table-active');
  results2.classList.remove('table-active');
  results3.classList.remove('table-active');
  results4.classList.remove('table-active');
  results5.classList.remove('table-active');
});
