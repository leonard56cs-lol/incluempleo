document.addEventListener('DOMContentLoaded', () => {
    const btnContrast = document.getElementById('btn-contrast');
    const btnSpeak = document.getElementById('btn-speak');
    const body = document.body;


    if(localStorage.getItem('altoContraste') === 'true') {
        body.classList.add('high-contrast');
    }

    btnContrast.addEventListener('click', () => {
        body.classList.toggle('high-contrast');

        if (body.classList.contains('high-contrast')) {
            localStorage.setItem('altoContraste', 'true');
            btnContrast.textContent = '🌓 Modo Normal';
        } else {
            localStorage.setItem('altoContraste', 'false');
            btnContrast.textContent = '🌗 Alto Contraste';
        }
    });

    let lectorActivo = false;

    function leerTexto(texto) {
        if ('speechSynthesis' in window){
            window.speechSynthesis.cancel();

            const utterance = new SpeechSynthesisUtterance(texto);
            utterance.lang = 'es-ES';
            utterance.rate = 1;
            window.speechSynthesis.speak(utterance);
        } else {
            alert("Tu navegador no soporta la función de lectura de texto.");
        }
    }

    btnSpeak.addEventListener('click', () => {
        lectorActivo = !lectorActivo;

        if(lectorActivo) {
            btnSpeak.textContent = '🔇 Detener Lector';
            btnSpeak.style.backgroundColor = '#d32f2f';
            btnSpeak.style.color = 'white';
        } else {
            btnSpeak.textContent = '🔇 Leer Texto';
            btnSpeak.style.backgroundColor = '';
            btnSpeak.style.color = '';
            window.speechSynthesis.cancel();
        }
    });

    document.addEventListener('mouseup', () => {
        if (!lectorActivo) return;

        const textoSeleccionado = window.getSelection().toString().trim();

        if (textoSeleccionado.length > 0){
            leerTexto(textoSeleccionado);
        }
    });

    document.addEventListener('keyup', (e) => {
        if (!lectorActivo) return;

        if (e.key === 'Shift' || e.key === 'ArrowRight' || e.key === 'ArrowLeft')
        {
            const textoSeleccionado = window.getSelection().toString().trim();
            if (textoSeleccionado.length > 0) {
                clearTimeout(window.lecturaTimeout);
                window.lecturaTimeout = setTimeout(() => {
                    leerTexto(textoSeleccionado);
                }, 500);
            }
        }            
    });
});