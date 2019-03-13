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
                <button type="button" class="flex justify-content-center align-items-center">
                    Edit profile
                    <i class="fas fa-pen"></i>
                </button>
            </div>
        </right-header>
    </div>
</header>
