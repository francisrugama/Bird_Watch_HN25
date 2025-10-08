@extends('layouts.panel')

 @section('title','Catalogo/Actualizar')

 @section('content')


<div class="col-xl-x12 order-xl-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">
                         <i class="fas fa-plus-circle">

                         </i> Actualizar Catalogo
                    </h3>
                    <div class="col-4 text-right">
                        <a href="{{ route('catalogs.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> volver
                        </a>
                    </div>
                          <div class="card-body container-fluid">
                               <form action="{{ route('Catalogs.store' ) }}" method="POST">
                                  @csrf
                                  @method('POST')
                                  @include('catalogs.form')
                               </form>
                          </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
