function ubahMode()
{
    const ubah = document.body;
    ubah.classList.toggle("dark");
}

const konfir = confirm('Aktifkan Notifikasi Untuk Menerima Update dari Toko Kami');
console.log(konfir);
if(konfir == true){
    console.log("Izinkan");
}else{
    console.log("Tolak");
}

const id = document.getElementById('quotes');
id.addEventListener('mouseenter', function(){
    quotes.style.color = 'pink';
});

id.addEventListener('mouseleave', function(){
    quotes.style.color = 'white';
});


