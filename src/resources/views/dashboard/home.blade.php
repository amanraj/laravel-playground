@extends('app')

@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
<link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('/css/owl.theme.css') }}">
<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
 <style type="text/css">
   
    .customNavigation{
      text-align: center;
    }
    

#owl-college .item, #owl-course .item{
  box-shadow:0px 1px 8px #999999;
  -webkit-box-shadow:0px 1px 8px #999999;
  -moz-box-shadow:0px 1px 8px #999999;
  -o-box-shadow:0px 1px 8px #999999;
  -ms-box-shadow:0px 1px 8px #999999;
  box-shadow:0px 1px 8px #999999;
  padding: 10px 0px;
  margin: 10px;
  
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;  
  padding-bottom: 0;
}



#owl-college table td, #owl-course table td{
  padding: 3px;
}
  </style>
@stop


@section('content')

<div class="container">
<h3>Your College Choices ( 6 )</h3>
<div class="col s8 center-align">
<div id="owl-college" class="owl-carousel owl-theme">
  <div class="item">
    
          <div class="card center-align">
            <div class="card-image">
              <img src="{{ asset('/images/colleges/iit_kgp.jpg') }}">
            </div>
           
            <div class="card-action ">
              <span class="black-text">
               <table>
                <tr  class="center-align">
                  <td><b><a href="#" class=" light-blue-text text-darken-4 ">College Name</a></b></td>
                </tr>
                <tr >
                  <td ><a class="light-blue-text text-darken-4" href="#" ><b>Notes</b></a></td>
                </tr>
                <tr>
                  <td>Users Rating</td>
                  <td>4.5</td>
                </tr>
                <tr>
                  <td>Website Rating</td>
                  <td>5.0</td>
                </tr>
                <tr>
                  <td><a class="light-blue-text text-darken-4" href="#"><b>Reviews (23)</b></a></td>
                </tr>
              </table></span>
            </div>
          </div>
  </div>





  
  <div class="item">
    
          <div class="card center-align">
            <div class="card-image">
              <img src="{{ asset('/images/colleges/iit_kgp.jpg') }}">
            </div>
           
            <div class="card-action ">
              <span class="black-text">
               <table>
                <tr  class="center-align">
                  <td><b><a href="#" class=" light-blue-text text-darken-4 ">College Name</a></b></td>
                </tr>
                <tr >
                  <td ><a class="light-blue-text text-darken-4" href="#" ><b>Notes</b></a></td>
                </tr>
                <tr>
                  <td>Users Rating</td>
                  <td>4.5</td>
                </tr>
                <tr>
                  <td>Website Rating</td>
                  <td>5.0</td>
                </tr>
                <tr>
                  <td><a class="light-blue-text text-darken-4" href="#"><b>Reviews (23)</b></a></td>
                </tr>
              </table></span>
            </div>
          </div>
  </div>

 <div class="item">
    
          <div class="card center-align">
            <div class="card-image">
              <img src="{{ asset('/images/colleges/iit_kgp.jpg') }}">
            </div>
           
            <div class="card-action ">
              <span class="black-text">
               <table>
                <tr  class="center-align">
                  <td><b><a href="#" class=" light-blue-text text-darken-4 ">College Name</a></b></td>
                </tr>
                <tr >
                  <td ><a class="light-blue-text text-darken-4" href="#" ><b>Notes</b></a></td>
                </tr>
                <tr>
                  <td>Users Rating</td>
                  <td>4.5</td>
                </tr>
                <tr>
                  <td>Website Rating</td>
                  <td>5.0</td>
                </tr>
                <tr>
                  <td><a class="light-blue-text text-darken-4" href="#"><b>Reviews (23)</b></a></td>
                </tr>
              </table></span>
            </div>
          </div>
  </div>
  <div class="item">
    
          <div class="card center-align">
            <div class="card-image">
              <img src="{{ asset('/images/colleges/iit_kgp.jpg') }}">
            </div>
           
            <div class="card-action ">
              <span class="black-text">
               <table>
                <tr  class="center-align">
                  <td><b><a href="#" class=" light-blue-text text-darken-4 ">College Name</a></b></td>
                </tr>
                <tr >
                  <td ><a class="light-blue-text text-darken-4" href="#" ><b>Notes</b></a></td>
                </tr>
                <tr>
                  <td>Users Rating</td>
                  <td>4.5</td>
                </tr>
                <tr>
                  <td>Website Rating</td>
                  <td>5.0</td>
                </tr>
                <tr>
                  <td><a class="light-blue-text text-darken-4" href="#"><b>Reviews (23)</b></a></td>
                </tr>
              </table></span>
            </div>
          </div>
  </div>
 <div class="item">
    
          <div class="card center-align">
            <div class="card-image">
              <img src="{{ asset('/images/colleges/iit_kgp.jpg') }}">
            </div>
           
            <div class="card-action ">
              <span class="black-text">
               <table>
                <tr  class="center-align">
                  <td><b><a href="#" class=" light-blue-text text-darken-4 ">College Name</a></b></td>
                </tr>
                <tr >
                  <td ><a class="light-blue-text text-darken-4" href="#" ><b>Notes</b></a></td>
                </tr>
                <tr>
                  <td>Users Rating</td>
                  <td>4.5</td>
                </tr>
                <tr>
                  <td>Website Rating</td>
                  <td>5.0</td>
                </tr>
                <tr>
                  <td><a class="light-blue-text text-darken-4" href="#"><b>Reviews (23)</b></a></td>
                </tr>
              </table></span>
            </div>
          </div>
  </div>
<div class="item">
    
          <div class="card center-align">
            <div class="card-image">
              <img src="{{ asset('/images/colleges/iit_kgp.jpg') }}">
            </div>
           
            <div class="card-action ">
              <span class="black-text">
               <table>
                <tr  class="center-align">
                  <td><b><a href="#" class=" light-blue-text text-darken-4 ">College Name</a></b></td>
                </tr>
                <tr >
                  <td ><a class="light-blue-text text-darken-4" href="#" ><b>Notes</b></a></td>
                </tr>
                <tr>
                  <td>Users Rating</td>
                  <td>4.5</td>
                </tr>
                <tr>
                  <td>Website Rating</td>
                  <td>5.0</td>
                </tr>
                <tr>
                  <td><a class="light-blue-text text-darken-4" href="#"><b>Reviews (23)</b></a></td>
                </tr>
              </table></span>
            </div>
          </div>
  </div>
  
</div>
</div>

<div class="customNavigation">
  <a class="btn prev light-blue darken-2">Previous</a>
  <a class="btn next light-blue darken-2">Next</a>
</div>
</div>

<!--=================================================
Course choices
=================================================-->
<div class="container">
<h3>Your Course DNA ( 7 )</h3>
<div class="col s8 center-allign">
<div id="owl-course" class="owl-carousel owl-theme">
  <div class="item">
    
          <div class="card center-align">
            <div class="card-image">
              <img src="{{ asset('/images/colleges/iit_kgp.jpg') }}">
            </div>
           
            <div class="card-action ">
              <span class="black-text ">
               <table>
                <tr  class="text-center">
                  <td><b><a href="#" class=" light-blue-text text-darken-4">Course Name</a></b></td>
                </tr>
                <tr >
                  <td ><a class="light-blue-text text-darken-4" href="#" ><b>Notes</b></a></td>
                </tr>
                <tr>
                  <td>Users Rating</td>
                  <td>4.5</td>
                </tr>
                <tr>
                  <td>Website Rating</td>
                  <td>5.0</td>
                </tr>
                <tr>
                  <td><a class="light-blue-text text-darken-4" href="#"><b>Reviews (23)</b></a></td>
                </tr>
              </table></span>
            </div>
          </div>
  </div>
    <div class="item">
    
          <div class="card center-align">
            <div class="card-image">
              <img src="{{ asset('/images/colleges/iit_kgp.jpg') }}">
            </div>
           
            <div class="card-action ">
              <span class="black-text ">
               <table>
                <tr  class="text-center">
                  <td><b><a href="#" class=" light-blue-text text-darken-4">Course Name</a></b></td>
                </tr>
                <tr >
                  <td ><a class="light-blue-text text-darken-4" href="#" ><b>Notes</b></a></td>
                </tr>
                <tr>
                  <td>Users Rating</td>
                  <td>4.5</td>
                </tr>
                <tr>
                  <td>Website Rating</td>
                  <td>5.0</td>
                </tr>
                <tr>
                  <td><a class="light-blue-text text-darken-4" href="#"><b>Reviews (23)</b></a></td>
                </tr>
              </table></span>
            </div>
          </div>
  </div>
    <div class="item">
    
          <div class="card center-align">
            <div class="card-image">
              <img src="{{ asset('/images/colleges/iit_kgp.jpg') }}">
            </div>
           
            <div class="card-action ">
              <span class="black-text ">
               <table>
                <tr  class="text-center">
                  <td><b><a href="#" class=" light-blue-text text-darken-4">Course Name</a></b></td>
                </tr>
                <tr >
                  <td ><a class="light-blue-text text-darken-4" href="#" ><b>Notes</b></a></td>
                </tr>
                <tr>
                  <td>Users Rating</td>
                  <td>4.5</td>
                </tr>
                <tr>
                  <td>Website Rating</td>
                  <td>5.0</td>
                </tr>
                <tr>
                  <td><a class="light-blue-text text-darken-4" href="#"><b>Reviews (23)</b></a></td>
                </tr>
              </table></span>
            </div>
          </div>
  </div>
  <div class="item">
    
          <div class="card center-align">
            <div class="card-image">
              <img src="{{ asset('/images/colleges/iit_kgp.jpg') }}">
            </div>
           
            <div class="card-action ">
              <span class="black-text ">
               <table>
                <tr  class="text-center">
                  <td><b><a href="#" class=" light-blue-text text-darken-4">Course Name</a></b></td>
                </tr>
                <tr >
                  <td ><a class="light-blue-text text-darken-4" href="#" ><b>Notes</b></a></td>
                </tr>
                <tr>
                  <td>Users Rating</td>
                  <td>4.5</td>
                </tr>
                <tr>
                  <td>Website Rating</td>
                  <td>5.0</td>
                </tr>
                <tr>
                  <td><a class="light-blue-text text-darken-4" href="#"><b>Reviews (23)</b></a></td>
                </tr>
              </table></span>
            </div>
          </div>
  </div>
    <div class="item">
    
          <div class="card center-align">
            <div class="card-image">
              <img src="{{ asset('/images/colleges/iit_kgp.jpg') }}">
            </div>
           
            <div class="card-action ">
              <span class="black-text ">
               <table>
                <tr  class="text-center">
                  <td><b><a href="#" class=" light-blue-text text-darken-4">Course Name</a></b></td>
                </tr>
                <tr >
                  <td ><a class="light-blue-text text-darken-4" href="#" ><b>Notes</b></a></td>
                </tr>
                <tr>
                  <td>Users Rating</td>
                  <td>4.5</td>
                </tr>
                <tr>
                  <td>Website Rating</td>
                  <td>5.0</td>
                </tr>
                <tr>
                  <td><a class="light-blue-text text-darken-4" href="#"><b>Reviews (23)</b></a></td>
                </tr>
              </table></span>
            </div>
          </div>
  </div>
    <div class="item">
    
          <div class="card center-align">
            <div class="card-image">
              <img src="{{ asset('/images/colleges/iit_kgp.jpg') }}">
            </div>
           
            <div class="card-action ">
              <span class="black-text ">
               <table>
                <tr  class="text-center">
                  <td><b><a href="#" class=" light-blue-text text-darken-4">Course Name</a></b></td>
                </tr>
                <tr >
                  <td ><a class="light-blue-text text-darken-4" href="#" ><b>Notes</b></a></td>
                </tr>
                <tr>
                  <td>Users Rating</td>
                  <td>4.5</td>
                </tr>
                <tr>
                  <td>Website Rating</td>
                  <td>5.0</td>
                </tr>
                <tr>
                  <td><a class="light-blue-text text-darken-4" href="#"><b>Reviews (23)</b></a></td>
                </tr>
              </table></span>
            </div>
          </div>
  </div>
  <div class="item">
    
          <div class="card center-align">
            <div class="card-image">
              <img src="{{ asset('/images/colleges/iit_kgp.jpg') }}">
            </div>
           
            <div class="card-action ">
              <span class="black-text ">
               <table>
                <tr  class="text-center">
                  <td><b><a href="#" class=" light-blue-text text-darken-4">Course Name</a></b></td>
                </tr>
                <tr >
                  <td ><a class="light-blue-text text-darken-4" href="#" ><b>Notes</b></a></td>
                </tr>
                <tr>
                  <td>Users Rating</td>
                  <td>4.5</td>
                </tr>
                <tr>
                  <td>Website Rating</td>
                  <td>5.0</td>
                </tr>
                <tr>
                  <td><a class="light-blue-text text-darken-4" href="#"><b>Reviews (23)</b></a></td>
                </tr>
              </table></span>
            </div>
          </div>
  </div>
</div>
</div>

<div class="customNavigation">
  <a class="btn prev-course light-blue darken-2">Previous</a>
  <a class="btn next-course light-blue darken-2">Next</a>
</div>
</div>

<!--====================================
Javascript files
=====================================-->
<script type="text/javascript">
  $(document).ready(function() {
 
  var owl_college = $("#owl-college");
 
  owl_college.owlCarousel({
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1000,3], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,2], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  })
 
  // Custom Navigation Events
  $(".next").click(function(){
    owl_college.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl_college.trigger('owl.prev');
  })

  var owl_course = $("#owl-course");
 
  owl_course.owlCarousel({
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1000,3], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,2], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  })
 
  // Custom Navigation Events
  $(".next-course").click(function(){
    owl_course.trigger('owl.next');
  })
  $(".prev-course").click(function(){
    owl_course.trigger('owl.prev');
  })
 
});
</script>


@stop