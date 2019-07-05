        <!--// Header \\-->
        <header id="sportsmagazine-header" class="sportsmagazine-header-one">
            
            <!--// TopStrip \\-->
            <div class="sportsmagazine-topstrip">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-4">
                            <ul class="sportsmagazine-social-network">
                                <li><a href="https://www.facebook.com/" class="sportsmagazine-colorhover fa fa-facebook-official"></a></li>
                                <li><a href="https://twitter.com/login" class="sportsmagazine-colorhover fa fa-twitter-square"></a></li>
                                <li><a href="https://pk.linkedin.com/" class="sportsmagazine-colorhover fa fa-linkedin-square"></a></li>
                                <li><a href="https://plus.google.com/" class="sportsmagazine-colorhover fa fa-google-plus-square"></a></li>
                            </ul>
                        </aside>
                        <aside class="col-md-8">
                            <ul class="sportsmagazine-user-section">
                                <li><i class="fa fa-user"></i> <a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
                                <li><i class="fa fa-sign-in"></i> <a href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

            <!--// MainSection \\-->
            <div class="sportsmagazine-main-header">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-2"><a href="index-2.html" class="sportsmagazine-logo"><img src="{{asset('assetfront/images/logo-1a.png')}}" alt=""></a></aside>
                        <div class="col-md-10">
                            <div class="sportsmagazine-right-section">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                      </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                      <ul class="nav navbar-nav">
                                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                                        
                                        <li><a href="#">Pemain</a>
                                            <ul class="sportsmagazine-dropdown-menu">
                                                
                                                
                                                <li><a href="{{url('/squad')}}">Persegal U-16</a></li>
                                                <li><a href="{{url('/squad')}}">Persegal U-22</a></li>
                                                
                                                
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/berita')}}">Berita</a></li>
                                        <li><a href="{{url('/galeri')}}">Galeri</a></li>
                                         <li><a href="{{url('/daftarpertandingan')}}">Pertandingan</a></li>
                                       
                                      </ul>
                                    </div>
                                </nav>
                                <a data-toggle="modal" data-target="#searchModal" href="#" class="sportsmagazine-search-btn sportsmagazine-colorhover"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainSection \\-->

        </header>
        <!--// Header \\-->

    <div class="searchmodal modal fade" id="searchModal" tabindex="-1" role="dialog">
        <a href="#" data-dismiss="modal" class="sportsmagazine-modal-close"><i class="icon-uniF106"></i></a>
        <div class="modal-dialog" role="document">
            <div class="container">
                <div class="row">
                    <form class="sportsmagazine-search-box">
                        <input type="text" value="Search Your Keyword" onblur="if(this.value == '') { this.value ='Search Your Keyword'; }" onfocus="if(this.value =='Search Your Keyword') { this.value = ''; }">
                        <input type="submit" value="">
                        <i class="fa fa-search"></i>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- LoginModal -->
    <div class="loginmodal modal fade" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="sportsmagazine-login-box">
                <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i class="icon-uniF106"></i></a>
                <h4>Login To Your Account</h4>
                <form>
                    <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                    <input type="password" value="Password*" onblur="if(this.value == '') { this.value ='Password*'; }" onfocus="if(this.value =='Password*') { this.value = ''; }">
                    <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign In" class="sportsmagazine-bordercolor sportsmagazine-color"></label>
                </form>
                <h4>Try Our Socials Also</h4>
                <ul class="login-network">
                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                    <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Sign - Up Now !</a></p>
            </div>
        <div class="clearfix"></div>
        </div>
    </div>

    <!-- SignupModal -->
    <div class="loginmodal modal fade" id="signupModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="sportsmagazine-login-box">
                <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i class="icon-uniF106"></i></a>
                <h4>Sign Up Now</h4>
                <form>
                    <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                    <input type="text" value="Type your password*" onblur="if(this.value == '') { this.value ='Type your password*'; }" onfocus="if(this.value =='Type your password*') { this.value = ''; }">
                    <input type="text" value="Confirm your password*" onblur="if(this.value == '') { this.value ='Confirm your password*'; }" onfocus="if(this.value =='Confirm your password*') { this.value = ''; }">
                    <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign Up" class="sportsmagazine-bordercolor sportsmagazine-color"></label>
                </form>
                <h4>Try Our Socials Also</h4>
                <ul class="login-network">
                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                    <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Login - Now !</a></p>
            </div>
        <div class="clearfix"></div>
        </div>
    </div>