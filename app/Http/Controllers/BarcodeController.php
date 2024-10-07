<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class BarcodeController extends Controller
{
    public function scan(Request $request)
    {

        $codeBarre = $request->input('code-barre');
        
        $produit = Produit::where('code_barre', $codeBarre)->first();

        if ($produit) {
            return redirect()->route('scan.result')->with('produit', $produit);
        } else {
            return redirect()->route('scan.result')->with('erreur', 'Code-barres non trouvé.');
        }
    }

    public function scanResult()
    {
        // Récupérer les informations du produit ou l'erreur
        $produit = session('produit');
        $erreur = session('erreur');
        
        return view('scan-result', compact('produit', 'erreur'));
    }
}
