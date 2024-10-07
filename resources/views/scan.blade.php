<form action="{{ route('scan.barcode') }}" method="POST">
    @csrf
    <input type="text" id="code-barre" name="code-barre" placeholder="Scannez le code-barres ici" autofocus>
    <input type="submit" value="Envoyer">
</form>
