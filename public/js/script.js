function changeColor(button) {
    // Menghapus kelas 'clicked' dari semua tombol
    var buttons = document.querySelectorAll('.outline-btn');
    buttons.forEach(function (btn) {
    btn.classList.remove('clicked');
});

    // Menambahkan kelas 'clicked' ke tombol yang diklik
    button.classList.add('clicked');
}
