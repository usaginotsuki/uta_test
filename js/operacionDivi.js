class Division {
    constructor(n1, n2) {
        this.n1 = n1;
        this.n2 = n2;
    }

    diviN() {
        return this.n1 / this.n2;
    }
}

function diviNumeros() {
    var n1 = parseInt(document.getElementById("n1").value);
    var n2 = parseInt(document.getElementById("n2").value);
    if (n2 != 0) {
        var obj = new Division(n1, n2);
        document.getElementById("resp").innerHTML = "La división de " + n1 + " ÷ " + n2 + " es: " + obj.diviN();
    } else {
        document.getElementById("resp").innerText = "Indefinido";
    }
}