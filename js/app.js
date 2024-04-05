let navbar = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick =() =>{
    navbar.classList.toggle('active');
}

window.onscroll =() => {
    navbar.classList.remove('active');
}

document.querySelectorAll('input[type="number]').forEach(inputnumber => {
    inputnumber.oninput =() => {
        if (inputnumber.Value.length > inputnumber.maxlength) inputnumber.value 
        = inputnumber.vlaue.slice(0, inputnumber.maxlength);
    };
});