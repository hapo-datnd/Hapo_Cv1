@extends('layouts.app')

@section('content')
    <?php
    $i = 1;
    ?>
    <div class="container">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <div class="justify-content-center align-content-center ">
            <div class="row">
                <h1 class="col-md-6"><b>Cv-Manager</b></h1>
                <div class="row flex-row-reverse col-md-6 p-0 mb-1">
                    <button type="button" class="btn btn-outline-success"
                            data-toggle="modal" data-target="#myCvModal">
                        <i class="fas fa-plus"></i> Thêm
                    </button>
                    <div class="modal fade" id="myCvModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Thêm CV</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form method="POST" action="{{route('cvs.create')}}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="title" class="col-md-2 col-form-label"><h1>{{ __('Title') }}</h1></label>

                                            <div class="col-md-12">
                                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                                @if ($errors->has('title'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('title') }}</strong>
                                                     </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4 flex-row-reverse row">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Thêm') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Modal footer -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td>STT</td>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Time Update</td>
                    <td>Hành Động</td>
                </tr>
                </thead>
                <tbody>
                @foreach ($cvs as $cv)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$cv->id}}</td>
                        <td>{{$cv->title}}</td>
                        <td>{{$cv->updated_at}}</td>
                        <td>
                            <div class="row">
                                <a href="{{route('cvs.show',$cv->id)}}" class="m-auto"><button type="button" class="btn btn-outline-success"> Xem </button></a>
                                <a href="{{route('cvs.edit',$cv->id)}}" class="m-auto"><button type="button" class="btn btn-outline-primary"> Sửa </button></a>
                                <a href="{{route('cvs.destroy',$cv->id)}}" class="m-auto"><button type="button" class="btn btn-outline-danger"> Xóa </button></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                {{--{{$id}}--}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
