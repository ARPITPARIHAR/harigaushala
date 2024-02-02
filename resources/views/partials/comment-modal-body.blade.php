
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
