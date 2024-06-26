@extends('user.layouts.app')
@section('meta_title','game')

@include('user.includes.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Founder's Message</title>
</head>

<div class="founder-container" style="margin-top: 20px; margin-bottom: 20px;">
    <div class="bo">
        <div class="row">
            <div class="col-lg-4 col-md-12"> 
                <div class="service-image relative">
                    <img src="/img/95.png" class="img img-responsive" id="loading">
                    <img src="img/fonder1.jpg" class="img img-responsive absolute service-imgs" alt="Description of the image">
                </div>
                <div class="me">
                    <h3>RATAN LAL PARIHAR</h3>
                    <p>( Founder )</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-12" style="color:rgb(0, 0, 0); font-size:24px;"> 
                <p>
                    इस गौशाला का मुख्य उद्देश्य है गौ माताओं के प्रति समर्पण और सेवा है। हम गौ माताओं को स्वच्छ और स्वस्थ रखकर उनकी देखभाल करते हैं ताकि वे सुरक्षित रह सकें और हम उनके साथ मिलकर धार्मिक तथा प्राकृतिक संस्कृति को साकार कर सकें। इस गौशाला का संचालन धार्मिक आदर्शों और सन्तान धर्म के मूल्यों के प्रति हमारे संकल्प का परिचायक है। हम यहां गौ माताओं को एक पवित्र स्थान पर रखकर उनके साथ धार्मिक संवाद और सेवा का आदान-प्रदान कर रहे हैं।
                </p>
                <p>
                    गौ माताओं का संरक्षण हमारे धरोहर और संस्कृति का अभिन्न हिस्सा है। गाय सभी देवी-देवताओं की अवतारिता मानी जाती है और उनकी सेवा धार्मिक उद्देश्यों की पूर्ति में सहायक होती है। हम इस मानवीय और धार्मिक कर्तव्य का पालन करके गौ माताओं के साथ एक प्राकृतिक और धार्मिक सम्बन्ध की स्थापना करने का प्रयास कर रहे हैं।
                </p>
                <p>
                    गौशाला ने गौ माताओं के समर्पण, प्यार और सेवा के माध्यम से एक सशक्त, नैतिक, और सामरिक समुदाय का निर्माण किया है। हम सभी आपको इस पवित्र कार्य में सहयोग देने और धर्मिक संस्कृति को बढ़ावा देने के लिए आमंत्रित करते हैं। आपका समर्थन हमारे लिए अत्यंत मूल्यवान है।
                </p>
            </div>
        </div>
    </div>
</div>
</div>




    
    <style>
        /* CSS styles */
        .donation-form {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            z-index: 999;
        }

        .founder-img {
    position: relative;
}

.overlay-image {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('img/founderbg.png');
    background-size: cover;
    opacity: 0.5; /* Aap opacity ko apne pasandeeda anusaar adjust kar sakte hain */
    z-index: -1;
}
.service-image img {
            margin: auto;
        }
        .service-imgs {
            height: 280px !important;
        }
        .absolute {
            position: absolute;
        }
        .service-imgs {
            border-radius: 50%;
            width: 320px;
            height: 320px !important;
            top: 40px;
            left: 30px;
        }
        .img-responsive, .thumbnail>img, .thumbnail a>img, .carousel-inner>.item>img, .carousel-inner>.item>a>img {
            display: block;
            max-width: 100%;
            height: auto;
        }
        img {
            max-width: 100%;
            display: block;
        }
        img {
            vertical-align: middle;
        }
        @keyframes rotation {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

#loading {
    animation: rotation 8s infinite linear;
}

.relative {
    position: relative;
}

    </style>

<style>
    .img-responsive {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto; /* Optional: Center the image horizontally */
    }
</style>


</head>
<body>
   
   
</body>
</html>


@include('user.includes.footer')

@section('style')
    
@endsection
@section('script')
    
@endsection
<style>
    .founder-container {
    background-image: url('img/founder.jpg');
    background-size: cover; /* Adjust as needed */
    background-repeat: no-repeat;
    background-position: center; /* You can adjust this to control the image position */
    margin-left: 10%;
    margin-right: 10%;
   margin-top: 5%;
   margin-bottom: 5%;
   height:600px;
   border-radius: 50px;
}

.founder-img img {
    /* display: block; */
    max-width: 100%;
    height: auto;
    width: 70%;
    text-align: center;
 

    padding: 30px;
    border-radius: 5px;
    margin-left: 60px;
    margin-top: 30px;
}


.me h3 {
    font-size: 32px;
    color: #146632;
    font-weight: 500;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
margin-left: 50px;
}

.me p {
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; /* Replace 'Your-Attractive-Font' with the desired font */
    font-size: 18px; 
    color:firebrick; 
    margin-left:135px;
    margin-top: 5px; 
   
}

.bo{
    /* background-color:khaki; */
}



</style>

    