<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 3/5/2019
 * Time: 2:58 PM
 */
?>
<header>
    <div class="flex flex-wrap">
        <left-header style="background-image: url({{asset('image/'.$cv->image)}})"  class="flex-column float-left flex justify-content-center align-items-center float-left">
            <div class="language flex flex-row">
                <a href="#"><p class="p1">English</p></a>
                <a href="index.html"><p class="p2">Japanese</p></a>
            </div>
            <div class="title-header">
                <h1 class="before">{{$cv->first_name}} {{$cv->last_name}}</h1>
                <h3>{{$cv->position}}</h3>
            </div>
            <div class="container flex-row-reverse flex bottom-left-header">
                <a href="#">
                    <div class="hidden flex-row bottom-left-header-1">
                        <i class="fas fa-camera"></i>
                    </div>
                </a>
            </div>
        </left-header>
        <right-header class="float-left flex flex-column justify-content-center align-items-center">
            <div class="language flex flex-row">
                <a href="#"><p class="p1">English</p></a>
                <a href="index.html"><p class="p2">Japanese</p></a>
            </div>
            <div class="ava-hover">
                <div style="background-image: url({{asset('image/'.$cv->image_mini)}})"
                      class=" ava overflow-hidden flex-column flex justify-content-end align-items-center">
                    <button type="button" class="bottom-ava flex flex-row justify-content-center align-content-center" data-toggle="modal" data-target="#myAvaModal{{$cv->id}}">
                        <i class="fas fa-camera"></i>
                    </button>
                    <div class="modal fade" id="myAvaModal{{$cv->id}}">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Thay đổi ảnh đại diện</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="{{route('cvs.update_ava',$cv->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="myAva">
                                        <input type="submit" value="Lưu">
                                    </form>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="name flex-column flex justify-content-center align-items-center">
                <p class="p1">{{$cv->first_name}} {{$cv->last_name}}</p>
                <p class="p2">{{$cv->date_of_birth}}</p>
            </div>
            <div class="right-header-table">
                <table class="personal-info">
                    <tr>
                        <td class="tdleft tdleft-1">Phone:</td>
                        <td class="tdright tdright-1">{{$cv->phone}}</td>
                    </tr>
                    <tr>
                        <td class="tdleft">Email:</td>
                        <td class="tdright">{{$cv->email}}</td>
                    </tr>
                    <tr>
                        <td class="tdleft">Facebook:</td>
                        <td class="tdright">{{$cv->facebook}}</td>
                    </tr>
                    <tr>
                        <td class="tdleft">Skype:</td>
                        <td class="tdright">{{$cv->skype}}</td>
                    </tr>
                    <tr>
                        <td class="tdleft">Chatwork:</td>
                        <td class="tdright">{{$cv->chat_work}}</td>
                    </tr>
                    <tr>
                        <td class="tdleft">Address:</td>
                        <td class="tdright">{{$cv->address}}</td>
                    </tr>
                </table>
            </div>
            <div class="right-header-button flex justify-content-center align-items-center">
                <button type="button" class="flex justify-content-center align-items-center" data-toggle="modal" data-target="#myInfoModal{{$cv->id}}">
                    Edit profile
                    <i class="fas fa-pen"></i>
                </button>
                <div class="modal fade" id="myInfoModal{{$cv->id}}">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Thay đổi thông tin cá nhân</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form method="POST" action="{{ route('cvs.update_info',$cv->id) }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="firstName" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{$cv->first_name}}" required autofocus>

                                            @if ($errors->has('first_name'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="lastName" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{$cv->last_name}}" required autofocus>

                                            @if ($errors->has('last_name'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

                                        <div class="col-md-6">
                                            <input id="position" type="text" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{$cv->position}}" required autofocus>

                                            @if ($errors->has('position'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="birthDay" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth ') }}</label>

                                        <div class="col-md-6">
                                            <input id="birthDay" type="text" class="form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" name="date_of_birth" value="{{ $cv->date_of_birth }}" required autofocus>

                                            @if ($errors->has('date_of_birth'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                        <div class="col-md-6">
                                            <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $cv->phone }}" required autofocus>

                                            @if ($errors->has('phone'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $cv->email }}" required>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="facebook" class="col-md-4 col-form-label text-md-right">{{ __('Facebook') }}</label>

                                        <div class="col-md-6">
                                            <input id="facebook" type="text" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" name="facebook" value="{{ $cv->facebook }}" required>

                                            @if ($errors->has('facebook'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="skype" class="col-md-4 col-form-label text-md-right">{{ __('Skype') }}</label>

                                        <div class="col-md-6">
                                            <input id="skype" type="text" class="form-control{{ $errors->has('skype') ? ' is-invalid' : '' }}" name="skype" value="{{ $cv->skype }}" required>

                                            @if ($errors->has('skype'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('skype') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="chatWork" class="col-md-4 col-form-label text-md-right">{{ __('Chat Work') }}</label>

                                        <div class="col-md-6">
                                            <input id="chatWork" type="text" class="form-control" name="chat_work" value="{{ $cv->chat_work }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="address" type="text" class="form-control" name="address" value="{{ $cv->address }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Save') }}
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
        </right-header>
    </div>
</header>
