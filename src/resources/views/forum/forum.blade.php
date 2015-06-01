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
                            </div>
                            </div>
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