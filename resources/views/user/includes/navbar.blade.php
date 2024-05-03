<!DOCTYPE html>
<html lang="en">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<head>
    <meta charset="utf-8">
    <title>Hari pinjara pol Gaushala</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ ('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-GLhlTQ8iX1dMYmZtR8RS4OnnLEPBywPb5Ml0Rd5PqFZAc5bsM6c6dIc2M5d2j"
    crossorigin="anonymous">

     {{-- <img class="mk-desktop-logo light-logo" alt="Shree Krishna Gaushala" src="https://shreekrishnagaushala.com/wp-content/uploads/2016/09/logo_gaushala.png"> --}}
     <div class="mk-header d-flex align-items-center justify-content-center" style="margin-right: 0 !important;">
    
    

                    <div class="logo-container">
                        <img class="mk-desktop-logo dark-logo rounded-circle" alt="Shree Krishna Gaushala" src="img/cow.jpg">
                    </div>
                    <div class="name text-center" ><h5 class="blink-text"style="color:#043e43!important;">SINCE - 1980</h5>
                        <h3 style="font-size: 65px; color:#7e1518; font-family:math; margin-left: 15px;"> SHRI  HARI  PINJARA  POL  GAUSHALA</h3>
                        <div class="founder-info">
                            <p class="founder-name">संस्थापक : <span id="typed-words" class="typed-words"></span></p>
                        </div>
                    <span class="registration-number" style="color:black"><strong> Registration No : 164/98 </strong></span>
                    </div>
                </div>
                
            
    </header>
    

    <div class="container-fluid sticky-top" style="background-color:#8B0000!important;">
    
        <div class="container">
            <nav class="navbar navbar-expand-lg py-2 py-lg-0" style="background-color:	#8B0000 !important;">
                <a href="index.html" class="navbar-brand text-white">
                    
                </a>
                <div class="ga-name text-white text-lg font-bold" >
                    {{-- <h3 style="color:white !important;">श्री हरि पिंजरा पोल गौशाला</h3> --}}
                </div>
            
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="/" class="nav-item nav-link text-white">Home</a>
                            <a href="founder" class="nav-item nav-link text-white">Founder Message</a>
                            <a href="about" class="nav-item nav-link text-white">About Us</a>
                            <a href="gallery" class="nav-item nav-link text-white">Gallery</a>
                            <a href="/generate-otp-form" class="nav-item nav-link text-white">Our Activities</a>
                            <a href="contact" class="nav-item nav-link text-white">Contact Us</a>
                            <a href="/dashboard" class="nav-item nav-link text-white">Log In</a>
                        </div>
                    </div>
                
                    <a href="#" onclick="openCommentModal()" class="nav-item nav-link donateBtn text-white">
                        <span>Donate</span>
                    </a>
                   
                  
                </nav>
                
        </div>
    </div>
   
    <div class="modal fade" id="comment-modal" data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                 <div class="modal-header">
                    <form id="donation-form"style="width:100%;" action="{{ route('razorpay.create') }}" method="POST">
                        @csrf <div class="callout" data-closable>
                            <span class="close-button" aria-label="Close alert" onclick="closeCallout()">
                                <span aria-hidden="true">&times;</span>
                            </span>
                        </div>
                        <h2 class="donation-form-header" style="color: #a83535; font-family: 'salmon'; font-size:34px;margin-top:-30px;">Make a Donation</h2> 
                        
                    <form id="donation-form" >
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
                <div class="modal-body" id="comment-modal-body">
                    
                </div>
            </div>
        </div>
    </div>

    <script>

$(document).ready(function() {
    var options = {
        strings: ["रतनलाल जी परिहार"],  
        typeSpeed: 80,  
        backSpeed: 50,  
        loop: true  
    };
    
    var typed = new Typed("#typed-words", options);
});


        
      
    
        function openCommentModal() {
            var id = 1; 
            $('#comment-modal-body').html(null);
            $.post("{{ route('get-comment') }}", {
                _token: '{{ csrf_token() }}',
                id: id
            }, function(data) {
                $('#comment-modal').modal('show');
                $('#comment-modal-body').html(data);
            });
        }
   
  
        function closeModal() {
            $('#ajaxModelexa').modal('hide');
        }

    </script>
    <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

        .callout {
            position: relative;
            padding: 1rem;
            margin-bottom: 1rem;
            /* border: 1px solid #bd1717; */
            border-radius: 5px;
        }
    
        /* Remove blur effect styles */
        .modal-backdrop {
            display: none !important;
        }
    
        .close-button {
            position: absolute;
            top: -500;
            right: 0;
            padding: 0.5;
            cursor: pointer;
            font-size: 24px;
        }
    </style>
    
    <script>
        function closeModalAndCallout() {
            // Close the modal
            var modal = document.getElementById('comment-modal');
            modal.style.display = 'none';
    
            // Close the callout
            var callout = document.querySelector('.callout');
            callout.style.display = 'none';
        }
   
        function closeCallout() {
            // Close the modal
            $('#comment-modal').modal('hide');
    
            // Optionally, you can remove the modal backdrop
            // $('.modal-backdrop').remove();
        }

        $(document).ready(function () {
            $('#comment-modal').modal({
                backdrop: 'static',
                keyboard: false
            });
    
            // Function to close the modal
            function closeModal() {
                $('#comment-modal').modal('hide');
            }
    
            // Attach the closeModal function to the close button
            $('.close-button').on('click', closeModal);
        });
   
    

        // JavaScript code
        let selectedDonation = 0;

       
        function setDonationAmount(amount) {
            selectedDonation = amount;
            displaySelectedAmount(); // Update selected donation amount display
        }

        function displaySelectedAmount() {
            let selectedAmountContainer = document.getElementById('selected-amount-container');
            selectedAmountContainer.innerHTML = `Selected Donation Amount: $${selectedDonation}`;
        }
    </script>
</body>
</html>

    
    <style>

 #donation-form label {
       color:#013f57;
    }



.preloader {
    display: none;
}
.close-icon {
  position: absolute;
  top: 10px;
  right: 15px;
  cursor: pointer;
  font-size: 14px;
  color: #056b71; /* Set your preferred color */
  font-family: 'Arial', sans-serif; /* Set your preferred font-family */
  transition: color 0.3s ease;
  * Add a color transition effect */
}

.close-icon:hover {
  color: #ff5555; /* Change color on hover */
}
/* CSS for styling form label */
.label {
  color:black; /* Set your preferred color for labels */
  font-size: 16px; /* Set your preferred font size */
  font-weight: bold; /* Set your preferred font weight */
  margin-bottom: 8px; /* Set margin as needed for spacing */
  display: block; /* Ensures labels are on a new line */
}


#proceed-button-container {
    text-align: center; /* To center-align the button horizontally */
    margin-top: 20px; /* Adjust this value as needed to create space between the form and the button */
}



        .mk-header {
    width: 100%;
    position: relative;
    background-color:#edc695!important;
height:200px;
} 
.logo-container {
    width: 150px; 
    height: 150px; 
    overflow: hidden;
}

.logo-container img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* This makes the image cover the circular container */
}
.registration-number {
    position: absolute;
    top: 10px; 
    right: 10px; 
    font-size: 18px; 
   
}
..founder-info {
    text-align: center;
    background-color: #3b5998;
    color: white;
    padding: 20px; 
    border-radius: 20px;
    width: 550px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Add a subtle box shadow */
}

.founder-name {
    font-family: ui-rounded;
   

    font-size: 32px;
    color: navy;
    font-weight: bold !important;
    

    opacity: 1; /* Remove opacity, so text is fully visible */
}


.founder-name:hover {
    text-decoration: underline; /* Underline on hover for interactivity */
    color: #004225; /* Slightly change the text color on hover */
}

 .header-bg {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
}

       
        .navbar-toggler {
    display: flex!important;
    justify-content: center!important;
    align-items: center!important;
}


.navbar-toggler {
    position: absolute !important;
    right: 50% !important;
    transform: translateX(50%) !important;
}


        .span{
           
        }   .navbar-nav .nav-item.nav-link:hover {
            color: black !important;
        }

        .donateBtn {
            transition: all 0.5s ease  !important;
            min-width: 130px  !important;
            display: block  !important;
            border: 1px solid  !important;
            font-size: 17px  !important;
            background-color: black !important;
            color: white  !important;
            text-align: center;
           
            border-radius: 0px 30px 30px 30px!important;
            
        }

        .close-symbol {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 30px;
        cursor: pointer;
        color: black;
    }
 
        .nav-container{
            background-color: #80d0c7!important;
        }

        .donation-form-container {
    position:relative;
    margin-top:480px; 
    left: 60%;
    margin-bottom:880px; 
    width: 40%;
    background: linear-gradient(0deg, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0.6) 100;%)
  
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    z-index: 1000;
}
#scrollable-container {
    max-height: 200px;
    margin-top: 20px; 
}


#proceed-to-pay-button {
    display: block;
    margin: 20px auto; /* Adjust this value as needed */
    background-color: #00008B;
    color: white;
    border: none;
    border-radius: 10px;
    padding: 10px 20px;
    cursor: pointer;
}


.gaushala-name {
    margin-top: 20px;
}

.attractive-text {
    color: white!important; 
    font-size: 22px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.donation-form-header {
    font-size: 24px;
    text-align: center;
    margin-bottom: 10px;
    color:rgba(163, 11, 105, 0.801);
}



.form-group {
    
        width: 100%;
        padding: 0.5rem;
        border: none;
        border-bottom: 1.5px solid #ccc;
        margin-bottom: 1rem;
        border-radius: 0.3rem;
        font-family: 'Handlee', cursive !important;
        color: maroon;
        font-size: 22px;
        font-weight: 500;
      outline:none;
      text-align: center !important;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    color: black;
    text-align: center;
}

textarea.form-control {
    resize: vertical;
}



.btn-primary:hover {
    background-color: #0056b3;
}
#donationFormContainer {
    display: none;
}


.popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    
}


.popup-content {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}


#close-popup {
    background: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 10px;
}

@keyframes blink {
    0% { opacity: 1; }
    50% { opacity: 0; }
    100% { opacity: 1; }
}


.blink-text {
    color: red !important;
    animation: blink 2s infinite; /* 2s is the duration, you can adjust it as needed */
    text-decoration: none; /* Remove the underline */
}
.sticky-top {
    position: sticky;
    top: 0;
    
}

.donation-form-container {
    position: fixed;
     margin-bottom: 100px;
}
.navbar-nav {
    margin-right: 0 !important; /* Set the right margin to 0 */
}

/* Adjust the close button in the navbar */
.navbar-toggler {
    position: absolute !important;
    right: 0 !important;
    transform: translateX(0) !important;
}
body, html {
    margin: 0;
    padding: 0;
}
@media (max-width: 767px) {
            .blink-text {
                font-size: 12px;
            }

            .h3 {
                font-size: 2px;
            }

            .founder-name {
                font-size: 5px;
            }

            .registration-number {
                font-size: 5px;
            }
        }

    </style>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        const showDonationForm = document.getElementById('showDonationForm');
        const donationFormContainer = document.getElementById('donationFormContainer');
        const closeSymbol = document.getElementById('closeSymbol');

        showDonationForm.addEventListener('click', function(event) {
            event.preventDefault();
            donationFormContainer.style.display = 'block';
        });

        closeSymbol.addEventListener('click', function() {
            donationFormContainer.style.display = 'none';
        });
    });
</script> 

<script>
    function processPayment() {
       
        alert('Payment processed successfully!');
        
       
    }
</script>
<script>
    function showCardPaymentForm() {
        document.getElementById("donation-form").style.display = "none";
        document.getElementById("card-payment-form").style.display = "block";
    }

    function processCardPayment() {
       
        alert("Processing card payment...");
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const closeSymbol = document.getElementById('closeSymbol');
        const donationFormContainer = document.getElementById('donationFormContainer');

        closeSymbol.addEventListener('click', function() {
            donationFormContainer.style.display = 'none';
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const showDonationForm = document.getElementById('showDonationForm');
        const donationFormContainer = document.getElementById('donationFormContainer');
        const closeSymbol = document.getElementById('closeSymbol');

        showDonationForm.addEventListener('click', function (event) {
            event.preventDefault();
            donationFormContainer.style.display = 'block';
        });

        closeSymbol.addEventListener('click', function () {
            donationFormContainer.style.display = 'none';
        });
    });
</script>