<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 3/21/2019
 * Time: 11:43 AM
 */
?>
<script>
    $(document).ready(function() {

        let $firstName = $('#firstName').val();
        let $lastName = $('#lastName').val();
        if ((($firstName.length + $lastName.length) < 24) && ($firstName.length !== 0) && (lastName.length !== 0)) {
            let firtsName = $firstName;
            let lastName = $lastName;
            $('#nameFirst').html(firtsName);
            $('#nameLast').html(lastName);
        }

        $('#firstName').blur(function () {
            let $firstName = $('#firstName').val();
            let $lastName = $('#lastName').val();
            if ($firstName.trim().length === 0) {
                alert('A First name is required!');
                setTimeout(function () {
                    $('#firstName').focus();
                });
            }
            if (($firstName.length + $lastName.length) < 24) {
                let firtsName = $firstName;
                let lastName = $lastName;
                $('#nameFirst').html(firtsName);
                $('#nameLast').html(lastName);
            } else {
                alert('A length is not Invalid!');
                setTimeout(function () {
                    $('#firstName').focus();
                });
            }

        });

        $('#lastName').blur(function () {
            let $firstName = $('#firstName').val();
            let $lastName = $('#lastName').val();
            if ($lastName.trim().length === 0) {
                alert('A Last Name is required!');
                setTimeout(function () {
                    $('#lastName').focus();
                });
            }
            if (($firstName.length + $lastName.length) < 24) {
                let firtsName = $firstName;
                let lastName = $lastName;
                $('#nameFirst').html(firtsName);
                $('#nameLast').html(lastName);
            } else {
                alert('A length is not Invalid!');
                setTimeout(function () {
                    this.focus();
                });
            }
        });

        $('#dateOfBirth').blur(function () {
           if(($('#dateOfBirth').val()) === "") {
               alert('A Birthday is required!');
               setTimeout(function () {
                   this.focus();
               });
           }
        });

        $('#professional_skill_title').blur(function () {
            alert($('#professional_skill_title').html());
        });

    });
</script>
