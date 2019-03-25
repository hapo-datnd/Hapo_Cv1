<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 3/5/2019
 * Time: 2:58 PM
 */
?>
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
        <left-header style="background-image: url({{asset('storage/avatar/'.$cv->image)}})" id="avatar-cv" class="flex-column float-left flex justify-content-center align-items-center float-left">
            <div class="language flex flex-row">
                <a href="#"><p class="p1">English</p></a>
                <a href=""><p class="p2">Japanese</p></a>
            </div>
            <div class="title-header">
                <div class="flex">
                    <h1 id="nameFirst" class="name-first">{{$cv->first_name}}</h1><h1 id="nameLast" class="ml-2 name-last">{{$cv->last_name}}</h1>
                </div>
                <input aria-label="position" autocomplete="off" onblur="validateInfo(this.id,0,32)" id="position" name="position" value="{{$cv->position}}" type="text">
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
                <a href=""><p class="p2">Japanese</p></a>
            </div>
            <div class="ava-hover">
                <div id="avatarCvMini" style="background-image: url({{asset('storage/avatar/'.$cv->image_mini)}})"
                     class=" ava overflow-hidden flex-column flex justify-content-end align-items-center">
                    <form action="{{route('cvs.store')}}" method="post" class="bottom-ava flex position-relative" enctype="multipart/form-data">
                        @csrf
                        <i class="fas fa-camera position-absolute"></i>
                        <input name="my-ava" class="custom-file-input" type="file" id="inputGroupFile01">
                    </form>
                </div>
            </div>
            <div class="name flex-column flex justify-content-center align-items-center">
                <p class="p1"><input class="text-right input-top" aria-label="first-name" type="text" id="firstName" value="{{$cv->first_name}}"><input type="text" class="text-left input-top" aria-label="last-name" id="lastName" value=" {{$cv->last_name}}"></p>
                <input aria-label="date_of_birth" type="date" name="date-of-birth" id="dateOfBirth" class="birth-day" value="{{$cv->date_of_birth}}">
            </div>
            <div class="right-header-table">
                <table class="personal-info">
                    <tr>
                        <td  class="tdleft tdleft-1">Phone:</td>
                        <td  class="tdright tdright-1"><input aria-label="phone" autocomplete="off" onblur="validateInfo(this.id,0,16)" id="phone" type="text" value="{{$cv->phone}}"></td>
                    </tr>
                    <tr>
                        <td class="tdleft">Email:</td>
                        <td class="tdright"><input aria-label="email" autocomplete="off" onblur="validateInfo(this.id,0,40)" id="email" name="email" type="email" value="{{$cv->email}}"></td>
                    </tr>
                    <tr>
                        <td class="tdleft">Facebook:</td>
                        <td class="tdright"><input aria-label="facebook" autocomplete="off" onblur="validateInfo(this.id,0,32)" id="facebook" name="facebook" type="text" value="{{$cv->facebook}}"></td>
                    </tr>
                    <tr>
                        <td class="tdleft">Skype:</td>
                        <td class="tdright"><input aria-label="skype" autocomplete="off" onblur="validateInfo(this.id,0,32)" id="skype" name="skype" type="text" value="{{$cv->skype}}"></td>
                    </tr>
                    <tr>
                        <td class="tdleft">Chatwork:</td>
                        <td class="tdright"><input aria-label="chat-work" autocomplete="off" onblur="validateInfo(this.id,0,32)" id="chatWork" name="chat_work" type="text" value="{{$cv->chat_work}}"></td>
                    </tr>
                    <tr>
                        <td class="tdleft">Address:</td>
                        <td class="tdright"><input aria-label="address" autocomplete="off" onblur="validateInfo(this.id,0,48)" id="address" name="address" type="text" value="{{$cv->address}}"></td>
                    </tr>
                </table>
            </div>
            <div class="right-header-button flex justify-content-center align-items-center">
                <button  class="d-none flex justify-content-center align-items-center">
                    Edit profile
                    <i class="fas fa-pen"></i>
                </button>
            </div>
        </right-header>
    </div>
</header>


