@extends('layouts.template')
@section('title', 'cadastro de nota')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">


                <div class="card convert-form">
                    {{-- <div class="card-header">Lacamento de notas</div> --}}
                    <div class="card-body">
                        <form action="{{route('notasxml.store')}}" method="post" enctype="multipart/form-data" >
                            @csrf<!--csrf toquem de segurnça padrao do laravel para envio de requisao-->
                        
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <label for="name" class="form-label required">Cliente</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <label for="invoice" class="form-label required">Nota Fiscal</label>
                                    <input type="file" name="invoice" id="invoice" class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Lançar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
