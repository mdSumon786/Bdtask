function pay(){
    var inbill = $('#invalue').val();

    
    if($('#op').val() == 'DPDC'){
        $(document).ready(function(){
            $('#btn').click(function(){
                $('#dt_Dpdc').show();
                $('#dt_Desco').hide();
                $('#dt_Bpdp').hide();
                $('#dt_Polli').hide();
            });
        });
        if(inbill<=75){
            var inbill1= inbill*4.19;
            $('#ebill').val(inbill1);
            var vat=(inbill1/100)*5;
            var total_bill =inbill1+vat;
            $('#total').val(total_bill);
        }
        else if(inbill<=200){
            var inbill2= (inbill-75)*5.72;
            var inbill2a = 314.25+inbill2;
            $('#ebill').val(inbill2a);
            var vat=(inbill2a/100)*5;
            var total_bill =inbill2a+vat;
            $('#total').val(total_bill);

        }
        else if(inbill<=300){
            var inbill3= (inbill-200)*6.00;
            var inbill3a = 314.25+715.00+inbill3;
            $('#ebill').val(inbill3a);
            var vat=(inbill3a/100)*5;
            var total_bill =inbill3a+vat;
            console.log(total_bill);
            $('#total').val(total_bill);

        }
        else if(inbill<=400){
            var inbill4= (inbill-300)*6.34;
            var inbill4a = 314.25+715+600+inbill4;
            $('#ebill').val(inbill4a);
            var vat=(inbill4a/100)*5;
            var total_bill =inbill4a+vat;
            $('#total').val(total_bill);

        }
        else if(inbill<=600){
            var inbill5= (inbill-400)*9.98;
            var inbill5a = 314.25+715+600+634+inbill5;
            $('#ebill').val(inbill5a);
            var vat=(inbill5a/100)*5;
            var total_bill =inbill5a+vat;
            $('#total').val(total_bill);

        }
        else if(inbill>600){
            var inbill6= (inbill-600)*11.46;
            var inbill6a = 314.25+715+600+634+1988+inbill6;
            $('#ebill').val(inbill6a);
            var vat=(inbill6a/100)*5;
            var total_bill =inbill6a+vat;
            $('#total').val(total_bill);

        }
    }

    if($('#op').val() == 'DESCO'){
        $(document).ready(function(){
            $('#btn').click(function(){
                $('#dt_Desco').show();
                $('#dt_Dpdc').hide();
                $('#dt_Bpdp').hide();
                $('#dt_Polli').hide();
            });
        });
        if(inbill<=75){
            var inbill1= inbill*4.85;
            $('#ebill').val(inbill1);
            var vat=(inbill1/100)*5;
            var total_bill =inbill1+vat;
            $('#total').val(total_bill);
        }
        else if(inbill<=200){
            var inbill2= (inbill-75)*6.63;
            var inbill2a = 363.75+inbill2;
            $('#ebill').val(inbill2a);
            var vat=(inbill2a/100)*5;
            var total_bill =inbill2a+vat;
            $('#total').val(total_bill);

        }
        else if(inbill<=300){
            var inbill3= (inbill-200)*6.95;
            var inbill3a = 363.75+828.75+inbill3;
            $('#ebill').val(inbill3a);
            var vat=(inbill3a/100)*5;
            var total_bill =inbill3a+vat;
            console.log(total_bill);
            $('#total').val(total_bill);

        }
        else if(inbill<=400){
            var inbill4= (inbill-300)*7.34;
            var inbill4a = 363.75+828.75+695+inbill4;
            $('#ebill').val(inbill4a);
            var vat=(inbill4a/100)*5;
            var total_bill =inbill4a+vat;
            $('#total').val(total_bill);

        }
        else if(inbill<=600){
            var inbill5= (inbill-400)*11.51;
            console.log(inbill5);
            var inbill5a = 363.75+828.75+695+734+inbill5;
            console.log(inbill5a);
            $('#ebill').val(inbill5a);
            var vat=(inbill5a/100)*5;
            console.log(vat);
            var total_bill =inbill5a+vat;
            console.log(total_bill);
            $('#total').val(total_bill);

        }
        else if(inbill>600){
            var inbill6= (inbill-600)*13.26;
            var inbill6a = 363.75+828.75+695+734+2302+inbill6;
            $('#ebill').val(inbill6a);
            var vat=(inbill6a/100)*5;
            var total_bill =inbill6a+vat;
            $('#total').val(total_bill);

        }
    }

    if($('#op').val() == 'BPDB'){
        $(document).ready(function(){
            $('#btn').click(function(){
                $('#dt_Bpdp').show();
                $('#dt_Dpdc').hide();
                $('#dt_Desco').hide();
                $('#dt_Polli').hide();
            });
        });
        if(inbill<=75){
            var inbill1= inbill*4.62;
            $('#ebill').val(inbill1);
            var vat=(inbill1/100)*5;
            var total_bill =inbill1+vat;
            $('#total').val(total_bill);
        }
        else if(inbill<=200){
            var inbill2= (inbill-75)*6.31;
            var inbill2a = 346.5+inbill2;
            $('#ebill').val(inbill2a);
            var vat=(inbill2a/100)*5;
            var total_bill =inbill2a+vat;
            $('#total').val(total_bill);

        }
        else if(inbill<=300){
            var inbill3= (inbill-200)*6.62;
            var inbill3a = 346.5+788.75+inbill3;
            $('#ebill').val(inbill3a);
            var vat=(inbill3a/100)*5;
            var total_bill =inbill3a+vat;
            console.log(total_bill);
            $('#total').val(total_bill);

        }
        else if(inbill<=400){
            var inbill4= (inbill-300)*6.99;
            var inbill4a = 346.5+788.75+662+inbill4;
            $('#ebill').val(inbill4a);
            var vat=(inbill4a/100)*5;
            var total_bill =inbill4a+vat;
            $('#total').val(total_bill);

        }
        else if(inbill<=600){
            var inbill5= (inbill-400)*10.96;
            var inbill5a = 346.5+788.75+662+699+inbill5;
            $('#ebill').val(inbill5a);
            var vat=(inbill5a/100)*5;
            var total_bill =inbill5a+vat;
            $('#total').val(total_bill);

        }
        else if(inbill>600){
            var inbill6= (inbill-600)*12.63;
            var inbill6a = 346.5+788.75+662+699+2192+inbill6;
            $('#ebill').val(inbill6a);
            var vat=(inbill6a/100)*5;
            var total_bill =inbill6a+vat;
            $('#total').val(total_bill);

        }
    }

    if($('#op').val() == 'PALLI'){
        $(document).ready(function(){
            $('#btn').click(function(){
                $('#dt_Polli').show();
                $('#dt_Bpdp').hide();
                $('#dt_Dpdc').hide();
                $('#dt_Desco').hide();
            });
        });
        if(inbill<=75){
            var inbill1= inbill*4.40;
            $('#ebill').val(inbill1);
            var vat=(inbill1/100)*5;
            var total_bill =inbill1+vat;
            $('#total').val(total_bill);
        }
        else if(inbill<=200){
            var inbill2= (inbill-75)*6.01;
            var inbill2a = 330+inbill2;
            $('#ebill').val(inbill2a);
            var vat=(inbill2a/100)*5;
            var total_bill =inbill2a+vat;
            $('#total').val(total_bill);

        }
        else if(inbill<=300){
            var inbill3= (inbill-200)*6.30;
            var inbill3a = 330+751.25+inbill3;
            $('#ebill').val(inbill3a);
            var vat=(inbill3a/100)*5;
            var total_bill =inbill3a+vat;
            console.log(total_bill);
            $('#total').val(total_bill);

        }
        else if(inbill<=400){
            var inbill4= (inbill-300)*6.66;
            var inbill4a = 330+751.25+630+inbill4;
            $('#ebill').val(inbill4a);
            var vat=(inbill4a/100)*5;
            var total_bill =inbill4a+vat;
            $('#total').val(total_bill);

        }
        else if(inbill<=600){
            var inbill5= (inbill-400)*10.44;
            var inbill5a = 330+751.25+630+666+inbill5;
            $('#ebill').val(inbill5a);
            var vat=(inbill5a/100)*5;
            var total_bill =inbill5a+vat;
            $('#total').val(total_bill);

        }
        else if(inbill>600){
            var inbill6= (inbill-600)*12.03;
            var inbill6a = 330+751.25+630+666+2088+inbill6;
            $('#ebill').val(inbill6a);
            var vat=(inbill6a/100)*5;
            var total_bill =inbill6a+vat;
            $('#total').val(total_bill);

        }
    }
}