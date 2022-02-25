reg.addEventListener('click', () => {
    if (divR.style.display == 'block') {
        divR.style.display = 'none';
    } else {
        divR.style.display = 'block';
    }

    if (divL.style.display == 'block') {
        divL.style.display = 'none';
    }

});


log.addEventListener('click', () => {
    if (divL.style.display == 'block') {
        divL.style.display = 'none';
    } else {
        divL.style.display = 'block';
    }

    if (divR.style.display == 'block') {
        divR.style.display = 'none';
    }

});

perfil.addEventListener("click", function() {
    if (divPerf.style.display == "none") {

        divL.style.display = "block";

    } else if (divPerf.style.display == "block") {

        divL.style.display = "none";

    }
});