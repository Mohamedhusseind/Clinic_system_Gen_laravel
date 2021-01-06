@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Receptionist
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($receptionist, ['route' => ['receptionists.update', $receptionist->id], 'method' => 'patch']) !!}

                        @include('receptionists.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection