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

function addSkill(myElement, myClass,myClassParent, length) {
    let newParentClass = document.getElementsByClassName(myClassParent);
    let newClass = newParentClass[0].getElementsByClassName(myClass);
    let newAdd = newClass[length].outerHTML += myElement;
    // body...
}

function minusSkillById(myElement, myID) {
    let newClass = document.getElementById(myID);
    let newAdd = newClass.outerHTML = myElement;
    // body...
}

function minusSkill(myElement, myClass,myClassParent, length) {
    let newParentClass = document.getElementsByClassName(myClassParent);
    let newClass = newParentClass[0].getElementsByClassName(myClass);
    let newMinus = newClass[length].outerHTML = myElement;
    // body...
}

function countGraphic(myClass,myGraphic) {
    let count = document.getElementsByClassName(myClass);
    let x = count[0].getElementsByClassName(myGraphic);
    let length = x.length;
    return(length);
    // body...
}

let myElement1 = `<div class="grid-item position-relative item1 skill-1 circle-skill flex-column flex justify-content-center align-items-center">
								<button type="button" onclick="minusButton()" class="position-absolute button-left"><i class="m-0 fas fa-minus"></i></button>
                                <button type="button" class="position-absolute button-right"><i class="m-0 fas fa-plus"></i></button>
								<div class="pro-skill">
									<div class="graphic">
										<svg width="100%" height="100%" viewBox="0 0 100 100" class="donut">
											<circle class="donut-hole" cx="50" cy="50" r="47.5"></circle>
											<circle class="donut-ring" cx="50" cy="50" r="47.5"></circle>
											<circle class="donut-segment-1" style="stroke-dasharray: 298.4513021;
                                    stroke-dashoffset: 104.4579557" cx="50" cy="50" r="47.5"></circle>
											<text
													x="40" y="55">65%</text>
										</svg>
									</div>
									<p class="skill-1-p">html/css</p>
								</div>
							</div>`;

function addButton() {
    let numberSkill1 = countGraphic("skillSum","skill-1");
    let newAdd = addSkill(myElement1,"skill-1","skillSum",numberSkill1-1);
}

function minusButton(id) {
    let x = confirm("Are you sure you want to delete?");
    if(x) {
        let newAdd = minusSkillById("",'skill_pro_'+id);
    }

}

let myElement2 = `<div class="person-skill">
						<h4>team work</h4>
						<div class="all">
							<div class="percent percent-1" style="width: 65%">
                            </div>
							<p class="percent-text-1">65%</p>
						</div>
					</div>`;

function addButton2() {
    let numberPerson_skill = countGraphic("personal-skill","person-skill");
    let newAdd = addSkill(myElement2,"person-skill","personal-skill",numberPerson_skill-1);
    // body...
}

let myElement3 = `<div class="main-3 flex-row flex" >
                                    <img class="img-1" alt="Icon Left" src="../icon/Polygon.png">
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
                                    <img class="img-1" alt="Icon Left" src="../icon/Polygon.png">
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
    let newAdd = addSkill(myElement3,"main-3","main-2-right",numberEduExp-1);
}

function addButton5() {
    let numberProject = countGraphic("sumProject","show-box");

    if (numberProject%10===0) {
        let showBox = "show-box-1";
        let box = "box-1-1";
        let img = "project2.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10===1) {
        let showBox = "show-box-2";
        let box = "box-2-1";
        let img = "project2.png";
        let myElement8 = `<div class="grid-item item2 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10===2) {
        let showBox = "show-box-1";
        let box = "box-1-4";
        let img = "project.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10==3) {
        let showBox = "show-box-1";
        let box = "box-1-3";
        let img = "project.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10==4) {
        let showBox = "show-box-1";
        let box = "box-1-2";
        let img = "project.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10==5) {
        let showBox = "show-box-3";
        let box = "box-2-2";
        let img = "project.png";
        let myElement8 = `<div class="grid-item item2 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10==6) {
        let showBox = "show-box-1";
        let box = "box-1-5";
        let img = "project2.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10==7) {
        let showBox = "show-box-1";
        let box = "box-1-3";
        let img = "project.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10==8) {
        let showBox = "show-box-1";
        let box = "box-1-2";
        let img = "project.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

    if (numberProject%10==9) {
        let showBox = "show-box-1";
        let box = "box-1-1";
        let img = "project.png";
        let myElement8 = `<div class="grid-item item1 show-box `+showBox+` `+box+` flex justify-content-center align-items-center flex-row">
                            <img alt="Project" src="../image/`+img+`">
                        </div>`;
        let newAdd = addSkill(myElement8,"show-box","sumProject",numberProject-1);
    }

}

let myElement7 = `<div class="slide">
                                    <img alt="Image Footer" src="../image/avafooter.png">
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
    // body...
}
