@extends('admin.layout')

@section('title')
	Creación de productos
@stop
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
	<div class="row">
		<div class="col-md-1">
		</div>
    	<div class="col-md-9">
    		<div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Nuevo Producto</h3>
                <div class="card-tools">
                  <button onclick="location.href='/adminproduct';" type="button" class="btn btn-block btn-default">Regresar</button>
                </div>
              </div>
              <form class="form-horizontal" id="formProduct">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nameProduct" class="col-sm-2 col-form-label">Nombre del Producto</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nameProduct" name="nameProduct">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="qty" class="col-sm-2 col-form-label">Cantidad</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="qty" name="qty">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="barcode" class="col-sm-2 col-form-label">Producto(Código de Barras)</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="barcode" name="barcode">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="amount" class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="amount" name="amount">
                    </div>
                  </div> 
                  <div class="form-group row">
                    <label for="productImg" class="col-sm-2 col-form-label">Imagen</label>
                    <div class="col-sm-10">
                      <input type="file" id="productImg" name="productImg">
                    </div>
                  </div>              
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="button" id="saveProduct" name="saveProduct" class="btn btn-secondary">Guardar</button>
                  <button type="button" id="cleanProduct" name="cleanProduct" class="btn btn-default float-right">Limpiar</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
    	</div>
    	<div class="col-md-2">
		</div>
    </div>
@stop

@section('jsincludes')
<script src="{{ asset('js/products/product.js') }}"></script>
@stop