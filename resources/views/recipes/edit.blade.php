@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Recipe
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($recipe, ['route' => ['recipes.update', $recipe->id], 'method' => 'patch']) !!}

                        @include('recipes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection