@extends('layouts.master')

@section('content') 

	<div class="container section">
		<div class="row">
        <div class="col-md-12">
          <h1 class="headings-main">Mortgage Calulator</h1>
        </div>
        <div class="col-md-3">
               <div id="mortgage-calc">
                    <form>
                          <div class="form-group">
                               <label for="month">Select the start date:</label>
                                <select  class="form-control" id="month">
                                      <option label="Jan" value="1" selected="selected">Jan</option>
                                      <option label="Feb" value="2">Feb</option>
                                      <option label="Mar" value="3">Mar</option>
                                      <option label="Apr" value="4">Apr</option>
                                      <option label="May" value="5">May</option>
                                      <option label="Jun" value="6">Jun</option>
                                      <option label="Jul" value="7">Jul</option>
                                      <option label="Aug" value="8">Aug</option>
                                      <option label="Sep" value="9">Sep</option>
                                      <option label="Oct" value="10">Oct</option>
                                      <option label="Nov" value="11">Nov</option>
                                      <option label="Dec" value="12">Dec</option>
                                </select> 
                          </div>
                          
                          <div class="form-group">
                                <select class="form-control" id="year">
                                      <option label="1990" value="1990">1990</option>
                                      <option label="1991" value="1991">1991</option>
                                      <option label="1992" value="1992">1992</option>
                                      <option label="1993" value="1993">1993</option>
                                      <option label="1994" value="1994">1994</option>
                                      <option label="1995" value="1995">1995</option>
                                      <option label="1996" value="1996">1996</option>
                                      <option label="1997" value="1997">1997</option>
                                      <option label="1998" value="1998">1998</option>
                                      <option label="1999" value="1999">1999</option>
                                      <option label="2000" value="2000">2000</option>
                                      <option label="2001" value="2001">2001</option>
                                      <option label="2002" value="2002">2002</option>
                                      <option label="2003" value="2003">2003</option>
                                      <option label="2004" value="2004">2004</option>
                                      <option label="2005" value="2005">2005</option>
                                      <option label="2006" value="2006">2006</option>
                                      <option label="2007" value="2007">2007</option>
                                      <option label="2008" value="2008">2008</option>
                                      <option label="2009" value="2009">2009</option>
                                      <option label="2010" value="2010">2010</option>
                                      <option label="2011" value="2011">2011</option>
                                      <option label="2012" value="2012">2012</option>
                                      <option label="2013" value="2013">2013</option>
                                      <option label="2014" value="2014">2014</option>
                                      <option label="2015" value="2015">2015</option>
                                      <option label="2016" value="2016" selected>2016</option>
                                      <option label="2017" value="2017">2017</option>
                                      <option label="2018" value="2018">2018</option>
                                      <option label="2019" value="2019">2019</option>
                                      <option label="2020" value="2020">2020</option>
                                      <option label="2021" value="2021">2021</option>
                                      <option label="2022" value="2022">2022</option>
                                </select>   
                          </div>
                          
                          
                          <label>Enter the loan amount:</label>
                          <div class="input-prepend">
                                <input class="span3 form-control" id="amount" type="text" placeholder="Loan Amount">
                          </div>
                          <br>
                          <label>Enter the annual interest rate ( % ) :</label>
                          <div class="input-append">
                                <input class="span3 form-control" id="interest" type="text" placeholder="Interest Rate">
                          </div>
                          <br>
                          <label>Enter the term months of the loan :</label>
                          <div class="input-append">
                                <input class="span3 form-control" id="term-months" type="text" placeholder="Term">
                               {{--  <span class="add-on">Months</span> --}}
                          </div>
                    </form>
              </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                  <div class="col-md-6">
                       <h3 style="font-weight:100; font-size: 26px;">Monthly Payment</h3>
                        <div class="input-prepend">
                              <h1 class="primary_color" id="total" style="font-weight:100; font-size: 36px;"></h1>
                        </div> 
                  </div>
                  <div class="col-md-6">
                    <h3 style="font-weight:100; font-size: 26px;">Interest Paid</h3>
                        <div class="input-prepend">
                             
                              <h1 class="" id="total_interest" style="font-weight:100; font-size: 36px; color:#EC9807;" ></h1>
                        </div>
                  </div>
            </div>

            <div style="height : 250px; overflow: auto; margin-top: 15px;">
                 
                        <div id="results">
                              <h3 id="amortization-header"></h3>
                              <table id="amortization" class="table table-striped"></table>
                        </div>
                
            </div>
        </div>
    </div>
	</div>

@endsection

@section('scripts')
<script>
// Mortgage Calculator
( function(){
	$( document ).ready(function(){
			
		   function convert_month(month) {
                if (month == 1) { month = "January"; }
                else if (month == 2) { month = "February"; }
                else if (month == 3) { month = "March"; }
                else if (month == 4) { month = "April"; }
                else if (month == 5) { month = "May"; }
                else if (month == 6) { month = "June"; }
                else if (month == 7) { month = "July"; }
                else if (month == 8) { month = "August"; }
                else if (month == 9) { month = "September"; }
                else if (month == 10) { month = "October"; }
                else if (month == 11) { month = "November"; }
                else if (month == 12) { month = "December"; }
                return month;
            }
            function calculate_monthly_payment() {
                  // setting these as local variables...easier to read vs huge parse float equations.
                  var loan_amount = parseFloat(jQuery('#amount').val());
                  var interest_rate = parseFloat(jQuery('#interest').val())/100;
                  var monthly_interest_rate = interest_rate/12;
                  var length_of_mortgage = parseInt(jQuery('#term-months').val());
              // begin the formula for calculate the fixed monthly payment
              // REFERENCE: P = L[c(1 + c)n]/[(1 + c)n - 1]
              var top_val = monthly_interest_rate * Math.pow((1+monthly_interest_rate),length_of_mortgage);
              var bot_val = Math.pow((1 + monthly_interest_rate),(length_of_mortgage))-1;
              var monthly_mortgage = parseFloat(loan_amount*(top_val/bot_val)).toFixed(2);
              calculate_amortization(loan_amount, monthly_mortgage, monthly_interest_rate, length_of_mortgage);
                  jQuery('#total').text('AED ' + monthly_mortgage);
            }
            function calculate_amortization(loan_amount, monthly_mortgage, monthly_interest_rate, length_of_mortgage) {
                var month = parseInt(jQuery('#month').val());
                        var year = parseInt(jQuery('#year').val());
                var tableData = "<tr> \
                                          <th>Month</th> \
                                          <th>Balance</th> \
                                          <th>Payment</th> \
                                          <th>Principal</th> \
                                          <th>Interest</th> \
                                          </tr>";
                // Initializing the empty totals
                var total_mortgage = parseFloat(0);
                var total_principal = parseFloat(0);
                var total_interest = parseFloat(0);
                  for(i=length_of_mortgage; i>0; i--) {
                        var monthly_interest = parseFloat(loan_amount * monthly_interest_rate).toFixed(2);
                        var monthly_principal = parseFloat(monthly_mortgage - monthly_interest).toFixed(2);
                                                       total_mortgage = parseFloat(total_mortgage) + parseFloat(monthly_mortgage);
                        total_principal = parseFloat(total_principal) + parseFloat(monthly_principal);
                        total_interest = parseFloat(total_interest) + parseFloat(monthly_interest);
                        var monthStr = convert_month(month);
                        var tablerow = "<tr> \
                                                            <td>" + monthStr + " " + year + "</td> \
                                                            <td>AED " + parseFloat(loan_amount).toFixed(2) + "</td> \
                                                      <td>AED " + monthly_mortgage + "</td> \
                                                            <td>AED " + monthly_principal + "</td> \
                                                      <td>AED " + monthly_interest + "</td> \
                                                </tr>";
                        tableData = tableData + tablerow;
                        if(month==12) {
                              month=1;
                        year++;
                    }
                    else {
                        month++;
                    }
                    loan_amount = parseFloat(loan_amount - monthly_principal).toFixed(2);
                  }
                  tablerow = "<tr> \
                                          <td></td> \
                                    <td></td> \
                                                                                    <td><strong>AED " + parseFloat(total_mortgage).toFixed(2) + "</strong></td> \
                                                                                    <td><strong>AED " + parseFloat(total_principal).toFixed(2) + "</strong></td> \
                                                                                    <td><strong>AED " + parseFloat(total_interest).toFixed(2) + "</strong></td> \
                                                            </tr>";
                  tableData = tableData + tablerow;
                  jQuery('h3#amortization-header').html('Amortization Schedule');
                  jQuery('#total_interest').text('AED ' + parseFloat(total_interest).toFixed(2));
                  jQuery('table#amortization').html(tableData);
            }
            jQuery('#start-date').keyup(calculate_monthly_payment);
            jQuery('#amount').keyup(calculate_monthly_payment);
            jQuery('#interest').keyup(calculate_monthly_payment);
            jQuery('#term-months').keyup(calculate_monthly_payment);
	});
})();
// Mortgage Calculator Ends	
</script>
@endsection