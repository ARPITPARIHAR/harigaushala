<div class="mainscreen">
    <div class="card">
        <div class="leftside">
            <img src="img/bank1.jpg" class="product" alt="Shoes" />
        </div>
        <div class="rightside">
            <form action="">
                <h2>Payment Information</h2>
                <p>Cardholder Name</p>
                <input type="text" class="inputbox" name="name" required autocomplete="cc-name" />
                <!-- Use "autocomplete" attribute with "cc-name" to enable cardholder name autofill -->
                
                <p>Card Number</p>
                <input type="number" class="inputbox" name="card_number" id="card_number" required />
                
                <p>Card Type</p>
                <select class="inputbox" name="card_type" id="card_type" required>
                    <option value="">--Select a Card Type--</option>
                    <option value="Visa">Visa</option>
                    <option value="RuPay">RuPay</option>
                    <option value="MasterCard">Debit Card</option>
                </select>

                <div class="expcvv">
                    <p class="expcvv_text">Expiry</p>
                    <input type="date" class="inputbox" name="exp_date" id="exp_date" required />
                    
                    <p class="expcvv_text2">CVV</p>
                    <input type="password" class="inputbox" name="cvv" id="cvv" required />
                </div>
                <p></p>
                <button type="submit" class="button">Donation Now </button>
                <button type="button" class="button cancel-button" onclick="cancelPayment()">Cancel</button>
            </form>
        </div>
    </div>
</div>
  <style>
    body {
        font-family: 'Roboto', sans-serif!important;
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    
    .mainscreen
    {
        min-height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        background-color: #DFDBE5;
        background-image: url("img/event.jpg");
        color:#963E7B;
    }
    
    .card {
        width: 60rem;
        margin: auto;
        background: white;
        position:center;
        align-self: center;
        top: 50rem;
        border-radius: 1.5rem;
        box-shadow: 4px 3px 20px #3535358c;
        display:flex;
        flex-direction: row;
        
    }
    
    .leftside {
        
        width: 25rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }
    
    .product {
    object-fit: cover;
    width: 40em;
    height: 40em;
    border-radius: 2%; /* Set to 50% for a circular shape */
    border: 2px solid #007bff; /* Add a border with your desired color */
}

    
    .rightside {
        background-color: #ffffff;
        width: 35rem;
        border-bottom-right-radius: 1.5rem;
        border-top-right-radius: 1.5rem;
        padding: 1rem 2rem 3rem 3rem;
    }
    
    p{
        display:block;
        font-size: 1.1rem;
        font-weight: 400;
        margin: .8rem 0;
    }
    
    .inputbox
    {
        color:#030303;
        width: 100%;
        padding: 0.5rem;
        border: none;
        border-bottom: 1.5px solid #ccc;
        margin-bottom: 1rem;
        border-radius: 0.3rem;
        font-family: 'Roboto', sans-serif;
        color: #615a5a;
        font-size: 1.1rem;
        font-weight: 500;
      outline:none;
    }
    
    .expcvv {
        display:flex;
        justify-content: space-between;
        padding-top: 0.6rem;
    }
    
    .expcvv_text{
        padding-right: 1rem;
    }
    .expcvv_text2{
        padding:0 1rem;
    }
    
    .button{
        background: linear-gradient(
    135deg
    , #753370 0%, #298096 100%);
        padding: 15px;
        border: none;
        border-radius: 50px;
        color: white;
        font-weight: 400;
        font-size: 1.2rem;
        margin-top: 10px;
        width:100%;
        letter-spacing: .11rem;
        outline:none;
    }
    
    .button:hover
    {
        transform: scale(1.05) translateY(-3px);
        box-shadow: 3px 3px 6px #38373785;
    }
    
    @media only screen and (max-width: 1000px) {
        .card{
            flex-direction: column;
            width: auto;
          
        }
    
        .leftside{
            width: 100%;
            border-top-right-radius: 0;
            border-bottom-left-radius: 0;
          border-top-right-radius:0;
          border-radius:0;
        }
    
        .rightside{
            width:auto;
            border-bottom-left-radius: 1.5rem;
            padding:0.5rem 3rem 3rem 2rem;
          border-radius:0;
        }
    }
    </style>
    <script>
        function cancelPayment() {
            window.location.href = '/';
        }
    </script>