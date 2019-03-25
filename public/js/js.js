

function updatePercentProSkill(count) {
    let id = '#percent-pro'+count;
    let idCircle = '#circle-pro'+count;
    let percentPro = $(id).text();
    if (percentPro.trim().length === 0) {
        alert('Percent skill is required!');
        setTimeout(function () {
            $(`${id}`).focus();
        });
    }
    let percent = Number(percentPro);
    if (isNaN(percent)) {
        alert('You must type a number!');
        setTimeout(function () {
            $(`${id}`).focus();
        });
    }

    if ((percent < 20) || (percent > 100)) {
        alert('You must type a number between 20 and 100!');
        setTimeout(function () {
            $(`${id}`).focus();
        });
    } else {
        $(idCircle).css('stroke-dashoffset',(100-percent)*298.4513021/100);
    }
}

function updatePercentPerSkill(count) {
    let id = '#percent-per'+count;
    let idShowPer = '#percent-show-per'+count;
    let percentPer = $(id).text();
    if (percentPer.trim().length === 0) {
        alert('Percent skill is required!');
        setTimeout(function () {
            $(`${id}`).focus();
        });
    }
    let percent = parseInt(percentPer);
    if (isNaN(percent)) {
        alert('You must type a number!');
        setTimeout(function () {
            $(`${id}`).focus();
        });
    }

    if ((percent < 20) || (percent > 100)) {
        alert('You must type a number between 20 and 100!');
        setTimeout(function () {
            $(`${id}`).focus();
        });
    } else {
        $(idShowPer).css('width', percent+'%');
    }
}

function addSkill(myElement, myClass, myClassParent, length) {
    let newParentClass = document.getElementsByClassName(myClassParent);
    let newClass = newParentClass[0].getElementsByClassName(myClass);
    let newAdd = newClass[length].outerHTML += myElement;
    // body...
}

function deleteSkillById(myElement, myID) {
    let newId = document.getElementById(myID);
    let newAdd = newId.outerHTML = myElement;
    // body...
}

function countGraphic(myClass,myGraphic) {
    let count = document.getElementsByClassName(myClass);
    let x = count[0].getElementsByClassName(myGraphic);
    let length = x.length;
    return(length);
    // body...
}



function addSkillProButton() {
    let numberSkill1 = countGraphic("skillSum","skill-1");
    let id = 1;
    if (numberSkill1 === 0) {
        id = 1;
    } else {
        let idLastSkill = $('.skill-1')[numberSkill1-1].id;
        const charactersOfLastSkillProId = 9;
        let idNumberLastSkill = idLastSkill.substring(charactersOfLastSkillProId);
        id = parseInt(idNumberLastSkill) + 1;
    }
    let myElement1 = `<div id="skill_pro${id}" class="grid-item position-relative item1 skill-1 circle-skill flex-column flex justify-content-center align-items-center">
                            <button type="button" onclick="delereProSkillButton(${id})" class="position-absolute button-right"><i class="m-0 fas fa-minus"></i></button>
                            <div class="pro-skill">
                                <div class="graphic position-relative">
                                    <svg width="100%" height="100%" viewBox="0 0 100 100" class="donut">
                                        <circle class="donut-hole" cx="50" cy="50" r="47.5"></circle>
                                        <circle class="donut-ring" cx="50" cy="50" r="47.5"></circle>
                                        <circle id="circle-pro${id}" class="donut-segment-1" style="stroke-dasharray: 298.4513021;
                                stroke-dashoffset: 104.4579557" cx="50" cy="50" r="47.5"></circle>											
                                    </svg>
                                    <p class="position-absolute percent-pro"><span onblur="updatePercentProSkill(${id})" class="get-percent-pro-skill" id="percent-pro${id}" contenteditable="true">65</span>%</p>
                                </div>
                                <p id="name-skill-pro${id}" onblur="validateNameProSkill(this.id)" contenteditable="true" class="skill-1-p">name skill ${id}</p>
                            </div>
                        </div>`;

    $('.item2').before(myElement1)


}

function delereProSkillButton(id) {
    let numberSkill1 = countGraphic("skillSum","skill-1");
    let x = confirm("Are you sure you want to delete?");
    if(x) {
        if(id === 0) {
            let newDelete = deleteSkillById("", 'skill_pro');
        }
        else {
            let newDelete = deleteSkillById("", 'skill_pro'+id);
        }
    }
}

function addSkillPerButton() {
    let numberPersonSkill = countGraphic("personal-skill","person-skill");
    let id = 1;
    if (numberPersonSkill === 0) {
        id = 1;
    } else {
        let idLastSkill = $('.person-skill')[numberPersonSkill-1].id;
        const charactersOfLastSkillPerId = 9;
        let idNumberLastSkill = idLastSkill.substring(charactersOfLastSkillPerId);
        id = parseInt(idNumberLastSkill)+1;
    }

    let myElement2 = `<div id = "skill-per${id}" class="person-skill position-relative">
                            <button type="button" onclick="delerePerSkillButton(${id})" class="position-absolute btn-delete"><i class="m-0 fas fa-minus"></i></button>
                            <h4 id="name-skill-per${id}" onblur="validateNamePerSkill(this.id)" class="get-name-per-skill" contenteditable="true">skill person ${id}</h4>
                            <div class="all">
                                <div class="percent percent-1 position-relative" id="percent-show-per${id}" style="width: 65%">
                                    <p class="percent-text-1 position-absolute"><span onblur="updatePercentPerSkill(${id})" class="get-percent-per-skill" id="percent-per${id}"  contenteditable="true">65</span>%</p>
                                </div>
                               
                            </div>
                        </div>`;

    $(".personal-button").before(myElement2)

    // body...
}

function delerePerSkillButton(id) {
    let numberPerson_skill = countGraphic("personal-skill","person-skill");
    let x = confirm("Are you sure you want to delete?");
    if(x) {
        if(id === 0) {
            let newDelete = deleteSkillById("", 'skill-per');
        }
        else {
            let newDelete = deleteSkillById("", 'skill-per'+id);
        }
    }
}



function addButton3() {
    let numberWorkExp = countGraphic("main-2-left","main-work");
    let numberIdWorkExp = numberWorkExp;
    let idLastWorkExp = $('.main-work')[numberIdWorkExp-1].id;
    const charactersOfLastWorkId = 11;
    let idNumberLastSkill = parseInt(idLastWorkExp.substring(charactersOfLastWorkId)) + 1;
    let myElement3 = `<div class="main-3 flex-row flex main-work position-relative" id="work-number${idNumberLastSkill}">
                                    <button type="button" onclick="deleteWorkButton(${idNumberLastSkill})" class="position-absolute button-delete-work"><i class="m-0 fas fa-minus"></i></button>
                                    <img class="img-1" alt="Icon Left" src="../../icon/Polygon.png">
                                    <div class="main-3-center">

                                    </div>
                                    <div class="main-3-box main-3-box-1 flex-column flex">
                                        <h3><span class="year">(<span contenteditable="true" onblur="validateTimeExperience(this.id)" class="get-start-time-work" id="startTimeWork${numberIdWorkExp}">2010</span> - <span contenteditable="true" onblur="validateTimeExperience(this.id)" class="get-end-time-work" id="endTimeWork${numberIdWorkExp}">2019</span>)</span><span onblur="validateInfoExp(this.id, 0, 35)" contenteditable="true" class="get-company-name" id="companyName${numberIdWorkExp}"> abc company</span></h3>
                                        <h4 contenteditable="true" onblur="validateInfoExp(this.id, 0, 20)" class="get-company-position" id="companyPosition${numberIdWorkExp}">Developer</h4>
                                        <p contenteditable="true" onblur="validateInfoExp(this.id, 0, 200)" class="get-work-content" id="workContent${numberIdWorkExp}" class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                            </div>
                                    </div>`;
    let newAdd = addSkill(myElement3,"main-3","main-2-left",numberWorkExp-1);
}

function deleteWorkButton(id) {
    let numberWorkExp = countGraphic("main-2-left","main-work");
    let x = confirm("Are you sure you want to delete?");
    if(x) {
        if (numberWorkExp === 1||id === 0) {
            alert("You can't delete it! Please change it!");
        }
        else {
            let newDelete = deleteSkillById("", 'work-number'+id);
        }
    }
}

function addButton4() {
    let numberEduExp = countGraphic("main-2-right","main-education");
    let numberIdEduExp = numberEduExp;
    let idLastEduExp = $('.main-education')[numberIdEduExp-1].id;
    const charactersOfLastEduId = 10;
    let idNumberLastEdu = parseInt(idLastEduExp.substring(charactersOfLastEduId)) + 1;
    let myElement4 = `<div class="main-3 flex-row flex position-relative main-education" id="edu-number${idNumberLastEdu}">
                                    <button type="button" onclick="deleteEduButton(${idNumberLastEdu})" class="position-absolute button-delete-edu"><i class="m-0 fas fa-minus"></i></button>
                                    <img class="img-1" alt="Icon Left" src="../../icon/Polygon.png">
                                    <div class="main-3-center">

                                    </div>
                                    <div class="main-3-box main-3-box-1 flex-column flex">
                                        <h3><span class="year">(<span contenteditable="true" onblur="validateTimeExperience(this.id)" class="get-start-time-edu" id="eduStartTime${numberIdEduExp}">2010</span> - <span class="get-end-time-edu" onblur="validateTimeExperience(this.id)" contenteditable="true" id="eduEndTime${numberIdEduExp}">2019</span>)</span><span contenteditable="true" onblur="validateInfoExp(this.id, 0, 35)" class="get-edu-name" id="educationName${numberIdEduExp}"> education</span></h3>
                                        <h4 contenteditable="true" class="get-edu-position" onblur="validateInfoExp(this.id, 0, 20)" id="educationPosition${numberIdEduExp}">Developer</h4>
                                        <p contenteditable="true" class="get-achievement" onblur="validateInfoExp(this.id, 0, 200)" id="achievement${numberIdEduExp}" class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                            </div>
                                </div>`;

    let newAdd = addSkill(myElement4,"main-3","main-2-right",numberEduExp-1);
}

function deleteEduButton(id) {
    let numberEduExp = countGraphic("main-2-right","main-education");
    let x = confirm("Are you sure you want to delete?");
    if(x) {
        if (numberEduExp === 1||id === 0) {
            alert("You can't delete it! Please change it!");
        }
        else {
            let newDelete = deleteSkillById("", 'edu-number'+id);
        }
    }
}

function addButton5() {
    let numberProject = countGraphic("sumProject","show-box");
    let idProject = 0;
    if (numberProject === 0) {
        idProject = numberProject+1;
    }
    if (numberProject !== 0 ) {
        let idLastProject = $('.get-id-final-project')[numberProject-1].id;
        const charactersOfLastProjectId = 11;
        let idnumberProject = parseInt(idLastProject.substring(charactersOfLastProjectId));
        idProject = idnumberProject+1;
    }

    if (numberProject%2 === 1) {
        let showBox = "show-box-2";
        let box = "box-1-1";
        let img = "project.png";
        let myElement8 = `<div id="project${idProject}" style="background: #00bfff" class="grid-item position-relative item2 show-box ${showBox} ${box} flex justify-content-center align-items-center flex-row">
                       <form class="d-none" action="">
                            <input name="project-name" aria-label="project" type="text" class="get-id-final-project get-project-name" id="projectName${idProject}" value="CV Project">
                            <input name="customer" aria-label="project" type="text" id="customer${idProject}" class="get-customer" value="CV Project">
                            <input name="time-start" aria-label="project" type="date" id="timeStart${idProject}" value="2018-08-18" class="get-time-start" >
                            <input name="time-end" aria-label="project" type="date" id="timeEnd${idProject}" value="2018-08-18" class="get-time-end" >
                            <input name="description" aria-label="project" type="text" id="description${idProject}" class="get-description" value="CV Project">
                            <input name="position" aria-label="project" type="text" id="position${idProject}" class="get-position" value="CV Project">
                            <input name="responsibility" aria-label="project" type="text" id="responsibility${idProject}" class="get-responsibility" value="CV Project">
                            <input name="technology" aria-label="project" type="text" id="technology${idProject}" class="get-technology" value="CV Project">
                            <input name="team-size" aria-label="project" type="number" id="teamSize${idProject}" class="get-team-size" value="6">
                            <input id="feature${idProject}" name="feature" class="get-feature" value="0">
                            <input name="color" type="color" aria-label="project" class="get-color-display" id="color${idProject}" value='#00bfff'>
                            <input  aria-label="project" id="size${idProject}" name="size" class="get-size-display" class="get-feature" value="2">
                        </form>
                        <button type="button" onclick="deleteProjectButton(${idProject})" class="position-absolute button-delete-project"><i class="m-0 fas fa-minus"></i></button>
                        <img onclick="setAttributeToModal(${idProject})" data-toggle="modal" data-target="#myModal" alt="Project" src="../../image/${img}">
                    </div>`;
        $(".item3").before(myElement8);
    }

    if (numberProject%2 === 0) {
        let showBox = "show-box-1";
        let box = "box-1-1";
        let img = "project.png";
        let myElement8 = `<div id="project${idProject}" style="background: #FD7038" class="grid-item position-relative item1 show-box ${showBox} ${box} flex justify-content-center align-items-center flex-row">
                       <form class="d-none" action="">
                            <input name="project-name" aria-label="project" type="text" class="get-id-final-project get-project-name" id="projectName${idProject}" value="CV Project">
                            <input name="customer" aria-label="project" type="text" id="customer${idProject}" class="get-customer" value="CV Project">
                            <input name="time-start" aria-label="project" type="date" id="timeStart${idProject}" value="2018-08-18" class="get-time-start" >
                            <input name="time-end" aria-label="project" type="date" id="timeEnd${idProject}" value="2018-08-18" class="get-time-end" >
                            <input name="description" aria-label="project" type="text" id="description${idProject}" class="get-description" value="CV Project">
                            <input name="position" aria-label="project" type="text" id="position${idProject}" class="get-position" value="CV Project">
                            <input name="responsibility" aria-label="project" type="text" id="responsibility${idProject}" class="get-responsibility" value="CV Project">
                            <input name="technology" aria-label="project" type="text" id="technology${idProject}" class="get-technology" value="CV Project">
                            <input name="team-size" aria-label="project" type="number" id="teamSize${idProject}" class="get-team-size" value="6">
                            <input id="feature${idProject}" name="feature" class="get-feature" value="0">
                            <input name="color" type="color" aria-label="project" class="get-color-display" id="color${idProject}" value='#FD7038'>
                            <input  aria-label="project" id="size${idProject}" class="get-size-display" name="size" class="get-feature" value="1">
                        </form>
                        <button type="button" onclick="deleteProjectButton(${idProject})" class="position-absolute button-delete-project"><i class="m-0 fas fa-minus"></i></button>
                        <img onclick="setAttributeToModal(${idProject})" data-toggle="modal" data-target="#myModal" alt="Project" src="../../image/${img}">
                    </div>`;
        $(".item3").before(myElement8);
    }


}

function deleteProjectButton(id) {
    $('#project'+id).remove();
}

function addButton6() {

    let numberSlide = countGraphic("slick","slide");
    $(".slick").slick('unslick');
    let idNumberLastSlide = 0;
    if (numberSlide === 0) {
        idNumberLastSlide = numberSlide+1;
    }
    if (numberSlide !== 0 ) {
        let idLastSlide = $('.slide')[numberSlide-1].id;
        const charactersOfLastSlideId = 12;
        idNumberLastSlide = parseInt(idLastSlide.substring(charactersOfLastSlideId)) + 1;
    }

    let myElement7 = `<div class="slide position-relative" id="number-slide${idNumberLastSlide}">
                                    <button type="button" onclick="deleteSlideButton(${idNumberLastSlide})" class="position-absolute button-delete-slide"><i class="m-0 fas fa-minus"></i></button>
                                    <div  class="ava-footer flex flex-column-reverse" id="ava-footer${idNumberLastSlide}" style="background-image: url('../image/avafooter.png')">
                                        <form id="" action="" method="post" class="bottom-ava-footer flex position-relative" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            <i  class="fas fa-camera position-absolute"></i>
                                            <input name="my-ava-footer${idNumberLastSlide}" class="custom-file-input input-group-file" id="inputFile${idNumberLastSlide}" type="file"">
                                        </form>
                                    </div>
                                    <div class="quote flex flex-row">
                                        <div class="quote-1-1">
                                            <span class="quote-1">“</span><span contenteditable="true" onblur="validateInfoExp(this.id, 0, 150)" id="contentSlide${idNumberLastSlide}" class="get-content-slide p2">Lorem ipsum dolo. Duis autem vel eum iriure dolor in hendrerit in</span>
                                            <span class="quote-2">”</span>
                                        </div>
                                    </div>
                                </div>`;
    $('.slick').append(myElement7);

    $(".slick").slick({
        dots: true,
        infinite: false,
        slidesToShow: 1,
        autoplay: false,
        speed: 2000,
        autoplaySpeed: 2000,
        slidesToScroll: 1,
        nextArrow: $('.next'),
        prevArrow: $('.prev')

    });
}

function addSlideEditButton() {

    let numberSlide = countGraphic("slick","slide");
    $(".slick").slick('unslick');
    let idNumberLastSlide = 0;
    if (numberSlide === 0) {
        idNumberLastSlide = numberSlide+1;
    }
    if (numberSlide !== 0 ) {
        let idLastSlide = $('.slide')[numberSlide-1].id;
        const charactersOfLastSlideId = 12;
        idNumberLastSlide = parseInt(idLastSlide.substring(charactersOfLastSlideId)) + 1;
    }

    let myElement7 = `<div class="slide slide-edit position-relative" id="number-slide${idNumberLastSlide}">
                                    <button type="button" onclick="deleteSlideButton(${idNumberLastSlide})" class="position-absolute button-delete-slide"><i class="m-0 fas fa-minus"></i></button>
                                    <div  class="ava-footer flex flex-column-reverse" id="ava-footer${idNumberLastSlide}" style="background-image: url('../../image/avafooter.png')">
                                        <form id="" action="" method="post" class="bottom-ava-footer flex position-relative" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            <i  class="fas fa-camera position-absolute"></i>
                                            <input name="my-ava-footer${idNumberLastSlide}" class="custom-file-input input-group-file-edit" id="inputFile${idNumberLastSlide}" type="file"">
                                        </form>
                                    </div>
                                    <div class="quote flex flex-row">
                                        <div class="quote-1-1">
                                            <span class="quote-1">“</span><span contenteditable="true" onblur="validateInfoExp(this.id, 0, 150)" id="contentSlide${idNumberLastSlide}" class="get-content-slide-edit p2">Lorem ipsum dolo. Duis autem vel eum iriure dolor in hendrerit in</span>
                                            <span class="quote-2">”</span>
                                        </div>
                                    </div>
                                </div>`;
    $('.slick').append(myElement7);

    $(".slick").slick({
        dots: true,
        infinite: false,
        slidesToShow: 1,
        autoplay: false,
        speed: 2000,
        autoplaySpeed: 2000,
        slidesToScroll: 1,
        nextArrow: $('.next'),
        prevArrow: $('.prev')

    });
}

function deleteSlideButton(id) {
    let numberSlide = countGraphic("slick","slide");
    $(".slick").slick('unslick');
    let x = confirm("Are you sure you want to delete?");
    if(x) {
            let newDelete = deleteSkillById("", 'number-slide'+id);
    }
    $(".slick").slick({
        dots: true,
        infinite: false,
        slidesToShow: 1,
        autoplay: false,
        speed: 2000,
        autoplaySpeed: 2000,
        slidesToScroll: 1,
        nextArrow: $('.next'),
        prevArrow: $('.prev')

    });
}
$(document).on('ready', function() {
    $(".slick").slick({
        dots: true,
        infinite: false,
        slidesToShow: 1,
        autoplay: false,
        speed: 2000,
        autoplaySpeed: 2000,
        slidesToScroll: 1,
        nextArrow: $('.next'),
        prevArrow: $('.prev')

    });
});

