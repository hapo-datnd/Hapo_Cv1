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
        <left-header style="background-image: url({{asset('image/ava.png')}})"  class="flex-column float-left flex justify-content-center align-items-center float-left">
            <div class="language flex flex-row">
                <a href="#"><p class="p1">English</p></a>
                <a href="index.html"><p class="p2">Japanese</p></a>
            </div>
            <div class="title-header">
                <h1 id="name" class="before"></h1>
                <h3 contenteditable="true" id="position" >Laravel Developer</h3>
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
                <div style="background-image: url({{asset('image/ava.png')}})"
                      class=" ava overflow-hidden flex-column flex justify-content-end align-items-center">
                    <button type="button" class="bottom-ava flex flex-row justify-content-center align-content-center" data-toggle="modal" data-target="#myAvaModal">
                        <i class="fas fa-camera"></i>
                    </button>
                    <div class="modal fade" id="myAvaModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Thay đổi ảnh đại diện</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="" method="post" enctype="multipart/form-data">
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
                <p  class="p1"><span contenteditable="true" id="first_name">Nguyen Duy</span> <span id="last_name" contenteditable="true">Dat</span></p>
                <p contenteditable="true" id="date_of_birth" class="p2">21/11/1995</p>
            </div>
            <div class="right-header-table">
                <table class="personal-info">
                    <tr>
                        <td  class="tdleft tdleft-1">Phone:</td>
                        <td contenteditable="true" id="phone" class="tdright tdright-1">0974647466</td>
                    </tr>
                    <tr>
                        <td class="tdleft">Email:</td>
                        <td contenteditable="true" id="email" class="tdright">duydat211195.vp@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="tdleft">Facebook:</td>
                        <td contenteditable="true" id="facebook" class="tdright">Nguyen Duy Dat</td>
                    </tr>
                    <tr>
                        <td class="tdleft">Skype:</td>
                        <td contenteditable="true" id="skype" class="tdright">Duy Dat</td>
                    </tr>
                    <tr>
                        <td class="tdleft">Chatwork:</td>
                        <td contenteditable="true" id="chat_work" class="tdright">Slack</td>
                    </tr>
                    <tr>
                        <td class="tdleft">Address:</td>
                        <td contenteditable="true" id="address" class="tdright">Truong Dinh - Hai Ba Trung - Ha Noi</td>
                    </tr>
                </table>
            </div>
            <div class="right-header-button flex justify-content-center align-items-center">
                <button  class="flex justify-content-center align-items-center">
                    Edit profile
                    <i class="fas fa-pen"></i>
                </button>
            </div>
        </right-header>
    </div>
</header>

