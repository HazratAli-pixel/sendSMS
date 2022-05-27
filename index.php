<?php
if (isset($_POST["submit"])) {
        $receiver = $_POST["receiver"];
        $subject = $_POST["subject"];
        $mssg = $_POST["message"];
        $url = "http://gsms.putulhost.com/smsapi";
        $data = [
            "api_key" => "C200114562795a9fbdc4e5.87112767",
            "type" => "text",
            "contacts" => "$receiver",
            "senderid" => "8809601001536",
            "msg" => "$mssg"
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        //return $response;
        echo "<script>window.location.href='index.php'</script>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Send SMS using PHP</title>
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5 mx-auto bg-white shadow border p-4 rounded">
                <h2 class="text-center fw-bold mb-3">SMS Sender</h2>
                <form action="" method="POST">
                    <div class="form-group mb-3">
                        <label for="receiver" class="form-label">Receiver</label>
                        <input type="text" class="form-control" placeholder="Enter receiver phone number" required name="receiver" id="receiver">
                    </div>
                    <div class="form-group mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" placeholder="Enter subject" required name="subject" id="subject">
                    </div>
                    <div class="form-group mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea rows="5" class="form-control" placeholder="Enter message" required name="message" id="message"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" name="submit">Send SMS</button>
                        <button type="reset" class="btn btn-danger">Reset form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>