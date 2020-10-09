<CENTER><h1 style="color:#005FA3">TELL YOUR FRIEND</h1></CENTER>

<form method=post action="/refer">
<table border="0" cellpadding="0" cellspacing="0" align=center>
    <tr>
        <td colspan=2 align=><h3><b>Fill details here</b></h3></font></td>
    </tr>
    <tr><label><?php if(isset($message)) echo $message; ?> </label></tr> 
    <tr><td><font face='Verdana' size='2'>Your Email</font></td>
    <td><input type=text name=y_email <?php if(!empty($this->session->userdata('email'))){echo "value=".$this->session->userdata('email');} ?>></td>
    </tr>
    <tr >
        <td><font face='Verdana' size='2' >Your Friend'sName</font></td>
        <td><input type=text name=f_name></td>
    </tr>
    <tr>
        <td><font face='Verdana' size='2'>Friend's Email</font></td><td><input type=text name=f_email></td></tr>
    <tr >
        <td><font face='Verdana' size='2' >HI i just pledged as a donor you should try this too. Go check this website www.bloomindia.in</font></td>
        <td><textarea name=y_msg rows=5cols=20>your message here</textarea></td>
    </tr>
    <tr>
        <td colspan=2 align=center><font face='Verdana' size='2' ><input type=submit    value='Send'></font></td>
    </tr>
</table>
</form>



<?Php
/*
    function tellck()
    {
        $status = "OK";
        $msg="";
        $y_email=$_POST['y_email'];
        //$y_name=$_POST['y_name'];
        $f_email=$_POST['f_email'];
        $f_name=$_POST['f_name'];
        $y_msg=$_POST['y_msg'];

        //if (strlen($y_name) <2 ) { 
        //$sg .="Please enter your name<BR>"; 
        //$status= "NOTOK";}

        if(!filter_var($y_email,FILTER_VALIDATE_EMAIL)){ 
        $msg .="Your email address is not valid<BR>"; 
        $status= "NOTOK";
    }

    if (strlen($f_name) <2 )
    { 
        $msg .="Please enter your friend's name<BR>"; 
        $status= "NOTOK";}

        if(!filter_var($f_email,FILTER_VALIDATE_EMAIL)){ // Friends email validation
        $msg .="Your Friends Email address is not correct<BR>"; 
        $status= "NOTOK";
    }

    //if (strlen($y_msg) <2 ) { // checking Message details
    //$msg .="Please enter your message details<BR>"; 
    //$status= "NOTOK";}

    if($status=="OK")
        { // all validation passed
        /////////// Sending the message starts here //////////////
        $ip=$_SERVER['REMOTE_ADDR'];

        $ref="www.bloomindia.in"; 

        $header_message = "Hi $f_name n Your friend requested you to visit the page at n $ref n";
        $alt="here i am sharing my privilage card" ;
        //$img_scr='D:\edifydata\logo\coupon.png';

        $body_message =$header_message."n".$y_msg."n";



        //$headers="";
        //$headers = "Content-Type: text/html; charset=iso-8859-1n".$headers; 

        $headers=$y_email;         
        $headers.="Reply-to: $f_name";

        $subject="Request to visit URL";

        mail($f_email,$subject,$body_message);

        ////// Mail posting ends here ///////////
        echo "<center><font face='Verdana' size='2' color=green>Thank You, Your message posted to $f_name</font></center>";

        //////////// Sending the message ends here /////////////
    }else{// display the error message
    echo "<center><font face='Verdana' size='2' color=red>$msg <br><br><INPUT TYPE='button' VALUE='Back' onClick='history.go(-1);'></font></center>";
    }

}*/
?>