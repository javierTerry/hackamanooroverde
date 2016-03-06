@extends('app')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-offset-3 col-md-6">
        <br>
        <form role="form">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar Productor o Vegetal">
              <span class="input-group-btn">
                <a class="btn btn-success" type="submit">Buscar</a>
              </span>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            {!! Html::image('img/Zanahoria.jpg', 'Zanahoria'
                  , array('class' => 'img-circle'
                  ,'width' => 64 , 'height' => 64)) 
                  !!}
            <br>
            <p align="center">
              <a class="btn btn-primary" href="searchresult.html">Zanahorias</a>
            </p>
          </div>
          <div class="col-md-4">
            {!! Html::image('img/Aguacate.jpg', 'Aguacate'
                  , array('class' => 'img-circle'
                  ,'width' => 64 , 'height' => 64)) 
                  !!}
            <br>
            <p align="center">
              <a class="btn btn-primary" href="searchresult.html">Aguacate</a>
            </p>
          </div>
          <div class="col-md-4">
            {!! Html::image('img/Cebolla.jpg', 'Cebolla'
                  , array('class' => 'img-circle'
                  ,'width' => 64 , 'height' => 64)) 
                  !!}
            <br>
            <p align="center">
              <a class="btn btn-primary" href="searchresult.html">Cebolla</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            {!! Html::image('img/Maiz.jpg', 'Maiz'
                  , array('class' => 'img-circle'
                  ,'width' => 64 , 'height' => 64)) 
                  !!}
            <br>
            <p align="center">
              <a class="btn btn-primary" href="searchresult.html">Maíz
              </a>
            </p>
          </div>
          <div class="col-md-4">
            {!! Html::image('img/Papa.jpg', 'Aguacate'
                  , array('class' => 'img-circle'
                  ,'width' => 64 , 'height' => 64)) 
                  !!}
            <br>
            <p align="center">
              <a class="btn btn-primary" href="searchresult.html">Papas</a>
            </p>
          </div>
          <div class="col-md-4">
            {!! Html::image('img/Tomate.jpg', 'Tomates'
                  , array('class' => 'img-circle'
                  ,'width' => 64 , 'height' => 64)) 
                  !!}
            <br>
            <p align="center">
              <a class="btn btn-primary" href="searchresult.html">Tomates</a>
            </p>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection