<?php

    function boxalert(){
        if(isset($_GET['status'])){
            $status = $_GET['status'];
                if($status == 'success'){		
                    echo '<div class="alert alert-success text-left">
                            <div class="alert-icon">
                                <i class="fas fa-check"></i>
                                    <b class="" style="font-size: 15px">บันทึกข้อมูลสำเร็จ !  </b>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                        </button>
                            </div>
                        </div>';
                }else if($status == 'error'){
                    echo '<div class="alert alert-danger text-left">
                                <div class="alert-icon">
                                    <i class="fas fa-exclamation-triangle"></i>
                                        <b class="" style="font-size: 15px">ไม่สามารถบันทึกข้อมูลได้ !  </b>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                            </button>
                                </div>
                            </div>';
                }
    
        }
    }
    

?>