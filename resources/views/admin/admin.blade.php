<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 3/8/2019
 * Time: 11:15 AM
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
            <h1 class="card-header text-center">Admin-Manager</h1>
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
                @foreach ($admins as $admin)
                    <tr>
                        <td class="border-0">{{$admin->id}}</td>
                        <td class="border-0">{{$admin->name}}</td>
                        <td class="border-0">{{$admin->email}}</td>
                        <td class="border-0">
                            @if($admin->type === $admin::SUPER_ADMIN )
                                Super Admin
                            @elseif($admin->type === $admin::ADMIN)
                                Admin
                            @endif
                        </td>
                        <td class="row align-content-center justify-content-center m-0 border-0">
                            {{--<a href="users/{{$admin->id}}/edit"><button type="button" class="btn btn-outline-primary">Save</button></a>--}}
                            @if($adminNow->type === $admin::SUPER_ADMIN)
                                @if($admin->type === $admin::ADMIN)
                                    <form method="post" action="{{route('admins.destroy',$admin->id)}}" id="form_destroy_admin{{$admin->id}}">
                                        @method('DELETE')
                                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <button id="buttonDelete" onclick="deleteAdminConfirm({{$admin->id}})"
                                                type="button" class="btn btn-outline-danger" data-toggle="modal"
                                                value="{{$admin->id}}" data-target="#myAdminModal"> Delete </button>
                                    </form>
                                @endif
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
                {{ $admins->links() }}
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
@section('top-right')
    @if(!Auth::guard('admin')->check())
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_login_form') }}">{{ __('Login') }}</a>
        </li>
    @elseif(Auth::guard('admin')->check())
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ $adminNow->name}} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                @if($adminNow->type === $adminNow::SUPER_ADMIN)
                    <a class="dropdown-item" href="{{ route('admins.create') }}">{{ __('Create admin') }}</a>
                @endif
                <a class="dropdown-item" href="{{ route('admin.change_password',$adminNow->id) }}">{{ __('Change password') }}</a>
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
    <li class="breadcrumb-item active">List Admin</li>
    <li class="breadcrumb-item"><a href="{{route('users.index')}}">List User</a></li>
    <li class="breadcrumb-item"><a href="{{route('cvs.index')}}">List CV</a></li>
@endsection
