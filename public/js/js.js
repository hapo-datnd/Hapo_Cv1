$(document).on('ready', function() {
    $(".slick").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        autoplay: true,
        speed: 5000,
        autoplaySpeed: 3000,
        slidesToScroll: 1,
        nextArrow: false,
        prevArrow: false,
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

function addSkill(myElement, myClass,myClassParent, length) {
    let newParentClass = document.getElementsByClassName(myClassParent);
    let newClass = newParentClass[0].getElementsByClassName(myClass);
    let newAdd = newClass[length].outerHTML += myElement;
    // body...
}

function deleteSkillById(myElement, myID) {
    let newClass = document.getElementById(myID);
    let newAdd = newClass.outerHTML = myElement;
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

let myElement3 = `<div class="main-3 flex-row flex" >
                                    <img class="img-1" alt="Icon Left" src="../../icon/Polygon.png">
                                    <div class="main-3-center">

                                    </div>
                                    <div class="main-3-box main-3-box-1 flex-column flex " >
                                        <h3><span class="year">(2010 - 2019)</span> abc company</h3>
                                        <h4>Developer</h4>
                                        <p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                                    </div>
                                </div>`;

function addButton3() {
    let numberWorkExp = countGraphic("main-2-left","main-3");
    let newAdd = addSkill(myElement3,"main-3","main-2-left",numberWorkExp-1);
}

let myElement4 = `<div class="main-3 flex-row flex" >
                                    <img class="img-1" alt="Icon Left" src="../../icon/Polygon.png">
                                    <div class="main-3-center">

                                    </div>
                                    <div class="main-3-box main-3-box-1 flex-column flex " >
                                        <h3><span class="year">(2010 - 2019)</span> abc company</h3>
                                        <h4>Developer</h4>
                                        <p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                                    </div>
                                </div>`;

function addButton4() {
    let numberEduExp = countGraphic("main-2-right","main-3");
    let newAdd = addSkill(myElement4,"main-3","main-2-right",numberEduExp-1);
}

function addButton5() {
    let numberProject = countGraphic("sumProject","show-box");

    if (numberProject%10===0) {
        let showBox = "show-box-1";
        let box = "box-1-1";
        let img = "project2.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10===1) {
        let showBox = "show-box-2";
        let box = "box-2-1";
        let img = "project2.png";
        let myElement8 = `<div class="grid-item item2 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10===2) {
        let showBox = "show-box-1";
        let box = "box-1-4";
        let img = "project.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10===3) {
        let showBox = "show-box-1";
        let box = "box-1-3";
        let img = "project.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10===4) {
        let showBox = "show-box-1";
        let box = "box-1-2";
        let img = "project.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10===5) {
        let showBox = "show-box-3";
        let box = "box-2-2";
        let img = "project.png";
        let myElement8 = `<div class="grid-item item2 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10===6) {
        let showBox = "show-box-1";
        let box = "box-1-5";
        let img = "project2.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10===7) {
        let showBox = "show-box-1";
        let box = "box-1-3";
        let img = "project.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10===8) {
        let showBox = "show-box-1";
        let box = "box-1-2";
        let img = "project.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10===9) {
        let showBox = "show-box-1";
        let box = "box-1-1";
        let img = "project.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

}

let myElement7 = `<div class="slide">
                                    <img alt="Image Footer" src="../../image/avafooter.png">
                                    <div class="quote flex flex-row">
                                        <div class="quote-1-1">
                                            <span class="quote-1">“</span><span class="p2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in</span>
                                            <span class="quote-2">”</span>
                                        </div>
                                    </div>
                                </div>`;

function addButton6() {

    $(".slick").slick('unslick');

    let numberSlide = countGraphic("slick","slide");
    let newAdd = addSkill(myElement7,"slide","slick",numberSlide-1);

    $(".slick").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        autoplay: true,
        speed: 5000,
        autoplaySpeed: 3000,
        slidesToScroll: 1,
        nextArrow: false,
        prevArrow: false,
        nextArrow: $('.next'),
        prevArrow: $('.prev')

    });
}


