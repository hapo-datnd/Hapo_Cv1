<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 3/8/2019
 * Time: 3:51 PM
 */
?>
@extends('layouts.app_admin')

@section('content')
    <div class="container">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <div class="justify-content-center align-content-center ">
                <h1 class="card-header text-center">User-Manager</h1>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td class="border-0">ID</td>
                        <td class="border-0">Admin Name</td>
                        <td class="border-0">Email</td>
                        <td class="border-0">Phân Quyền</td>
                        <td class="row justify-content-center align-content-center m-0 border-0"></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="border-0">{{$user->id}}</td>
                            <td class="border-0">{{$user->name}}</td>
                            <td class="border-0">{{$user->email}}</td>
                            <td class="border-0">
                                <form action="{{ route('users.update',$user->id) }}" id="update-form{{$user->id}}" method="post">
                                    @method('PATCH')
                                    @csrf
                                    <select class="form-control" name="type" id="type">
                                        <option @if($user->type === $user::CANDIDATE) selected="selected" @endif value="{{$user::CANDIDATE}}">Candidate</option>
                                        <option @if($user->type === $user::HR) selected="selected" @endif value="{{$user::HR}}">HR</option>
                                    </select>
                                </form>
                            </td>
                            <td class="justify-content-center row align-content-center m-0 border-0">
                                <a class="m-auto"  href="{{ route('users.update',$user->id) }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('update-form{{$user->id}}').submit();">
                                    <button type="button" class="btn btn-outline-primary">Save</button>
                                </a>
                                <form method="post" action="{{route('users.destroy',$user->id)}}" id="form_destroy_user{{$user->id}}">
                                    @method('DELETE')
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <button id="buttonDelete" onclick="deleteAdminConfirm({{$user->id}})"
                                            type="button" class="btn btn-outline-danger m-auto"
                                            value="{{$user->id}}"> Delete </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $users->links() }}
                </div>

            </div>
    </div>
    <script>
        function deleteAdminConfirm(id) {
            let x = confirm("Are you sure you want to delete?");
            if(x)
                document.getElementById("form_destroy_user"+id).submit();
        }
    </script>
@endsection
@section('top-right')
    @if(!Auth::guard('admin')->check())
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_login_form') }}">{{ __('Login') }}</a>
        </li>
    @elseif(Auth::guard('admin')->check())
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::guard('admin')->user()->name}} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                @if(Auth::guard('admin')->user()->type === Auth::guard('admin')->user()::SUPER_ADMIN)
                    <a class="dropdown-item" href="{{ route('admins.create') }}">{{ __('Create admin') }}</a>
                @endif
                <a class="dropdown-item" href="{{ route('admin.change_password', Auth::guard('admin')->id() ) }}">{{ __('Change password') }}</a>
                <a class="dropdown-item" href="{{ route('logout_admin') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout_admin') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endif
@endsection
@section('top-left')
    <li class="breadcrumb-item"><a href="{{route('admin_index')}}">List Admin</a></li>
    <li class="breadcrumb-item active">List User</li>
    <li class="breadcrumb-item"><a href="{{route('cvs.index')}}">List CV</a></li>
@endsection
