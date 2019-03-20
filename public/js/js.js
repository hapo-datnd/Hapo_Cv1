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

function updatePercentProSkill(count) {
    if (count === 0) {
        let percentPro = $('#percent-pro').text();
        let percent = parseInt(percentPro);
        $('#circle-pro').css('stroke-dashoffset',(100-percent)*298.4513021/100);
    } else {
        let id = '#percent-pro'+count;
        let idCircle = '#circle-pro'+count;
        let percentPro = $(id).text();
        let percent = parseInt(percentPro);
        $(idCircle).css('stroke-dashoffset',(100-percent)*298.4513021/100);
    }
}

function updatePercentPerSkill(count) {
    if (count === 0) {
        let percentPro = $('#percent-per').text();
        let percent = parseInt(percentPro);
        $('#percent-show-per').css('width', percent+'%');
    } else {
        let id = '#percent-per'+count;
        let idShowPer = '#percent-show-per'+count;
        let percentPer = $(id).text();
        let percent = parseInt(percentPer);
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
    let idLastSkill = $('.skill-1')[numberSkill1-1].id;
    const charactersOfLastSkillProId = 9;
    let idNumberLastSkill = idLastSkill.substring(charactersOfLastSkillProId);
    if (idNumberLastSkill === '') {
        let id = (numberSkill1);
        let myElement1 = `<div id="skill_pro${id}" class="grid-item position-relative item1 skill-1 circle-skill flex-column flex justify-content-center align-items-center">
								<button type="button" onclick="delereProSkillButton(${id})" class="position-absolute button-left"><i class="m-0 fas fa-minus"></i></button>
                                <button type="button" class="position-absolute button-right"><i class="m-0 fas fa-plus"></i></button>
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
									<p id="name-skill-pro${id}" contenteditable="true" class="skill-1-p">name skill</p>
								</div>
							</div>`;

        let newAdd = addSkill(myElement1, "skill-1", "skillSum", numberSkill1-1);
    } else {
        let id = parseInt(idNumberLastSkill);
        let myElement1 = `<div id="skill_pro${id+1}" class="grid-item position-relative item1 skill-1 circle-skill flex-column flex justify-content-center align-items-center">
								<button type="button" onclick="delereProSkillButton(${id+1})" class="position-absolute button-left"><i class="m-0 fas fa-minus"></i></button>
                                <button type="button" class="position-absolute button-right"><i class="m-0 fas fa-plus"></i></button>
								<div class="pro-skill">
									<div class="graphic position-relative">
										<svg width="100%" height="100%" viewBox="0 0 100 100" class="donut">
											<circle class="donut-hole" cx="50" cy="50" r="47.5"></circle>
											<circle class="donut-ring" cx="50" cy="50" r="47.5"></circle>
											<circle id="circle-pro${id+1}" class="donut-segment-1" style="stroke-dasharray: 298.4513021;
                                    stroke-dashoffset: 104.4579557" cx="50" cy="50" r="47.5"></circle>											
										</svg>
										<p class="position-absolute percent-pro"><span onblur="updatePercentProSkill(${id+1})" class="get-percent-pro-skill" id="percent-pro${id+1}" contenteditable="true">65</span>%</p>
									</div>
									<p id="name-skill-pro${id+1}" contenteditable="true" class="skill-1-p">name skill</p>
								</div>
							</div>`;

        let newAdd = addSkill(myElement1, "skill-1", "skillSum", numberSkill1-1);
    }


}

function delereProSkillButton(id) {
    let numberSkill1 = countGraphic("skillSum","skill-1");
    let x = confirm("Are you sure you want to delete?");
    if(x) {
        if (numberSkill1 === 1) {
            alert("This is a last skill! Can't delete it!");
        }
        else {
            if(id === 0) {
                let newDelete = deleteSkillById("", 'skill_pro');
            }
            else {
                let newDelete = deleteSkillById("", 'skill_pro'+id);
            }
        }
    }
}

function addSkillPerButton() {
    let numberPerson_skill = countGraphic("personal-skill","person-skill");
    let idLastSkill = $('.person-skill')[numberPerson_skill-1].id;
    const charactersOfLastSkillPerId = 9;
    let idNumberLastSkill = idLastSkill.substring(charactersOfLastSkillPerId);
    if (idNumberLastSkill === '') {
        let id = (numberPerson_skill);
        let myElement2 = `<div id = "skill-per${id}" class="person-skill position-relative">
                                <button type="button" onclick="delerePerSkillButton(${id})" class="position-absolute btn-delete"><i class="m-0 fas fa-minus"></i></button>
                                <h4 id="name-skill-per${id}" class="get-name-per-skill" contenteditable="true">team work</h4>
                                <div class="all">
                                    <div class="percent percent-1" id="percent-show-per${id}" style="width: 65%">
                                    </div>
                                    <p class="percent-text-1"><span onblur="updatePercentPerSkill(${id})" class="get-percent-per-skill" id="percent-per${id}"  contenteditable="true">65</span>%</p>
                                </div>
                            </div>`;
        let newAdd = addSkill(myElement2, "person-skill", "personal-skill", numberPerson_skill-1);
    } else {
        let id = parseInt(idNumberLastSkill)+1;
        let myElement2 = `<div id = "skill-per${id}" class="person-skill position-relative">
                                <button type="button" onclick="delerePerSkillButton(${id})" class="position-absolute btn-delete"><i class="m-0 fas fa-minus"></i></button>
                                <h4 id="name-skill-per${id}" class="get-name-per-skill" contenteditable="true">team work</h4>
                                <div class="all">
                                    <div class="percent percent-1" id="percent-show-per${id}" style="width: 65%">
                                    </div>
                                    <p class="percent-text-1"><span onblur="updatePercentPerSkill(${id})" class="get-percent-per-skill" id="percent-per${id}"  contenteditable="true">65</span>%</p>
                                </div>
                            </div>`;
        let newAdd = addSkill(myElement2, "person-skill", "personal-skill", numberPerson_skill-1);
    }
    // body...
}

function delerePerSkillButton(id) {
    let numberPerson_skill = countGraphic("personal-skill","person-skill");
    let x = confirm("Are you sure you want to delete?");
    if(x) {
        if (numberPerson_skill === 1) {
            alert("This is a last skill! Can't delete it!");
        }
        else {
            if(id === 0) {
                let newDelete = deleteSkillById("", 'skill-per');
            }
            else {
                let newDelete = deleteSkillById("", 'skill-per'+id);
            }
        }
    }
}



function addButton3() {
    let numberWorkExp = countGraphic("main-2-left","main-work");
    let numberIdWorkExp = numberWorkExp;
    let idLastWorkExp = $('.main-work')[numberIdWorkExp-1].id;
    const charactersOfLastWorkId = 11;
    let idNumberLastSkill = parseInt(idLastWorkExp.substring(charactersOfLastWorkId)) + 1;
    alert(idNumberLastSkill);
    let myElement3 = `<div class="main-3 flex-row flex main-work position-relative" id="work-number${idNumberLastSkill}">
                                    <button type="button" onclick="deleteWorkButton(${idNumberLastSkill})" class="position-absolute button-delete-work"><i class="m-0 fas fa-minus"></i></button>
                                    <img class="img-1" alt="Icon Left" src="../../icon/Polygon.png">
                                    <div class="main-3-center">

                                    </div>
                                    <div class="main-3-box main-3-box-1 flex-column flex">
                                        <h3><span class="year">(<span contenteditable="true" class="get-start-time-work" id="start-time${numberIdWorkExp}">2010</span> - <span contenteditable="true" class="get-end-time-work" id="end-time${numberIdWorkExp}">2019</span>)</span><span contenteditable="true" class="get-company-name" id="company-name${numberIdWorkExp}"> abc company</span></h3>
                                        <h4 contenteditable="true" class="get-company-position" id="company-position${numberIdWorkExp}">Developer</h4>
                                        <p contenteditable="true" class="get-work-content" id="work-content${numberIdWorkExp}" class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
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
                                        <h3><span class="year">(<span contenteditable="true" class="get-start-time-edu" id="edu-start-time${numberIdEduExp}">2010</span> - <span class="get-end-time-edu" contenteditable="true" id="edu-end-time${numberIdEduExp}">2019</span>)</span><span contenteditable="true" class="get-edu-name" id="education-name${numberIdEduExp}"> education</span></h3>
                                        <h4 contenteditable="true" class="get-edu-position" id="education-position${numberIdEduExp}">Developer</h4>
                                        <p contenteditable="true" class="get-achievement" id="achievement${numberIdEduExp}" class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
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
        const charactersOfLastProjectId = 12;
        let idnumberProject = parseInt(idLastProject.substring(charactersOfLastProjectId));
        idProject = idnumberProject+1;
    }
    if (numberProject%10===0) {
        let showBox = "show-box-1";
        let box = "box-1-1";
        let img = "project2.png";
        let myElement8 = `<div id="project${idProject}" class="grid-item position-relative item1 show-box ${showBox} ${box} flex justify-content-center align-items-center flex-row">
                            <button type="button" class="position-absolute button-edit-project" onclick="setAttributeToModal(${idProject})" data-toggle="modal" data-target="#myModal"><i class="fas m-auto fa-pen"></i></button>
                            <form class="d-none" action="">
                                <input name="project-name" aria-label="project" type="text" class="get-id-final-project get-project-name" id="project-name${idProject}" value="CV Project">
                                <input name="customer" aria-label="project" type="text" id="customer${idProject}" class="get-customer" value="CV Project">
                                <input name="time-start" aria-label="project" type="text" id="time-start${idProject}" class="get-time-start" value="CV Project">
                                <input name="time-end" aria-label="project" type="text" id="time-end${idProject}" class="get-time-end" value="CV Project">
                                <input name="description" aria-label="project" type="text" id="description${idProject}" class="get-description" value="CV Project">
                                <input name="position" aria-label="project" type="text" id="position${idProject}" class="get-position" value="CV Project">
                                <input name="responsibility" aria-label="project" type="text" id="responsibility${idProject}" class="get-responsibility" value="CV Project">
                                <input name="technology" aria-label="project" type="text" id="technology${idProject}" class="get-technology" value="CV Project">
                                <input name="team-size" aria-label="project" type="number" id="team-size${idProject}" class="get-team-size" value="6">
                                <input id="feature${idProject}" name="feature" class="get-feature" value="0">
                            </form>
                            <button type="button" onclick="deleteProjectButton(${idProject})" class="position-absolute button-delete-project"><i class="m-0 fas fa-minus"></i></button>
                            <img alt="Project" src="../../image/${img}">
                        </div>`;
        $(".item3").before(myElement8);
    }

    if (numberProject%10===1) {
        let showBox = "show-box-2";
        let box = "box-2-1";
        let img = "project2.png";
        let myElement8 = `<div id="project${idProject}" class="grid-item position-relative item2 show-box ${showBox} ${box} flex justify-content-center align-items-center flex-row">
                            <button type="button" class="position-absolute button-edit-project" onclick="setAttributeToModal(${idProject})" data-toggle="modal" data-target="#myModal"><i class="fas m-auto fa-pen"></i></button>
                            <form class="d-none" action="">
                                <input name="project-name" aria-label="project" type="text" class="get-id-final-project get-project-name" id="project-name${idProject}" value="CV Project">
                                <input name="customer" aria-label="project" type="text" id="customer${idProject}" class="get-customer" value="CV Project">
                                <input name="time-start" aria-label="project" type="text" id="time-start${idProject}" class="get-time-start" value="CV Project">
                                <input name="time-end" aria-label="project" type="text" id="time-end${idProject}" class="get-time-end" value="CV Project">
                                <input name="description" aria-label="project" type="text" id="description${idProject}" class="get-description" value="CV Project">
                                <input name="position" aria-label="project" type="text" id="position${idProject}" class="get-position" value="CV Project">
                                <input name="responsibility" aria-label="project" type="text" id="responsibility${idProject}" class="get-responsibility" value="CV Project">
                                <input name="technology" aria-label="project" type="text" id="technology${idProject}" class="get-technology" value="CV Project">
                                <input name="team-size" aria-label="project" type="number" id="team-size${idProject}" class="get-team-size" value="6">
                                <input id="feature${idProject}" name="feature" class="get-feature" value="0">
                            </form>
                            <button type="button" onclick="deleteProjectButton(${idProject})" class="position-absolute button-delete-project"><i class="m-0 fas fa-minus"></i></button>
                            <img alt="Project" src="../../image/${img}">
                        </div>`;
        $(".item3").before(myElement8);
    }

    if (numberProject%10===2) {
        let showBox = "show-box-1";
        let box = "box-1-4";
        let img = "project.png";
        let myElement8 = `<div id="project${idProject}" class="grid-item position-relative item1 show-box ${showBox} ${box} flex justify-content-center align-items-center flex-row">
                            <button type="button" class="position-absolute button-edit-project" onclick="setAttributeToModal(${idProject})" data-toggle="modal" data-target="#myModal"><i class="fas m-auto fa-pen"></i></button>
                            <form class="d-none" action="">
                                <input name="project-name" aria-label="project" type="text" class="get-id-final-project get-project-name" id="project-name${idProject}" value="CV Project">
                                <input name="customer" aria-label="project" type="text" id="customer${idProject}" class="get-customer" value="CV Project">
                                <input name="time-start" aria-label="project" type="text" id="time-start${idProject}" class="get-time-start" value="CV Project">
                                <input name="time-end" aria-label="project" type="text" id="time-end${idProject}" class="get-time-end" value="CV Project">
                                <input name="description" aria-label="project" type="text" id="description${idProject}" class="get-description" value="CV Project">
                                <input name="position" aria-label="project" type="text" id="position${idProject}" class="get-position" value="CV Project">
                                <input name="responsibility" aria-label="project" type="text" id="responsibility${idProject}" class="get-responsibility" value="CV Project">
                                <input name="technology" aria-label="project" type="text" id="technology${idProject}" class="get-technology" value="CV Project">
                                <input name="team-size" aria-label="project" type="number" id="team-size${idProject}" class="get-team-size" value="6">
                                <input id="feature${idProject}" name="feature" class="get-feature" value="0">
                            </form>
                            <button type="button" onclick="deleteProjectButton(${idProject})" class="position-absolute button-delete-project"><i class="m-0 fas fa-minus"></i></button>
                            <img alt="Project" src="../../image/${img}">
                        </div>`;
        $(".item3").before(myElement8);
    }

    if (numberProject%10===3) {
        let showBox = "show-box-1";
        let box = "box-1-3";
        let img = "project.png";
        let myElement8 = `<div id="project${idProject}" class="grid-item position-relative item1 show-box ${showBox} ${box} flex justify-content-center align-items-center flex-row">
                            <button type="button" class="position-absolute button-edit-project" onclick="setAttributeToModal(${idProject})" data-toggle="modal" data-target="#myModal"><i class="fas m-auto fa-pen"></i></button>
                            <form class="d-none" action="">
                                <input name="project-name" aria-label="project" type="text" class="get-id-final-project get-project-name" id="project-name${idProject}" value="CV Project">
                                <input name="customer" aria-label="project" type="text" id="customer${idProject}" class="get-customer" value="CV Project">
                                <input name="time-start" aria-label="project" type="text" id="time-start${idProject}" class="get-time-start" value="CV Project">
                                <input name="time-end" aria-label="project" type="text" id="time-end${idProject}" class="get-time-end" value="CV Project">
                                <input name="description" aria-label="project" type="text" id="description${idProject}" class="get-description" value="CV Project">
                                <input name="position" aria-label="project" type="text" id="position${idProject}" class="get-position" value="CV Project">
                                <input name="responsibility" aria-label="project" type="text" id="responsibility${idProject}" class="get-responsibility" value="CV Project">
                                <input name="technology" aria-label="project" type="text" id="technology${idProject}" class="get-technology" value="CV Project">
                                <input name="team-size" aria-label="project" type="number" id="team-size${idProject}" class="get-team-size" value="6">
                                <input id="feature${idProject}" name="feature" class="get-feature" value="0">
                            </form>
                            <button type="button" onclick="deleteProjectButton(${idProject})" class="position-absolute button-delete-project"><i class="m-0 fas fa-minus"></i></button>
                            <img alt="Project" src="../../image/${img}">
                        </div>`;
        $(".item3").before(myElement8);
    }

    if (numberProject%10===4) {
        let showBox = "show-box-1";
        let box = "box-1-2";
        let img = "project.png";
        let myElement8 = `<div id="project${idProject}" class="grid-item position-relative item1 show-box ${showBox} ${box} flex justify-content-center align-items-center flex-row">
                            <button type="button" class="position-absolute button-edit-project" onclick="setAttributeToModal(${idProject})" data-toggle="modal" data-target="#myModal"><i class="fas m-auto fa-pen"></i></button>
                            <form class="d-none" action="">
                                <input name="project-name" aria-label="project" type="text" class="get-id-final-project get-project-name" id="project-name${idProject}" value="CV Project">
                                <input name="customer" aria-label="project" type="text" id="customer${idProject}" class="get-customer" value="CV Project">
                                <input name="time-start" aria-label="project" type="text" id="time-start${idProject}" class="get-time-start" value="CV Project">
                                <input name="time-end" aria-label="project" type="text" id="time-end${idProject}" class="get-time-end" value="CV Project">
                                <input name="description" aria-label="project" type="text" id="description${idProject}" class="get-description" value="CV Project">
                                <input name="position" aria-label="project" type="text" id="position${idProject}" class="get-position" value="CV Project">
                                <input name="responsibility" aria-label="project" type="text" id="responsibility${idProject}" class="get-responsibility" value="CV Project">
                                <input name="technology" aria-label="project" type="text" id="technology${idProject}" class="get-technology" value="CV Project">
                                <input name="team-size" aria-label="project" type="number" id="team-size${idProject}" class="get-team-size" value="6">
                                <input id="feature${idProject}" name="feature" class="get-feature" value="0">
                            </form>
                            <button type="button" onclick="deleteProjectButton(${idProject})" class="position-absolute button-delete-project"><i class="m-0 fas fa-minus"></i></button>
                            <img alt="Project" src="../../image/${img}">
                        </div>`;
        $(".item3").before(myElement8);
    }

    if (numberProject%10===5) {
        let showBox = "show-box-3";
        let box = "box-2-2";
        let img = "project.png";
        let myElement8 = `<div id="project${idProject}" class="grid-item position-relative item2 show-box ${showBox} ${box} flex justify-content-center align-items-center flex-row">
                            <button type="button" class="position-absolute button-edit-project" onclick="setAttributeToModal(${idProject})" data-toggle="modal" data-target="#myModal"><i class="fas m-auto fa-pen"></i></button>
                            <form class="d-none" action="">
                                <input name="project-name" aria-label="project" type="text" class="get-id-final-project get-project-name" id="project-name${idProject}" value="CV Project">
                                <input name="customer" aria-label="project" type="text" id="customer${idProject}" class="get-customer" value="CV Project">
                                <input name="time-start" aria-label="project" type="text" id="time-start${idProject}" class="get-time-start" value="CV Project">
                                <input name="time-end" aria-label="project" type="text" id="time-end${idProject}" class="get-time-end" value="CV Project">
                                <input name="description" aria-label="project" type="text" id="description${idProject}" class="get-description" value="CV Project">
                                <input name="position" aria-label="project" type="text" id="position${idProject}" class="get-position" value="CV Project">
                                <input name="responsibility" aria-label="project" type="text" id="responsibility${idProject}" class="get-responsibility" value="CV Project">
                                <input name="technology" aria-label="project" type="text" id="technology${idProject}" class="get-technology" value="CV Project">
                                <input name="team-size" aria-label="project" type="number" id="team-size${idProject}" class="get-team-size" value="6">
                                <input id="feature${idProject}" name="feature" class="get-feature" value="0">
                            </form>
                            <button type="button" onclick="deleteProjectButton(${idProject})" class="position-absolute button-delete-project"><i class="m-0 fas fa-minus"></i></button>
                            <img alt="Project" src="../../image/${img}">
                        </div>`;
        $(".item3").before(myElement8);
    }

    if (numberProject%10===6) {
        let showBox = "show-box-1";
        let box = "box-1-5";
        let img = "project2.png";
        let myElement8 = `<div id="project${idProject}" class="grid-item position-relative item1 show-box ${showBox} ${box} flex justify-content-center align-items-center flex-row">
                            <button type="button" class="position-absolute button-edit-project" onclick="setAttributeToModal(${idProject})" data-toggle="modal" data-target="#myModal"><i class="fas m-auto fa-pen"></i></button>
                            <form class="d-none" action="">
                                <input name="project-name" aria-label="project" type="text" class="get-id-final-project get-project-name" id="project-name${idProject}" value="CV Project">
                                <input name="customer" aria-label="project" type="text" id="customer${idProject}" class="get-customer" value="CV Project">
                                <input name="time-start" aria-label="project" type="text" id="time-start${idProject}" class="get-time-start" value="CV Project">
                                <input name="time-end" aria-label="project" type="text" id="time-end${idProject}" class="get-time-end" value="CV Project">
                                <input name="description" aria-label="project" type="text" id="description${idProject}" class="get-description" value="CV Project">
                                <input name="position" aria-label="project" type="text" id="position${idProject}" class="get-position" value="CV Project">
                                <input name="responsibility" aria-label="project" type="text" id="responsibility${idProject}" class="get-responsibility" value="CV Project">
                                <input name="technology" aria-label="project" type="text" id="technology${idProject}" class="get-technology" value="CV Project">
                                <input name="team-size" aria-label="project" type="number" id="team-size${idProject}" class="get-team-size" value="6">
                                <input id="feature${idProject}" name="feature" class="get-feature" value="0">
                            </form>
                            <button type="button" onclick="deleteProjectButton(${idProject})" class="position-absolute button-delete-project"><i class="m-0 fas fa-minus"></i></button>
                            <img alt="Project" src="../../image/${img}">
                        </div>`;
        $(".item3").before(myElement8);
    }

    if (numberProject%10===7) {
        let showBox = "show-box-1";
        let box = "box-1-3";
        let img = "project.png";
        let myElement8 = `<div id="project${idProject}" class="grid-item position-relative item1 show-box ${showBox} ${box} flex justify-content-center align-items-center flex-row">
                            <button type="button" class="position-absolute button-edit-project" onclick="setAttributeToModal(${idProject})" data-toggle="modal" data-target="#myModal"><i class="fas m-auto fa-pen"></i></button>
                            <form class="d-none" action="">
                                <input name="project-name" aria-label="project" type="text" class="get-id-final-project get-project-name" id="project-name${idProject}" value="CV Project">
                                <input name="customer" aria-label="project" type="text" id="customer${idProject}" class="get-customer" value="CV Project">
                                <input name="time-start" aria-label="project" type="text" id="time-start${idProject}" class="get-time-start" value="CV Project">
                                <input name="time-end" aria-label="project" type="text" id="time-end${idProject}" class="get-time-end" value="CV Project">
                                <input name="description" aria-label="project" type="text" id="description${idProject}" class="get-description" value="CV Project">
                                <input name="position" aria-label="project" type="text" id="position${idProject}" class="get-position" value="CV Project">
                                <input name="responsibility" aria-label="project" type="text" id="responsibility${idProject}" class="get-responsibility" value="CV Project">
                                <input name="technology" aria-label="project" type="text" id="technology${idProject}" class="get-technology" value="CV Project">
                                <input name="team-size" aria-label="project" type="number" id="team-size${idProject}" class="get-team-size" value="6">
                                <input id="feature${idProject}" name="feature" class="get-feature" value="0">
                            </form>
                            <button type="button" onclick="deleteProjectButton(${idProject})" class="position-absolute button-delete-project"><i class="m-0 fas fa-minus"></i></button>
                            <img alt="Project" src="../../image/${img}">
                        </div>`;
        $(".item3").before(myElement8);
    }

    if (numberProject%10===8) {
        let showBox = "show-box-1";
        let box = "box-1-2";
        let img = "project.png";
        let myElement8 = `<div id="project${idProject}" class="grid-item position-relative item1 show-box ${showBox} ${box} flex justify-content-center align-items-center flex-row">
                            <button type="button" class="position-absolute button-edit-project" onclick="setAttributeToModal(${idProject})" data-toggle="modal" data-target="#myModal"><i class="fas m-auto fa-pen"></i></button>
                            <form class="d-none" action="">
                                <input name="project-name" aria-label="project" type="text" class="get-id-final-project get-project-name" id="project-name${idProject}" value="CV Project">
                                <input name="customer" aria-label="project" type="text" id="customer${idProject}" class="get-customer" value="CV Project">
                                <input name="time-start" aria-label="project" type="text" id="time-start${idProject}" class="get-time-start" value="CV Project">
                                <input name="time-end" aria-label="project" type="text" id="time-end${idProject}" class="get-time-end" value="CV Project">
                                <input name="description" aria-label="project" type="text" id="description${idProject}" class="get-description" value="CV Project">
                                <input name="position" aria-label="project" type="text" id="position${idProject}" class="get-position" value="CV Project">
                                <input name="responsibility" aria-label="project" type="text" id="responsibility${idProject}" class="get-responsibility" value="CV Project">
                                <input name="technology" aria-label="project" type="text" id="technology${idProject}" class="get-technology" value="CV Project">
                                <input name="team-size" aria-label="project" type="number" id="team-size${idProject}" class="get-team-size" value="6">
                                <input id="feature${idProject}" name="feature" class="get-feature" value="0">
                            </form>
                            <button type="button" onclick="deleteProjectButton(${idProject})" class="position-absolute button-delete-project"><i class="m-0 fas fa-minus"></i></button>
                            <img alt="Project" src="../../image/${img}">
                        </div>`;
        $(".item3").before(myElement8);
    }

    if (numberProject%10===9) {
        let showBox = "show-box-1";
        let box = "box-1-1";
        let img = "project.png";
        let myElement8 = `<div id="project${idProject}" class="grid-item position-relative item1 show-box ${showBox} ${box} flex justify-content-center align-items-center flex-row">
                            <button type="button" class="position-absolute button-edit-project" onclick="setAttributeToModal(${idProject})" data-toggle="modal" data-target="#myModal"><i class="fas m-auto fa-pen"></i></button>
                            <form class="d-none" action="">
                                <input name="project-name" aria-label="project" type="text" class="get-id-final-project get-project-name" id="project-name${idProject}" value="CV Project">
                                <input name="customer" aria-label="project" type="text" id="customer${idProject}" class="get-customer" value="CV Project">
                                <input name="time-start" aria-label="project" type="text" id="time-start${idProject}" class="get-time-start" value="CV Project">
                                <input name="time-end" aria-label="project" type="text" id="time-end${idProject}" class="get-time-end" value="CV Project">
                                <input name="description" aria-label="project" type="text" id="description${idProject}" class="get-description" value="CV Project">
                                <input name="position" aria-label="project" type="text" id="position${idProject}" class="get-position" value="CV Project">
                                <input name="responsibility" aria-label="project" type="text" id="responsibility${idProject}" class="get-responsibility" value="CV Project">
                                <input name="technology" aria-label="project" type="text" id="technology${idProject}" class="get-technology" value="CV Project">
                                <input name="team-size" aria-label="project" type="number" id="team-size${idProject}" class="get-team-size" value="6">
                                <input id="feature${idProject}" name="feature" class="get-feature" value="0">
                            </form>
                            <button type="button" onclick="deleteProjectButton(${idProject})" class="position-absolute button-delete-project"><i class="m-0 fas fa-minus"></i></button>
                            <img alt="Project" src="../../image/${img}">
                        </div>`;
        $(".item3").before(myElement8);
    }

}

function deleteProjectButton(id) {
    $('#project'+id).remove();
}

function addButton6() {

    $(".slick").slick('unslick');
    let numberSlide = countGraphic("slick","slide");
    let idLastSlide = $('.slide')[numberSlide-1].id;
    const charactersOfLastSlideId = 12;
    let idNumberLastSlide = parseInt(idLastSlide.substring(charactersOfLastSlideId)) + 1;
    let myElement7 = `<div class="slide position-relative" id="number-slide${idNumberLastSlide}">
                                    <button type="button" onclick="deleteSlideButton(${idNumberLastSlide})" class="position-absolute button-delete-slide"><i class="m-0 fas fa-minus"></i></button>
                                    <div  class="ava-footer flex flex-column-reverse" id="ava-footer${idNumberLastSlide}" style="background-image: url('../image/avafooter.png')">
                                        <form id="" action="" method="post" class="bottom-ava-footer flex position-relative" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            <i  class="fas fa-camera position-absolute"></i>
                                            <input name="my-ava-footer${idNumberLastSlide}" class="custom-file-input input-group-file" id="input-file${idNumberLastSlide}" type="file"">
                                        </form>
                                    </div>
                                    <div class="quote flex flex-row">
                                        <div class="quote-1-1">
                                            <span class="quote-1">“</span><span contenteditable="true" id="content-slide${idNumberLastSlide}" class="get-content-slide p2">Lorem ipsum dolo. Duis autem vel eum iriure dolor in hendrerit in</span>
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
    $(".slick").slick('unslick');
    let numberSlide = countGraphic("slick","slide");
    let x = confirm("Are you sure you want to delete?");
    if(x) {
        if (numberSlide === 1|| id === 0) {
            alert("You can't delete it! Please change slide!");
        }
        else {
            let newDelete = deleteSkillById("", 'number-slide'+id);
        }
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


