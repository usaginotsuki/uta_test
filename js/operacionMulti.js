class Multi {
    constructor(n1, n2) {
        this.n1 = n1;
        this.n2 = n2;
    }

    multiN() {
        return this.n1 * this.n2;
    }
}

function multiNumeros() {
    var n1 = parseInt(document.getElementById("n1").value);
    var n2 = parseInt(document.getElementById("n2").value);
    var obj = new Multi(n1, n2);
    document.getElementById("resp").innerHTML = "La multiplicación de " + n1 + " x " + n2 + " es: " + obj.multiN();
}