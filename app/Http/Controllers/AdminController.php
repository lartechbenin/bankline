<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){

        return view ('Admintemplate/template');
        
          }

          public function adindex(){

            return view ('adindex');
            
              }
              public function adcredit(){

                return view ('adcredit');
                
                  }
                  public function adcreditsend(){

                    return view ('adcreditsend');
                    
                      }
                      public function adtransfert(){

                        return view ('adtransfert');
                        
                          }

                          public function admodif(){

                            return view ('admodif');
                            
                              }
                              public function admodifsend(){

                                return view ('admodifsend');
                                
                                  }

                                  public function aduserstatus(){

                                    return view ('aduserstatus');
                                    
                                      }
                                      public function adminconnect(){

                                        return view ('adminconnect');
                                        
                                          }

}
