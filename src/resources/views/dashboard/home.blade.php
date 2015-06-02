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

table.heading , table.heading td{
    border : 2px solid grey;

  }

.full{
  width: 1250px;
}

footer{
  width: 1349px;
}

  </style>
@stop


@section('content')

<div class="full">
    
    
            @if(Session::has('message'))
            <div class="row">  
        <div class="flash" style="padding:10px;border:1px solid grey">
            {{ Session::get('message') }}
        </div>
    </div>
    @endif
        
                <div class="row">
                    <div class="col s3" style="position:relative;top:457px;width:250px;">
                      <table class= "heading">
                <div class="card center-align" >               
                <tr >
                  <td  style="height:107px;text-align:center"><b>Website</b></td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:center"><b>Exam</b></td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:center"><b>Last year rank range</b></td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:center"><b>Location</b></td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:center"><b>Fees</b></td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:center"><b>Comments</b></td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:center"><b>Course Duration</b></td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:center"><b>Course Content</b></td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:center"><b>Future Scope</b></td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:center"><b>Placements</b></td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:center"><b>Mode of Study</b></td>
                </tr>                
                </div>
              </table>
              </div>
            <h3>Your College Choices ( {{ count($choice) }} )</h3>
  <div id="owl-college" class="owl-carousel owl-theme col s9">        
    

@foreach ($choice as $choices)
            <div class="item">
            
                <div class="card center-align" style="height:375px;">
                    <div class="card-image">
                        <img src="{{ asset('/images/colleges/iit_kgp.jpg') }}">
                    </div>
                    <div class="card-action ">
                        <span class="black-text">
                            <table>
                                <tr >
                                    <td><b><a href="{{ action('CollegeController@college' , [ $choices->college_id ]) }}" class=" light-blue-text text-darken-4 ">{{ $choices->college_name }}</a></b></td>
                                </tr>
                                <tr >
                                    <td ><a class="center-align light-blue-text text-darken-4" href="{{ action('CourseController@course' , [ $choices->course_id ]) }}" ><b>{{ $choices->course_name }}</b></a></td>
                                </tr>
                                <tr>
                                    <td>Users Rating</td>
                                    <td>4.5</td>
                                </tr>
                                <tr>
                                    <td><a class="light-blue-text text-darken-4" href="#"><b>Notes</b></a></td>
                                </tr>
                                <tr>
                                    <td><a class="light-blue-text text-darken-4" href="#"><b>Reviews (23)</b></a></td>
                                </tr>
                            </table>
                        </span>
                    </div>
                </div>
                <div class="card center-align">
                    <div class="card-content ">
                        <span class="black-text ">
                            <table class= "bordered">
                               
                <tr >
                  <td  style="height:85px;text-align:vertical"><a href="http://{{ $choices->college_website }}" target="_blank">{{ $choices->college_website }}</td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:vertical">{{ $choices->college_entrance_exam }}</td>
                </tr>
                <tr >
                  <td  style="height:85px;text-align:vertical">{{ $choices->last_year_stats }}</td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:vertical">{{ $choices->college_location }}</td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:vertical">{{ $choices->college_fees }}</td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:vertical">{{ $choices->college_comments }}</td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:vertical">{{ $choices->course_duration }} years</td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:vertical">{{ $choices->course_content }}</td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:vertical">{{ $choices->future_scope }}</td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:vertical">{{ $choices->course_placement }}</td>
                </tr>
                <tr>
                  <td  style="height:85px;text-align:vertical">yet to develop</td>
                </tr>
              </table></span>
            </div>
          </div>
  </div> 
  @endforeach
  </div>
</div>

<div class="customNavigation" style="position:relative;left:70px;top:-10px;">
  <a class="btn prev light-blue darken-2">Previous</a>
  <a class="btn next light-blue darken-2">Next</a>
</div>


<!--=================================================
Course choices
=================================================-->


<!--====================================
Javascript files
=====================================-->
<script type="text/javascript">
  $(document).ready(function() {
 
  var owl_college = $("#owl-college");
 
  owl_college.owlCarousel({
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1000,4], //5 items between 1000px and 901px
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