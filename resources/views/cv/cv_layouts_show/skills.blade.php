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
                <p id="professionalSkillTitle" class="p1">{{$cv->professional_skill_title}}</p>
                <div class="flex grid-container skillSum">
                    @if($skills)
                        @foreach($skills as $proSkill)
                            @if($proSkill->type === 1)
                                <div id="skill_pro{{$proSkill->cv_id}}{{$proSkill->skill_id}}" class="grid-item item1 skill-1 position-relative circle-skill flex-column flex justify-content-center align-items-center">
                                    <div class="pro-skill">
                                        <div class="graphic position-relative">
                                            <svg width="100%" height="100%" viewBox="0 0 100 100" class="donut">
                                                <circle class="donut-hole" cx="50" cy="50" r="47.5"></circle>
                                                <circle class="donut-ring" cx="50" cy="50" r="47.5"></circle>
                                                <circle id="circle-pro1" class="donut-segment-1" style="stroke-dasharray: 298.4513021;
                                                    stroke-dashoffset: {{(100-$proSkill->pivot->percent)/100*298.4513021}};" cx="50" cy="50" r="47.5"></circle>
                                            </svg>
                                            <p class="position-absolute percent-pro"><span  class="get-percent-pro-skill" id="percent-pro{{$proSkill->cv_id}}{{$proSkill->skill_id}}">{{$proSkill->pivot->percent}}</span>%</p>
                                        </div>
                                        <p id="name-skill-pro{{$proSkill->cv_id}}{{$proSkill->skill_id}}" class="skill-1-p">{{$proSkill->name}}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                    <div class="grid-item item2 circle-skill">
                        <div class="skill-button flex justify-content-center align-items-center graphic-2">
                            <button type="button" onclick="addButton()" class="d-none flex-row flex justify-content-center align-items-center">
                                Add skill
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="skill-button respon-button flex justify-content-center align-items-center graphic-2">
                    <button type="button"  class="flex-row d-none flex justify-content-center align-items-center">
                        Add skill
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-6 col-12 flex flex-column personal">
                <h2><span class="before">personal</span> <span class="behind">skills</span></h2>
                <p id="professionalSkillTitle" class="p1">{{$cv->personal_skill_title}}</p>
                <div class="personal-skill flex-column">
                    @if($skills)
                        @foreach($skills as $perSkill)
                            @if($perSkill->type === 2)
                                <div id = "skill-per{{$perSkill->cv_id}}{{$perSkill->skill_id}}" class="person-skill position-relative">
                                    <h4 id="name-skill-per{{$perSkill->cv_id}}{{$perSkill->skill_id}}" class="get-name-per-skill">{{$perSkill->name}}</h4>
                                    <div class="all">
                                        <div class="percent percent-1 position-relative" id="percent-show-per1" style="width: {{$perSkill->pivot->percent}}%">
                                            <p class="percent-text-1 position-absolute"><span class="get-percent-per-skill" id="percent-per{{$perSkill->cv_id}}{{$perSkill->skill_id}}">{{$perSkill->pivot->percent}}</span>%</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                    <div class="personal-button flex flex-row-reverse">
                        <button type="button" onclick="addButton2()" class=" d-none flex-row flex justify-content-center align-items-center">
                            Add skill
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
