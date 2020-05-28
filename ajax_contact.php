<?php
if($_GET['email']!="")
{
			$from1="contact@casey-sexton.com";
			$subject1="New inquiry from your portfolio!";
			$mailcontent1="<html>
								<body>
										<table cellpadding=\"0\" cellspacing=\"0\">
												<tr>
														<Td align=\"left\" colspan=\"2\">Hello Casey,</td>
												</tr>
												<tr>
														<Td align=\"left\" colspan=\"2\">&nbsp;</td>
												</tr>
												<tr>
														<Td align=\"left\" colspan=\"2\">A new inquiry has been sent to you with the following details:</td>
												</tr>
												<tr>
														<Td align=\"left\" colspan=\"2\">&nbsp;</td>
												</tr>
												<tr>
														<Td align=\"left\" colspan=\"2\"><strong>Name: </strong>".($_GET['name'])."</td>
												</tr>
												<tr>
														<Td align=\"left\" colspan=\"2\"><strong>Email: </strong>".($_GET['email'])."</td>
												</tr>
												<tr>
														<Td align=\"left\" colspan=\"2\"><strong>Phone: </strong>".($_GET['phone'])."</td>
												</tr>
												<tr>
														<Td align=\"left\" colspan=\"2\"><strong>Website: </strong>".($_GET['website'])."</td>
												</tr>
												<tr>
														<Td align=\"left\" colspan=\"2\"><strong>Message: </strong>".($_GET['message'])."</td>
												</tr>

												<tr>
														<Td align=\"left\" colspan=\"2\">&nbsp;</td>
												</tr>
												<tr>
														<Td align=\"left\" colspan=\"2\">Thanks<br>Casey Sexton<br><a href='casey-sexton.com'>casey-sexton.com</a></td>
												</tr>
								</table>
								</body>
						</html>";
			//echo $toemail;echo $subject1;echo $mailcontent1;echo $from1;exit;
			if($_SERVER['HTTP_HOST']!="webster3")
			{
				//HtmlMailSend($toemail,$subject1,$mailcontent1,$from1);
				$headers2  = "MIME-Version: 1.0" . "\r\n";
				$headers2 .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
				$headers2 .= "From: ".$from1." <".$from1.">" ;
				mail("contact@casey-sexton.com",$subject1,$mailcontent1,$headers2);

			}
			echo "3";
			exit;
}
else
{
	//echo 'Please enter email address.';
	echo 1;
}
?>
