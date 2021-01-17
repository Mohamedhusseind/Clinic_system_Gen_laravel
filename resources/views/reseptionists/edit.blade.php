@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Reseptionist
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($reseptionist, ['route' => ['reseptionists.update', $reseptionist->id], 'method' => 'patch']) !!}

                        @include('reseptionists.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection