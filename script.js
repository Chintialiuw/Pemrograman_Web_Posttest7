function ubahMode()
{
    const ubah = document.body;
    ubah.classList.toggle("dark");
}

const id = document.getElementById('quotes');
id.addEventListener('mouseenter', function(){
    quotes.style.color = 'pink';
});

id.addEventListener('mouseleave', function(){
    quotes.style.color = 'white';
});


