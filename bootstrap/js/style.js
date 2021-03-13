document.querySelector('.custom-select-wrapper').addEventListener('click', function() {
    this.querySelector('.custom-select').classList.toggle('open');
})
for (const option of document.querySelectorAll(".custom-option")) {
    option.addEventListener('click', function() {
        if (!this.classList.contains('selected')) {
            this.parentNode.querySelector('.custom-option.selected').classList.remove('selected');
            this.classList.add('selected');
            this.closest('.custom-select').querySelector('.custom-select__trigger span').textContent = this.textContent;
        }
    })
}
window.addEventListener('click', function(e) {
    const select = document.querySelector('.custom-select')
    if (!select.contains(e.target)) {
        select.classList.remove('open');
    }
});
//Função para mudar border-radius
if ($('.custom-select__trigger').click(function(){
    if (document.querySelector('.custom-select__trigger').classList.contains('custom-select___trigger')) {
        document.querySelector('.custom-select__trigger').classList.remove('custom-select___trigger');
    } else {
        document.querySelector('.custom-select__trigger').classList.add('custom-select___trigger');
    }
})) {}


