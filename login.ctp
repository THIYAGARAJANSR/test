<?php
    /*$this->layout = false;*/
     $this->layout = 'defaultLogin';

    /*
	$this->start('header');
	echo '<div style="height:150px" id="lawco_header">';
	echo $this->element('homelogo');
	echo '</div>';
	$this->end();
	*/
    echo '<header class="flw top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="http://lawcountability.com/students/" class="logo">
                        <img src="http://lawcountability.com/wp-content/uploads/2015/10/logo1.jpg">
                    </a>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="top-nav">
                        <div class="mob-nav"></div>
                        <div class="menu-header-menu-container">
                            <ul class="clearfix">
                                <li><a href="http://lawcountability.com/">HOME</a></li>
                                <li><a href="http://lawcountability.com/how-it-works/">HOW IT WORKS</a></li>
                                <li><a href="http://lawcountability.com/pricing/">PRICING</a></li>
                                <li><a href="http://lawcountability.com/students/">STUDENTS</a></li>
                                <li><a href="http://lawcountability.com/ala-edition/">ALA Edition</a></li>
                                <li><a href="http://lawcountability.com/buzz/">BUZZ</a></li>
                                <li><a href="http://lawcountability.com/contact/">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </header>';
    echo '<div class="banner-bg clearer" style="background-image:url(http://lawcountability.com/wp-content/uploads/2015/10/StudentPhoto.jpg);">';
    echo '<div class="login_wrapper">';
    echo '<div class="login_form_div" id="login">';
    echo '<div class="login_field_wrapper">';
	echo '<div class="title">SIGN IN TO LAWCOUNTABILITY J.D.</div>';
	echo $this->Form->create(null, array('target' => '_top'));
	$_email = $this->Form->input('email',array('label' => false, 'style'=>'width: 302px;height: 33px;', 'required' =>1));
	$_password = $this->Form->input('password',array('label' => false, 'required' =>1));
	echo <<<EOT
        <div class="field_row">
            <div class="field_label_div">
                <label for='email'>Email</label>
            </div>
            <div class="field_input_div">
                $_email
            </div>
            <div class="clearer"></div>
        </div>
        <div class="field_row_small_margin">
            <div class="field_label_div">
                <label for='password'>Password</label>
            </div>
            <div class="field_input_div">
                $_password
            </div>
            <div class="clearer"></div>
        </div>
		
EOT;
    echo '<div class="forgot_password_label"><a class="forgot" href="/users/forgot">Forgot your password?</a></div>';
    echo '<div class="clearer"></div>';
	echo '<div class="submit_button_div">' . $this->Form->submit('Sign In') . '</div>';
    echo '<div class="clearer"></div>';

	echo $this->Form->end();
    echo '</div>';
    echo '</div>';
    
    echo '<div class="error_message">';
    echo $this->Session->flash();
    echo $this->Session->flash('good');
    echo $this->Session->flash('bad');
    echo $this->Session->flash('auth');
    echo '</div>';
    
    echo '</div>';
	echo '</div>';
	
	
?>
