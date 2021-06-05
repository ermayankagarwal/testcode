<?php
$Motivationarr = array("","Auction");
 $motivation_filt_string = "";
 $WinningBid = null;
 $JudgementDate = "ew";

                                if($key = array_search('FSBO_X_C', $Motivationarr)!== false){
                                    $motivation_filt_string = "XPRD/CNCL/WDRN"; 
                                }
                                if($key = array_search('Dlqnt_Tax', $Motivationarr)!== false){
                                    if($motivation_filt_string!=""){
                                       $motivation_filt_string = $motivation_filt_string.",LATE PROP TAXES";  
                                    }else{
                                        $motivation_filt_string = "LATE PROP TAXES"; 
                                    }
                                }
                                if($key = array_search('lp_auction', $Motivationarr)!== false || $key = array_search('Dlqnt_Tax', $Motivationarr)!== false){
                                    if($motivation_filt_string!=""){
                                        $motivation_filt_string = $motivation_filt_string.",FORECLOSURE"; 
                                    }else{
                                        $motivation_filt_string = "FORECLOSURE"; 
                                    }
                                }
                                  if($key = array_search('lp_auction', $Motivationarr)!== false || $key = array_search('Auction', $Motivationarr)!== false){
                                    if($WinningBid==null  && $JudgementDate ==null ){
                                        if($motivation_filt_string!=""){
                                            $motivation_filt_string = $motivation_filt_string.",IN-FORECLOSURE"; 
                                        }else{
                                            $motivation_filt_string = "IN-FORECLOSURE"; 
                                        }
                                    }
                                }
                                echo $motivation_filt_string;
                                
?>