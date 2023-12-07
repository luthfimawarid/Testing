function changeColor(button) {
    // Menghapus kelas 'clicked' dari semua tombol
    var buttons = document.querySelectorAll('.outline-btn');
    buttons.forEach(function (btn) {
    btn.classList.remove('clicked');
});

    // Menambahkan kelas 'clicked' ke tombol yang diklik
    button.classList.add('clicked');
}

const side = document.querySelector('.side');
document.querySelector('#personIcon').onclick = () => {
    side.classList.toggle('active')
}; 

const person = document.querySelector('#personIcon');

document.addEventListener('click', function(e){
    if(!person.contains(e.target) && !side.contains(e.target)){
        side.classList.remove('active');
    }
});


