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
            <h1>Payment Confirmation Uploaded</h1>
        </div>

        <div class="email-content">
            <p>Dear <strong>[Customer Name]</strong>,</p>
            <p>We are pleased to inform you that your payment confirmation has been successfully uploaded. Our team is
                currently reviewing the submitted details.</p>
            <p>Please allow <strong>[X] business days</strong> for the verification process. Once your payment has been
                confirmed, we will send you a follow-up email with the next steps.</p>
            <p>If you have any questions, feel free to contact us at <a href="mailto:[Support Email]">[Support Email]</a>
                or call us at <strong>[Support Phone Number]</strong>.</p>
            <p>Thank you for your prompt action, and we appreciate your trust in <strong>[Company Name]</strong>.</p>
        </div>

        <div class="email-footer">
            <p>Best regards,<br>[Your Name] - [Your Position]<br>[Company Name]</p>
            <p><a href="mailto:[Company Email]">[Company Email]</a> | [Company Phone Number]</p>
        </div>
    </div>

</body>

</html>
