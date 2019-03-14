<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 3/5/2019
 * Time: 3:02 PM
 */
?>
<div class="content-2">

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 flex flex-column professional">
                <h2><span class="before">professional</span> <span class="behind">skills</span></h2>
                <p contenteditable="true" id="professional_skill_title" class="p1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                <div class="flex grid-container skillSum">

                            <div id="skill_pro" class="grid-item item1 skill-1 position-relative circle-skill flex-column flex justify-content-center align-items-center">
                                <button type="button" onclick="delereProSkillButton(0)" class="position-absolute button-right"><i class="m-0 fas fa-minus"></i></button>
                                <div class="pro-skill">
                                    <div class="graphic position-relative">
                                        <svg width="100%" height="100%" viewBox="0 0 100 100" class="donut">
                                            <circle class="donut-hole" cx="50" cy="50" r="47.5"></circle>
                                            <circle class="donut-ring" cx="50" cy="50" r="47.5"></circle>
                                            <circle id="circle-pro" class="donut-segment-1" style="stroke-dasharray: 298.4513021;
                                    stroke-dashoffset: 104.4579557;" cx="50" cy="50" r="47.5"></circle>
                                        </svg>
                                        <p class="position-absolute percent-pro"><span onblur="updatePercentProSkill(0)" class="get-percent-pro-skill" id="percent-pro" contenteditable="true">65</span>%</p>
                                    </div>
                                    <p id="name-skill-pro0" contenteditable="true" class="skill-1-p">name skill</p>
                                </div>
                            </div>


                    <div class="grid-item item2 circle-skill">
                        <div class="skill-button flex justify-content-center align-items-center graphic-2">
                            <button type="button" onclick="addSkillProButton()" class="flex-row flex justify-content-center align-items-center">
                                Add skill
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="skill-button respon-button flex justify-content-center align-items-center graphic-2">
                    <button type="button"  onclick="addSkillProButton()" class="flex-row flex justify-content-center align-items-center">
                        Add skill
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-6 col-12 flex flex-column personal">
                <h2><span class="before">personal</span> <span class="behind">skills</span></h2>
                <p contenteditable="true" id="personal_skill_title" class="p1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                <div class="personal-skill flex-column">

                            <div id = "skill-per" class="person-skill position-relative">
                                <button type="button" onclick="delerePerSkillButton(0)" class="position-absolute btn-delete"><i class="m-0 fas fa-minus"></i></button>
                                <h4 id="name-skill-per0" class="get-name-per-skill" contenteditable="true">team work</h4>
                                <div class="all">
                                    <div class="percent percent-1" id="percent-show-per" style="width: 65%">
                                    </div>
                                    <p class="percent-text-1"><span onblur="updatePercentPerSkill(0)" class="get-percent-per-skill" id="percent-per"  contenteditable="true">65</span>%</p>
                                </div>
                            </div>

                    <div class="personal-button flex flex-row-reverse">
                        <button type="button" onclick="addSkillPerButton()" class="flex-row person-button flex justify-content-center align-items-center">
                            Add skill
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
