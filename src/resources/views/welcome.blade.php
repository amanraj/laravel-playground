<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Including the title-->
    <title>@yield('title')</title>

    
    <!--Common CSS Files-->
    
    <link rel="stylesheet/less" href="{{ asset('/materialize/css/materialize.min.css') }}">
    <!--Common JS Scripts -->   
    <script src="{{ asset('/js/less-1.6.1.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-1.9.1.min.js') }}"></script> 
    <script src="{{ asset('/materialize/js/materialize.min.js') }}"></script>
    @yield('head')

<script type="text/javascript">
            $(document).ready(function(){
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
            });

            $(document).ready(function(){
                //dropdown code
                $(".dropdown-browse").dropdown({ hover: false });
                $(".button-collapse").sideNav({
                    menuWidth: 300, // Default is 240
                    edge: 'left', // Choose the horizontal origin
                    closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
               });
            });
            
</script>

<style> 
    body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
}

            main {
                flex: 1 0 auto;
            }
            
            #sign_in.modal{
                max-width: 400px;
            }
            /* label color */
            .input-field label {
                color: #000;
            }
            /* label focus color */
            .input-field input[type=text]:focus + label {
                color:#0288d1;
            }
            /* label underline focus color */
            .input-field input[type=text]:focus {
                border-bottom: 1px solid #0288d1;
                box-shadow: 0 1px 0 0 #0288d1;
            }
             .input-field input[type=password]:focus + label {
                color:#0288d1;
            }
            /* label underline focus color */
            .input-field input[type=password]:focus {
                border-bottom: 1px solid #0288d1;
                box-shadow: 0 1px 0 0 #0288d1;
            }
             .input-field input[type=tel]:focus + label {
                color:#0288d1;
            }
            /* label underline focus color */
            .input-field input[type=tel]:focus {
                border-bottom: 1px solid #0288d1;
                box-shadow: 0 1px 0 0 #0288d1;
            }
             .input-field input[type=email]:focus + label {
                color:#0288d1;
            }
            /* label underline focus color */
            .input-field input[type=email]:focus {
                border-bottom: 1px solid #0288d1;
                box-shadow: 0 1px 0 0 #0288d1;
            }
            /* valid color */
           .input-field input[type=text].valid {
                border-bottom: 1px solid #0288d1;
                box-shadow: 0 1px 0 0 #0288d1;
            }
            /* invalid color */
            .input-field input[type=text].invalid {
                border-bottom: 1px solid #0288d1;
                box-shadow: 0 1px 0 0 #0288d1;
            }
            /* icon prefix focus color */
            .input-field .prefix.active {
                color: #0288d1;
            }
        
        </style>
     </head>     


<body>
        <?php $error=''; ?>
        <!--===============================
        Including the Header body
        ===============================-->
        <header>
            <ul id="search-menu" class="dropdown-content">
                <li>
                    <form>
                        <div class="input-field">
                            <input id="search" type="search" placeholder="Search..." required>
                            <label for="search"><i class="mdi-action-search right"></i></label>
                            <i class="mdi-navigation-close"></i>
                        </div>
                    </form>
                </li>
            </ul>

            <ul id="browse-menu" class="dropdown-content">
                <li><a href="{{ action('CollegeController@viewColleges') }}"  class="light-blue-text text-darken-4">Colleges<span class="badge light-blue-text text-darken-4"><i class="mdi-social-school" style="position:relative;bottom:20px"></i></span></a></li>
                <li><a href="{{ action('CourseController@viewCourses') }}"  class="light-blue-text text-darken-4">Courses<span class="badge light-blue-text text-darken-4"><i class="mdi-av-my-library-books" style="position:relative;bottom:20px"></i></span></a></li>
                <li><a href="#!"  class="light-blue-text text-darken-4">Appetite Hunt<span class="badge light-blue-text text-darken-4"><img src="{{ asset('images/counsel.jpg') }}" style="height:30px;width:30px;"></a></li>
                <li><a href="{{ action('AmbassadorController@viewAmbassadors') }}"  class="light-blue-text text-darken-4">Ambassadors<span class="badge light-blue-text text-darken-4"><img src="{{ asset('images/ambs.png') }}" style="width:30px;height:30px;position:relative;bottom:5px;right:-3px;"></span></a></li>
            </ul>

            <ul id="sign_in" class="modal">
                <li>
                    <div class="modal-header header grey darken-3" style=" padding:4px">
                        <h5 class="white-text" style="margin-left:20px">User Sign In</h5>
                    </div>
                    <form action="{{ url('/login') }}" method="post">
                    <div class="modal-content" style="margin-top:-40px">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  
                            <div class="row" style="margin-top:30px">
                                @if($error != '')
                                    <span class="red-text">{{ $error }}</span>
                                @endif
                            </div>                 
                            
                            <div class="row">
                                <div class="input-field" style="margin-top:10px">
                                    <i class="mdi-action-account-circle prefix"></i>
                                    <input id="icon_prefix" name="email" type="email" class="validate" required>
                                    <label for="icon_prefix"> Email</label>
                                </div>
                            </div>
                            <div class="row">    
                                <div class="input-field ">
                                    <i class="mdi-hardware-security prefix"></i>
                                    <input id="icon_secure" name="password" type="password" class="validate" required>
                                    <label for="icon_secure"> Password</label>
                                </div>
                            </div>    
                        
                    </div>  
                   <div class="modal-footer ">
                        <a href="https://www.facebook.com/"><img src="{{ asset('images/fb_log.png') }}" ></a>
                        <a href="https://twitter.com/"> <img src="{{ asset('images/twitter_log.png') }}"></a>
                        <button class="modal-action modal-close btn waves-effect waves-light header grey darken-1" type="submit" name="action">Sign In</button>
                    </div>
                    </form>
                </li>
            </ul>

            <ul id="sign_up" class="modal">
                <li>
                    <div class="modal-header header grey darken-3" style=" padding:4px">
                        <h5 class="white-text" style="margin-left:20px">New user registeration</h5>
                    </div>
                    <div class="modal-content" style="margin-top:0px">
                        <div class="row">
                            <form class="col s12" action="{{ url('/register') }}" method="post">                         
                                <div class="row">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                    <div class="row" style="">
                                        @if($error != '')
                                            <span class="red-text">{{ $error }}</span>
                                        @endif
                                    </div> 
                                    <div class="input-field col s12 m12 l6" >
                                        <i class="mdi-action-account-circle prefix"></i>
                                        <input id="icon_prefix" name="name" type="text" class="validate" required>
                                        <label for="icon_prefix"> Name</label>
                                    </div>
                                    <div class="input-field col s12 m12 l6 ">
                                        <i class="mdi-communication-phone prefix"></i>
                                        <input id="icon_telephone" name="mobile" type="tel" class="validate " required>
                                        <label for="icon_telephone">Telephone</label>
                                    </div>
                                    <div class="input-field col s12 m12 l6">
                                        <i class="mdi-communication-email prefix"></i>
                                        <input id="icon_mail" name="email" type="email" class="validate" required>
                                        <label for="icon_mail">Email</label>
                                    </div>
                                    <div class="input-field col s12 m12 l6">
                                        <i class="mdi-hardware-security prefix"></i>
                                        <input id="icon_secure" name="password" type="password" class="validate" required>
                                        <label for="icon_secure"> Password</label>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button class="modal-action modal-close btn waves-effect waves-light  header grey darken-1" type="submit" name="action">Sign Up</button>
                                <a href="{!!URL::to('github')!!}">Login with Facebook</a>
                                </div>

                            </form>
                        </div>
                   
                     
                    </div>
                </li>
            </ul>

                <nav>
                    <div class="nav-wrapper grey darken-3">

                        <a href="#!" class="brand-logo"><img class="responsive-img" src="{{ asset('/images/logo.png') }}"></a>
                        <!--Mobile Sidebar button-->
                        <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                        <!--================================
                        Menu for Desktops purple
                        =================================-->
                        <ul class="right hide-on-med-and-down">
                            <li>
                                <form>
                                    <div class="input-field">
                                        <input id="search" type="search" placeholder="Search..." required>
                                        <label for="search"><i class="mdi-action-search right"></i></label>
                                        <i class="mdi-navigation-close"></i>
                                    </div>
                                </form>
                            </li>
           
                            <li style="width:200px;"><a class="dropdown-browse" href="#!" data-activates="browse-menu"><b>Browse Site</b><i class="mdi-navigation-arrow-drop-down right"></i></a></li>

                            <li><a class=" modal-trigger " data-target="sign_in" style="cursor:pointer"><b>Sign In</b></a></li>
    
                            <li><a class="modal-trigger" data-target="sign_up" style="cursor:pointer"><b>Sign Up</b></a></li>
                        </ul>
                        <!--================================
                        Menu for Mobile and Tablets
                        =================================-->
                        <ul class="side-nav" id="mobile-menu">
           
                            <li>
                                <form>
                                    <div class="input-field">
                                        <input id="search" type="search" placeholder="Search..." required>
                                        <label for="search"><i class="mdi-action-search right"></i></label>
                                        <i class="mdi-navigation-close"></i>
                                    </div>
                                </form>
                            </li>
                            <li class="divider"></li>

                            <li class="no-padding">
                                <ul class="collapsible collapsible-accordion">
                                    <li>
                                        <a class="collapsible-header">Browse<i class="mdi-navigation-arrow-drop-down"></i></a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="#!">College</a></li>
                                                <li><a href="#!">Course</a></li>
                                                <li><a href="#!">Appetite Hunt</a></li>
                                                <li><a href="#!">Ambassadors</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>

                            <li class="no-padding">
                                <ul class="collapsible collapsible-accordion">
                                    <li>
                                        <a class=" collapsible-header modal-trigger " data-target="sign_in">Sign In</a>
                                           
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>

                            <li class="no-padding">
                                <ul class="collapsible collapsible-accordion">
                                    <li>
                                        <a class=" collapsible-header modal-trigger " data-target="sign_up">Sign Up</a>
                                            
                                               
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <main >
            @if($error != '')
                <script type="text/javascript">
                    
                    alert('{{ $error }}') ;   
                    
                </script>
            @endif
            <!--===============================
            Including the Main Body
            ===============================-->
            
                @yield('content')
            
            </main>
           <footer class="footer grey darken-4 white-text">
                <table>
                    <tr>
                    
                     <div style="font-size:4px">
                    <td class="grey-text text-lighten-4 left" style="font-size:14px;position:relative;bottom:-25px;" >


                   <small> © 2015 Copyrights Reserved</small></td></div>


<td class="grey-text text-lighten-4 right-align">
                    <ul>
                      <li style="display:inline"><a href="{{ action('footerController@be_ambassador') }}" class="white-text"><b>Be a Ambassador</b></a></li>
                      <li style="display:inline;margin-left:20px"><a href="{{ action('footerController@review') }}" class="white-text"><b>Form for Reviews</b></a></li>
                      <li style="display:inline;margin-left:20px"><a href="{{ action('footerController@team') }}" class="white-text"><b>About Us</b></a></li>
                      <li style="display:inline;margin-left:20px"><a href="{{ action('footerController@privacy_policy') }}" class="white-text"><b>Privacy Policy</b></a></li>
                      <li style="display:inline ;margin-left:20px"><a href="{{ action('footerController@term_condition') }}" class="white-text"><b>Terms & Conditions</b></a></li>
                    </ul>
                </td>
              </tr></table>
            </footer>
            
</body>
</html>



