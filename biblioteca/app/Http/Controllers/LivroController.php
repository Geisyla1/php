<?php

namespace App\Http\Controllers;

use App\Models\Livros;
use Illuminate\Http\Request;

class LivroController extends Controller
{
     // mostra a view para cadastrar um novo livro
  public function create(){
    return view('livros.create');
  }
 
  // recebe as informações do formulário e as grava
  // no banco de dados
  public function store(Request $request){
    // valida o formulário
    $request->validate([
      'titulo' => 'required',
      'autor' => 'required',
      'paginas' => 'required']);
     
    // obtém os valores do form
    Livro::create($request->all());
      
    // direciona para página cadastro novamente,
    // com uma mensagem de sucesso
    return 'Location: livro.php';
  }
}
