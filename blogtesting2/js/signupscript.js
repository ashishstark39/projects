
               $(document).ready(function(){
                    $(".n").hide();
                    $(".e").hide();
                    $(".u").hide();
                    $(".p").hide();
					$(".i").hide();
                });

               
                
                    function validate() 
                    {
                                var x = document.forms["form2"]["fname"].value;
                                var x1 = document.forms["form2"]["femail"].value;
                                var x2 = document.forms["form2"]["fuserid"].value;
                                var x3 = document.forms["form2"]["fpassword"].value;
                                var x4 = document.forms["form2"]["pimage"].value;
                                var ext =$('#pimage').val().split('.').pop().toLowerCase();	
                                   
                                //name validation
                                if(!x.match("^[a-zA-Z ]+$"))
                                {
                                    $(".n").show();
                                    
                                    $("#fname").focus();
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
                                    
                                    $("#femail").focus();
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
                                    
                                    $("#fuserid").focus();
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
                                    $("#fpassword").focus();
                                    return false;
                                    
                                    
                                }
								if(x4 == ""||x4==" ")
								{
									
									$(".i").show();
									return false;
								}
								else
								{
									$(".p").hide();
									
								}
                                
								if(jQuery.inArray(ext,['jpg','jpeg','png'])== -1)
										{
											alert("invalid image format");
											$('#pimage').val('');
											return false;
										}
								else
										{
											alert("user registered sucessful");
											return true;
										}
                                    
                                
                               
                    }
               
               




