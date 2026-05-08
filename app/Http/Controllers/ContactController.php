<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Se o assunto não for enviado, define um padrão
        if (empty($validated['subject'])) {
            $validated['subject'] = 'Contato via Portfolio';
        }

        // Salvar o contato no banco de dados
        Contact::create($validated);

        // Aqui você pode adicionar a lógica para enviar o email
        // Por enquanto, vamos apenas redirecionar com uma mensagem de sucesso
        return redirect()->back()->with('success', 'Mensagem enviada com sucesso! Entrarei em contato em breve.');
    }
} 