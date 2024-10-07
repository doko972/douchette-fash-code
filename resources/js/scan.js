function checkBarcodeLength() {
    var input = document.getElementById("code-barre").value;
    if (input.length >= 12) {
        document.getElementById("scan-form").submit();
    }
}