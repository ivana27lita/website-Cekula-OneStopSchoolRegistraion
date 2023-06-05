const selectBox = document.querySelector('.select-box');
const selectOption = document.querySelector('.select-option');
const soValue = document.querySelector('#soValue');
const optionSearch = document.querySelector('#optionSearch');
const options = document.querySelector('.options');
const optionList = document.querySelectorAll('.options li');

selectOption.addEventListener('click',function(){
    selectBox.classList.toggle('active');
})
