<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration Form</title>
    <style>
        body {
            height: 100%;
            width: 595px;
            margin-left: auto;
            margin-right: auto;
            padding: 1%;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
    border-radius: 0.25rem;  
    border-top: 4px solid #0dcaf0!important;
        }
.container{
    border: 1px solid #dee2e6!important;
    border-radius: 0.25rem!important;
    padding: 0% 2%;
}
        .footer {
            grid-area: footer;
        }
  
        .container>div {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: left;
            font-size: 16px;
            background: transparent;
        }
        .info-form{
            padding: 0 5%;
        }
    
         p{
            font-size: 15px;
            color: #525f7f;
line-height: 1.5;
        }
        .footer{
            margin-top: 5%;
        }
 
    </style>
</head> 

<body>
    <div class="logo">
        <h1>Registration Form</h1>
    </div>
    <div class="container">
        <div class="info-form">
            <table style="width: 100%;">
            <tr>
               <td style="padding: 3% 0;">
                   <p>Applied For :</p>
                </td>
                <td>
                     <p>
                     <?php $__currentLoopData = $appliedFor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <?php echo e(!empty($applieddata) ? (in_array($caste->id ,$applieddata) ? $caste->name.',' : '' ) : ''); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </p>
                
                </td>
            </tr>
             <tr>
               <td style="padding: 3% 0;">
                   <p>First Name :</p>
                </td>
                <td>
                    <p>
                    <?php echo e($detail->f_name); ?>

                    </p>
                </td>
            </tr>
             <tr>
               <td style="padding: 3% 0;">
                   <p>Last Name :</p>
                </td>
                <td>
                    <p>
                    <?php echo e($detail->l_name); ?>

                    </p>
                </td>
            </tr>
            <tr>
               <td style="padding: 3% 0;">
                   <p>Date Of Birth :</p>
                </td>
                <td>
                    <p>
                    <?php echo e($detail->dob); ?>

                    </p>
                </td>
            </tr>
            <tr>
               <td style="padding: 3% 0;">
                   <p>Age :</p>
                </td>
                <td>
                    <p>
                    <?php echo e($detail->age); ?>

                    </p>
                </td>
            </tr>
            <tr>
               <td style="padding: 3% 0;">
                   <p>Gender :</p>
                </td>
                <td>
                    <p>
                    <?php echo e($detail->gender); ?>

                    </p>
                </td>
            </tr>
            <tr>
               <td style="padding: 3% 0;">
                   <p>Mobile Number :</p>
                </td>
                <td>
                    <p>
                    <?php echo e($detail->mobile_number); ?>

                    </p>
                </td>
            </tr>
            <tr>
               <td style="padding: 3% 0;">
                   <p>Alternate Mobile Number :</p>
                </td>
                <td>
                    <p>
                    <?php echo e($detail->a_mobile_number); ?>

                    </p>
                </td>
            </tr>
             <tr>
               <td style="padding: 3% 0;">
                   <p>Email Id :</p>
                </td>
                <td>
                    <p>
                    <?php echo e($detail->email_id); ?>

                    </p>
                </td>
            </tr>
            <tr>
               <td style="padding: 3% 0;">
                   <p>Full Address :</p>
                </td>
                <td>
                    <p>
                    <?php echo e($detail->address); ?>

                    </p>
                </td>
            </tr>
            <tr>
               <td style="padding: 3% 0;">
                   <p>Pin Code :</p>
                </td>
                <td>
                    <p>
                    <?php echo e(isset($detail->pimcode) ? $detail->pimcode->pincode : ''); ?>

                    </p>
                </td>
            </tr>
             <tr>
               <td style="padding: 3% 0;">
                   <p>State :</p>
                </td>
                <td>
                    <p>
                    <?php echo e(isset($detail->pimcode->state) ? $detail->pimcode->state->name : ''); ?>

                    </p>
                </td>
            </tr>
             <tr>
               <td style="padding: 3% 0;">
                   <p>City :</p>
                </td>
                <td>
                    <p>
                    <?php echo e(isset($detail->pimcode->city) ? $detail->pimcode->city->name : ''); ?>

                    </p>
                </td>
            </tr>
            <tr>
               <td style="padding: 3% 0;">
                   <p>Id Proof Type :</p>
                </td>
                <td>
                    <p>
                    <?php echo e(isset($detail->idProfType) ? $detail->idProfType->name : ''); ?>

                    </p>
                </td>
            </tr>
             <tr>
                <td style="padding: 3% 0;">
                    <p>Id Proof Font Page :</p>
                </td>
                <td>
                <img src="<?php echo e(url($detail->id_f_image)); ?>" width="150" height="100" class="img-fluid" id="id_prof_f_img" >
                 </td>
             </tr>
               <tr>
                <td style="padding: 3% 0;">
                    <p>Id Proof Back Page :</p>
                </td>
                <td>
                <img src="<?php echo e(url($detail->id_b_image)); ?>" width="150" height="100" class="img-fluid" id="id_prof_b_img" >
                 </td>
             </tr>
             <tr>
               <td style="padding: 3% 0;">
                   <p>Address Proof Type :</p>
                </td>
                <td>
                    <p>
                    <?php echo e(isset($detail->addressProofType) ? $detail->addressProofType->name : ''); ?>

                    </p>
                </td>
            </tr>
              <tr>
                <td style="padding: 3% 0;">
                    <p>Address Proof Font Page :</p>
                </td>
                <td>
                <img src="<?php echo e(url($detail->address_f_image)); ?>" width="150" height="100" class="img-fluid" id="id_prof_b_img" >
                 </td>
             </tr>
             <tr>
                <td style="padding: 3% 0;">
                    <p>Address Proof Back Page :</p>
                </td>
                <td>
                <img src="<?php echo e(url($detail->address_b_image)); ?>" width="150" height="100" class="img-fluid" id="id_prof_f_img" >
                 </td>
             </tr>
              <tr>
                <td style="padding: 3% 0;">
                    <p>Applicant Image :</p>
                </td>
                <td>
                <img src="<?php echo e(url($detail->image)); ?>" width="150" height="100" class="img-fluid" id="id_prof_fd_img" >
                 </td>
             </tr>
              <tr>
               <td style="padding: 3% 0;">
                   <p>Payment Type :</p>
                </td>
                <td>
                    <p>
                    <?php echo e($detail->payment_type); ?>

                    </p>
                </td>
            </tr>
            <tr>
               <td style="padding: 3% 0;">
                   <p>Registration Fee:</p>
                </td>
                <td>
                    <p>
                    <?php echo e($detail->registration_fee); ?>

                    </p>
                </td>
            </tr>
             </table>
        </div>
    </div>

</body>

</html><?php /**PATH /home/profglobal/public_html/demoafficity/resources/views/admin/partner/registrtaion/pdf.blade.php ENDPATH**/ ?>