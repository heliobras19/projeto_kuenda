<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicacaoController extends Controller
{
     public function store(Request $request)
    {
        // Validação dos dados recebidos
        $validatedData = $request->validate([
            'concurso_id' => 'required|integer',
            'descricao' => 'required|string',
            'tipo_edital' => 'required|string',
            'situacao' => 'required|boolean',
            'codigo_ato' => 'required|string',
            'path' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png', // Aceitando apenas arquivos válidos
            'tipo_publicacao' => 'required|string',
            'data_visualizacao' => 'required|date',
            'hora_visualizacao' => 'required|date_format:H:i',
            'data_publicacao' => 'required|date',
            'visivel_ate' => 'required|date',
        ]);

        // Manipulação do upload do arquivo
        if ($request->hasFile('path')) {
            $filePath = $request->file('path')->store('public'); // Armazenando o arquivo na pasta 'publicacoes'
            $validatedData['path'] = $filePath; // Atualiza o path no array de dados validados
        }

        // Criação da nova publicação
        Publicacao::create($validatedData);

        // Redirecionamento de volta à tela de origem com mensagem de sucesso
        return redirect()->back()->with('success', 'Publicação adicionada com sucesso!');
    }

    public function destroy($id)
    {
        // Localizar a publicação pelo ID
        $publicacao = Publicacao::findOrFail($id);

        // Remover o arquivo associado ao publicacao se existir
        if ($publicacao->path) {
            Storage::delete($publicacao->path);
        }

        // Excluir a publicação
        $publicacao->delete();

        // Redirecionamento de volta à tela de origem com mensagem de sucesso
        return redirect()->back()->with('success', 'Publicação excluída com sucesso!');
    }
}
