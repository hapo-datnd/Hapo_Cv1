<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 3/5/2019
 * Time: 3:03 PM
 */
?>
<div class="content-4">

    <div class="container">
        <div class="row">
            <h2 class="col-12"><span class="before">portf</span><span class="behind">olio</span></h2>
            <div class="menu col-12">
                <ul>
                    <li><a>all</a></li>
                    <li><a>feature</a></li>
                    <li><a>2018</a></li>
                    <li><a>2017</a></li>
                    <li><a>>></a></li>
                </ul>
            </div>
            <div class="col-12 sumProject grid-container">
                <div id="project1" class="grid-item position-relative item1 show-box show-box-1 box-1-1 flex justify-content-center align-items-center flex-row">
                    <button type="button" class="position-absolute button-edit-project" onclick="setAttributeToModal(1)" data-toggle="modal" data-target="#myModal"><i class="fas m-auto fa-pen"></i></button>
                    <form class="d-none" action="">
                        <input name="project-name" aria-label="project"  type="text" id="project-name1" class="get-id-final-project get-project-name" value="CV Project">
                        <input name="customer" aria-label="project" type="text" id="customer1" class="get-customer" value="CV Project">
                        <input name="time-start" aria-label="project" type="text" id="time-start1" class="get-time-start" value="CV Project">
                        <input name="time-end" aria-label="project" type="text" id="time-end1" class="get-time-end" value="CV Project">
                        <input name="description" aria-label="project" type="text" id="description1" class="get-description" value="CV Project">
                        <input name="position" aria-label="project" type="text" id="position1" class="get-position" value="CV Project">
                        <input name="responsibility" aria-label="project" type="text" id="responsibility1" class="get-responsibility" value="CV Project">
                        <input name="technology" aria-label="project" type="text" id="technology1" class="get-technology" value="CV Project">
                        <input name="team-size" aria-label="project" type="number" id="team-size1" class="get-team-size" value="6">
                        <input id="feature1" name="feature" class="get-feature" value="0">
                    </form>
                    <button type="button" onclick="deleteProjectButton(1)" class="position-absolute button-delete-project"><i class="m-0 fas fa-minus"></i></button>
                    <img alt="Project" src="{{asset('image/project.png')}}">
                </div>
                <div class="grid-item item3 show-box-1 flex justify-content-center align-items-center flex-column">
                    <button type="button" onclick="addButton5()" class="flex-row flex justify-content-center align-items-center">
                        Add project
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <h1 id="header-modal">Project-Name</h1>
                        <form>
                            <div class="form-group col-md-12">
                                <label for="name-project-modal">Name-project</label>
                                <input type="text" class="form-control" id="name-project-modal" placeholder="Name-project">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="customer-project-modal">Customer</label>
                                <input type="text" class="form-control" id="customer-project-modal" placeholder="Customer">
                            </div>
                            <div class="form-group flex">
                                <div class="form-group col-md-6 mb-0">
                                    <label for="time-end-project-modal">Time Start</label>
                                    <input type="text" class="form-control" id="time-start-project-modal" placeholder="Time Start">
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <label for="time-start-project-modal">Time End</label>
                                    <input type="text" class="form-control" id="time-end-project-modal"  placeholder="Time End">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="description-project-modal">Description</label>
                                <input type="text" class="form-control" id="description-project-modal" placeholder="Description">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="position-project-modal">Position</label>
                                <input type="text" class="form-control" id="position-project-modal" placeholder="Position">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="responsibility-project-modal">Responsibility</label>
                                <input type="text" class="form-control" id="responsibility-project-modal" placeholder="Responsibility">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="technology-project-modal">Technology</label>
                                <input type="text" class="form-control" id="technology-project-modal" placeholder="Technology">
                            </div>
                            <div class="form-group col-md-12 flex">
                                <div class="form-group col-md-6 p-0">
                                    <label for="team-size-modal">Team Size</label>
                                    <input type="number" class="form-control" id="team-size-modal" placeholder="Team Size">
                                </div>
                                <div class="form-group col-md-6 p-0">
                                    <label for="feature-project-modal">Feature select</label>
                                    <select class="form-control" id="feature-project-modal">
                                        <option id="feature-modal" value="1">Feature</option>
                                        <option id="none-feature-modal" value="0">None Feature</option>
                                    </select>
                                </div>
                            </div>
                            <input type="number" class="d-none" value="" id="idProjectNow">
                            <div class="form-group col-md-12 flex justify-content-center align-content-center">
                                <button type="button" class="btn col-md-6  btn-outline-success" onclick="setAttributeToForm($('#idProjectNow').val())">Save</button>
                                <button type="button" class="btn col-md-6  btn-outline-dark" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
