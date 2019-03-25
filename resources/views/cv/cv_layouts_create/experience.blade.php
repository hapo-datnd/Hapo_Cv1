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
                <p contenteditable="true" onblur="validatetextInfo(this.id, 0, 300)" id="workExperienceTitle" class="p1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                <div class="main">
                    <div class="main-1">
                    </div>
                    <div class="main-2 main-2-left flex-column flex ">
                        <div class="main-3 flex-row flex main-work position-relative" id="work-number0">
                            <button type="button" onclick="deleteWorkButton(0)" class="position-absolute button-delete-work"><i class="m-0 fas fa-minus"></i></button>
                            <img class="img-1" alt="Icon Left" src="{{asset('icon/Polygon.png')}}">
                            <div class="main-3-center">

                            </div>
                            <div class="main-3-box main-3-box-1 flex-column flex">
                                <h3><span class="year">(<span contenteditable="true" onblur="validateTimeExperience(this.id)" class="get-start-time-work" id="startTimeWork">2010</span> - <span contenteditable="true" onblur="validateTimeExperience(this.id)" class="get-end-time-work" id="endTimeWork">2019</span>)</span><span onblur="validateInfoExp(this.id, 0, 35)" contenteditable="true" class="get-company-name" id="companyName"> abc company</span></h3>
                                <h4 contenteditable="true" onblur="validateInfoExp(this.id, 0, 20)" class="get-company-position" id="companyPosition">Developer</h4>
                                <p contenteditable="true" onblur="validateInfoExp(this.id, 0, 200)" class="get-work-content para" id="workContent" >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
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
                <p contenteditable="true" onblur="validatetextInfo(this.id, 0, 300)" id="educationTitle" class="p1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                <div class="main">
                    <div class="main-1">
                    </div>
                    <div class="main-2 main-2-right flex-column flex">
                        <div class="main-3 flex-row flex position-relative main-education" id="edu-number0">
                            <button type="button" onclick="deleteEduButton(0)" class="position-absolute button-delete-edu"><i class="m-0 fas fa-minus"></i></button>
                            <img class="img-1" alt="Icon Left" src="{{asset('icon/Polygon.png')}}">
                            <div class="main-3-center">

                            </div>
                            <div class="main-3-box main-3-box-1 flex-column flex">
                                <h3><span class="year">(<span contenteditable="true" onblur="validateTimeExperience(this.id)" class="get-start-time-edu" id="eduStartTime">2010</span> - <span class="get-end-time-edu" onblur="validateTimeExperience(this.id)" contenteditable="true" id="eduEndTime">2019</span>)</span><span onblur="validateInfoExp(this.id, 0, 35)" contenteditable="true" class="get-edu-name" id="educationName"> education</span></h3>
                                <h4 contenteditable="true" onblur="validateInfoExp(this.id, 0, 20)" class="get-edu-position" id="educationPosition">Developer</h4>
                                <p contenteditable="true" onblur="validateInfoExp(this.id, 0, 200)" class="get-achievement para" id="achievement" >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
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
