@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    @can('admin.tags.create')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.tags.create')}}">Agregar Etiqueta</a>
    @endcan
    

    <h1>Lista de Etiquetas</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>     
    @endif

    <div class="card">



        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($tags as $tag)
                            <tr>
                                <th>{{$tag->id}}</th>
                                <th>{{$tag->name}}</th>
                                <th width="10px">

                                    @can('admin.tags.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit',$tag)}}">Editar</a>
                                    @endcan
                                    
                                </th>
                                <th width="10px">

                                    @can('admin.tags.destroy')
                                    <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                    @endcan
                                    
                                </th>
                            </tr>                     
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop

