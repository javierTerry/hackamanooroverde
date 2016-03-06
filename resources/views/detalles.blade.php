@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <br>
      </div>
      <div class="row">
        <div class="col-md-offset-3 col-md-6">
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
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <hr>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-condensed table-hover table-striped">
              <thead>
                <tr>
                  <th>Foto Producto</th>
                  <th>Descripción</th>
                  <th>Calificación</th>
                  <th>Cantidad Disponible</th>
                  <th>Precio</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                  	{!! Html::image('img/aguacate1.jpeg', 'Aguacate'
                  	, array('class' => 'img-circle'
                  		,'width' => 64 , 'height' => 64)) 
                  	!!}</a></td>
                  </td>
                  <td>Aguacate Bacon
                    <br>Productor 1
                    <br>
                  </td>
                  <td>
                  	{!! Html::image('img/rating.png', 'rating'
                  	, array('class' => 'img-circle'
                  		,'width' => 25 , 'height' => 25)) 
                  	!!}
                  	
                  	{!! Html::image('img/rating.png', 'rating'
                  	, array('class' => 'img-circle'
                  		,'width' => 25 , 'height' => 25)) 
                  	!!}
                  	{!! Html::image('img/rating.png', 'rating'
                  	, array('class' => 'img-circle'
                  		,'width' => 25 , 'height' => 25)) 
                  	!!}
                    
                  </td>
                  <td>15 huacales</td>
                  <td>$30.00</td>
                </tr>
                <tr>
                  <td>
                    {!! Html::image('img/aguacate1.jpeg', 'Verdura'
                  	, array('class' => 'img-circle'
                  		,'width' => 64 , 'height' => 64)) 
                  	!!}
                  </td>
                  <td>Aguacate Bacon
                    <br>Productor 2</td>
                  <td>
                    {!! Html::image('img/rating.png', 'rating'
                  	, array('class' => 'img-circle'
                  		,'width' => 25 , 'height' => 25)) 
                  	!!}
                    {!! Html::image('img/rating.png', 'rating'
                  	, array('class' => 'img-circle'
                  		,'width' => 25 , 'height' => 25)) 
                  	!!}
                    {!! Html::image('img/rating.png', 'rating'
                  	, array('class' => 'img-circle'
                  		,'width' => 25 , 'height' => 25)) 
                  	!!}
                    {!! Html::image('img/rating.png', 'rating'
                  	, array('class' => 'img-circle'
                  		,'width' => 25 , 'height' => 25)) 
                  	!!}
                  </td>
                  <td>35 huacales</td>
                  <td>$30.00</td>
                </tr>
                <tr>
                  <td>
                    {!! Html::image('img/aguacate1.jpeg', 'Producto'
                  	, array('class' => 'img-circle'
                  		,'width' => 64 , 'height' => 64)) 
                  	!!}
                  </td>
                  <td>Aguacate Bacon
                    <br>Productor 3
                    <br>
                  </td>
                  <td>
                    {!! Html::image('img/rating.png', 'rating'
                  	, array('class' => 'img-circle'
                  		,'width' => 25 , 'height' => 25)) 
                  	!!}
                    {!! Html::image('img/rating.png', 'rating'
                  	, array('class' => 'img-circle'
                  		,'width' => 25 , 'height' => 25)) 
                  	!!}
                    {!! Html::image('img/rating.png', 'rating'
                  	, array('class' => 'img-circle'
                  		,'width' => 25 , 'height' => 25)) 
                  	!!}
                  {!! Html::image('img/rating.png', 'rating'
                  	, array('class' => 'img-circle'
                  		,'width' => 25 , 'height' => 25)) 
                  	!!}
                   {!! Html::image('img/rating.png', 'rating'
                  	, array('class' => 'img-circle'
                  		,'width' => 25 , 'height' => 25)) 
                  	!!}
                  </td>
                  <td>5 huacales</td>
                  <td>$35.00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
	</div>
</div>
@endsection