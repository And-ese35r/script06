//------------------------------------------------------------------------------------------
const buttonPuost = document.querySelector('.button-post');
const borderbackground = document.querySelector('.info-conteiner');
const borderInfo = document.querySelector('.info-profil');

let count = true;

buttonPuost.addEventListener('click', () => {
    borderbackground.classList.remove('slide-in-first', 'slide-out-first');
    borderInfo.classList.remove('slide-in-second', 'slide-out-second');
    
    if (count === true) {
        borderbackground.classList.add('slide-in-first');
        borderInfo.classList.add('slide-in-second');
    } else {

        borderbackground.classList.add('slide-out-first');
        borderInfo.classList.add('slide-out-second');
    }
    
    count = !count;
});
//------------------------------------------------------------------------------------------