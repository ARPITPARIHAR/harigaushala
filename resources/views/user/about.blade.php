@extends('user.layouts.app')
@section('meta_title','game')

@include('user.includes.navbar')
<div class="about">
    <div class="content">
        <h2><span class="about-text">ABOUT</span> <span class="us-text">US</span></h2>
    </div>
   
</div>

<div class="about-us-container">
    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay="1.5s" style=" visibility: visible; animation-delay: 1.3s; animation-name: fadeIn;">
    <div class="about-us-heading" style="font-size:48px; font-family:Arial, Helvetica, sans-serif;">About Shree Hari Pinjra Pirol Gaushala</div>
    <img src="img/top.png" alt="Description of the image">
    <br>
    <p class="about-us-paragraph">
        Welcome to Shree Hari pinjra Pirol Gaushala, a sanctuary dedicated to the care and well-being of cows.
    </p>
    <p class="about-us-paragraph">
        Our mission is to provide a safe and loving environment for cows, where they can thrive, receive proper nutrition, and live a peaceful life. We are committed to the welfare of these sacred animals and strive to promote their significance in our culture.
    </p>
    <p class="about-us-paragraph">
        Founded in [1980], our Gaushala has a rich history of serving the community. It all began with a deep-seated love for cows and a desire to protect them from harm. Over the years, we have grown and expanded our efforts to provide shelter, food, and medical care to a growing number of cows.
    </p>
    <h2 class="about-us-heading">What We Do</h2>
    <ul class="about-us-paragraph">
        <li><span style="color:khaki;">Caring for Cows:</span> We provide a loving and secure home for cows of all ages and breeds. Our dedicated team ensures they receive the best care, including regular health check-ups and proper nutrition.</li>
        <li ><span style="color:khaki;">Educational Initiatives:</span> We organize educational programs to raise awareness about the importance of cows in our culture and the benefits of ethical treatment.</li>
        <li><span style="color:khaki;">Community Engagement:</span>  We actively engage with the local community, inviting them to connect with our cows and learn about their needs and significance.</li>
        <li><span style="color:khaki;">Goshala Tours:</span> Visitors are welcome to tour our Gaushala, interact with the cows, and experience the peaceful atmosphere.</li>
    </ul>
    
</div>
</div>
<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="1.1s">
<div class="get-involved">

    <h2 class="get-involved-heading">Get Involved</h2>
    <ul class="get-involved-list">
        <li><a href="">Donate</a> to support our mission.</li>
        <li><a href="">Volunteer</a> help care for our cows.</li>
        <li>Spread the word about our Gaushala and its importance in our culture.</li>
    </ul>
</div>
</div>
</div>
<style>
.about-us-container {
            background-color:rgba(1, 72, 172, 0.886);; /* Light gray background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
            margin-top: -150px;/* Shadow effect */
        }

        /* Style the heading for the "About Us" section */
        .about-us-heading {
            font-size: 28px;
            color:rgb(208, 255, 0); /* Dark gray text color */
            text-align: center;
            margin-bottom: 20px;
        }

        /* Style the paragraph text within the "About Us" content */
        .about-us-paragraph {
            font-size: 18px;
            line-height: 1.6;
            color:white; /* Slightly darker gray text color */
        }

        .about-us-paragraph:hover {
    color:black; /* Change the text color to red on hover */
}





        .get-involved {
            background-color:lightcoral; /* White background */
            padding: 20px;
            margin-top: 20px; /* Add some spacing from the "About Us" section */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
        }

        /* Style the "Get Involved" heading */
        .get-involved-heading {
            font-size: 24px;
            color: #1531acb3; /* Dark gray text color */
            text-align: center;
            margin-bottom: 20px;
        }

        /* Style the list items within the "Get Involved" section */
        .get-involved-list {
            list-style-type: disc; /* Use bullet points for the list */
            padding-left: 20px;
            color:black;
            font-size: 18px;
             /* Add some left margin for the list items */
        }

     
        .get-involved-list a {
            color:white; /* Blue link color */
            text-decoration: underline; 
           
        }


        .marker {
            text-align: center
        }





    .about {
        
        background-image: url('img/ab1221.jpg');
        background-size: 100% 300px;
        background-repeat: no-repeat;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 500px;
    }

    .content {
        padding: 40px;
        text-align: center;
    }

    .about-text {
        font-size: 80px;
        color: red; /* Set the text color for "about" to red */
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .us-text {
        font-size: 80px;
        color: #FFFF00; /* Set the text color for "US" to yellow (#FFFF00) */
        margin-top: 20px;
        margin-bottom: 20px;
    }


    /* Reset some default styles for consistency */

/* Style the About Us section */


</style>
<div class="donation-slider-wrapper">
    <div class="donation-form-container" style="height:1500px;"    id="donationFormContainer">
        <div class="close-symbol" id="closeSymbol">&times;</div>
        <h3 class="donation-form-header" style="color:black";>Make a Donation</h3>
        <div class="gaushala-name">
            <h4 class="attractive-text" style="color:#8B0000 !important;margin-left:80px!important;">Shree Hari Pinjara Pol Gaushala</h4>
        </div>
        <div class="container">
            <form id="donation-form" action="{{ route('razorpay.create') }}" method="POST">
                @csrf 
            <form id="donation-form">
                <div class="form-group">
                    <label for="full-name" > Full Name</label>
                    <input type="text" id="full-name" class="form-control" style="background-color:black; color: white !important;border-radius:10px;" required>
                </div>
                <div class="form-group">
                    <label for="mobile-number">Mobile Number</label>
                    <input type="tel" id="mobile-number" class="form-control" style="background-color:black; color: white !important;border-radius:10px;" required>
                </div>
                <div class="form-group">
                    <label for="home-address">Home Address</label>
                    <textarea id="home-address" class="form-control" style="background-color:black; color: white !important; border-radius:10px;" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="pan-number">Donation Amount</label>
                    <input type="text" id="pan-number" class="form-control" style="background-color: black; color: white !important; border-radius:10px;text-align:center;" required>
                </div>
       
                    <button type="submit" class="btn btn-primary" id="proceed-to-pay-button">
                        Proceed to Pay
                    </button>
                </div>
                
                
            </form>
    
            
            </form>
        </div>
    </div>
</div>
</div>

<!-- Your HTML content above this line -->


</body>
</html>
<script>

document.addEventListener("DOMContentLoaded", function() {
    if (window.location.pathname === '/home') {
        console.log('On the home page!');
        const showDonationForm = document.getElementById('showDonationForm');
        const donationFormContainer = document.getElementById('donationFormContainer');
        const closeSymbol = document.getElementById('closeSymbol');

        console.log('showDonationForm:', showDonationForm);
        console.log('donationFormContainer:', donationFormContainer);
        console.log('closeSymbol:', closeSymbol);

        // rest of your script
    }
});
</script>
<script>

window.addEventListener('load', function() {
    var popup = document.getElementById('welcome-popup');
    popup.style.display = 'block';
});


document.getElementById('close-popup').addEventListener('click', function() {
    var popup = document.getElementById('welcome-popup');
    popup.style.display = 'none';
});


</script>
<script>
    function processPayment() {
        // Simulate a payment process (replace with actual payment gateway integration)
        alert('Payment processed successfully!');
        
        // You can submit the form data to your server here if needed
        // document.getElementById('donation-form').submit();
    }
</script>
<script>
    function showCardPaymentForm() {
        document.getElementById("donation-form").style.display = "none";
        document.getElementById("card-payment-form").style.display = "block";
    }

    function processCardPayment() {
        // Implement your payment processing logic here
        alert("Processing card payment...");
    }
</script>



 




@include('user.includes.footer')

@section('style')
    
@endsection
@section('script')
    
@endsection