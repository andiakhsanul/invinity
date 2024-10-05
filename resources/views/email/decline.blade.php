<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        .email-header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            border-radius: 5px 5px 0 0;
            text-align: center;
        }

        .email-content {
            padding: 20px;
        }

        .email-footer {
            padding: 10px;
            text-align: center;
            font-size: 0.9em;
            color: #6c757d;
        }
    </style>
</head>

<body>

    <div class="email-container">
        <div class="email-header">
            <h1>Payment Confirmation</h1>
        </div>

        <div class="email-content">
            <p>Dear <strong>{{ $data['full_name'] }}</strong>,</p>
            <p>We are sorry to inform you that your payment confirmation has been <strong style="color: red">DECLINED</strong>.</p>
            <p>Please contact our us at <strong>+62 857-3218-6497</strong>.</p>
            <p>Please contact our us at <strong>+62 857-3218-6497</strong>.</p>
            <p>Thank you for your prompt action, and we appreciate your trust in <strong>INVINITY TEAM 2024</strong>.</p>
        </div>

    </div>

</body>

</html>
