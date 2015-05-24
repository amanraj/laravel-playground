@extends('app')
@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')

<style type="text/css">
     
    #image img{
        height: 130px;
        width: 130px;
        border-radius:50%;
    }
</style>

@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12 l6">
            <ul class="collapsible" data-collapsible="accordion">
            <p>
                <li>
                    <div class="collapsible-header" style="height:200px">
                        <table>
                            <tr>
                                <td><img  id="image" src="http://www.priorlakeassociation.org/wp-content/uploads/2011/06/blank-profile.png" ></td>
                                <td>
                                    <h5 class="light-blue-text text-darken-4"><strong>Sheldon Owen</strong></h5>
                                    <h6><strong>CEO & Co-Founder</strong></h6>
                                    <img src="{{ asset('images/fb_icon.png') }}" href="s#!" class="responsive-img" style="height:30px;width:30px"> 
                                    <img src="{{ asset('images/linked_in_icon.png') }}" href="s#!" class="responsive-img" style="height:30px;width:30px">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="collapsible-body">
                        <p>Sheldon Owen is the co-founder and CEO of Unified, the creators of the first cloud-based social operating platform for global brands and agencies. </p>
                    </div>
                </li>
            </p>
            <p>    
                <li>
                    <div class="collapsible-header" style="height:200px">
                        <table>
                            <tr>
                                <td><img   src="http://www.priorlakeassociation.org/wp-content/uploads/2011/06/blank-profile.png" ></td>
                                <td>
                                    <h5 class="light-blue-text text-darken-4"><strong>Sheldon Owen</strong></h5>
                                    <h6><strong>CEO & Co-Founder</strong></h6>
                                    <img src="{{ asset('images/fb_icon.png')}}" href="s#!" class="responsive-img" style="height:30px;width:30px"> 
                                    <img src="{{ asset('images/linked_in_icon.png')}}" href="s#!" class="responsive-img" style="height:30px;width:30px">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="collapsible-body">
                        <p>Sheldon Owen is the co-founder and CEO of Unified, the creators of the first cloud-based social operating platform for global brands and agencies. </p>
                    </div>
                </li>
            </p>    
            </ul>
        </div>  
         <div class="col s12 m12 l6">
            <ul class="collapsible" data-collapsible="accordion">
            <p>
                <li>
                    <div class="collapsible-header" style="height:200px">
                        <table>
                            <tr>
                                <td><img  id="image" src="http://www.priorlakeassociation.org/wp-content/uploads/2011/06/blank-profile.png" ></td>
                                <td>
                                    <h5 class="light-blue-text text-darken-4"><strong>Sheldon Owen</strong></h5>
                                    <h6><strong>CEO & Co-Founder</strong></h6>
                                    <img src="{{ asset('images/fb_icon.png') }}" href="s#!" class="responsive-img" style="height:30px;width:30px"> 
                                    <img src="{{ asset('images/linked_in_icon.png') }}" href="s#!" class="responsive-img" style="height:30px;width:30px">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="collapsible-body">
                        <p>Sheldon Owen is the co-founder and CEO of Unified, the creators of the first cloud-based social operating platform for global brands and agencies. </p>
                    </div>
                </li>
            </p>
            <p>    
                <li>
                    <div class="collapsible-header" style="height:200px">
                        <table>
                            <tr>
                                <td><img   src="http://www.priorlakeassociation.org/wp-content/uploads/2011/06/blank-profile.png" ></td>
                                <td>
                                    <h5 class="light-blue-text text-darken-4"><strong>Sheldon Owen</strong></h5>
                                    <h6><strong>CEO & Co-Founder</strong></h6>
                                    <img src="{{ asset('images/fb_icon.png')}}" href="s#!" class="responsive-img" style="height:30px;width:30px"> 
                                    <img src="{{ asset('images/linked_in_icon.png')}}" href="s#!" class="responsive-img" style="height:30px;width:30px">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="collapsible-body">
                        <p>Sheldon Owen is the co-founder and CEO of Unified, the creators of the first cloud-based social operating platform for global brands and agencies. </p>
                    </div>
                </li>
            </p>    
            </ul>
        </div>  
    </div> 
</div>  
@stop