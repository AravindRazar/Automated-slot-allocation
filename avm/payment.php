<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Direct Post Tester</title>
<style type="text/css">
dd { margin-left: 75px; }
#mode_margin { margin-left: 0px; }
</style>
</head>
<body>
<form id="AriaPay" name="AriaPay" action="https://secure.future.stage.ariasystems.net/api/direct_post.php" method="post">   
    <fieldset class="paymethodfieldset">
        <dl>  
        <dt>Client Number (normally hidden) </dt>
        <dd>
            <input id="client_no" type="text" name="client_no" value="" size="30"/>
        </dd>
        <dt id>Mode (normally hidden)</dt>
        <dd id="mode_margin">
            <span style="color:#999">direct_post_</span><input id="mode" type="text" name="mode" value="" size="30"/>             
        </dd>             
        <dt>Session ID (normally hidden)</dt>             
        <dd>
            <input id="inSessionID" name="inSessionID" type="text" value="" size="30"/>
        
        </dd>                             
        <dt>Collection Amount</dt>             
        <dd>
            <input id="collection_amount" type="text" name="collection_amount" size="30"/>             
        </dd>                       
        <div>
            <h2>          
                <input type=radio name=formOfPayment id=formOfPayment value=CreditCard />
                    Pay by Credit Card</h2>             
        </div>      
        
        <dt>Card Number</dt>
        <dd>
            <input type="text" id="cc_no" name="cc_no" value="4111111111111111"/>
            <span id="err_cc_no" class="jserror"> </span>
        </dd>            
        <dt>Expiry Date</dt>
        <dd>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td><select id="cc_exp_mm" name="cc_exp_mm">
                            <option value="">Month</option>
                            <option value="1" selected="selected">January</option>                                 
                            <option value="2">February</option>                              
                            <option value="3">March</option>                           
                            <option value="4">April</option>                           
                            <option value="5">May</option>                            
                            <option value="6">June</option>                            
                            <option value="7">July</option>                           
                            <option value="8">August</option>                             
                            <option value="9">September</option>                     
                            <option value="10">October</option>                              
                            <option value="11">November</option>                             
                            <option value="12">December</option>                             
                        </select></td>                         
                    <td width="20">&nbsp;</td>                         
                    <td><select id="cc_exp_yyyy" name="cc_exp_yyyy">
<option value="">Month</option>
                            <option value="2016" selected="selected">2016</option>                                 
                            <option value="2017">2017</option>                              
                            <option value="2018">2018</option>                           
                            <option value="2019">2019</option>                           
                            <option value="2020">2020</option>                            
                            <option value="2021">2021</option>                            
                            <option value="2022">2022</option>                           
                            <option value="2023">2023</option>                             
                            <option value="2024">2024</option>                     
                            <option value="2025">2025</option>                              
                            <option value="2026">2026</option>                             
                            <option value="2027">2027</option>
<option value="2028">2028</option>                             
                            <option value="2029">2029</option>
<option value="2030">2030</option>
                        </select>                         
                    </td>                     
                </tr>                 
            </table>             
        </dd>
        <dt>Security Code</dt>
        <dd>
            <input id="cvv" type="text" size="5" name="cvv" value="111"/>
        </dd>
        </dl>     
</fieldset>     
<fieldset >
    <dl id="payMethodACH" >
                <div class="Section_Header">                 
            <h2>                     
                <input type=radio name=formOfPayment id=formOfPayment value=ACH />                     
                Pay by ACH</h2>             
        </div>             
        <dt>Routing Number</dt>

        <dd>                 
            <input type="text" id="bank_routing_num" name="bank_routing_num" value="999999992"/>             
        </dd>             
        <dt>Account Number</dt>            
        <dd>                 
            <input type="text" id="bank_acct_num" name="bank_acct_num" value="1111111111" />             
        </dd>         
    </dl>     
</fieldset>     
<h2>Pay using Net Terms</h2>     
<fieldset class="paymethodfieldset">         
    <dl id="payMethodNet0" >             
        <dt>                 
            <div class="Section_Header">                     
                <h3>                         
                    <input type=radio name=formOfPayment id=formOfPayment value=Net0 />
                    Pay using Net 0</h3>                
            </div>             
        </dt>         
    </dl>     
</fieldset>     
<fieldset>         
    <dl id="payMethodNet10" class="paymethod2" >             
        <dt>                 
            <div>                     
                <h3>                         
                    <input type=radio name=formOfPayment id=formOfPayment value=Net10 />
                    Pay using Net 10</h3>                 
            </div>             
        </dt>        
     </dl>     
</fieldset>     
<fieldset>         
    <dl id="payMethodNet15">             
        <dt>                 
            <div class="Section_Header">                     
                <h3>                         
                    <input type=radio name=formOfPayment id=formOfPayment value=Net15 />                         
                    Pay using Net 15</h3>                 
            </div>             
        </dt>         
    </dl>     
</fieldset>     
<fieldset class="paymethodfieldset">         
    <dl id="payMethodNet30" class="paymethod2" >             
        <dt>                 
            <div class="Section_Header">                     
                <h3>                         
                    <input type=radio name=formOfPayment id=formOfPayment value=Net30 />
                    Pay using Net 30</h3>
            </div>             
        </dt>        
    </dl>
</fieldset>
<fieldset>         
    <dl id="payMethodNet15">             
        <dt>                 
            <div>                     
                <h3>                         
                    <input type=radio name=formOfPayment id=formOfPayment value=Net45 />                         
                    Pay using Net 45</h3>                 
            </div>             
        </dt>
    </dl>
</fieldset>     
<fieldset>        
     <dl id="payMethodNet60">             
        <dt>                 
            <div class="Section_Header">                     
                <h3>                         
                    <input type=radio name=formOfPayment id=formOfPayment value=Net60 />                         
                    Pay using Net 60</h3>                 
            </div>            
        </dt>         
    </dl>     
</fieldset>     
<fieldset>        
     <dl>             
        <dd class="button">                 
            <input type="submit" name="submitPayment" id="submitPayment" value="Submit" />             
        </dd>         
    </dl>     
</fieldset>
</form>
</div>
<footer>
<script src="https://secure.ariasystems.net/api/ariaCHD.js"></script>
<script language="javascript">
          aria.environmentId ="future.stage";
</script>
</footer>
</body>
</html>
</html> 