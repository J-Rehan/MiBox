<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ env('APP_NAME') }}</title>

    <style type="text/css">
        *{margin: 0; padding: 0;}
        body { margin: 0; background-color: #F5F5F7; } 
        table { border-spacing: 0; } 
        td { padding: 0; } 
        img { border: 0; } 
        a{ text-decoration: none; } 
        .wrapper{ width: 100%; table-layout: fixed; background-color: #F5F5F7; } 
        .main{ background-color: #fff; margin: 0 auto; width: 100%; max-width: 700px; border-spacing: 0; font-family: sans-serif; color: #000000; } 
        .inner-container{ max-width: 540px; margin: 0 auto; width: 100%; } 
        .heading{ font-size: 24px; line-height: 50px; } 
        .two-columns{ font-size: 0; } 
        .column{ width: 100%; vertical-align: top; display: inline-block; } 
        .inner-container{ max-width: 500px; margin: 0 auto; } li{ line-height: 26px; }
    </style>
</head>
<body>

   
   <!-- Center Main -->
	<center class="wrapper">
		<table class="main" width="100%">
			<tr>
				<td style="vertical-align: top">
					<table style="width:100%;">
	<!-- LOGO SECTION -->
                    <tr>
                        <td>
                            <table style="width: 100%;text-align:center;padding:20px 0;background:#ddd;">
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/logo.png') }}" alt="" style="height:60px;width:auto;">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
	<!-- HEADING SECTION -->
						<tr>
							<td style="background-color:#fff;padding: 37px 30px 0; text-align: left;"  class="mobile-section">
								<table class="content-box inner-container" style="width: 100%">
                                    <tr>
                                        <td style="padding-bottom:30px;"> Hello, {{$customer->first_name}} {{$customer->last_name}}</td>
                                    </tr>
									<tr>
										<td style="text-align: center">
                                            <figure class="thankyou-img">
                                                <img src="{{ asset('images/thankyou.png') }}" alt="thankyou" class="img-fluid">
                                                
                                            </figure>
											<h1 class="heading" style="margin-top: 15px;">Thank you for reserving a MIBOX</h1>
										</td>
									</tr>
								</table>
							</td>
						</tr>
	<!-- CONTENT SECTION -->
						<tr>
							<td style="background-color:#fff;padding: 30px 30px 0; "  class="mobile-section">
								<table class="content-box inner-container">
									<tr>
										<td>
											<ol >
												<li style="padding-bottom: 15px;">To make sure you are 100% satisfied our local Delivery Coordinator will reach out to confirm your delivery information and finalize your reservation. </li>
												<li style="padding-bottom: 15px;">E-sign your rental agreement. Please check your email inbox for the MI-BOX Rental Agreement. It is a very simple DocuSign and takes less than 2 minutes to complete.</li>
												<li>If you need any additional information or your delivery information changes at any time, give us a call at 941-777-7269. We are local and a live person will always answer your call.</li>
											</ol>
										</td>
									</tr>
								</table>
							</td>
						</tr>
    <!-- FOOTER SECTION -->
                    <tr>
                        <td style="padding-top:30px;">
                            <table style="width: 100%;text-align:center;padding:20px 0;background:#ddd;">
                                <tr>
                                    <td style="font-size: 15px;">
                                        <p>Contact: 1-941-777-7269</p><br>
                                        <p>MI-BOX Moving & Storage
                                            6400 Manatee Ave W, L 110
                                            Bradenton, FL 34209 </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
					</table>
				</td>
			</tr>

		</table>
	</center>
</body>
</html>