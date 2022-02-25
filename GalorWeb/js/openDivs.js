reg.addEventListener('click', () => {
    if (divR.style.display == 'block') {
        divR.style.display = 'none';
        capaOscura.style.display = "none";
        html.style.overflow = "visible";
    } else {
        divR.style.display = 'block';
        capaOscura.style.display = "block";
        html.style.overflow = "hidden";
    }

    if (divL.style.display == 'block') {
        divL.style.display = 'none';
    }

});

log.addEventListener('click', () => {
    if (divL.style.display == 'block') {
        divL.style.display = 'none';
        capaOscura.style.display = "none";
        html.style.overflow = "visible";
    } else {
        divL.style.display = 'block';
        capaOscura.style.display = "block";
        html.style.overflow = "hidden";
    }

    if (divR.style.display == 'block') {
        divR.style.display = 'none';
    }



});