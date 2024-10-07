<h1>Résultat du scan</h1>
@if ($produit)
    <p>Produit trouvé : {{ $produit->nom }}</p>
    <p>Prix : {{ $produit->prix }}</p>
    <p>Référence : {{ $produit->reference }}</p>
@elseif ($erreur)
    <p>{{ $erreur }}</p>
@endif

