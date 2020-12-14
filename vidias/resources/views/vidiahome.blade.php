@extends('layouts/vidia')

@section('content')
    
    <div class="welcome_text">
        <div id="home_box">
            <img src="/storage/images/HomePage.png" alt="Home Box" style="width:100%"/>
            <div class="home_box_text">
                <h1 id="intro_1"><em>Welcome to ViDiA</em></h1>
                <h4 id="intro_2">We provide you with the Best Laptops</h4>
                <h4 id="intro_3">Basic Home books, Premium Business Books and than to High-end Gaming Laptops</h4>
            </div>
        </div>
    </div>

    <div id="sec_callout">
        <a href="/laptops/Apple">
            <div id="callout_1" class="home_callout first_callout">
                <div class="homepic"></div>
            </div>
        </a>
        
        <a href="/laptops/Alienware">
            <div id="callout_2" class="home_callout other_callout" 
                    onmouseover="change_width_of_callout_1(this);" onmouseout="change_width_to_normal(this);">
                <div><img src="/storage/images/alien.png" alt="Alienware" /></div>
            <!--     <div class="home_callout_bg"></div> -->
            </div>
        </a>

        <a href="/laptops/MSI">
            <div id="callout_3" class="home_callout other_callout"  
                    onmouseover="change_width_of_callout_1(this);" onmouseout="change_width_to_normal(this);">
                <div><img src="/storage/images/msi.png" alt="MSI"/></div>
            </div>
        </a>

        <a href="/laptops/ROG">
            <div id="callout_4" class="home_callout other_callout"  
                    onmouseover="change_width_of_callout_1(this);" onmouseout="change_width_to_normal(this);">
                <div><img src="/storage/images/rog.png" alt="ROG" /></div>
            </div>
        </a>

        <a href="/laptops/Razer">
            <div id="callout_5" class="home_callout other_callout"  
                    onmouseover="change_width_of_callout_1(this);" onmouseout="change_width_to_normal(this);">
                <div><img src="/storage/images/razer.png" alt="Razer" /></div>
            </div>
        </a>

        <a href="/laptops">
            <div id="callout_6" class="home_callout other_callout"  
                    onmouseover="change_width_of_callout_1(this);" onmouseout="change_width_to_normal(this);">
                <div><img src="/storage/images/seemore.png" alt="MSI" /></div>
            </div>
        </a>

    </div>

    <div id="cat_callout">
        <a href="/laptops/filter/ram">
            <div id="cat_callout_1" class="home_cat" style="margin-left: 10px;">
                <div class="img_div"><img src="/storage/images/memory_capacity.png" alt="" /></div>
                <p class="img_txt">Memory</p>
            </div>
        </a>

        <a href="/laptops/filter/screensize">
            <div id="cat_callout_3" class="home_cat">
                <div class="img_div"><img src="/storage/images/screen.png" alt="" /></div>
                <p class="img_txt">Screen</p>
            </div>
        </a>

        <a href="/laptops/filter/processor">
            <div id="cat_callout_4" class="home_cat">
                <div class="img_div"><img src="/storage/images/processor.png" alt="" /></div>
                <p class="img_txt">Processor</p>
            </div>
        </a>

        <a href="/laptops/filter/graphicscard">
            <div id="cat_callout_5" class="home_cat">
                <div class="img_div"><img src="/storage/images/graphics_card.png" alt="" /></div>
                <p class="img_txt">Graphics</p>
            </div>
        </a>

        <a href="/laptops/filter/price">
            <div id="cat_callout_6" class="home_cat">
                <div class="img_div"><img src="/storage/images/price.png" alt="" /></div>
                <p class="img_txt">Price</p>
            </div>
        </a>

    </div>

    <script>

        var x = window.matchMedia("(max-width: 1206px)");
        var y = window.matchMedia("(min-width: 1220px)");
        // var y = window.matchMedia("(max-width: 1206px)");
        function change_width_of_callout_1(el){
            // if(y.matches){
            //     var id_of_first_div = document.getElementById('callout_1');
            //     id_of_first_div.style.width = "15%"; 
            //     el.style.width = "25%";
            //     el.style.maxWidth = "500px";
            //     el.getElementsByTagName('img')[0].classList.add('small_images');
            // }

            if(x.matches){
                // var id_of_first_div = document.getElementById('callout_1');
                // id_of_first_div.style.width = "15%"; 
                // el.style.width = "15%";
                // el.style.maxWidth = "500px";
                // el.style.height = "550px";
                // el.getElementsByTagName('img')[0].classList.add('small_images');
            }else if(y.matches){
                var id_of_first_div = document.getElementById('callout_1');
                id_of_first_div.style.width = "12%"; 
                el.style.width = "25%";
                el.style.maxWidth = "500px";
                el.getElementsByTagName('img')[0].classList.add('small_images');
            }else{

            }
        }

        function change_width_to_normal(el){
            // if(y.matches){
            //     var id_of_first_div = document.getElementById('callout_1');
            //     id_of_first_div.style.width = "25%"; 
            //     el.style.width = "15%";
            //     el.style.maxWidth = "140px";
            //     el.getElementsByTagName('img')[0].classList.remove('small_images');
            // } 

            if(x.matches){
                // var id_of_first_div = document.getElementById('callout_1');
                // id_of_first_div.style.width = "15%"; 
                // el.style.width = "15%";
                // el.style.maxWidth = "140px";
                // el.style.height = "550px";
                // el.getElementsByTagName('img')[0].classList.remove('small_images');
            }else if(y.matches){
                var id_of_first_div = document.getElementById('callout_1');
                id_of_first_div.style.width = "25%"; 
                el.style.width = "12%";
                el.style.maxWidth = "140px";
                el.getElementsByTagName('img')[0].classList.remove('small_images');
            }else{
                
            }

        }

    </script>
@stop()