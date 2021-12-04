<html>
<head>
  <meta charset="utf-8">
  <title>Biblioteca</title>
</head>
<body>
<h1>Novo Livro</h1>
 
<form action="{{route('livros.store')}}" method="post">
<table width="200" border="0" cellspacing="3" 
  cellpadding="3">
  <tr>
    <td>Título:</td>
    <td><input type="text" name="titulo" id="titulo" 
      placeholder="Título"></td>
  </tr>
  <tr>
    <td>Autor:</td>
    <td><input type="text" name="autor" id="autor"
      placeholder="Autor"></td>
  </tr>
  <tr>
    <td>Páginas</td>
    <td><input type="text" size="10" name="paginas" 
      id="paginas" placeholder="Quant. Páginas"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><button type="submit">Gravar</button></td>
  </tr>
</table>
</form>
</body>
</html>