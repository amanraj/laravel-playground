@extends('app')

@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
<script type="text/javascript">

    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    });
</script>
<style type="text/css">
           
#notification.modal img{
    width:100px;
    height:100px;
} 
#notification.modal{
    max-width:30%;
    max-height: 60%;
    border-radius: 5px;
    box-shadow:0 3px 7px rgba(0,0,0,.25); 
}
p{
    word-wrap:break-word;
}
</style>    	
@stop


@section('content')

	<header>

            <ul id="my-account" class="dropdown-content">
                <li><a data-target="notification"  class="modal-trigger light-blue-text text-darken-4">Notifications</a></li>
                <li><a href="#!"  class="light-blue-text text-darken-4">Settings</a></li>
                <li><a href="home"  class="light-blue-text text-darken-4">Sign Out</a></li>
            </ul>

            <nav>
                <div class="nav-wrapper   grey darken-3">

                    <a href="#!" class="brand-logo"><img class="responsive-img" src="{{ asset('/images/logo.png') }}"></a>
                    <!--Mobile Sidebar button-->
                    <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    <!--================================
                    Menu for Desktops purple
                    =================================-->
                    <ul class="right hide-on-med-and-down">
            
                        <li><a class="dropdown-account" href="#!" data-activates="my-account"><b>Candice Swanepoel</b><i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                    </ul>
                    <!--================================
                    Menu for Mobile and Tablets
                    =================================-->
                   <ul class="side-nav" id="mobile-menu">
                        
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li>
                                    <a class="collapsible-header">Candice Swanepoel<i class="mdi-navigation-arrow-drop-down"></i></a>
                                    <div class="collapsible-body">
                                    <ul>
                                        <li><a data-target="notification" class=" modal-trigger black-text">Notification<span class="new badge">4</span></a></li>
                                        <li><a href="#!">Settings</a></li>
                                        <li><a href="#!">Sign Out</a></li>
                                    </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

<script type="text/javascript">

    $(document).ready(function(){
        //dropdown code
        
        $(".dropdown-account").dropdown({ hover: false });
        $(".button-collapse").sideNav({
            menuWidth: 300, // Default is 240
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
        });
    });

</script>

<script>
            $(document).ready(function() {
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();
            });
</script>

</header>
    

    <!--===============================
    Including the Main Body
    ===============================-->

<!--===============================
Including the Notification body
===============================-->
<div id="notification" class="modal ">
    <div class="modal-header blue darken-3" style=" padding:4px">
        <h5 class="white-text" style="margin-left:20px">Notifications</h5>
    </div>
    <div class="modal-content ">
        <table class="bordered striped responsive-table">
            <tr >
                <td><img src="http://www.hdwallpapersimages.com/wp-content/uploads/2014/01/Winter-Tiger-Wild-Cat-Images.jpg" class="responsive-img"></td>
                <td class="blue-text text-darken-4"><b>Candice Swanepoel</b><br><span class="blue-text text-darken-4">Campus Ambassador,IIT Kgp</span><br>Accepted Your Invitation</td>
            </tr>
            <tr>
                <td><img src="http://www.hdwallpapersimages.com/wp-content/uploads/2014/01/Winter-Tiger-Wild-Cat-Images.jpg" class="responsive-img"></td>
                <td class="blue-text text-darken-4"><b>Candice Swanepoel</b><br><span class="blue-text text-darken-4">Campus Ambassador,IIT Kgp</span><br>Accepted Your Invitation</td>
            </tr>
            <tr>
                <td><img src="http://www.hdwallpapersimages.com/wp-content/uploads/2014/01/Winter-Tiger-Wild-Cat-Images.jpg" class="responsive-img"></td>
                <td class="blue-text text-darken-4"><b>Candice Swanepoel</b><br><span class="blue-text text-darken-4">Campus Ambassador,IIT Kgp</span><br>Accepted Your Invitation</td>
            </tr>
        </table>    
    </div>
</div>


        <div class="container">
            <div class="row">
                <div class="card s12">
                    <div class="row" style="margin-left:25px">
                        <h5 class="light-blue-text text-darken-4">Indian Institue of Technology Kharagpur Forum</h5>
                    
                        <div class="col s4">
                            <p><img class="responsive-img" src="candice.jpg"  width="100%"></p>
                            <p class="light-blue-text text-darken-4 center-align"><b>Candice Swanepoel</b></p>
                        </div>
                        <div class="card grey lighten-2 " style="padding:5px; height:300px;margin-right:30px">
                            <div class="col s12"><div class="card-content">
                                <p><b>Campus Ambassador Speaks....</b></p>
                                <p>gnzxcfnvfcxzn</p>
                                <br><br>
                                <p>cdsdc </p>
                                 <div style="position:relative;top:50px";>
                                <p>candice--awn@abc.com</p>
                                <p>012356789 </p></div>
                                    <a class="btn-floating btn tooltipped blue darken-3  btn waves-effect waves-light" data-position="left" data-delay="25" data-tooltip="Edit" style="position:relative;left:490px;top:75px"><i class="mdi-content-create"></i></a>
                              
                            </div></div>
                        </div>
                    </div>
                </div>
            </div>    <div class="row">  <div class="col s12">
         <div class="row">
                <div class="card" style="padding:10px">
                    <h4 class="light-blue-text text-darken-4">Recent Questions</h4>
                <div class="col offset-s0 offset-l6">    
                    <ul class="pagination  blue darken-3">
                        <li class="waves-effect"><a href="#!"><i class="mdi-navigation-chevron-left"></i></a></li>
                        <li class="active blue darken-3"><a href="#!"  >1</a></li>
                        <li class="waves-effect"><a href="#!">2</a></li>
                        <li class="waves-effect"><a href="#!">3</a></li>
                        <li class="waves-effect"><a href="#!">4</a></li>
                        <li class="waves-effect"><a href="#!">5</a></li>
                        <li class="waves-effect"><a href="#!"><i class="mdi-navigation-chevron-right"></i></a></li>
                    </ul>
                </div>
      
                    <table class="striped">
                        <tr>
                            <td class="col s5 m12 l12"><div class="col s3 m1 l1">
                                <img src="avatar-lg.png" class="responsive-img" style="margin-top:10px">
                            </div><div class="col s9 m11 l11">
                                <div class="ambs_speaks">
                                    <p><b>May I register more than one work on the same application? Where do I list the titles?</b></p>
                                </div></div>
                          
                            <div class="col offset-s8 offset-l11">        
                               <img src="red.png" >
                               <img src="green.png" >
                            </div></td>
                        </tr>
                    <tr>
                            <td class="col s5 m12 l12"><div class="col s3 m1 l1">
                                <img src="avatar-lg.png" class="responsive-img" style="margin-top:10px">
                            </div><div class="col s9 m11 l11">
                                <div class="ambs_speaks">
                                    <p><b>CMay I register more than one work on the same application? Where do I list the titles?..</b></p>
                                </div></div>
                          
                            <div class="col offset-s8 offset-l11">        
                               <img src="red.png">
                               <img src="green.png">
                            </div></td>
                        </tr>
                      <tr>
                            <td class="col s5 m12 l12"><div class="col s3 m1 l1">
                                <img src="avatar-lg.png" class="responsive-img" style="margin-top:10px">
                            </div><div class="col s9 m11 l11">
                                <div class="ambs_speaks">
                                    <p><b>Campus Ambassador Speaks.ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg...</b></p>
                                </div></div>
                          
                            <div class="col offset-s8 offset-l11">        
                               <img src="red.png">
                               <img src="green.png">
                            </div></td>
                        </tr>
                    </table>    
                </div>
            </div></div>
        </div></div>

@stop