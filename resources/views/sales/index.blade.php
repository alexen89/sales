@extends('admin.layout')

@section('title')
	Ventas
@stop
@section('content')
	
	<div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Ventas</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form id="quickForm"  action="javascript:void(0);">
            <div class="card-body">
              <div class="form-group">
                <label for="product">Producto</label>
                <input type="text" name="product" class="form-control" id="product" placeholder="Código del Producto">
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="button" class="btn btn-secondary" id="add-product-table">Vender</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
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
	            	<table class="table table-bordered" id="produts-sales">
                  		<thead>
                    		<tr>
                      			<th style="width: 10px">#</th>
                      			<th>Task</th>
                      			<th>Progress</th>
                      			<th style="width: 40px">Label</th>
                    		</tr>
                  		</thead>
                  		<tbody>
                    		<tr>
                      			<td>1.</td>
                      			<td>Update software</td>
                      			<td>
			                        <div class="progress progress-xs">
			                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
			                        </div>
			                    </td>
                      			<td><span class="badge bg-danger">55%</span></td>
                    		</tr>
		                    <tr>
		                      	<td>2.</td>
		                      	<td>Clean database</td>
		                      	<td>
		                        	<div class="progress progress-xs">
		                          	<div class="progress-bar bg-warning" style="width: 70%"></div>
		                        	</div>
		                      	</td>
		                      	<td><span class="badge bg-warning">70%</span></td>
		                    </tr>
		                    <tr>
		                      	<td>3.</td>
		                      	<td>Cron job running</td>
		                      	<td>
		                        	<div class="progress progress-xs progress-striped active">
		                          		<div class="progress-bar bg-primary" style="width: 30%"></div>
		                        	</div>
		                      	</td>
		                      	<td><span class="badge bg-primary">30%</span></td>
                    		</tr>
		                    <tr>
		                      	<td>4.</td>
		                      	<td>Fix and squish bugs</td>
		                      	<td>
		                        	<div class="progress progress-xs progress-striped active">
		                          		<div class="progress-bar bg-success" style="width: 90%"></div>
		                        	</div>
		                      	</td>
		                      	<td><span class="badge bg-success">90%</span></td>
		                    </tr>
                  </tbody>
                </table>
              </div>
        	</div>
        </div>
@stop

@section('jsincludes')
	<script src="{{ asset('js/sales/sales.js') }}"></script>
@stop