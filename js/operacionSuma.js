class Suma {
    constructor(n1, n2) {
        this.n1 = n1;
        this.n2 = n2;
    }

    sumaN() {
        return this.n1 + this.n2;
    }
}

function sumarNumeros() {
    var n1 = parseInt(document.getElementById("n1").value);
    var n2 = parseInt(document.getElementById("n2").value);
    var obj = new Suma(n1, n2);
    document.getElementById("resp").innerHTML = "La suma de " + n1 + " + " + n2 + " es: " + obj.sumaN();
}