
               $(document).ready(function(){
                    $(".n").hide();
                    $(".e").hide();
                    $(".u").hide();
                    $(".p").hide();
                });

               
                
                    function validate() 
                    {
                                var x = document.forms["form2"]["fname"].value;
                                var x1 = document.forms["form2"]["femail"].value;
                                var x2 = document.forms["form2"]["fuserid"].value;
                                var x3 = document.forms["form2"]["fpassword"].value;
                                
                                
                                   
                                //name validation
                                if(!x.match("^[a-zA-Z ]+$"))
                                {
                                    $(".n").show();
                                    
                                    
                                    return false;
                                
                                }
                                else
                                {
                                    $(".n").hide();
                                }
                                
                                //email validation
                                if(!x1.match("[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"))
                                {
                                    $(".e").show();
                                    
                                   
                                    return false;
                                }
                                else
                                {
                                    $(".e").hide();
                                    
                                }
                                
                                //userid  validation
                                if (!x2.match("^[a-zA-Z ]+$")) 
                                {
                                    $(".u").show();
                                    
                                    
                                    return false;
                                    
                                }
                                else
                                {
                                    $(".u").hide();
                                }
                                
                                //password validation
                                if (!x3.match((/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/))) 
                                {
                                    $(".p").show();
                                    
                                   
                                    return false;
                                    
                                    
                                }
                                else
                                {
                                    $(".p").hide();
                                    return true;
                                }
                               
                    }
               
               




