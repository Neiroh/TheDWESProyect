var page = 1;


document.getElementById('inputBusqueda').addEventListener('keyup', function(k){
    if (k.key == 'Enter') {
        document.getElementById('enviaBusqueda').click();
        console.log(12);
    }
});
