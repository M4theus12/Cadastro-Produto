<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

  <form action="" method="post">

    <div class="cadatros" style = "margin: 2%">

      <h1>Cadrastro de produtos</h1>

    </div>

    <div class= "produto" style = "padding: 5%; margin-left: 15%; margin-right: 15%; border: solid lightblue 3px;" >
      <div class="textfild">
        <label for="codigo do produto">Codigo do produto</label>
        <input class="form-control" style = "max-width: 45%" type="text" name="codigo">

      </div>
      <div class="textfild">
        <label for="descrcao">Descriçao</label>
        <input class="form-control" style = "max-width: 45%" type="text" name="codigo">

      </div>
      <div class="button">
        <button type="submit" class="btn btn-primary mb-2">Salvar</button>
      </div>
      <div class="shot">
        <div>
          <form class="dd">
            <div class="row">
              <div class="col">
                <label for="" style = "text-decoration: underline; padding: 3%">Codigo do produto</label>
              </div>
              <div class="col">
                <label for="" style = "text-decoration: underline; padding: 3%">Descriçao do Produto</label>
              </div>
            </div>
          </form>
        </div>
        <div>
          <form class="dd" >
            <div class="row">
              <div class="col-4">
                <label for="">00001</label>
              </div>
                <div class="col-6">
                  <label for="">Caneta</label>
                </div>
                <div class="col-2">
                  <button type="submit" class="btn btn-primary mb-2">excluir</button>
                </div>
              </div>
            </form>
          </div>
        <div>
          <form class="dd" >
            <div class="row">
              <div class="col-4">
                <label for="">00002</label>
              </div>
              <div class="col-6">
                <label for="">Lapis</label>
              </div>
                <div class="col-2">
                  <button type="submit" class="btn btn-primary mb-2">excluir</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </form>
</body>
</html>
