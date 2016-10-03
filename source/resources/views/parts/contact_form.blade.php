<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/3/2016
 * Time:    2:29 AM
 **/
?>
<form>

    <!--Row for Name-->
    <div class="row">
        <div class="input-field col s12">
            <label for="name">Name</label>
            <br/>
            <input type="text" name="name" id="name" placeholder="First Name Or Username" class="validate" required />
        </div>
    </div>
    <!--Row for Name End-->


    <!--Row for Email and Telephone Number-->
    <div class="row">

        <!--Column for Email-->
        <div class="input-field col s12 m6 l6">
            <label for="email"><b>Email</b></label>
            <br/>
            <input type="text" name="email" id="email" placeholder="example@******.com" class="validate" required />
        </div>
        <!--Column for Email End-->


        <!--Column for telephone input-->
        <div class="input-field col s12 m6 l6">
            <label for="telephone">Telephone</label>
            <br/>
            <input type="tel" name="telephone" id="telephone" placeholder="+(CountryCode)(Phone Num.)" class="validate" />

        </div>
        <!--Column for telephone input End-->

    </div>
    <!--Row for Email and Telephone Number End-->


    <!--Row for Comment(Textfield)-->
    <div class="row">
        <div class="input-field col s12">
            <label for="message">Message</label><br/>
            <textarea name="message" class="materialize-textarea"></textarea>
        </div>
    </div>
    <!--Row for Comment(Textfield) End-->
</form>
<!--Form Ends-->
<button class="waves-effect waves-light btn card-panel indigo accent-1"><i class="material-icons">email</i>Submit</button>
