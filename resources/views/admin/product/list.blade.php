@extends('admin.layout')

@section('title')
	Listado de Productos
@stop
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
  </div>
  <div class="col-md-4">    
  </div>
</div>
 <div class="row">
        <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Productos Agregados</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12 col-md-2">
                      <button onclick="location.href='/createProduct';" type="button" class="btn btn-block btn-secondary">Nuevo Producto</button>
                    </div>
                    <div class="col-sm-12 col-md-6">
                    </div>
                    <div class="col-sm-12 col-md-4">
                      <div id="example1_filter" class="form-group row">
                        <label for="searchProduct" class="col-sm-2 col-form-label">Buscar</label>
                        <div class="col-sm-10">
                          <div class="form-group">
                            <label>Multiple</label>
                            <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                              <option>Alabama</option>
                              <option>Alaska</option>
                              <option>California</option>
                              <option>Delaware</option>
                              <option>Tennessee</option>
                              <option>Texas</option>
                              <option>Washington</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Codgio de Barras</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $item) 
                        <tr>
                          <td class="v-align-middle">{{$item->name}}</td>
                          <td class="v-align-middle">{{$item->quantity}}</td>
                          <td class="v-align-middle">${{$item->amount}}</td>
                          <td class="v-align-middle">{{$item->barcode}}</td>
                          <td class="v-align-middle">
                            <a class="btn btn-app">
                              <i class="fas fa-edit editProduct" id="editProduct" data-product="{{$item->id_product}}"></i> Edit
                            </a> 
                            <!-- Acá las acciones para cada registro -->
                          </td>
                        </tr>
                        @endforeach 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card-footer clearfix">
                  {{ $products->links() }}
                </div>
              </div>
            </div>
          </div>
<!-- Modal -->
<div class="modal fade" id="edit-product">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Large Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@stop

@section('jsincludes')
<script src="{{ asset('js/products/product.js') }}"></script>
<script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>
@stop