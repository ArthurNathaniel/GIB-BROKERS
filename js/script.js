window.addEventListener('scroll', () => {
    document.querySelector('nav')
    .classList.toggle('window-scroll', window.scrollY > 0)
});

const selectElement = (element) => document.querySelector(element);

selectElement('.menu-icons').addEventListener('click', () => {
    selectElement('nav').classList.toggle('active');
    selectElement('.menu-icons').classList.toggle('color-change');
    selectElement('body').classList.toggle('hidden');
});


const drop = document.querySelectorAll('.doc-box');


drop.forEach(element => {
    element.addEventListener('click', () => {
        element.classList.toggle('open');

        const icon_1 = element.querySelector('.control');

        if (icon_1.classList.contains('uil-plus')) {
            icon_1.classList.replace('uil-plus', 'uil-minus');
        } else {
            icon_1.classList.replace('uil-minus', 'uil-plus');
        }
    })
});