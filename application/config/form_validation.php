<?php

        $config = array(
                

                      'signup_validation' =>  array(                                                  
                                                     

                                                      array(
                                                              'field' => 'email',
                                                              'label' => 'Email',
                                                              'rules' => 'required|trim|valid_email|is_unique[lp_users.email]'
                                                           )

                                                     

                                                   )

                    );
                
?>