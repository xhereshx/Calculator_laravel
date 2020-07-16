@extends('layout', [
    'title' => 'Tax calculator form TEST'
])

@section('styles')
<style>
		.bodyTaxCalc {
			background: #CCCCCC;
			font-family: sans-serif, serif;
            padding: 20px 20px 0 20px;
            border: red solid 1px;
            width: 793px;
		}
		.pageTaxCalc {
			position: relative;
			border: 1px solid #666;
			background: white;
			height: 1122px;
			width: 793px;
			margin: 0 auto;
			overflow: hidden;
			-webkit-box-shadow: 3px 3px 8px #666;
			-moz-box-shadow: 3px 3px 8px #666;
            box-shadow: 3px 3px 8px #666;
            border: #4CAF50;
		}
		.pageTaxCalc .bg {
			width: 100%
		}
		.calcOverWin {
			position: absolute;
            position: fixed;
            display: flex;
            flex-direction: column;
			top: 20%;
			left: 10%;
			width: 80%;
			height: 70%;
			padding: 10px;
            z-index: 10;
            background-color: rgba(255,255,255, 0.9);
        }
		#g, #s, #e {
			text-align: center;
			font-size: 20px;
		}

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        background-color:lightgray;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        background-color: lightgray;
        }
        .calculateTaxReturn{
            background-color: lightgray;
        }
/*  pricing */

                        * {
                box-sizing: border-box;
                }

            .columnsTaxCalc {
            float: left;
            width: 33.3%;
            padding: 8px;
            border: #4CAF50 1px solid;
            }

            .priceTaxCalc {
            list-style-type: none;
            border: 1px solid #eee;
            margin: 0;
            padding: 0;
            -webkit-transition: 0.3s;
            transition: 0.3s;
            }

            .priceTaxCalc:hover {
            box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
            }

            .priceTaxCalc .headerTaxCalc {
            background-color: #111;
            color: white;
            font-size: 25px;
            }

            .priceTaxCalc li {
            border-bottom: 1px solid #eee;
            padding: 20px;
            text-align: center;
            }

            .priceTaxCalc .greyTaxCalc {
            background-color: #eee;
            font-size: 20px;
            color: black;
            }
            /* The "Sign Up" button */
            .buttonTaxCalc {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 25px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            }
            .textTaxCalc {
                color: black;
            }

            /* Change the width of the three columns to 100%
            (to stack horizontally on small screens) */
            @media only screen and (max-width: 600px) {
            .columnsTaxCalc {
                width: 100%;
            }
            }
.printMenuCalculator {
			position: absolute;
			position: fixed;
			top: 5%;
			right: 2%;
			width: 20%;
			height: 30%;
			padding: 10px;
            z-index: 10;
            background-color: rgba(255,255,255, 0.9);
            border: red solid 1px;
		}
		#p img {
			margin: 10px;
			width: 50px;
        }

	</style>
@endsection
<?php 
$form_configuration=json_decode(json_encode($form_configuration,false));
//var_dump($form_configuration);
//dd($form_configuration);
// print_r($form_configuration[0]->name);
?>
@section('content')
<div class="">
    
            @if (Auth::check())
            
                    <div class="pageTaxCalc printMenuCalculator">
                        <ol>
                            <li>Fill all grey fields</li>
                            <li>Print pdf<br>
                                <a href="/print/2177782_2018_usafd_63D112071485823DE41B52450728BC" onclick="return generate();" id="p"><img src="http://trevellasmanorfarmcampsite.co.uk/wp-content/uploads/2017/08/pdf-printer-icon.png"><br><em>PDF file for print will be downloaded.</em></a><br>
                            </li>
                        </ol>
                    </div>    
            @else
                    <div class="pageTaxCalc calcOverWin">
                        <div class="calcOverWinMessage">
                            <div>
                                <div id="s"><br><br>We are happy to have you here, but it seems you are not registered.<br>Please select the right plan.<br><br></div>
                            </div>    
                            <div>
                                <!-- menu -->
                                <div class="columnsTaxCalc">
                                    <ul class="priceTaxCalc">
                                        <li class="headerTaxCalc">Basic</li>
                                        <li class="greyTaxCalc">$ 0 / year</li>
                                        <li class="textTaxCalc">Free calculation up to $ 6000</li>
                                        <li class="greyTaxCalc"><a href="{{ url('/login')}}" class="buttonTaxCalc">Sign Up</a></li>
                                    </ul>
                                    </div>
                                    
                                    <div class="columnsTaxCalc">
                                        <ul class="priceTaxCalc">
                                            <li class="headerTaxCalc" style="background-color:#4CAF50">Pro</li>
                                            <li class="greyTaxCalc">$ 24.99 / year</li>
                                            <li class="textTaxCalc">Print pdf</li>
                                            <li class="textTaxCalc">Save history</li>
                                            <li class="greyTaxCalc"><a href="{{ url('/login')}}" class="buttonTaxCalc">Sign Up</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="columnsTaxCalc">
                                        <ul class="priceTaxCalc">
                                            <li class="headerTaxCalc">Premium</li>
                                            <li class="greyTaxCalc">$ 49.99 / year</li>
                                            <li class="textTaxCalc">Print pdf</li>
                                            <li class="textTaxCalc">Save history</li>
                                            <li class="textTaxCalc">Online Support</li>
                                            <li class="greyTaxCalc"><a href="{{ url('/login')}}" class="buttonTaxCalc">Sign Up</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>        
                        </div>
                    </div>
            @endif

        @foreach ($form_configuration as $page)
                    <div class="pageTaxCalc">
                    {{--<img src="http://www.securetax.eu/00BootCamp/{{ $page->bg_image }}" class="bg" style="width: {{ $page ->page_width }}px height: {{ $page ->page_height }}px ">--}}
                    <img src="http://www.securetax.eu/00BootCamp/{{ $page->bg_image }}" class="bg" style="width: 793px">
                        @foreach ($page->taxformdetails as $field_uid => $field)
                        @if($field->htmltag == "text")
                            <input class="calculateTaxReturn" type="text"
                        @elseif($field->htmltag == "number")
                            <input type="number" onChange="calculate()"
                        @elseif($field->htmltag == "checkbox")
                            <input type="checkbox"    
                        @else
                            <div
                        @endif
                        id="{{ $field->uid }}"
                        style="position: absolute; 
                               left: {{ ($field->x)*(108/250) }}px; 
                               top: {{ ($field->y)*(108/250) }}px; 
                               font-size: {{ ($field->height)*(108/250) }}px;
                               width: {{ ($field->size)*(108/250) }}px;
                               text-align: {{ $field->alignment }};
                               color: #{{ $field->color }};
                               border:none;"
                        name="{{ $field->fieldname }}"
                        placeholder="{{ $field->placeholder }}"
                        @if($field->htmltag == "text")
                        >
                        @elseif($field->htmltag == "number")
                        >
                        @elseif($field->htmltag == "checkbox")
                        >    
                        @else
                        >{{ $field->placeholder }}</div>
                        @endif
                    @endforeach
                </div>
                @endforeach

</div>    
    <script>
        document.querySelector('[name="%FDitem8%"]').addEventListener('change', () => {
        calculate();
        });

function calculate(){
    const FDitem8 = document.querySelector('[name="%FDitem8%"]').value;//
    let FDitem23 = FDitem8;
    document.querySelector("[name='%FDitem23%']").innerHTML = Math.floor(parseFloat(FDitem23)).toFixed(2);
    const FDitem35 = FDitem23;
    document.querySelector("[name='%FDitem35%']").innerHTML = Math.floor(parseFloat(FDitem35)).toFixed(2);
    const FDitem36 = FDitem35;
    document.querySelector("[name='%FDitem36%']").innerHTML = Math.floor(parseFloat(FDitem36)).toFixed(2);
    const FDitemized = FDitem36;
    document.querySelector("[name='%FDitemized%']").innerHTML = Math.floor(parseFloat(FDitemized)).toFixed(2);
    //************FDpage2*****************
    const FDitem40 = FDitemized;
    document.querySelector("[name='%FDitem40%']").innerHTML = Math.floor(parseFloat(FDitem40)).toFixed(2);
    const FDtaxablewage = FDitem40;
    document.querySelector("[name='%FDtaxablewage%']").innerHTML = Math.floor(parseFloat(FDtaxablewage)).toFixed(2);
    const FDtax = FDtaxablewage*0.15;
    document.querySelector("[name='%FDtax%']").innerHTML = Math.floor(parseFloat(FDtax)).toFixed(2);
    const FDitem45 = FDtax;
    document.querySelector("[name='%FDitem45%']").innerHTML = Math.floor(parseFloat(FDitem45)).toFixed(2);
    const FDitem53 = FDitem45;
    document.querySelector("[name='%FDitem53%']").innerHTML = Math.floor(parseFloat(FDitem53)).toFixed(2);
    const FDitem61 = FDitem53;
    document.querySelector("[name='%FDitem61%']").innerHTML = Math.floor(parseFloat(FDitem61)).toFixed(2);
    const FDitem62a = document.querySelector('[name="%FDitem62a%"]').value;
    const FDitem71 = FDitem62a;
    document.querySelector("[name='%FDitem71%']").innerHTML = Math.floor(parseFloat(FDitem71)).toFixed(2);
    if (FDitem71>FDitem61){
        const FDitem72=FDitem71-FDitem61;
        document.querySelector("[name='%FDitem72%']").innerHTML = Math.floor(parseFloat(FDitem72)).toFixed(2);
        const FDitem75=0;
        document.querySelector("[name='%FDitem75%']").innerHTML = Math.floor(parseFloat(FDitem75)).toFixed(2);
    }else{
        const FDitem72=0;
        document.querySelector("[name='%FDitem72%']").innerHTML = Math.floor(parseFloat(FDitem72)).toFixed(2);
        const FDitem75=FDitem61-FDitem71;
        document.querySelector("[name='%FDitem75%']").innerHTML = Math.floor(parseFloat(FDitem75)).toFixed(2);
    }
    
}
</script>

@endsection