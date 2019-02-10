
                    $(document).ready(function()
                    {
                        
                         $(".p").hide();
     
     
                     $('#but1').click(function(){
                         validateForm();   
                     });
                     
                         function validateForm() 
                         {
                                     
                                     var x3 = document.forms["form1"]["password1"].value;
     
                                     //password validation
                                     if (!x3.match((/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/))) 
                                     {
                                         $(".p").show();
                                         event.preventDefault();
                                         return false;
                                         }
                                     else
                                     {
                                         $(".p").hide(); 
                                         
                                         return true;
                                     }
                         }
                    });
                    
     



