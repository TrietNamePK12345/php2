<!-- log in section start -->
<section class="log-in-section section-b-space">
    <div class="container-fluid-lg w-100">
        <div class="row">
            <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                <div class="image-contain">
                    <img src="<?=_WEB_ROOT?>assets/client/images/inner-page/sign-up.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                <div class="log-in-box">
                    <div class="log-in-title">
                        <h3>Chào mừng đến với Fastkart</h3>
                        <h4>Tạo tài khoản mới</h4>
                    </div>

                    <div class="input-box">



                        <?php  $form = \App\core\Form\Form::begin('',"post","row g-4") ?>
                            <div class="col-12">
                                <?= $form->field($model,'fullname')?>
                            </div>

                            <div class="col-12">
                                <?= $form->field($model,'email')->emailField()->emailLabel()?>
                            </div>

                            <div class="col-12">
                                <?= $form->field($model,'password')->passwordField()->passLabel()?>
                            </div>

                            <div class="col-12">
                                <div class="forgot-box">
                                    <div class="form-check ps-0 m-0 remember-box">
                                        <input class="checkbox_animated check-box" type="checkbox"
                                               id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Tôi đồng ý với
                                            <span>Điều kiện </span> và <span> Sự riêng tư</span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-animation w-100" type="submit">Đăng ký</button>
                            </div>
                            <?php \App\core\Form\Form::end() ?>
                    </div>

                    <div class="other-log-in">
                        <h6>hoăc</h6>
                    </div>

                    <div class="log-in-button">
                        <ul>
                            <li>
                                <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                   class="btn google-button w-100">
                                    <img src="<?=_WEB_ROOT?>assets/client/images/inner-page/google.png" class="blur-up lazyload"
                                         alt="">
                                    Đăng ký với Google
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" class="btn google-button w-100">
                                    <img src="<?=_WEB_ROOT?>assets/client/images/inner-page/facebook.png" class="blur-up lazyload"
                                         alt=""> Đăng ký với Facebook
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="other-log-in">
                        <h6></h6>
                    </div>

                    <div class="sign-up-box">
                        <h4>Bạn đã có tài khoản?</h4>
                        <a href="dang-nhap">Đăng nhập</a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-7 col-xl-6 col-lg-6"></div>
        </div>
    </div>
</section>
<!-- log in section end -->
