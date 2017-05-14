<?php
    $UserId = $this->session->userdata('sc_sess')['UserId'];  
    $UserEmail = $this->session->userdata('sc_sess')['UserEmail']; 
?>  


 <!--Login Modal-->
    <div class="modal fade" id="login" role="dialog" style="z-index:9999">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                 <section class="modal-body">  

                  <!-- Username & Password Login form -->
                  <div class="popup_login user_login">
                    <div id="msgLog"></div>  
                      
                    <form action="<?php echo base_url()."index.php/auth/login"?>" method="post" id="formLogin" onsubmit="return false">
                     <div class="form-group">
                       <label class="control-label" for="inputDefault">Email</label>
                       <input id="logUser" type="email" name="UserEmail" class="form-control" autofocus>
                     </div>
                     <div class="form-group">
                       <label class="control-label" for="inputDefault">Password</label>
                       <input id="logPass" type="password" name="UserPass" class="form-control">
                     </div>
                     <div class="checkbox">
                         <label style="font-size:12px;"><input type="checkbox" name="remember"> &nbsp;  Remember me on this computer </label>
                     </div>
                     <div class="action_btns">
                       <div class="one_half"><button type="button" class="btn register">Regiter</button></div>
                       <div class="one_half last"><button type="submit" class="btn btn-info finishLogin" disabled>Log in</button></div>     
                     </div>
                   </form>
                   <a href="#" class="forgot_password">Forgot password ?</a>
                   <div class="centeredText ruleterms">
                     <span>By logging in, you agree to neogeekscamp's <a href="#">Terms of Service</a>, <a href="#">Cookie Policy</a>, <a href="#">Privacy Policy</a> and <a href="#">Content Policies</a>.</span>
                   </div> 
                     <div class="action_btns">
                        <div class="one"><button type="button" class="btn exit_btn" id="exit_login">Quit</button></div>   
                     </div>
                 </div>
                     
                  <!-- Reister form -->
                  <div class="popup_login user_register">
                    <div id="msgReg"></div>  
                      
                    <form action="<?php echo base_url()."index.php/auth/register" ?>" method="post" id="formRegister" onsubmit="return false">
                     <div class="form-group">
                       <label class="control-label" for="inputDefault">Email</label>
                       <input id="RegUser" type="email" name="UserEmail" class="form-control" autofocus>
                     </div>
                     <div class="form-group">
                        <label class="control-label" for="inputDefault">Password</label>
                        <div class="input-group date form_datetime">
                            <input type="password" id="RegPass" name="UserPass" class="form-control" required data-toggle="popover" title="Password Strength" data-content="Enter Password..." minlength="8">
                            <a onclick="randomString()" style="cursor:pointer" class="input-group-addon RegPass">
                                <i class="fa fa-plus-square-o"></i>
                            </a>
                        </div>
                    </div>                        
                     <div class="form-group">
                       <label class="control-label" for="inputDefault">Confirm Password</label>
                       <input id="RegPassConf" type="password" class="form-control RegPassConf" minlength="8" readonly>
                     </div>    
                     <div class="checkbox">
                         <label style="font-size:12px;"><input type="checkbox" id="showPass"> &nbsp;  Show Password </label>
                     </div>                     
                     <div class="action_btns">
                       <div class="one_half"><button type="button" class="btn back_btn" id="regBack">Back</button></div>
                       <div class="one_half last"><button type="submit" class="btn btn-info finishRegist" disabled>Register</button></div>     
                     </div>
                   </form>
                   <div class="centeredText ruleterms">
                     <span>By logging in, you agree to neogeekscamp's <a href="#">Terms of Service</a>, <a href="#">Cookie Policy</a>, <a href="#">Privacy Policy</a> and <a href="#">Content Policies</a>.</span>
                   </div> 
                     <div class="action_btns">
                        <div class="one"><button type="button" class="btn exit_btn" id="exit_regist">Quit</button></div>    
                     </div>
                 </div>     

                 <!-- Forgot form -->
                 <div class="popup_login forgot">
                  <form action="<?php echo base_url()."index.php/auth/requestforget"?>" method="post" id="formRecover" onsubmit="return false">
                   <div class="form-group">
                     <label class="control-label" for="inputDefault">Email</label>
                     <input id="recUser" type="email" name="UserEmail" class="form-control" placeholder="example : neogeeks@mail.com" autofocus>
                   </div>         
                   <div class="action_btns">
                     <div class="one_half"><button type="button" class="btn back_btn" id="recBack">Back</button></div>
                     <div class="one_half last"><button type="submit" class="btn btn-info finishRecobery" disabled>Recover</button></div>
                   </div>
                  </form>
                  <div class="centeredText">
                    <span>Please check your email after recover.</span>
                  </div>
                 </div>

                </section>
               </div>
            </div>
        </div>
    </div>
<!--/Login Modal-->
    
    