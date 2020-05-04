@extends('layouts.app')

@section('content')  
<div class="container-fluid bg-light ">
    
    <div class="parallax">
        <div class="card zcard">
            <div class="card-header text-center">Stock Nepal Lisence | Legal Simplicity</div>    
            <div class="card-body bodw font-weight-light">
                You are allowed to use any of the free images published in Stock Nepal <br>
                collections for commercial and non-commercial purposes.
                However, the image <br> copyright is still the property of its author. 
                You cannot resell our photographs <br> as prints, as photo stock (whether free or paid) 
                or redistribute them anywhere else. <br> You cannot claim the images as your own as well.
            </div>    
        </div>
    </div>
        
    
        

    <div class="parallax">
        <div id="accordion">
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                        <h3 class="text-dark">Frequently asked questions ?</h3> 
                        <hr>
                        Are these images distributed under CC0 license?
                    </a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                       No, our images are not published under CC0 license, so the image copyright is still the property of its author.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                        Do i have to credit You
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        It would be nice, but you don’t have to. However, we would appreciate if  you could place a link to our website, <br> or spread the word in social media.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                        Can I remix and tweak the images, e.g. add my logo or text?
                    </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        yes you can.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                        Can I use images as creatives for paid advertising, or as a part of an advertising campaign, printed or digital?
                    </a>
                </div>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        yes you can.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                        Can I print an image and put it on a wall, or give to my friends?
                    </a>
                </div>
                <div id="collapseFive" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Yes, you can. But please do not resell the print.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
                        Can I print the images on T-Shirts, cups, or any other merchandise for sale?
                    </a>
                </div>
                <div id="collapseSix" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Our Free license might not apply for this. Please get in touch so we could quote you with an appropriate license.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseSeven">
                        Can I say I am the author of an image?
                    </a>
                </div>
                <div id="collapseSeven" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        No, please don't
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseEight">
                        Can I sell or redistribute the images?
                    </a>
                </div>
                <div id="collapseEight" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        No, please don't
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseNine">
                        I am still unsure and don’t want to do anything wrong.
                    </a>
                </div>
                <div id="collapseNine" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        If you have any questions regarding the license in general, or for any particular image, please don’t hesitate  <br> to contact us.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTen">
                        Can I support you for what you do?
                    </a>
                </div>
                <div id="collapseTen" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Thank you so much! If you’re finding value in our photos or our website, consider contributing whatever you <br> feel comfortable – every dollar puts food on our table!
                    </div>
                </div>
            </div>



        </div>
    </div>
    


</div>

@endsection