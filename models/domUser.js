var valor = localStorage.getItem('nome');

// Enviar dados para o PHP usando AJAX
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
    }
};
xmlhttp.open("GET", "seuarquivo.php?nome=" + valor, true);
xmlhttp.send();

