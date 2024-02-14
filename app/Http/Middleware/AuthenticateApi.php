<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User; // Assurez-vous d'importer le modèle User s'il n'est pas déjà importé
use Laravel\Sanctum\PersonalAccessToken as Token;

class AuthenticateApi
{
    public function handle(Request $request, Closure $next)
    {
            // Récupérer le token de la requête
            $token = $request->header('Authorization');
            
            // Vérifier si le token existe
            if ($token) {
                
                // Recherchez le token dans la table personal_access_tokens
                $accessToken = Token::findToken($token);
    
                // Vérifier si le token existe et s'il est valide
                if ($accessToken) {
                // L'utilisateur est authentifié, continuez la requête normalement
                return $next($request);
            }
        }

        // Le token est invalide ou n'existe pas, renvoyer une réponse d'erreur
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}