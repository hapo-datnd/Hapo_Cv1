<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 3/5/2019
 * Time: 3:03 PM
 */
?>
<div class="content-3">
    <div class="container">
        <div class="row">
            <div class="left-content-3 flex-column flex col-md-6 col-12">
                <h2><span class="before">work</span> <span class="behind">experience</span></h2>
                <p contenteditable="true" id="work_experience_title" class="p1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                <div class="main">
                    <div class="main-1">
                    </div>
                    <div class="main-2 main-2-left flex-column flex ">
                        <div class="main-3 main-3-1 flex-row flex main-work position-relative" id="work-number0">
                            <button type="button" onclick="deleteWorkButton(0)" class="position-absolute button-delete-work"><i class="m-0 fas fa-minus"></i></button>
                            <img class="img-1" alt="Icon Left" src="{{asset('icon/Polygon.png')}}">
                            <div class="main-3-center">

                            </div>
                            <div class="main-3-box main-3-box-1 flex-column flex">
                                <h3><span class="year">(<span contenteditable="true" class="get-start-time-work" id="start-time">2010</span> - <span contenteditable="true" class="get-end-time-work" id="end-time">2019</span>)</span><span contenteditable="true" class="get-company-name" id="company-name"> abc company</span></h3>
                                <h4 contenteditable="true" class="get-company-position" id="company-position">Developer</h4>
                                <p contenteditable="true" class="get-work-content para" id="work-content" >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-3-button flex-row flex">
                    <button type="button" onclick="addButton3()" class="content-3-btn flex-row flex justify-content-center align-items-center">
                        Add work expience
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="right-content-3 flex-column flex col-md-6 col-12">
                <h2><span class="before">educa</span><span class="behind">tion</span></h2>
                <p contenteditable="true" id="education_title" class="p1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                <div class="main">
                    <div class="main-1">
                    </div>
                    <div class="main-2 main-2-right flex-column flex">
                        <div class="main-3 main-3-1 flex-row flex position-relative main-education" id="edu-number0">
                            <button type="button" onclick="deleteEduButton(0)" class="position-absolute button-delete-edu"><i class="m-0 fas fa-minus"></i></button>
                            <img class="img-1" alt="Icon Left" src="{{asset('icon/Polygon.png')}}">
                            <div class="main-3-center">

                            </div>
                            <div class="main-3-box main-3-box-1 flex-column flex">
                                <h3><span class="year">(<span contenteditable="true" class="get-start-time-edu" id="edu-start-time">2010</span> - <span class="get-end-time-edu" contenteditable="true" id="edu-end-time">2019</span>)</span><span contenteditable="true" class="get-edu-name" id="education-name"> education</span></h3>
                                <h4 contenteditable="true" class="get-edu-position" id="education-position">Developer</h4>
                                <p contenteditable="true" class="get-achievement para" id="achievement" >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-3-button flex-row flex">
                    <button type="button" onclick="addButton4()" class="content-3-btn-right flex-row flex justify-content-center align-items-center">
                        Add education
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
