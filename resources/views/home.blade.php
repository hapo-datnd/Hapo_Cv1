@extends('layouts.app')
@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
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
                    <a href="{{route('cvs.create')}}"><button type="button" class="btn btn-outline-success">
                            <i class="fas fa-plus"></i> Add
                        </button></a>
                </div>

            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td>STT</td>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Time Update</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                @foreach ($cvs as $cv)
                    <tr>
                        <td class="border-0">{{$i++}}</td>
                        <td class="border-0">{{$cv->id}}</td>
                        <td class="border-0">{{$cv->title}}</td>
                        <td class="border-0">{{$cv->updated_at}}</td>
                        <td class="border-0">
                            <div class="row">
                                <a href="{{route('cvs.show',$cv->id)}}" class="m-auto"><button type="button" class="btn btn-outline-success"> Show </button></a>
                                <a href="{{route('cvs.edit',$cv->id)}}" class="m-auto"><button type="button" class="btn btn-outline-primary"> Edit </button></a>
                                <form method="post" class="m-auto" action="{{route('cvs.destroy',$cv->id)}}" id="form_destroy_admin{{$cv->id}}">
                                    @method('DELETE')
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <button id="buttonDelete" onclick="deleteAdminConfirm({{$cv->id}})"
                                            type="button" class="btn btn-outline-danger"
                                            value="{{$cv->id}}" > Delete </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                {{--{{$id}}--}}
                </tbody>
            </table>
            <div>
                {{ $cvs->links() }}
            </div>
        </div>
    </div>
    <script>
        function deleteAdminConfirm(id) {
            let x = confirm("Are you sure you want to delete?");
            if(x)
                document.getElementById("form_destroy_admin"+id).submit();
        }
    </script>
@endsection
