class Resta {
    constructor(n1, n2) {
        this.n1 = n1;
        this.n2 = n2;
    }

    restaN() {
        return this.n1 - this.n2;
    }
}

function restarNumeros() {
    var n1 = parseInt(document.getElementById("n1").value);
    var n2 = parseInt(document.getElementById("n2").value);
    var obj = new Resta(n1, n2);
    document.getElementById("resp").innerHTML = "La resta de " + n1 + " - " + n2 + " es: " + obj.restaN();
}