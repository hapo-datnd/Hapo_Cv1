<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 3/5/2019
 * Time: 3:07 PM
 */
?>
<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-12 flex flex-column">
                <h2><span class="before">referen</span><span class="behind">ces</span></h2>
                <div class="slide-bottom">
                    <div class="slick">
                        <div class="slide position-relative" id="number-slide0">
                            <button type="button" onclick="deleteSlideButton(0)" class="position-absolute button-delete-slide"><i class="m-0 fas fa-minus"></i></button>
                            <div class="ava-footer flex flex-column-reverse" id="ava-footer0" style="background-image: url({{asset('image/avafooter.png')}})">
                                <form id="" action="" method="post" class="bottom-ava-footer flex position-relative" enctype="multipart/form-data">
                                    @csrf
                                    <i  class="fas fa-camera position-absolute"></i>
                                    <input name="my-ava-footer0" class="custom-file-input input-group-file" id="input-file0" type="file">
                                </form>
                            </div>
                            <div class="quote flex flex-row">
                                <div class="quote-1-1">
                                    <span class="quote-1">“</span><span contenteditable="true" id="content-slide0" class="get-content-slide p2">Lorem ipsum dolor sit amet, Duis autem vel eum iriure dolor in hendrerit in</span>
                                    <span class="quote-2">”</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="prev"><i class="fas fa-chevron-left"></i></span>
                    <span class="next"><i class="fas fa-chevron-right"></i></span>
                </div>
                <div class="panigation flex-column flex justify-content-center align-items-center">
                    <button type="button" onclick="addButton6()" class="flex-row flex justify-content-center align-items-center">
                        Add references
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
